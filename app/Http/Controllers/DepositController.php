<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepositRequest;
use App\Jobs\SendAccountReferrerConfirmationEmail;
use App\Models\AdminWallet;
use App\Models\ChildInvestmentPlan;
use App\Models\Deposit;
use App\Models\MainWallet;
use App\Models\ReferrersInterestRelationship;
use App\Models\Transactions;
use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller {
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request, Deposit $deposit) {

        // $validated = $request->validated();

       $hash = generateTransactionHash($deposit, 'transaction_hash', 25);

       $plan_name_is_valid = ChildInvestmentPlan::where('id', $request->child_plan_id)->first();
       $wallet_id_is_valid = MainWallet::where('id', $request->main_wallet_id)->first();

       if(!$wallet_id_is_valid) {
            // return response()->json(
            //     [
            //         'errors' => ['message' => ['Please goto settings and update your wallets details']]
            //     ], 401
            // );
            // $request->session()->flash('error', "Please goto settings and update your wallets details");
            return back()->with('error','Please sellet wallet from options');
       }

       if(!$plan_name_is_valid) {
            // return response()->json(
            //     [
            //         'errors' => ['message' => ['Unknown investment plan has been submitted and failed']]
            //     ], 401
            // );
            return back()->with('error','Unknown investment plan has been submitted and failed');
       }

       $plan_models = ChildInvestmentPlan::where('id', $request->child_plan_id)->first();

        //validate submited data, to match exactly what is expected...
       if($plan_models->minimum_amount > $request->amount || $plan_models->maximum_amount < $request->amount) {
            // return response()->json(
            //     [
            //         'errors' => ['message' => ['Amount out of range of the selected plan']]
            //     ], 401
            // );

            return back()->with('error', 'Amount out of range of the selected plan');
       }

        if(!$request->terms) {
            return back()->with('error', 'Your must accept our terms & conditions to proceed!');
        }

       $user_id = Auth::id();

       $data = [
           'user_id' => $user_id,
           'child_investment_plan_id' => $plan_models->id,
           'transaction_hash' => $hash,
           'main_wallet_id' => $wallet_id_is_valid->id,
           'amount' => $request->amount,
           'remaining_duration' => $plan_models->duration,
           'created_at' => date('Y-m-d H:i:s'),
           'updated_at' => date('Y-m-d H:i:s'),
       ];

        $create_deposit = $deposit->create($data);

        if($create_deposit) {
            ChildInvestmentPlan::where('id', $plan_models->id)->increment('total_deposited', $request->amount);
            // $user_wallet = UserWallet::find($request->main_wallet_id);
            $wallet = MainWallet::find($request->main_wallet_id);
            Transactions::insert([
                'amount' => $request->amount,
                'user_id' => $user_id,
                'currency' => $wallet->currency,
                'transaction_hash' => $hash,
                'type' => 'deposit',
                'transaction_id' => $create_deposit->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $request_type = ucFirst($request->type);
            // send email
            $user = User::find($user_id);

            $details = [
                'subject' => 'New Deposit Request Created Successfully',
                'username' => $user->name,
                'amount' => $request->amount, 
                'transaction_hash' => $hash,
                'wallet' => $wallet->currency,
                'plan' => $plan_name_is_valid->name,
                'duration' => $plan_name_is_valid->duration,
                'wallet_address' => $wallet->currency_address,
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.depositrequest',
                'email' => $user->email
            ];

            $mailer = new \App\Mail\MailSender($details);
            Mail::to($user->email)->queue($mailer);


            // $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
            // $details['view'] = 'emails.admin.depositrequest';
            // $details['subject'] = 'A client has recently created a new deposit request on '. env('SITE_NAME');

            // send to admins
            // foreach($admins as $admin) {
            //     $mailer = new \App\Mail\MailSender($details);
            //     Mail::to($admin->email)->queue($mailer);
            // }

            // return response()->json(
            //     [
            //         'success' => ['message' => ['Deposit request was successfully created'], 'wallet' => $wallet_id_is_valid->admin_wallet]
            //     ], 201
            // );

            return back()->with('success', "$create_deposit->id");
        }

        // return response()->json(
        //     [
        //         'errors' => ['message' => ['Something is not right, our team is working towards restoring the service asap! If this persist, please contact our support.']]
        //     ], 401
        // );

        return back()->with('error', 'Something is not right, our team is working towards restoring the service asap! If this persist, please contact our support.');
        
    }

    public function reinvest(Request $request, Deposit $deposit) {
        $page_title = env('SITE_NAME') . " Investment Website | Reinvest";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = MainWallet::get();

        if($request->isMethod('post')){
            // $validated = $request->validate([
            //     'child_plan_id' => 'required', 
            //     'amount' => 'required',
            //     'user_wallet_id' => 'required'
            // ]);
            $user_id = Auth::id();
            $user = User::find($user_id);
            
            $hash = generateTransactionHash($deposit, 'transaction_hash', 25);

            // $user_wallet_model = MainWallet::where('id', $request->main_wallet_id)->first();
            
            // if(!$user_wallet_model) {
            //     return back()->with('error','Unknown Wallet provided for this transaction');
            // }

            if($user->total_balance < $request->amount) {
                return back()->with('error','Insufficient funds');
            }

            $plan_details = ChildInvestmentPlan::where('id', $request->child_plan_id)->first();

            if(!$plan_details) {
                return back()->with('error','Invalid plan seleted');
            }

                //validate submited data, to match exactly what is expected...
            if($plan_details->minimum_amount > $request->amount || $plan_details->maximum_amount < $request->amount) {
                return back()->with('error','Amount out of range of the selected plan');
            }

            if(!$request->terms) {
                return back()->with('error', 'Your must accept our terms & conditions to proceed!');
            }

            $user_id = Auth::id();

            $data = [
                'user_id' => Auth::id(),
                'child_investment_plan_id' => $plan_details->id,
                'transaction_hash' => $hash,
                'main_wallet_id' => 1,
                'amount' => $request->amount,
                'remaining_duration' => $plan_details->duration,
                'reinvestment' => '1',
                'status' => 'accepted',
                'running' => 1,
                'approved_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $create_reinvestment = $deposit->create($data);

            if($create_reinvestment) {
                ChildInvestmentPlan::where('id', $plan_details->id)->increment('total_deposited', $request->amount);
                User::where('id', $user_id)->decrement('total_balance', $request->amount);
                User::where('id', $user_id)->increment('currently_invested', $request->amount);
                $wallet = MainWallet::find(1);
                Transactions::insert([
                    'amount' => $request->amount,
                    'user_id' => $user_id,
                    'currency' => $wallet->currency,
                    'transaction_hash' => $hash,
                    'type' => 'reinvestment',
                    'transaction_id' => $create_reinvestment->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                // send email
                $user = User::find($user_id);
                $details = [
                    'subject' => 'New Reinvestment Created Successfully',
                    'username' => $user->name,
                    'amount' => $request->amount, 
                    'transaction_hash' => $hash,
                    'wallet' => $wallet->currency,
                    'plan' => $plan_details->name,
                    'duration' => $plan_details->duration,
                    'wallet_address' => $wallet->currency_address,
                    'date' => date("Y-m-d H:i:s"),
                    'view' => 'emails.user.reinvestmentrequest',
                    'email' => $user->email,
                ];

                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                $mailer = new \App\Mail\MailSender($details);
                Mail::to($user->email)->queue($mailer);
                $details['view'] = 'emails.admin.reinvestmentrequest';

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->queue($mailer);
                }
                return back()->with('success',"$create_reinvestment->id");
            }
            return back()->with('error','Something is not right, please try again');
        } else {
            return view('user.reinvest', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
        }
    }
    public function pendingDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approve($request);
            } else if($request->action == 'deny') {
                return $this->deny($request);
            } else if($request->action == 'delete'){
                return $this->delete($request);
            }
        } else{
            $deposits = Deposit::where('status', 'pending')->orderBy('id', 'DESC')->get();
            return view('admin.pending-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function deniedDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
             if($request->action == 'delete'){
                return $this->delete($request, 'denied');
            }
        } else{
            $deposits = Deposit::where('status', 'denied')->orderBy('id', 'DESC')->get();
            return view('admin.denied-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function approvedDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
             if($request->action == 'delete'){
                return $this->delete($request, 'approved');
            }
        } else{
            $deposits = Deposit::where('status', 'accepted')->orderBy('id', 'DESC')->get();
            return view('admin.approved-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function approve(Request $request) {
       $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
        $deposits = Deposit::where('status', 'pending')->orderBy('id', 'DESC')->get();
        if(!$is_valid_deposit) {
            $request->session()->flash('error', "Deposit request not found");
            return back();
        }

        if($is_valid_deposit->status == 'accepted') {
            $request->session()->flash('error', "Deposit already approved");
            return back();
        }

        $approved_deposit = $deposit->where('id', $deposit_id)->update(
            [
                'status' => 'accepted',
                'expires_at' => addDaysToDate(date("Y-m-d H:i:s"), $is_valid_deposit->remaining_duration),
                'running' => 1,
                'approved_at' => date("Y-m-d H:i:s")
            ]);
        

        if($approved_deposit) {
            
            $user_has_invested = User::where('id', $is_valid_deposit->user_id)->select(['invested'])->first();
            // dd($user_has_invested->invested);
            if(!$user_has_invested->invested) {
                User::where('id', $is_valid_deposit->user_id)->update([
                    'invested' => 1
                ]);
            }
            
            if($is_valid_deposit->reinvestment){
                User::where('id', $is_valid_deposit->user_id)->decrement('total_balance', $is_valid_deposit->amount);
            }
            
            $referrer = $is_valid_deposit->user->referrer_uid;
            
            if($referrer) {
                $referrer_data = User::where('uid', $referrer)->first();
                $interest_receiver_id = $referrer_data->id;
                $depositor_id = $is_valid_deposit->user_id;
                $deposit_id = $is_valid_deposit->id;

                $record_exist_in_referrers_interest_relationship_table = ReferrersInterestRelationship::where([
                    'interest_receiver_id' => $interest_receiver_id,
                    'depositor_id' => $depositor_id
                ])->first();

                if(!$record_exist_in_referrers_interest_relationship_table) {
                    $referrer_interest_rate = $is_valid_deposit->plan->referral_bonus;
                    $referrer_bonus = ($is_valid_deposit->amount/100) * $referrer_interest_rate;

                    $credit_referrer_bonus = User::where('id', $interest_receiver_id)->increment('total_balance', $referrer_bonus);

                    if($credit_referrer_bonus) {
                        $insert_into_referrers_interest_relationshipt_table = ReferrersInterestRelationship::insert([
                            'interest_receiver_id' => $interest_receiver_id,
                            'depositor_id' => $depositor_id,
                            'deposit_id' => $is_valid_deposit->id,
                            'amount' => $referrer_bonus,
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s')
                        ]);

                        if($insert_into_referrers_interest_relationshipt_table) {
                            // send mail to referrer
                            $details = [
                                'subject' => 'You Received A Referral Bonus',
                                'username' => $is_valid_deposit->user->name,
                                'amount_deposited' => $is_valid_deposit->amount,
                                'bonus' => $referrer_bonus,
                                'date' => date("Y-m-d H:i:s"),
                                'view' => 'emails.user.referralbonus',
                                'email' => $referrer_data->email
                            ];
            
                            $mailer = new \App\Mail\MailSender($details);
                            Mail::to($referrer_data->email)->queue($mailer);
                        }
                    }
                }
            }
            ChildInvestmentPlan::where('id', $is_valid_deposit->child_investment_plan_id)->increment('total_accepted', $is_valid_deposit->amount);
            // send email
            $user = User::find($is_valid_deposit->user_id);

            $details = [
                'subject' => ($is_valid_deposit->reinvestment ? 'Your Reinvestment' : 'Your Deposit') .  ' Has Been Approved',
                'amount' => $is_valid_deposit->amount,
                'transaction_hash' => $is_valid_deposit->transaction_hash,
                'wallet' => $is_valid_deposit->wallet->currency,
                'duration' => $is_valid_deposit->plan->duration,
                'plan' => $is_valid_deposit->plan->name,
                'reinvestment' => $is_valid_deposit->reinvestment,
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.depositapproved',
                'email' => $user->email,
                'username' => $user->name
            ];

            $mailer = new \App\Mail\MailSender($details);
            Mail::to($user->email)->queue($mailer);
            // $main_wallet_id = $is_valid_deposit->user_wallet->main_wallet_id;
            User::where('id', $is_valid_deposit->user_id)->increment('currently_invested', $is_valid_deposit->amount);

            $request->session()->flash('success', ($is_valid_deposit->reinvestment ? 'Reinvestment' : 'Deposit') . " approved successfully");
            return back();

        }
        $request->session()->flash('success', "Something is not right");
        return back();
    }

    public function deny(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();

        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
        $deposits = Deposit::where('status', 'pending')->orderBy('id', 'DESC')->get();

        if(!$is_valid_deposit) {
            $request->session()->flash('error', "Deposit request not found");
            return back();
        }

        if($is_valid_deposit->status == 'accepted') {
            $request->session()->flash('error', "Deposit already approved");
            return back();
        }

        if($is_valid_deposit->status == 'denied') {
            $request->session()->flash('error', "Deposit already denied");
            return back();
        }

        $deny_deposit = $deposit->where('id', $deposit_id)->update(
            [
                'status' => 'denied',
                'denied_at' => date("Y-m-d H:i:s")
            ]);
        

        if($deny_deposit) {
            ChildInvestmentPlan::where('id', $is_valid_deposit->child_investment_plan_id)->increment('total_denied', $is_valid_deposit->amount);
            // send email
            $user = User::find($is_valid_deposit->user_id);

            $details = [
                'subject' => ($is_valid_deposit->reinvestment ? 'Your Reinvestment' : 'Your Deposit') .  ' Has Been Denied',
                'amount' => $is_valid_deposit->amount,
                'transaction_hash' => $is_valid_deposit->transaction_hash,
                'wallet' => $is_valid_deposit->user_wallet->currency,
                'duration' => $is_valid_deposit->plan->duration,
                'plan' => $is_valid_deposit->plan->name,
                'date' => date("Y-m-d H:i:s"),
                'reinvestment' => $is_valid_deposit->reinvestment,
                'email' => $user->email,
                'username' => $user->name,
                'view' => 'emails.user.depositdenied'
            ];

            $mailer = new \App\Mail\MailSender($details);
            Mail::to($user->email)->queue($mailer);

           $request->session()->flash('success', "Deposit denied successfully");
            return back();
        }
        $request->session()->flash('error', "Something is not right");
        return back();
    }
    public function pauseDeposit(Request $request) {
        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();

        if(!$is_valid_deposit) {
            return response()->json([
                'errors' => ['message' => ['Investment not found']]
            ], 401);
        }

        if($is_valid_deposit->running == '0') {
            return response()->json([
                'errors' => ['message' => ['Investment already paused']]
            ], 401);
        }

        $pause_deposit = $deposit->where('id', $deposit_id)->update([
            'running' => '0',
        ]);
        if($pause_deposit){
            return response()->json([
                'success' => ['message' => ['Investment paused successfully']]
            ], 200);
        }
    }
    public function playDeposit(Request $request) {
        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();

        if(!$is_valid_deposit) {
            return response()->json(
            [
                    'errors' => ['message' => ['Investment not found']]
                ], 401
            );
        }

        if($is_valid_deposit->running == '1') {
            return response()->json([
                   'errors' => ['message' => ['Investment already running']]
            ], 401);
        }

        $play_deposit = $deposit->where('id', $deposit_id)->update([
            'running' => '1',
        ]);
        
        if($play_deposit){
           return response()->json([
                'success' => ['message' => ['Investment has started running']]
            ], 200);
        }
    }
    public function delete(Request $request) {
        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();

        if(!$is_valid_deposit) {
            $request->session()->flash('error', "Deposit not found");
            return back();
        } else {
           $delete_deposit = $deposit->where('id', $deposit_id)->delete();
           if($delete_deposit){
                $request->session()->flash('success', "Deposit deleted successfully");
               return back();
            }
        }
    }

}
