<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitedStates;
use App\Http\Controllers\BasicSite;

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

// Route::get('/', function () { return view('welcome'); });

Route::controller(HomeController::class)->group(function () {
   Route::get('/', 'welcome');
   Route::get('/credit', 'credit');
   Route::get('/maintenance', 'maintenance');
   Route::get('/applynow', 'applynow');
   Route::get('/how', 'how');
   Route::get('/moneynow', 'moneynow');
   Route::get('/loanterms', 'loanterms');
   Route::get('/etranst', 'etranst');
   Route::get('/emg', 'emg');
   Route::get('/sup', 'sup');
   Route::get('/contact', 'contact');
   Route::get('/child-tax-loans', 'child_tax_loans');
   Route::get('/education-center', 'Education');
   Route::get('/sitemap', 'Sitemap');
   Route::get('/contactusnow', 'contactusnow');
   Route::get('/welcomehome', 'welcomehome');
   Route::get('/why_use_us', 'Why_us');
   Route::get('/membership', 'membership');
   Route::get('/agent-list', 'agentList');
   Route::get('/how-its-done', 'howitsdone');
   Route::get('/faq', 'Faq');
   Route::get('/bad-credit-loans-counsellors', 'badcreditloanscounsellors');
   Route::get('/privacy-policy', 'Privacy');
   Route::get('/terms-conditions', 'Terms');
   Route::get('/responsible-lending', 'Responsible_lending');
   Route::get('/reviews', 'Reviews');
   Route::get('/key-terms', 'Key_terms');
   Route::get('/loan-calculator', 'Loan_calculator');
   Route::get('/test-videos-images', 'testVideosImages');
   // Route::get('/best-lender-loans-usa', 'bestLenderLoansUSA');
   Route::get('/short-term-loans', 'ShortTermLoans');
   Route::get('/fast-loans-usa', 'fastloansusa');
   Route::get('/payday-loan-usa', 'paydayloanusa');
   Route::get('/payday-loan-app-usa', 'paydayloanAppusa');
   Route::get('/borrow-money', 'borrow_money');
   Route::get('/bad-credit-loans', 'bad_credit_loans');
   Route::get('/installment-loans-usa', 'installmen_loans');
   Route::get('/why-choose-us', 'why_choose_us');
   Route::get('/cash-loans', 'cash_loans');
   Route::get('/payday-loans', 'payday_loans');
   Route::get('/Payday-Loans', 'payday_loans');
   Route::get('/payday-advance', 'payday_advance');
   Route::get('/Payday-Advance', 'payday_advance');
   Route::get('/payday-loans-near-me', 'payday_loans_near_me');
   Route::get('/short-term-loans-usa', 'ShortTermLoans');
   Route::get('/same-day-payday-loans', 'same_day_payday_loans');
   Route::get('/same-day-loans', 'same_day_loans');
   Route::get('/express-loans', 'express_loans');
   Route::get('/express-loans2', 'express_loans2');
   Route::get('/payday-loan-usa', 'instant_payday_loans_usa');
   Route::get('/emergency-loans', 'emergency_loans');
   Route::get('/weekend-payday-loans', 'weekend_payday_loans');
   Route::get('/social-security-disability-insurance-ssdi-payday-loans-online', 'socialsecuritydisability');
   Route::get('/holiday-vacation-loans', 'holiday_vacation_loans');
});

Route::controller(UnitedStates::class)->group(function () {
   Route::get('/payday-loans-nevada', 'nevada');
   Route::get('/payday-loans-las-vegas', 'lasvegas');
   Route::get('/payday-loans-henderson', 'henderson');
   Route::get('/payday-loans-reno', 'reno');
   Route::get('/payday-loans-north-las-vegas', 'northlasvegas');
   Route::get('/payday-loans-carson-city', 'carsoncity');
   Route::get('/payday-loans-fernley', 'fernley');
   Route::get('/payday-loans-elko', 'elko');
   Route::get('/payday-loans-mesquite', 'mesquite');
   Route::get('/payday-loans-boulder-city', 'bouldercity');
   Route::get('/payday-loans-sparks', 'sparks');

   Route::get('/payday-loans-texas', 'texas');
   Route::get('/payday-loans-houston', 'houston');
   Route::get('/payday-loans-san-antonio', 'sanantonio');
   Route::get('/payday-loans-dallas', 'dallas');
   Route::get('/payday-loans-austin', 'austin');
   Route::get('/payday-loans-fort-worth', 'fortworth');
   Route::get('/payday-loans-el-paso', 'elpaso');
   Route::get('/payday-loans-arlington', 'arlington');
   Route::get('/payday-loans-corpus-christi', 'corpuschristi');
   Route::get('/payday-loans-plano', 'plano');
   Route::get('/payday-loans-laredo', 'laredo');
   Route::get('/payday-loans-lubbock', 'lubbock');
   Route::get('/payday-loans-garland', 'garland');
   Route::get('/payday-loans-irving', 'irving');
   Route::get('/payday-loans-amarillo', 'amarillo');
   Route::get('/payday-loans-grand-prairie', 'grandprairie');
   Route::get('/payday-loans-brownsville', 'brownsville');
   Route::get('/payday-loans-mckinney', 'mckinney');
   Route::get('/payday-loans-frisco', 'frisco');
   Route::get('/payday-loans-pasadena', 'pasadena');
   Route::get('/payday-loans-killeen', 'killeen');
   Route::get('/payday-loans-mesquitetx', 'mesquitetx');


   Route::get('/payday-loans-california', 'california');
   Route::get('/payday-loans-los-angeles', 'losangeles');
   Route::get('/payday-loans-san-diego', 'sandiego');
   Route::get('/payday-loans-san-jose', 'sanjose');
   Route::get('/payday-loans-san-francisco', 'sanfrancisco');
   Route::get('/payday-loans-fresno', 'fresno');
   Route::get('/payday-loans-sacramento', 'sacramento');
   Route::get('/payday-loans-long-beach', 'longbeach');
   Route::get('/payday-loans-oakland', 'oakland');
   Route::get('/payday-loans-bakersfield', 'bakersfield');
   Route::get('/payday-loans-anaheim', 'anaheim');
   Route::get('/payday-loans-santa-ana', 'santaana');
   Route::get('/payday-loans-riverside', 'riverside');
   Route::get('/payday-loans-stockton', 'stockton');
   Route::get('/payday-loans-irvine', 'irvine');
   Route::get('/payday-loans-chula-vista', 'chulavista');
   Route::get('/payday-loans-fremont', 'fremont');
   Route::get('/payday-loans-san-bernardino', 'sanbernardino');
   Route::get('/payday-loans-modesto', 'modesto');
   Route::get('/payday-loans-fontana', 'fontana');
   Route::get('/payday-loans-oxnard', 'oxnard');
   Route::get('/payday-loans-moreno-valley', 'morenovalley');
   Route::get('/payday-loans-huntington-beach', 'huntingtonbeach');
   Route::get('/payday-loans-glendale', 'glendale');
   Route::get('/payday-loans-santa-clarita', 'santaclarita');
   Route::get('/payday-loans-rancho-cucamonga', 'ranchocucamonga');


   Route::get('/payday-loans-missouri', 'missouri');
   Route::get('/payday-loans-kansas-city', 'kansas');
   Route::get('/payday-loans-st-louis', 'stlouis');
   Route::get('/payday-loans-springfield', 'springfield');
   Route::get('/payday-loans-independence', 'independence');
   Route::get('/payday-loans-columbia', 'columbia');
   Route::get('/payday-loans-lees-summit', 'leessummit');
   Route::get('/payday-loans-ofallon', 'ofallon');
   Route::get('/payday-loans-st-joseph', 'stjoseph');
   Route::get('/payday-loans-st-charles', 'stcharles');
   Route::get('/payday-loans-st-peters', 'stpeters');
   Route::get('/payday-loans-blue-springs', 'bluesprings');
   Route::get('/payday-loans-joplin', 'joplin');
   Route::get('/payday-loans-florissant', 'florissant');
   Route::get('/payday-loans-chesterfield', 'chesterfield');
   Route::get('/payday-loans-jefferson-city', 'jeffersoncity');
   Route::get('/payday-loans-cape-girardeau', 'capegirardeau');
   Route::get('/payday-loans-hannibal', 'hannibal');
   Route::get('/payday-loans-wentzville', 'wentzville');
   Route::get('/payday-loans-wildwood', 'wildwood');
   Route::get('/payday-loans-university-city', 'universitycity');
   Route::get('/payday-loans-liberty', 'liberty');


});

// ========================================
// CANADIAN CITY ROUTES - MARKED FOR DELETION
// ========================================
// These routes are disabled and redirect to main page
// TODO: Delete these routes and their corresponding MVC files after confirming site stability
// ========================================

// Canadian Province Routes - Redirect to main page
Route::get('/payday-loans-manitoba', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-nova-scotia', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});

// Canadian City Routes - Redirect to main page
Route::get('/payday-loans-toronto', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-vancouver', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-montreal', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-calgary', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-ottawa', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-winnipeg', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-edmonton', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-hamilton', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-quebec', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-windsor', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-london-ontario', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-kitchener', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-brampton', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-mississauga', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-markham', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-burnaby', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-richmond', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-surrey', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-laval', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-gatineau', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-longueuil', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-halifax', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-st-johns', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-saskatoon', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-regina', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-thunder-bay', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-sudbury', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-oshawa', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-barrie', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-st-catharines', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-cambridge', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-kingston', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-guelph', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-waterloo', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-brantford', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-sarnia', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-peterborough', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-belleville', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-chatham', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-cornwall', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-north-bay', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-sault-ste-marie', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-timmins', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-kenora', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-fort-frances', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-dryden', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-red-lake', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-sioux-lookout', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-ear-falls', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-ignace', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-nestor-falls', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-sioux-narrows', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-minaki', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-vermilion-bay', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});

// Additional Canadian cities from old routes
Route::get('/payday-loans-fredericton', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-saint-john', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-moncton', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-medicine-hat', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-wood-buffalo', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-red-deer', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-lethbridge', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-steinbach', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-airdrie', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-fort-mcmurry', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-st-albert', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-dauphin', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-morden', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-portage-la-prairie', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-selkirk', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-the-pas', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-winkler', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-brandon', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-steinbatch', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-thompson', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-cape-breton', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-dartmouth', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-truro', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-sydney', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-moose-jaw', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});
Route::get('/payday-loans-niagara-falls', function () {
    return redirect('/')->with('info', 'This Canadian city page has been disabled.');
});

// ========================================
// END CANADIAN CITY ROUTES - MARKED FOR DELETION
// ========================================

Route::controller(BasicSite::class)->group(function () {
   Route::get('/farm-equipment', 'farmequipment');
});

