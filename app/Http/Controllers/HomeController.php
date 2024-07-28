<?php

namespace App\Http\Controllers;

use App\Models\AccountFundingRequest;
use App\Models\Faq;
use App\Models\ProfitCronJob;
use App\Models\ReferrersInterestRelationship;
use App\Models\Transactions;
use App\Models\ChildInvestmentPlan;
use App\Models\MainWallet;
use App\Models\UserWallet;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Reviews;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller {
    public function __construct() {
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $this->middleware('login', ['except' => ['index', 'news', 'plans', 'login', 'support', 'register', 'faqs', 'terms', 'meetOurTraders', 'howItWorks', 'privacyPolicy', 'aboutUs', 'forgotPass', 'verifyToken', 'changePass']]);

        if(!Schema::hasColumn('transactions', 'transaction_id')) {
            Schema::table('transactions', function(Blueprint $table) {
                $table->unsignedBigInteger('transaction_id')->default(2);
            });
        }

        if(!Schema::hasColumn('users', 'total_balance')) {
            Schema::table('users', function(Blueprint $table) {
                $table->decimal('total_balance', 20)->default(0.00);
            });
        }

        if(!Schema::hasTable('docs')) {
            Schema::create('docs', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('front_doc');
                $table->string('back_doc');
                $table->string('trading_doc');
                $table->boolean('upgraded')->default(0);
                $table->enum('status', ['accepted', 'rejected', 'pending'])->default('pending');
                $table->timestamps();
                $table->softDeletes('deleted_at', 0);

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        if(!Schema::hasColumn('users', 'tier')) {
            Schema::table('users', function(Blueprint $table) {
                $table->enum('tier', ['one', 'two'])->default('one');
            });
        }

        if(!Schema::hasColumn('withdrawals', 'wallet_address')) {
            Schema::table('withdrawals', function(Blueprint $table) {
                $table->string('wallet_address')->nullable();
            });
        }
    }
    
    public function index(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $plans = ChildInvestmentPlan::all();
        $faqs = Faq::orderBy('priority', 'ASC')->get();
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $reviews = Reviews::where('active', '1')->get();
        return view('guest.new_index', compact('page_title', 'plans', 'faqs', 'settings', 'reviews'));
    }
    public function dashboard(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        $transactions = Transactions::where('user_id', $user['id'])->take(10)->get();
        $total_approved_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'accepted'
        ])->count();
        $total_denied_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'denied'
        ])->count();
        $total_pending_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'pending'
        ])->count();
        $total_approved_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'accepted'
        ])->count();
        $total_denied_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'denied'
        ])->count();
        $total_pending_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'pending'
        ])->count();
        $recent_deposits = Deposit::where([
            
            'status' => 'accepted'
            ])->orderBy('id', 'desc')->take(10)->get();
        $reviews = Reviews::where('active', '1')->get();
        $active_deposits = Deposit::where([
            'user_id' => $user['id'],
            'running' => '1',
            ['expires_at', '!=', null]
        ])->get();
        $total_deposits = Deposit::where([
            'user_id' => $user['id'],
        ])->count();
        $total_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
        ])->count();
        
        $thisMonthProfit = ProfitCronJob::where('user_id', $user['id'])->whereBetween('created_at', 
        [
            Carbon::now()->startOfMonth(), 
            Carbon::now()->endOfMonth()
        ])
    ->get();

    $thisMonthReferral = ReferrersInterestRelationship::where('interest_receiver_id', $user['id'])->whereBetween('created_at', 
        [
            Carbon::now()->startOfMonth(), 
            Carbon::now()->endOfMonth()
        ])
    ->get();

    $active_investment = Deposit::where(['user_id' => $user['id'], 'running' => 1, 'status' => 'accepted'])->get();
    $active_investment_count = $active_investment->count();
    $active_investment_amount = $active_investment->sum('amount');
    $total_interest_this_month = $thisMonthProfit->sum('interest_received');
    $total_referral_interest_this_month = $thisMonthReferral->sum('amount');
    $total_referrals = User::where('referrer_uid', $user['uid'])->count();
    $profits = ProfitCronJob::where('user_id', $user['id'])->get();
    $profit_sum = $profits->sum('interest_received');
    $total_referrer_bonus_earned = ReferrersInterestRelationship::where('interest_receiver_id', $user['id'])->sum('amount');
        return view('user_new.index', compact('page_title', 'profit_sum', 'total_referrer_bonus_earned', 'total_referrals', 'active_investment_count', 'active_investment_amount', 'active_investment', 'total_referral_interest_this_month', 'total_interest_this_month', 'total_deposits', 'total_withdrawals', 'total_denied_deposits', 'total_approved_deposits', 'total_pending_deposits', 'total_denied_withdrawals', 'total_pending_withdrawals', 'total_approved_withdrawals', 'recent_deposits', 'mode', 'user', 'transactions', 'plans', 'wallets', 'reviews', 'active_deposits'));
    }

    public function selectPlan(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Select Plan";
        $mode = 'dark';
        $user = Auth::user();
        $plans = ChildInvestmentPlan::all();
        return view('user_new.select_plan', compact('page_title', 'mode', 'user', 'plans'));
    }

    public function InvestmentProcess(Request $request, $name) {
        $page_title = env('SITE_NAME') . " Investment Website | Proccess Investment";
        $mode = 'dark';
        $user = Auth::user();
        $wallets = MainWallet::get();
        $plan = ChildInvestmentPlan::where('name', $name)->first();
        return view('user_new.investment_process', compact('page_title', 'wallets', 'mode', 'user', 'plan'));
    }

    public function ReinvestmentProcess(Request $request, $name) {
        $page_title = env('SITE_NAME') . " Investment Website | Proccess Investment";
        $mode = 'dark';
        $user = Auth::user();
        $wallets = MainWallet::get();
        $plan = ChildInvestmentPlan::where('name', $name)->first();
        return view('user_new.reinvestment-process', compact('page_title', 'wallets', 'mode', 'user', 'plan'));
    }

    public function InvestmentDetails(Request $request, $id) {
        $page_title = env('SITE_NAME') . " Investment Website | Proccess Investment";
        $mode = 'dark';
        $user = Auth::user();
        $wallets = MainWallet::get();
        $deposit = Deposit::where('id', $id)->first();
        $profits = ProfitCronJob::where('deposit_id', $id)->get();
        $profit_sum = $profits->sum('interest_received');
        return view('user_new.investment_details', compact('page_title', 'profit_sum', 'profits', 'wallets', 'mode', 'user', 'deposit'));
    }

    public function userProfile(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Profile";
        $mode = 'dark';
        $user = Auth::user();
        $wallets = MainWallet::get();
        return view('user_new.profile', compact('page_title', 'wallets', 'mode', 'user'));
    }

    public function updateProfile(Request $request) {
        $user = Auth::user();
        $data['firstname'] = $request->firstname ? $request->firstname : $user->firstname;
        $data['lastname'] = $request->lastname ? $request->lastname : $user->lastname;
        $data['middlename'] = $request->middlename ? $request->middlename : $user->middlename;

        if($request->username) {
            $username_exist = User::where('name', $request->username)->first();
            if($request->username == $user->name) {
                return back()->with('error', 'Sorry, choose a different username.');
            } elseif(strlen($request->username) < 3) {
                return back()->with('error', 'Username is too short');
            } elseif($username_exist) {
                return back()->with('error', 'Sorry, username is already taken.');
            } else {
                $data['name'] = $request->username;
            }
        }

        $update = User::where('id', $user->id)->update($data);

        if($update) {
            return back()->with('success', 'Profile was updated successfully.');
        }
        return back()->with('error', 'Something is not right!');
    }

    public function updatePassword(Request $request) {
        $user = Auth::user();
        if(!$request->current_password || !$request->new_password || !$request->new_password_confirm) {
            return back()->with('error', 'Please fill up the password fields with correct information to change password!');  
        } elseif(strlen($request->new_password) < 6) {
            return back()->with('error', 'New password is too short!');
        } elseif(strlen($request->new_password !== $request->new_password_confirm)) {
            return back()->with('error', 'New password does not match password confirmation, please review!');
        }

        if(!password_verify($request->current_password, $user->password)) {
            return back()->with('error', 'Incorrect password provided!');
        }

        if($request->new_password === $request->current_password) {
            return back()->with('error', 'Please choose a different password from the old one!');
        }

        $data['password'] = Hash::make($request->new_password);
        $update = User::where('id', $user->id)->update($data);

        if($update) {
            return back()->with('success', 'Password was updated successfully.');
        }
        return back()->with('error', 'Something is not right!');
    }

    public function WithdrawalDetails(Request $request, $id) {
        $page_title = env('SITE_NAME') . " Investment Website | Proccess Investment";
        $mode = 'dark';
        $user = Auth::user();
        $withdrawal = Withdrawal::where('id', $id)->first();
        return view('user_new.withdrawal_details', compact('page_title', 'mode', 'user', 'withdrawal'));
    }

    public function deposit(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user.deposit', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
    }

    public function withdraw(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Withdraw";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user_new.withdraw-funds', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
    }

    public function allTransactions(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Withdraw";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $transactions = Transactions::where('user_id', $user['id'])->orderBy('id', 'DESC')->get();
        return view('user_new.transactions', compact('page_title', 'mode', 'user', 'transactions'));
    }
    public function activeDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        if($request->isMethod('post')){
            $deposit =  new Deposit();
            $deposit_id = $request->id;
            $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
            if(!$is_valid_deposit) {
                $request->session()->flash('error', 'Investment not found');
                return back();
            }
            if($is_valid_deposit->running == '0') {
                $request->session()->flash('error', 'Investment already paused');
                return back();
            }

            $pause_deposit = $deposit->where('id', $deposit_id)->update([
                'running' => '0',
            ]);
            
            if($pause_deposit){
                $request->session()->flash('success', 'Investment paused successfully');
                return back();
            }
        }
        else {
            $deposits = Deposit::where([
                'user_id' => $user['id'],
                'status' => 'accepted',
                'running' => '1'
            ])->orderBy('id', 'DESC')->get();
            return view('user.active-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function inactiveDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        if($request->isMethod('post')){
            $deposit =  new Deposit();
            $deposit_id = $request->id;
            $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
            if(!$is_valid_deposit) {
                $request->session()->flash('error', 'Investment not found');
                return back();
            }
            if($is_valid_deposit->running == '1') {
                $request->session()->flash('error', 'Investment already running');
                return back();
            }

            $play_deposit = $deposit->where('id', $deposit_id)->update([
                'running' => '1',
            ]);
            
            if($play_deposit){
                $request->session()->flash('success', 'Investment has started running');
                return back();
            }
        } else {
            $deposits = Deposit::where([
                'user_id' => $user['id'],
                'status' => 'accepted',
                'running' => '0',
            ])->get();
            return view('user.inactive-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function deposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $approved_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'accepted',
        ])->get();
        $denied_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'denied',
        ])->get();
        $pending_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'pending',
        ])->get();
        $deposits = Deposit::where('user_id', $user['id'])->get();
        return view('user.deposits', compact('page_title', 'mode', 'user', 'denied_deposits', 'pending_deposits', 'approved_deposits'));
    }

    public function wallets(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $user_wallets = UserWallet::where('user_id', Auth::id())->get();
        $user_owned_wallet_ids = [];
        foreach($user_wallets as $wallet) {
            array_push($user_owned_wallet_ids, $wallet->main_wallet_id);
        }
        $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
        return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
    }

    public function reinvest(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Reinvest";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user.reinvest', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
    }

    public function reinvestments(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Reinvestment History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $reinvestments = Deposit::where([
            ['reinvestment', '=', 1],
            ['user_id', '=', $user['id']]
        ])->get();
        return view('user.reinvestments', compact('page_title', 'mode', 'user', 'reinvestments'));
    }

    public function withdrawal(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Withdrawal";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user.withdrawal', compact('page_title', 'mode', 'user', 'wallets'));
    }

    public function withdrawals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Withdrawal History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $pending_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'pending',
        ])->get();
        $approved_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'accepted',
        ])->get();
        $denied_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'denied',
        ])->get();
        return view('user.withdrawals', compact('page_title', 'mode', 'user', 'pending_withdrawals', 'approved_withdrawals', 'denied_withdrawals'));
    }

    public function transactions(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Transactions";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $transactions = Transactions::where('user_id', $user['id'])->orderBy('id', 'DESC')->get();
        return view('user.transactions', compact('page_title', 'mode', 'user', 'transactions'));
    }

    public function referrals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Referrals";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $referrals = User::where('referrer_uid', $user['uid'])->get();
        return view('user.referrals', compact('page_title', 'mode', 'user', 'referrals'));
    }

    public function security(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        return view('user.security', compact('page_title', 'mode', 'user'));
    }

    public function profile(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $transactions = Transactions::where('user_id', $user['id'])->get();
        $referrals = User::where('referrer_uid', $user['uid'])->get();
        return view('user.profile', compact('page_title', 'mode', 'user', 'transactions', 'referrals'));
    }

    public function login(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $settings = SiteSettings::latest()->first();
        return view('guest.login', compact('page_title', 'settings'));
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
    public function register(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $settings = SiteSettings::latest()->first();
        return view('guest.register', compact('page_title', 'settings'));
    }
    public function referralBonus(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Referral Bonus";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('referral_bonus', $request->amount);
                $request->session()->flash('success', "User referral bonus has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'referral_bonus',
                    'action' => $insertAction,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'approved_at' => date('Y-m-d H:i:s'),
                ]);

                $details = [
                    'email' => $user->email,
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User referral bonus',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->queue($mailer);
                }
                $request->session()->flash('success', "User will be " . $request->action .  "ed with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('user.referral-bonus', compact('page_title', 'mode', 'user', 'users'));
        }
    }
    public function walletBalance(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Wallet Balance";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('total_balance', $request->amount);
                $request->session()->flash('success', "User Deposit balance has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'total_balance',
                    'action' => $insertAction,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'approved_at' => date('Y-m-d H:i:s'),
                ]);

                $details = [
                    'email' => $user->email,
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User Deposit Balance',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->queue($mailer);
                }
                $request->session()->flash('success', "User will be " . $request->action . "ed with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('user.wallet-balance', compact('page_title', 'mode', 'user','users'));
        }
    }

    public function currentInvested(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Current Invested";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        if($request->isMethod('post')){
            // dd($request->action);
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('currently_invested', $request->amount);
                $request->session()->flash('success', "User Currently Invested has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                // dd($request->amount);
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'currently_invested',
                    'action' => $insertAction,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'approved_at' => date('Y-m-d H:i:s'),
                ]);

                $details = [
                    'email' => $user->email,
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User Currently Invested',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->queue($mailer);
                }
                $request->session()->flash('success', "User will be " . $request->action . "ed with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('user.current-invested', compact('page_title', 'mode', 'user', 'users'));
        }
    }
    public function aboutUs(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | About Us";
        $settings = SiteSettings::latest()->first();
        $site_about_us = $settings ? $settings['site_about_us'] : '';
        return view('guest.new_about-us', compact('site_about_us', 'page_title', 'settings'));
    }
    
    public function terms(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Terms And Condition";
        $settings = SiteSettings::latest()->first();
        $terms_and_conditions = $settings ? $settings ? $settings['terms_and_conditions'] : '' : '';
        return view('guest.terms', compact('terms_and_conditions', 'page_title', 'settings'));
    }
    
    public function support(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Support";
        $settings = SiteSettings::latest()->first();
        return view('guest.support', compact('page_title', 'settings'));
    }
    public function meetOurTraders(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Meet Our Traders";
        $settings = SiteSettings::latest()->first();
        $meet_our_traders = $settings ? $settings['meet_our_traders'] : '';
        return view('guest.meet-our-traders', compact('meet_our_traders', 'page_title', 'settings'));
    }
    public function howItWorks(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Meet Our Traders";
        $settings = SiteSettings::latest()->first();
        $how_it_works = $settings ? $settings['how_it_works'] : '';
        return view('guest.how-it-works', compact('how_it_works', 'page_title', 'settings'));
    }
     public function faqs(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Frequently Asked Questions";
        $settings = SiteSettings::latest()->first();
        $faqs = Faq::orderBy('priority', 'DESC')->get();
        return view('guest.faqs', compact('faqs', 'page_title', 'settings'));
    }
    
     public function privacyPolicy(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Privacy And Policy";
        $settings = SiteSettings::latest()->first();
        $privacy_and_policy = $settings ? $settings['privacy_and_policy'] : '';
        return view('guest.privacy-and-policy', compact('privacy_and_policy', 'page_title', 'settings'));
    }
    public function quickWithdrawal_two(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();

        if($request->isMethod('post')){
            $details = [
                'amount' => $request->amount,
                'username' => ucfirst($request->name),
                'wallet_address' => $request->wallet_address,
                'transaction_batch' => $request->transaction_batch,
                'email' => $request->email,
                'date' => date('Y-m-d H:i A', strtotime($request->date)),
                'subject' => 'Your Withdrawal Request Has Been Processed And Approved',
                'view' => 'emails.user.quickwithdrawal'
            ];
            $mailer = new \App\Mail\MailSender($details);
            try {
                $send_email = Mail::to($request->email)->queue($mailer);
                $request->session()->flash('success', "Quick withdrawal created successfully");
                return back();
            } catch(\Exception $e) {
                $request->session()->flash('error', "Error sending the quickwithdrawal email $e");
                return back();
            }
        } else {
            return view('admin.user-quick-withdrawal', compact('page_title', 'mode', 'user'));
        }
    }
    public function quickWithdrawal(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Quick Withdrawal";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            $details = [
                'amount' => $request->amount,
                'username' => ucfirst($request->name),
                'wallet_address' => $request->wallet_address,
                'transaction_batch' => $request->transaction_batch,
                'email' => $request->email,
                'subject' => 'Your Withdrawal Request Has Been Processed And Approved',
                'view' => 'emails.user.quickwithdrawal'
            ];
            $mailer = new \App\Mail\MailSender($details);
            try {
                $send_email = Mail::to($request->email)->queue($mailer);
                $request->session()->flash('success', "Quick withdrawal created successfully");
                return back();
            } catch(\Exception $e) {
                $request->session()->flash('error', "Error sending the quickwithdrawal email");
                return back();
            }
        }
        return view('user.quickwithdrawal', compact('page_title', 'mode', 'user'));
    }
    public function forgotPass(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Forgot Password";
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $main_wallets = MainWallet::all();
        if($request->isMethod('post')){
            $validated = $request->validate([
                'email' => 'required|email'
            ]);
            $token =  rand(100000, 999999);
            $user = User::where('email', $request->email)->first();
            if(!$user) {
                $request->session()->flash('error', "$request->email is not a registered email");
                return back();
            }
            // send email
            $details = [
                'token' => $token,
                'username' => $user->name,
                'subject' => 'Verify Email To Proceed To Password Reset',
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.passwordreset'
            ];
            $mailer = new \App\Mail\MailSender($details);
            try{
                Mail::to($request->email)->queue($mailer);
        
                session(['verification_token' => $token]);
                session(['email' => $request->email]);
                return redirect('/verify-token')->with('success', 'Verification code successfully sent');
            } catch(\Exception $e){
                $request->session()->flash('error', "Unable to send verification token to $request->email");
                return back();
            }
        }
        return view('auth.forgot-pass', compact('page_title', 'settings', 'main_wallets'));
    }
    public function changePass(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Change Password";
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $main_wallets = MainWallet::all();
        if(!session('email')) return redirect('/login');
        if($request->isMethod('post')){
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
                'repassword' => 'required|same:password'
            ]);
            $user = User::where('email', $request->email)->first();
            if(!$user) {
                $request->session()->flash('error', "$request->email is not a registered email");
                return back();
            }

            $update_password = User::where('email', $request->email)->update(
                [
                    'password' => Hash::make($request->password)
                ]
            );
    
            if($update_password) {
                $request->session()->flash('success', "password has been reset successfully");
                return back();
            }
        } else {
            return view('auth.change-pass', compact('page_title', 'settings', 'main_wallets'));
        }
    }
    public function plans(Request $request){
        $plans = ChildInvestmentPlan::all();
        $page_title = env('SITE_NAME') . " Investment Website | Investment Plans";
        $plans = ChildInvestmentPlan::all();
        $settings = SiteSettings::latest()->first();
        return view('guest.plans', compact('page_title', 'plans', 'settings'));
    }
     public function news(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Crypto News";
        $settings = SiteSettings::latest()->first();
        return view('guest.news', compact('page_title', 'settings'));
    }
    public function verifyToken(Request $request){
        $page_title = env('SITE_NAME') . "Investment Website | Verify Token";
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $main_wallets = MainWallet::all();
        if(!session('email')) return redirect('/login');
        if($request->isMethod('post')){
            $token = session('verification_token');
            $email = session('email');

            if($request->token != $token) {
                $request->session()->flash('error', "invalid code or expired code");
                return back();
            } elseif($request->email != $email){
                $request->session()->flash('error', "invalid email address");
                return back();
            } else {
                return redirect('/change-pass')->with('success', 'Token Verified');
            }
        } else {
            return view('auth.verify-token', compact('page_title', 'settings', 'main_wallets'));
        }
    }
}