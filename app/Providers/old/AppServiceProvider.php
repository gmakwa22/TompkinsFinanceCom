<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Import Schema
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
View::share('corpsignin', 'https://paydayloan.azurewebsites.net/');
        View::share('corpregister', 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_PayDayLoansSignUp_1&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fpaydayloan.azurewebsites.net%2F&scope=openid&response_type=id_token&prompt=login');
      View::share('corpname', 'Reliable Speedy Loans');
  //    View::share('corplogo', 'images/megacashbucks.png');
      View::share('corplogo', 'images/reliablespeedyloans.png');
      View::share('privname', 'Reliable Speedy Loans');
      View::share('privoff', 'Sam Nugent Burnaby');
      View::share('privurl', 'http://reliablespeedyloans.com/');
      View::share('privaddress', '3292 production Way Unit 501');
      View::share('privcity', 'Burnaby');
      View::share('privprov', 'BC');
      View::share('privphone', '1 (800) 922-6493');
      View::share('privpostal', 'V5A 4R4');
      View::share('privcountry', 'Canada');
      View::share('privemail', 'privacy@reliablespeedyloans.com');
      View::share('suportemail', 'support@reliablespeedyloans.com');
      View::share('consumernum', '80012');
      View::share('gooid', 'UA-143026661-1');
      View::share('licloc', 'BusinessLicense-20-02-11.pdf');
      View::share('nametogether', 'reliablespeedyloans');
      View::share('randomalt', 'Payday Loans Canada');
      View::share('provlic', 'British Columbia');
      View::share('provbc', 'Maximum charges permitted in British Columbia for payday loan: 15% of the principal. We charge: 15% of the principal. For a $300 loan for 14 days: Total cost for borrowing = $45 Annual Percentage rate = 391.07%');
/*
      View::share('corpsignin', 'https://paydayloan.azurewebsites.net');
      View::share('corpregister', 'https://paydayloan.azurewebsites.net');
      View::share('corpname', '{{ $privname }} Corp.');
    View::share('corplogo', 'images/megacashbucks.png');
      View::share('corplogo', 'images/moolah-logo.png');
      View::share('privname', 'Moolah Cash Loans');
      View::share('privurl', 'http://www.megacashbucks.com');
      View::share('privaddress', '819 Hamilton Street');
      View::share('privcity', 'Vancouver');
      View::share('privprov', 'BC');
      View::share('privpostal', 'V6B 6M2');
      View::share('privcountry', 'Canada');
      View::share('privemail', 'privacy@megacashbucks.com');
      View::share('suportemail', 'support@megacashbucks.com');
      View::share('consumernum', 'XXXXXX');
*/

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
