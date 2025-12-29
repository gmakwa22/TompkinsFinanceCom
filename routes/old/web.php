<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     //$exitCode = Artisan::call('cache:clear');
//     $exitCode = Artisan::call('route:cache');
//     $exitCode = Artisan::call('view:clear');
//     $exitCode = Artisan::call('config:cache');
//     // return what you want
//     return true;
// });
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('cache:clear');
    // $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/', 'HomeController@welcome');
Route::get('/new', 'HomeController@welcomenew');
Route::get('/new1', 'HomeController@welcomenew1');
Route::get('/new2', 'HomeController@welcomenew2');
Route::get('/new3', 'HomeController@welcomenew3');
Route::get('/new4', 'HomeController@welcomenew4');
Route::get('/new5', 'HomeController@welcomenew5');
Route::get('/new6', 'HomeController@welcomenew6');

Route::get('admin', 'admin\adminController@dashboard');
Route::get('admin/dashboard', 'admin\adminController@dashboard');


Route::match(['get','post'],'admin/users/create', 'admin\usersController@create');

// adminagents
Route::match(['get','post'],'admin/adminagents', 'admin\usersController@AdminAgentList');
Route::match(['get','post'],'admin/adminagents/{user}/update', 'admin\usersController@adminagentsupdate');
// Route::get('admin/adminagents/{user}', 'admin\usersController@adminagentsshow');
Route::get('admin/adminagents/{user}/delete', 'admin\usersController@adminagentsdelete');

// simpleagents
Route::get('admin/simpleagents', 'admin\usersController@AgentList');
Route::match(['get','post'],'admin/simpleagents/{user}/update', 'admin\usersController@simpleagentsupdate');
// Route::get('admin/simpleagents/{user}', 'admin\usersController@simpleagentsshow');
Route::get('admin/simpleagents/{user}/delete', 'admin\usersController@simpleagentsdelete');

// customers
Route::match(['get','post'],'admin/customers', 'admin\usersController@CustomerList');
Route::match(['get','post'],'admin/customers/{user}/update', 'admin\usersController@customersupdate');
// Route::get('admin/customers/{user}', 'admin\usersController@customersshow');
Route::get('admin/customers/{user}/delete', 'admin\usersController@customersdelete');
Route::match(['get','post'],'admin/customers/{user}/view', 'admin\usersController@customersview');
Route::match(['get','post'],'admin/customers/{user}/customer_view', 'admin\usersController@BuyerView');


Route::match(['get','post'],'admin/login', 'admin\adminController@login')->middleware('guest');

Route::get('admin/logout', 'admin\adminController@logout');
Route::get('admin/home', 'admin\adminController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact');
Route::get('/contactusnow', 'HomeController@contactusnow');
Route::get('/welcomehome', 'HomeController@welcomehome');
Route::get('/why_use_us', 'HomeController@Why_us');
Route::get('/membership', 'HomeController@membership');
// Route::get('/agent-list', 'HomeController@agentList');
Route::get('/how-its-done', 'HomeController@howitsdone');
Route::get('/education-center', 'HomeController@Education');
Route::get('/faq', 'HomeController@Faq');
Route::get('/bad-credit-loans-counsellors', 'HomeController@badcreditloanscounsellors');
Route::match(['get','post'],'/signin', 'HomeController@Signin');
Route::match(['get','post'],'/signup', 'HomeController@Signup');
Route::get('/privacy-policy', 'HomeController@Privacy');
Route::get('/terms-conditions', 'HomeController@Terms');
Route::get('/responsible-lending', 'HomeController@Responsible_lending');
Route::get('/sitemap', 'HomeController@Sitemap');
Route::get('/sitemap2', 'HomeController@Sitemap2');
Route::get('/reviews', 'HomeController@Reviews');
Route::get('/key-terms', 'HomeController@Key_terms');
Route::get('/loan-calculator', 'HomeController@Loan_calculator');
// Route::get('/best-lender-loans-canada', 'HomeController@bestLenderLoansCanada');
Route::get('/short-term-loans', 'HomeController@ShortTermLoans');
Route::get('/fast-loans-canada', 'HomeController@fastloanscanada');
Route::get('/payday-loan-canada', 'HomeController@paydayloancanada');
Route::get('/payday-loan-app-canada', 'HomeController@paydayloanAppcanada');
Route::get('/payday-loans-alberta', 'HomeController@alberta');
Route::get('/payday-loans-british-columbia', 'HomeController@brc');
// Route::get('/payday-loans-new-brunswick', 'HomeController@newbrunswick');
Route::get('/payday-loans-ontario', 'HomeController@ontario');
Route::get('/payday-loans-saskatchewan', 'HomeController@saskatchewan');
Route::get('/payday-loans-fredericton', 'HomeController@fredericton');
Route::get('/payday-loans-saint-john', 'HomeController@saintjohn');
Route::get('/payday-loans-moncton', 'HomeController@moncton');
Route::get('/payday-loans-hamilton', 'HomeController@hamilton');
Route::get('/payday-loans-brampton', 'HomeController@brampton');
Route::get('/payday-loans-mississauga', 'HomeController@mississauga');
Route::get('/payday-loans-ottawa', 'HomeController@ottawa');
Route::get('/payday-loans-toronto', 'HomeController@toronto');
Route::get('/payday-loans-medicine-hat', 'HomeController@medicinehat');
Route::get('/payday-loans-wood-buffalo', 'HomeController@woodbuffalo');
Route::get('/payday-loans-red-deer', 'HomeController@reddeer');
Route::get('/payday-loans-lethbridge', 'HomeController@lethbridge');

Route::get('/payday-loans-steinbach', 'HomeController@steinbach');
Route::get('/payday-loans-airdrie', 'HomeController@airdrie');
Route::get('/payday-loans-fort-mcmurry', 'HomeController@fortmcmurry');
Route::get('/payday-loans-st-albert', 'HomeController@stalbert');

Route::get('/payday-loans-manitoba', 'HomeController@manitoba');
Route::get('/payday-loans-winnipeg', 'HomeController@winnipeg');
Route::get('/payday-loans-dauphin', 'HomeController@dauphin');
Route::get('/payday-loans-morden', 'HomeController@morden');
Route::get('/payday-loans-portage-la-prairie', 'HomeController@portagelaprairie');
Route::get('/payday-loans-selkirk', 'HomeController@selkirk');
Route::get('/payday-loans-the-pas', 'HomeController@thepas');
Route::get('/payday-loans-winkler', 'HomeController@winkler');
Route::get('/payday-loans-brandon', 'HomeController@brandon');
Route::get('/payday-loans-steinbatch', 'HomeController@steinbatch');
Route::get('/payday-loans-thompson', 'HomeController@thompson');
Route::get('/payday-loans-halifax', 'HomeController@halifax');
Route::get('/payday-loans-cape-breton', 'HomeController@capebreton');
Route::get('/payday-loans-dartmouth', 'HomeController@dartmoth');
Route::get('/payday-loans-truro', 'HomeController@turo');
Route::get('/payday-loans-sydney', 'HomeController@sydney');
Route::get('/payday-loans-saskatoon', 'HomeController@saskatoon');
Route::get('/payday-loans-regina', 'HomeController@regina');
Route::get('/payday-loans-moose-jaw', 'HomeController@moosejaw');
Route::get('/payday-loans-markham', 'HomeController@markham');


Route::get('/payday-loans-edmonton', 'HomeController@edmonton');
Route::get('/payday-loans-calgary', 'HomeController@calgary');
Route::get('/payday-loans-burnaby', 'HomeController@burnaby');
Route::get('/payday-loans-surrey', 'HomeController@surrey');
Route::get('/payday-loans-vancouver', 'HomeController@vancouver');
Route::get('/payday-loans-nova-scotia', 'HomeController@nova_scotia');
Route::get('/payday-loans-windsor', 'HomeController@windsor');
Route::get('/payday-loans-london-ontario', 'HomeController@london_ontario');
Route::get('/payday-loans-niagara-falls', 'HomeController@niagara_falls');
Route::get('/borrow-money', 'HomeController@borrow_money');
Route::get('/bad-credit-loans', 'HomeController@bad_credit_loans');
Route::get('/installment-loans-canada', 'HomeController@installmen_loans');
Route::get('/why-choose-us', 'HomeController@why_choose_us');
Route::get('/cash-loans', 'HomeController@cash_loans');
Route::get('/payday-loans', 'HomeController@payday_loans');
Route::get('/Payday-Loans', 'HomeController@payday_loans');
Route::get('/payday-advance', 'HomeController@payday_advance');
Route::get('/Payday-Advance', 'HomeController@payday_advance');
Route::get('/payday-loans-near-me', 'HomeController@payday_loans_near_me');
Route::get('/short-term-loans-canada', 'HomeController@short_term_loans_canada');
Route::get('/same-day-payday-loans', 'HomeController@same_day_payday_loans');
Route::get('/same-day-loans', 'HomeController@same_day_loans');
Route::get('/express-loans', 'HomeController@express_loans');
Route::get('/express-loans2', 'HomeController@express_loans2');
Route::get('/instant-payday-loans-canada', 'HomeController@instant_payday_loans_canada');
Route::get('/emergency-loans', 'HomeController@emergency_loans');
Route::get('/weekend-payday-loans', 'HomeController@weekend_payday_loans');
Route::get('/odsp-payday-loans-online', 'HomeController@odsp_payday_loans_online');
Route::get('/holiday-vacation-loans', 'HomeController@holiday_vacation_loans');
Route::get('/child-tax-loans', 'HomeController@child_tax_loans');

Route::get('/chat', 'HomeController@Chat');
Route::match(['get','post'],'/buyer-detail', 'HomeController@BuyerDetail');
Route::match(['get','post'],'/buyer-edit-detail', 'HomeController@BuyerEditDetail');
Route::match(['get','post'],'/buyer-detail/delete/{id}/{enquery}','HomeController@deleteEnquiry');
Route::match(['get','post'],'/contact-us', 'HomeController@ContactUs');
Route::match(['get','post'],'/checkout', 'HomeController@Checkout');
Route::match(['get','post'],'/thankyou', 'HomeController@Thankyou');
Route::match(['get','post'],'/email_check', 'HomeController@email_check');
Route::match(['get','post'],'/save_chekoutdata', 'HomeController@save_chekoutdata');
Route::match(['get','post'],'/forgotpassword', 'HomeController@forgotpassword');

/*** Subsciprtion ***/
Route::match(['get','post'],'/admin/add-subscription','subscriptionController@addSubscription');
Route::match(['get','post'],'/admin/edit-subscription/{id}','subscriptionController@editSubscription');
Route::match(['get','post'],'/admin/delete-subscription/{id}','subscriptionController@deleteSubscription');
Route::get('/admin/view-subscription','subscriptionController@viewSubscription');


/*** FAQ ***/
Route::match(['get','post'],'/admin/add-faq','FaqController@addFaq');
Route::match(['get','post'],'/admin/edit-faq/{id}','FaqController@editFaq');
Route::match(['get','post'],'/admin/delete-faq/{id}','FaqController@deleteFaq');
Route::get('/admin/view-faq','FaqController@viewFaq');

/*** Pages ***/
Route::match(['get','post'],'/admin/add-page','PagesController@addPages');
Route::match(['get','post'],'/admin/edit-page/{id}','PagesController@editPages');
Route::match(['get','post'],'/admin/delete-page/{id}','PagesController@deletePages');
Route::get('/admin/view-page','PagesController@viewPages');

/*** Setting ***/
Route::match(['get','post'],'/admin/edit-profile','SettingController@editAdminprofile');
Route::match(['get','post'],'/admin/general','SettingController@generalSetting');

/*** Transactions ***/
Route::get('/admin/view-transaction','TrasactionsController@viewTrasactions');
Route::match(['get','post'],'/admin/view-transaction-one/{id}','TrasactionsController@viewTrasactionsOne');


/*** city state ***/
Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/get-state-list','APIController@getStateList');
Route::get('api/get-city-list','APIController@getCityList');
Route::get('api/save_setting','APIController@save_Setting');

Route::get('/payment/process', 'PaymentsController@process')->name('payment.process');
Route::get('/payment/subscribe', 'PaymentsController@subscribe')->name('payment.subscribe');




/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get ( '/redirect/{service}', 'SocialAuthController@redirect' );
Route::get ( '/callback/{service}', 'SocialAuthController@callback' );

Route::match(['get','post'],'/iframe/review','HomeController@review');
Route::match(['get','post'],'/iframe/review-country','HomeController@review_country');
