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
      View::share('corpsignin', 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_sagelogin&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fpaydayloan.azurewebsites.net%2Fhome%2FIndex%2Fdef%3Asearch%3Arapidcashtodayca&scope=openid&response_type=id_token&prompt=login');
  View::share('corpregister', 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_sagesignup&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fpaydayloan.azurewebsites.net%2Fhome%2FIndex%2Fdef%3Asearch%3Arapidcashtodayca&scope=openid&response_type=id_token&prompt=login');
  View::share('corpname', 'Get Cash Fast');
//    View::share('corplogo', 'images/megacashbucks.png');
  View::share('corplogo', 'loansusa.png');
  View::share('privname', 'TOMPKINS FINANCE, LLC');
  View::share('privoff', 'Kevin Schmelzle MB');
  View::share('privurl', 'https://www.tompkinsfinance.com/');
  View::share('privaddress', '330 St. Mary Avenue Suite 300');
  View::share('privcity', 'Houston');
  View::share('privprov', 'TX');
  View::share('privphone', '(877) 409-6855');
  View::share('privpostal', 'R3C 3Z5');
  View::share('privcountry', 'USA');
  View::share('privemail', 'privacy@tompkinsfinance.com');
  View::share('suportemail', 'support@tompkinsfinance.com');
  View::share('consumernum', 'XXXXXXX');
  View::share('consumernumon', 'XXXXXXX');
  View::share('gooid', 'UA-143026661-1');
  View::share('licloc', 'BusinessLicense-20-02-11.pdf');
  View::share('nametogether', 'getcashfast');
  View::share('randomalt', 'Payday Loans USA');
  View::share('provlic', 'Missouri');
  View::share('provbc', 'Maximum charges permitted in Texas for payday loan: 225% of the principal. We charge: 220% of the principal. For a $300 loan for 12 days: Total cost for borrowing = $120 Annual Percentage rate = 517.00%');
  View::share('phonesmall', '');
  View::share('safe', 'off');

  // Safe On Safe off equals full site Basic is the basic site

// URL::forceScheme('https');

/*
      View::share('corpsignin', 'https://paydayloan.azurewebsites.net');
      View::share('corpregister', 'https://paydayloan.azurewebsites.net');
      View::share('corpname', 'Sage Endeavours, LLC Corp.');
    View::share('corplogo', 'images/megacashbucks.png');
      View::share('corplogo', 'images/moolah-logo.png');
      View::share('privname', 'Moolah Cash Loans');
      View::share('privurl', 'http://www.megacashbucks.com');
      View::share('privaddress', '819 Hamilton Street');
      View::share('privcity', 'Vancouver');
      View::share('privprov', 'BC');
      View::share('privpostal', 'V6B 6M2');
      View::share('privcountry', 'USA');
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
