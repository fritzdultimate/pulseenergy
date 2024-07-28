<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get', 'post'], '/user/quick-withdrawal', [App\Http\Controllers\HomeController::class, 'quickWithdrawal_two']);
Route::post('user/deposit/create', [App\Http\Controllers\DepositController::class, 'store']);
Route::post('user/update/profile', [App\Http\Controllers\HomeController::class, 'updateProfile']);
Route::post('user/upgrade/profile', [App\Http\Controllers\FilesController::class, 'storeFrontDocument']);
Route::post('user/update/password', [App\Http\Controllers\HomeController::class, 'updatePassword']);


Route::controller(HomeController::class)->name('guest.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::view('/about-us', 'guest.new_about-us')->name('about-us');
    Route::view('/vision-mission', 'guest.new_vision')->name('vision');
    Route::view('/management-profiles', 'guest.new_management_profile')->name('management_profiles');
    Route::view('/social-investment', 'guest.new_social-investment')->name('social_investment');
    Route::view('/biodiversity', 'guest.new_biodiversity')->name('biodiversity');
    Route::view('/anti-bribery-policy', 'guest.new_anti_bribery_policy')->name('anti-bribery-policy');
    Route::view('/whistle-blowing-system', 'guest.new_whistle_blowing_system')->name('whistle-blowing-system');
    Route::view('/csirt', 'guest.new_csirt')->name('csirt');
    Route::view('/jobs', 'guest.new_jobs')->name('jobs');
    Route::view('/jobs/detail/internship-4', 'guest.new_jobs_detail_internship_4')->name('jobs_details');
    Route::view('/investor-registration', 'guest.new_vendor_registration')->name('investor_registration');


    Route::view('/markets-to-trade', 'guest.about-us')->name('markets-to-trade');
    Route::get('/faq', 'faqs')->name('faqs');
    Route::view('/funds-protection', 'guest.funds-protection')->name('funds-protection');
    Route::view('/how-to-open-an-account', 'how-to-open-an-account')->name('how-to-open-an-account');
    Route::view('/forex', 'guest.forex')->name('forex');
    Route::view('/stocks', 'guest.stocks')->name('stocks');
    Route::view('/indices', 'guest.indices')->name('indices');
    Route::view('/commodities', 'guest.commodities')->name('commodities');
    Route::view('/how-to-earn', 'guest.how-to-earn')->name('how-to-earn');
    Route::view('/cookies-agreement', 'guest.cookies-agreement')->name('cookies-agreement');



    Route::get('/plans', 'plans')->name('plans');
    Route::get('/news', 'news')->name('news');
    Route::get('/support', 'support')->name('support');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('/meet-our-traders', 'meetOurTraders')->name('meet-our-traders');
    Route::get('/how-it-works', 'howItWorks')->name('how-it-works');
    Route::get('/terms', 'terms')->name('terms');
    Route::match(['get', 'post'], '/forgot-pass', 'forgotPass')->name('forgot-pass');
    Route::match(['get', 'post'], '/change-pass', 'changePass')->name('change-pass');
    Route::match(['get', 'post'], '/verify-token', 'verifyToken')->name('verify-token');
});
Route::match(['get', 'post'], '/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'], '/register', [App\Http\Controllers\RegistrationController::class, 'index'])->name('register');


Route::prefix('user')->name('user.')->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    // Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
    Route::match(['get', 'post'],'/wallets', [App\Http\Controllers\UserWalletController::class, 'index']);
    Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit']);
    Route::get('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw']);
    Route::get('/select-plan', [App\Http\Controllers\HomeController::class, 'selectPlan'])->name('select-plan');
    Route::get('/reinvest/select-plan', [App\Http\Controllers\HomeController::class, 'selectPlan'])->name('reinvest');
    Route::get('/plans/{name}/invest', [App\Http\Controllers\HomeController::class, 'InvestmentProcess']);
    Route::get('/plans/{name}/reinvest', [App\Http\Controllers\HomeController::class, 'ReinvestmentProcess']);
    Route::get('/investments/{id}', [App\Http\Controllers\HomeController::class, 'InvestmentDetails']);
    Route::get('/withdrawals/{id}', [App\Http\Controllers\HomeController::class, 'WithdrawalDetails']);
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'userProfile']);
    Route::get('/upgrade', [App\Http\Controllers\HomeController::class, 'userProfileUpgrade']);
    
    Route::get('/deposits', [App\Http\Controllers\HomeController::class, 'deposits']);
    Route::match(['get', 'post'], '/deposits/active', [App\Http\Controllers\HomeController::class, 'activeDeposits']);
    Route::match(['get', 'post'], '/deposits/inactive', [App\Http\Controllers\HomeController::class, 'inactiveDeposits']);
    Route::match(['get', 'post'], '/reinvest', [App\Http\Controllers\DepositController::class, 'reinvest']);
    Route::get('/reinvestments', [App\Http\Controllers\HomeController::class, 'reinvestments']);
    Route::match(['get', 'post'], '/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index']);
    Route::get('/withdrawals', [App\Http\Controllers\HomeController::class, 'withdrawals']);
    Route::get('/transactions', [App\Http\Controllers\HomeController::class, 'transactions']);
    Route::get('/all-transactions', [App\Http\Controllers\HomeController::class, 'allTransactions']);
    Route::get('/security', [App\Http\Controllers\HomeController::class, 'security']);
    
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
    Route::get('/referrals', [App\Http\Controllers\HomeController::class, 'referrals']);
    
    Route::match(['get', 'post'], '/manage/quick-withdrawal', [App\Http\Controllers\HomeController::class, 'quickWithdrawal']);
    Route::match(['get', 'post'], '/manage/referral-bonus', [App\Http\Controllers\HomeController::class, 'referralBonus']);
    Route::match(['get', 'post'], '/manage/current-invested', [App\Http\Controllers\HomeController::class, 'currentInvested']);
    Route::match(['get', 'post'], '/manage/wallet-balance', [App\Http\Controllers\HomeController::class, 'walletBalance']);
    Route::get('/account/verification', [App\Http\Controllers\RegistrationController::class, 'verifyUserAccount'])->name('verify-user-account');
});
Route::prefix('admin')->middleware(['login', 'admin'])->group(function(){
    Route::match(['get', 'post'], '/', [App\Http\Controllers\AdminController::class, 'index']);
     Route::match(['get', 'post'], '/members/suspended', [App\Http\Controllers\AdminController::class, 'suspendedMembers']);
      Route::match(['get', 'post'], '/members/moderators', [App\Http\Controllers\AdminController::class, 'moderators']);
    Route::match(['get', 'post'], '/members/admins', [App\Http\Controllers\AdminController::class, 'admins']);
    Route::match(['get', 'post'], '/members', [App\Http\Controllers\AdminController::class, 'members']);
   
   
    Route::get('/upgrade', [App\Http\Controllers\AdminController::class, 'kyc']);
    Route::get('/limit', [App\Http\Controllers\AdminController::class, 'limit']);

    Route::post('/upgrade/approve', [App\Http\Controllers\AdminController::class, 'kycUpgrade']);
    Route::post('/upgrade/reject', [App\Http\Controllers\AdminController::class, 'kycDowngrade']);

    Route::post('/update/limit', [App\Http\Controllers\AdminController::class, 'limitUpdate']);
    
    Route::match(['get', 'post'], '/plans/parent', [App\Http\Controllers\ParentInvestmentPlanController::class, 'index']);
    Route::match(['get', 'post'], '/plans/child', [App\Http\Controllers\ChildInvestmentPlanController::class, 'index']);
    
    Route::match(['get', 'post'], '/wallets', [App\Http\Controllers\MainWalletController::class, 'index']);
    
    Route::match(['get', 'post'], '/deposits/pending', [App\Http\Controllers\DepositController::class, 'pendingDeposits']);
    Route::match(['get', 'post'], '/deposits/approved', [App\Http\Controllers\DepositController::class, 'approvedDeposits']);
    Route::match(['get', 'post'], '/deposits/denied', [App\Http\Controllers\DepositController::class, 'deniedDeposits']);
    
    Route::match(['get', 'post'], '/withdrawals/pending', [App\Http\Controllers\WithdrawalController::class, 'pendingWithdrawals']);
    Route::match(['get', 'post'], '/withdrawals/approved', [App\Http\Controllers\WithdrawalController::class, 'approvedWithdrawals']);
    Route::match(['get', 'post'], '/withdrawals/denied', [App\Http\Controllers\WithdrawalController::class, 'deniedWithdrawals']);
    
    Route::match(['get', 'post'], '/fund/confirm-credit', [App\Http\Controllers\AdminController::class, 'confirmCredit']);
    Route::match(['get', 'post'], '/fund/confirm-debit', [App\Http\Controllers\AdminController::class, 'confirmDebit']);
    Route::match(['get', 'post'], '/fund/ci/confirm-credit', [App\Http\Controllers\AdminController::class, 'confirmCiCredit']);
    Route::match(['get', 'post'], '/fund/ci/confirm-debit', [App\Http\Controllers\AdminController::class, 'confirmCiDebit']);
    
    Route::match(['get', 'post'], '/quick-withdrawal', [App\Http\Controllers\AdminController::class, 'quickWithdrawal']);
    
     Route::match(['get', 'post'], '/manage/deposit-interest', [App\Http\Controllers\AdminController::class, 'depositInterest']);
    Route::match(['get', 'post'], '/manage/referral-bonus', [App\Http\Controllers\AdminController::class, 'referralBonus']);
    Route::match(['get', 'post'], '/manage/current-invested', [App\Http\Controllers\AdminController::class, 'currentInvested']);
    Route::match(['get', 'post'], '/manage/wallet-balance', [App\Http\Controllers\AdminController::class, 'walletBalance']);
    Route::match(['get', 'post'], '/manage/total-withdrawn', [App\Http\Controllers\AdminController::class, 'totalWithdrawn']);
    
    Route::match(['get', 'post'], '/files', [App\Http\Controllers\AdminController::class, 'files']);
    Route::match(['get', 'post'], '/reviews', [App\Http\Controllers\ReviewsController::class, 'index']);
    
    Route::match(['get', 'post'],'/pages/faqs', [App\Http\Controllers\FaqController::class, 'index']);
    
    Route::match(['get', 'post'], '/pages/terms', [App\Http\Controllers\SiteSettingsController::class, 'termsAndConditions']);
    Route::match(['get', 'post'], '/pages/about', [App\Http\Controllers\SiteSettingsController::class, 'aboutUs']);
    Route::match(['get', 'post'], '/pages/privacy-policy', [App\Http\Controllers\SiteSettingsController::class, 'privacyAndPolicy']);
    Route::match(['get', 'post'], '/pages/meet-our-traders', [App\Http\Controllers\SiteSettingsController::class, 'meetOurTraders']);
    
    Route::match(['get', 'post'], '/pages/how-it-works', [App\Http\Controllers\SiteSettingsController::class, 'howItWorks']);
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
});
