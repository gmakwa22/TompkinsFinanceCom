<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Session;
use Auth;

class HomeController extends Controller
{

  private $safe = "on";

  public function Credit()
  {
    return redirect()->away('https://calendly.com/kennys-consulting/freedom-consultation-11');
  }

  public function applynow()
  {
    return redirect()->away('https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_PayDayLoansSignUp_1&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fpaydayloan.azurewebsites.net%2Fhome%2FIndex%2Fdef%3Aapp%3Aappypie&scope=openid&response_type=id_token&prompt=login');
  }

  public function how()
  {
    return redirect()->away('https://getcashfast.ca/how-its-done?utm_campaign=def&utm_medium=app&utm_source=appypie');
  }

  public function moneynow()
  {
    return redirect()->away('https://getcashfast.ca/why-choose-us?utm_campaign=def&utm_medium=app&utm_source=appypie');
  }

  public function loanterms()
  {
    return redirect()->away('https://getcashfast.ca/terms-conditions?utm_campaign=def&utm_medium=app&utm_source=appypie');
  }

  public function etranst()
  {
    return redirect()->away('https://getcashfast.ca/faq?utm_campaign=def&utm_medium=app&utm_source=appypie');
  }

  public function emg()
  {
    return redirect()->away('https://getcashfast.ca/emergency-loans?utm_campaign=def&utm_medium=app&utm_source=appypie');
  }

  public function sup()
  {
    return redirect()->away('https://getcashfast.ca/contact?utm_campaign=def&utm_medium=app&utm_source=appypie');
  }


  public function tracker()
  {

    $utm_campaign = request()->get('utm_campaign');
    $utm_medium = request()->get('utm_medium');
    $utm_source = request()->get('utm_source');

    $newbackendlink = 'https://paydayloan.azurewebsites.net/home/Index/' . $utm_campaign . ':' . $utm_medium . ':' . $utm_source;
    $encodedurl = urlencode($newbackendlink);
    $builturl = 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_PayDayLoansSignUp_1&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=' . $encodedurl . '&scope=openid&response_type=id_token&prompt=login';

    if ($utm_campaign == 'goo' || $utm_campaign == 'fvr' || $utm_campaign == 'eml' || $utm_campaign == 'def') {
      if (Session::has('purl')) {
        // key exists do nothing
        Session::put('purl', $builturl);
      } else {
        Session::put('purl', $builturl);
      }
    } else {
      // $newbackendlink = $utm_campaign;
      // Session::forget('purl');
    }
  }

  public function contact()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "land/51.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We're always happy to hear from you.", "phonesmall" => "Phone: +0 (000) 000-0000", "safe" => "on"];
    SEOMeta::setTitle('Contact Sage Endeavours | Houston Payday Loan Experts | Get Help Now');
    SEOMeta::setDescription('Need help with your payday loan application? Contact Sage Endeavours in Houston, TX. Our friendly team is here to assist with quick cash advances and answer all your loan questions.');
    SEOMeta::addKeyword('Houston payday loan contact', 'Sage Endeavours contact', 'Houston loan help', 'payday loan customer service Houston', 'Houston cash advance support', 'Texas loan assistance', 'Houston financial help');
    return view('contact', $data);
  }

  public function Privacy()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "land/sage-male7.jpg", "licpr" => "on", "headpg" => "PRIVACY POLICY", "headtxtcolor" => "white", "headphonehide" => "hide", "headalt" => "Sage Endeavours Privacy Policy - Your Privacy is our Priority", "safe" => "on"];
    SEOMeta::setTitle('Sage Endeavours Privacy Policy | Protecting Your Information');
    SEOMeta::setDescription('Learn how Sage Endeavours protects your personal information and maintains your privacy. Read our privacy policy to understand our commitment to your security in Houston, Texas.');
    SEOMeta::addKeyword('Sage Endeavours privacy policy', 'Texas data protection', 'personal information security Houston', 'online loan company privacy policy Texas', 'Houston privacy policy');
    return view('privacy-policy', $data);
  }

  public function welcome()
  {
    $track = $this->tracker();
    $monthMap = [
      'b0' => 'l2',
      'b1' => '23',
      'b2' => '23',
      'b3' => '23',
      'b4' => '15',
      'b5' => '16',
      'b6' => '25',
      'b7' => 'l2',
      'b8' => 'l2',
      'b9' => 'l2',
      'b00' => '10',
      'b01' => '10',
      'b02' => '12',
      'b03' => '12',
      'b04' => '13',
      'b05' => '13',
      'b06' => '17',
      'b07' => '17',
      'b08' => '19',
      'b09' => '19',
      'b10' => 'sage-left1',
      'b11' => 'sage-left1',
      'b12' => 'sage-left1',
      'b13' => 'sage-left1',
      'b14' => '26',
      'b15' => '23',
      'b16' => '26',
      'b17' => '26',
      'b18' => '26',
      'b19' => '26',
      'b20' => '26',
      'b21' => '26',
      'b22' => '26',
      'b23' => '26',
      'b24' => '26',
      'b25' => '26',
      'b26' => '26',
      'b27' => '26',
      'b28' => '26',
      'b29' => '26',
      'b30' => '26',
      'b31' => '26',
    ];
    $today = date("d");
    $b = "b" . $today;
    $monthday = $monthMap[$b];


    // $data = ["bannerbg" => "home-payday-loans.jpg", "licpr" => "bc"];

 if ($this->safe =='basic') {

 $data = ["bannerbg" => "land/farm1.jpg", "headalign" => "text-center", "licpopwarning" => "kwartaloans", "martop" => "15",  "headtxtcolor" => "white", "headpg" => "Where Real Estate & AI Meet Opportunity", "headsub" => "Expertise in Real Estate & AI-Driven Business Solutions", "safe" => "on"];
SEOMeta::setTitle('Sage Endeavours - Empowering Your Investments');
SEOMeta::setDescription('Sage Endeavours offers expert real estate investments, AI-driven business opportunities, strategic acquisitions and divestments, and portfolio management. Contact us to learn more.');
SEOMeta::addKeyword('Real Estate Investments, AI-Driven Business Opportunities, Strategic Acquisitions and Divestments, Portfolio Management, Investment Services, Financial Services, Business Growth, Investment Opportunities');

    } else {


$data = ["bannerbg" => "land/$monthday.jpg", "headalign" => "text-center", "licpopwarning" => "kwartaloans", "martop" => "20",  "headtxtcolor" => "white", "safe" => "on"];
SEOMeta::setTitle('Sage Endeavours | Fast Payday Loans in Houston, Texas | Same Day Approval');
SEOMeta::setDescription('Get fast payday loans in Houston, TX with Sage Endeavours. Quick approval, competitive rates, and same-day funding for Harris County residents. Apply online now for instant cash advances!');
SEOMeta::addKeyword('Houston payday loans', 'fast loans Houston TX', 'same day loans Houston', 'quick cash Houston Texas', 'Houston cash advance', 'payday loans Harris County', 'emergency loans Houston', 'Houston loan approval');

    }


    $u = request()->get('u');
    $newbackendlink = 'https://paydayloan.azurewebsites.net/Public/Reminder?u=' . $u;

    if (empty($u)) {
      return view('welcomehome', $data);
    } else {
      return redirect($newbackendlink);
    }
  }

  public function Key_terms($value = '')
  {
    $track = $this->tracker();
    return view('key-terms');
  }

  public function Sitemap(Request $request)
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "land/sage-fam-6.jpg", "headpg" => "SITEMAP", "headtxtcolor" => "white", "headalign" => "text-right", "headphonehide" => "hide", "safe" => "on"];
    SEOMeta::setTitle('Sage Endeavours Sitemap | Find Your Path to Financial Freedom');
    SEOMeta::setDescription('Navigate our sitemap to find the perfect loan solution for your financial needs. Apply for a personal loan in Texas with our simple online application.');
    SEOMeta::addKeyword('Sage Endeavours sitemap', 'personal loan Texas', 'loan options Texas', 'financial freedom loans Texas', 'online loan applications Texas', 'Sage Endeavours solutions');
    return view('sitemap2', $data);
  }


  public function Education()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "land/sage-left3.jpg", "headtxtcolor" => "white", "licpr" => "on", "spprov" => "Be Informed", "headpg" => "BE INFORMED", "headsub" => "Make the best choice for your financial situation.", "headalign" => "text-center", "martop" => "40", "safe" => "on"];
    SEOMeta::setTitle('Sage Endeavours Education | Understanding Your Options');
    SEOMeta::setDescription('Get informed about loan options, interest rates, and repayment terms in Texas. Learn more about how to apply for a personal loan and make an informed decision.');
    SEOMeta::addKeyword('Sage Endeavours education', 'Sage Endeavours information', 'personal loan options Texas', 'Sage Endeavours resources', 'learn about Sage Endeavours', 'understanding Sage Endeavours');
    return view('education-center', $data);
  }



  public function Faq()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "land/sage-faq.jpg", "martop" => "20", "licpr" => "on", "spprov" => "Be Informed", "headpg" => "FREQUENTLY ASKED QUESTIONS", "headtxtcolor" => "white", "headsub" => "Here are answers to the questions you ask most often", "headphonehide" => "hide", "headalign" => "text-center", "safe" => "on"];
    SEOMeta::setTitle('Sage Endeavours FAQ | Houston Payday Loan Questions Answered');
    SEOMeta::setDescription('Get answers to your payday loan questions in Houston, TX. Our FAQ covers loan requirements, approval process, repayment terms, and everything you need to know about Sage Endeavours loans.');
    SEOMeta::addKeyword('Houston payday loan FAQ', 'Sage Endeavours questions', 'payday loan help Houston', 'Houston cash advance FAQ', 'Texas loan questions', 'Houston financial FAQ', 'payday loan information Houston');
    return view('faq', $data);
  }

  public function Responsible_lending()
  {
    $data = ["bannerbg" => "land/sage-male3.jpg", "licpr" => "on", "headpg" => "WE LEND RESPONSIBLY", "headtxtcolor" => "white", "headphonehide" => "hide", "safe" => "on"];
    SEOMeta::setTitle('Sage Endeavours Responsible Lending | Ethical Payday Loans in Houston, TX');
    SEOMeta::setDescription("Learn about Sage Endeavours' responsible lending practices in Houston, Texas. We're committed to ethical payday loans with transparent terms, fair rates, and borrower protection.");
    SEOMeta::addKeyword('Houston responsible payday loans', 'Sage Endeavours ethical lending', 'Texas responsible cash advances', 'Houston fair loan practices', 'transparent payday loans Texas', 'responsible lending Houston TX');
    return view('responsible_lending', $data);
  }
  public function Terms()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "land/sage-girl4.jpg", "licpr" => "on", "headpg" => "TERMS AND CONDITIONS", "headtxtcolor" => "white", "headphonehide" => "hide", "safe" => "on"];
    SEOMeta::setTitle('Sage Endeavours Terms and Conditions | Houston Payday Loan Agreement');
    SEOMeta::setDescription('Read our terms and conditions for Sage Endeavours payday loans in Houston, TX. Understand your loan agreement, repayment terms, and borrower rights.');
    SEOMeta::addKeyword('Houston payday loan terms', 'Sage Endeavours loan agreement', 'Texas payday loan conditions', 'Houston cash advance terms', 'payday loan contract Houston', 'Houston loan terms and conditions');
    return view('terms-conditions', $data);
  }
  public function borrow_money()
  {
    $data = ["bannerbg" => "images/44.jpg", "licpr" => "on", "headpg" => "YOUR ONLINE MONEY SOURCE", "headtxtcolor" => "white", "martop" => "40"];
    SEOMeta::setTitle('Borrow Money in Texas | Personal Loan Options');
    SEOMeta::setDescription('Borrow money in Texas with our personal loan options. Apply now and get the funds you need quickly and easily.');
    SEOMeta::addKeyword('borrow money Texas', 'Texas personal loans', 'loan options Texas', 'Texas borrowing options', 'need to borrow money Texas', 'Texas loan application');
    return view('borrow-money', $data);
  }
  public function payday_advance()
  {
    $data = ["bannerbg" => "images/48.jpg", "licpr" => "on", "headpg" => "THE INSTANT PAYDAY ADVANCE THAT WORKS", "headtxtcolor" => "white", "martop" => "20"];
    SEOMeta::setTitle('Texas Payday Advance | Get Cash Fast in TX');
    SEOMeta::setDescription('Get a payday advance in Texas and receive cash quickly. Apply online for a fast and easy loan in TX.');
    SEOMeta::addKeyword('Texas payday advance', 'Texas cash advance', 'quick cash Texas', 'fast loan Texas', 'Texas payday loan', 'short term loan Texas');
    return view('payday-advance', $data);
  }
  public function same_day_loans()
  {
    $data = ["bannerbg" => "images/52.jpg", "licpr" => "on", "headpg" => "SAME DAY LOANS", "martop" => "35", "headtxtcolor" => "white"];
    SEOMeta::setTitle('Texas Same Day Loans | Get Cash Today in TX');
    SEOMeta::setDescription('Apply for same day loans in Texas and get cash in your account today. Fast approval and quick funding in TX.');
    SEOMeta::addKeyword('Texas same day loans', 'Texas same day funding', 'quick cash today Texas', 'fast loans today Texas', 'Texas instant cash loans', 'Texas 24 hour loans');
    return view('same-day-loans', $data);
  }
  public function child_tax_loans()
  {
        $data = ["bannerbg" => "images/52.jpg", "licpr" => "on", "headpg" => "Borrow Using Your Child Tax Credit", "martop" => "25", "headtxtcolor" => "white"];
        SEOMeta::setTitle('Texas Child Tax Loans | Borrow Using Your Child Tax Credit');
        SEOMeta::setDescription('Apply for child tax loans in Texas and borrow money using your child tax credit. Fast approval and flexible repayment terms.');
        SEOMeta::addKeyword('Texas child tax loans', 'Texas child tax credit loans', 'borrow with child tax Texas', 'Texas child tax loan options', 'Texas loans using child tax credit', 'Texas child tax financing');
    return view('child-tax-loans', $data);
  }
  public function socialsecuritydisability()
  {
    $data = ["bannerbg" => "images/category-new.jpg", "headpg" => "Social Security Disability Insurance (SSDI)", "headtxtcolor" => "white"];
    SEOMeta::setTitle('Texas Disability Loans | Borrow with Your SSDI Benefits');
    SEOMeta::setDescription('Apply for disability loans in Texas and borrow money using your Social Security Disability Insurance (SSDI) benefits. Fast approval and flexible repayment terms.');
    SEOMeta::addKeyword('Texas disability loans', 'Texas SSDI loans', 'borrow with SSDI Texas', 'Texas disability loan options', 'Texas loans for people with disabilities', 'Texas SSDI benefits loans');
    return view('socialsecuritydisability', $data);
  }
  public function emergency_loans()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "images/55.jpg", "headpg" => "BEST EMERGENCY LOANS", "headtxtcolor" => "white", "martop" => "30"];
    SEOMeta::setTitle('Texas Emergency Loans | Get Cash Fast in a Crisis');
    SEOMeta::setDescription('Apply for emergency loans in Texas and get quick cash in a crisis. Fast approval and same-day funding for unexpected expenses in TX.');
    SEOMeta::addKeyword('Texas emergency loans', 'Texas emergency cash', 'Texas quick loans', 'Texas crisis loans', 'Texas urgent loans', 'Texas fast funding');
    return view('emergency-loans', $data);
  }
  public function ShortTermLoans()
  {
    $data = ["bannerbg" => "images/50.jpg", "headpg" => "SHORT TERM LOANS IN USA", "headtxtcolor" => "white", "martop" => "40"];
    SEOMeta::setTitle('Texas Short Term Loans | Fast Cash for Short-Term Needs');
    SEOMeta::setDescription('Apply for short term loans in Texas and get fast cash for temporary financial needs. Flexible repayment terms and quick approval in TX.');
    SEOMeta::addKeyword('Texas short term loans', 'Texas short term financing', 'Texas quick cash loans', 'Texas temporary loans', 'Texas fast funding loans', 'Texas brief loans');
    return view('short-term-loans-usa', $data);
  }


  public function cash_loans()
  {
    $data = ["bannerbg" => "images/category-new.jpg", "headpg" => "CASH LOANS USA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Texas Cash Loans | Get Fast and Easy Cash Today');
    SEOMeta::setDescription('Apply for cash loans in Texas and get fast and easy cash today. Quick approval and same-day funding for your immediate needs in TX.');
    SEOMeta::addKeyword('Texas cash loans', 'Texas fast cash', 'Texas quick loans', 'Texas easy cash', 'Texas immediate cash', 'Texas same day cash');
    return view('cash-loans', $data);
  }


  public function welcomehome()
  {
    // $data = ["bannerbg" => "home-payday-loans.jpg", "licpr" => "bc"];
    $data = ["bannerbg" => "images/home2.jpg", "headalign" => "text-right", "licpopwarning" => "6hfinancial", "martop" => "35",  "headtxtcolor" => "white", "safe" => "on"];
    SEOMeta::setTitle('Texas Loans | Fast and Reliable Loan Solutions in TX');
    SEOMeta::setDescription('Apply for loans in Texas and get fast and reliable funding solutions. Compare rates and terms from top lenders and get approved today in TX!');
    SEOMeta::addKeyword('Texas loans', 'loans in Texas', 'Texas loan options', 'TX loan solutions', 'fast funding Texas', 'reliable loans Texas');
    return view('welcomehome', $data);
  }
  public function howitsdone()
  {
    $track = $this->tracker();
    $this->safe = "on";
    $data = ["bannerbg" => "land/sage-fam2.jpg",  "headtxtcolor" => "white", "headalign" => "text-center", "headphonehide" => "hide", "headpg" => "MONEY, WHEN YOU NEED IT MOST", "headsub" => "Put your mind at ease when unexpected expenses arise.", "martop" => "20", "safe" => "on"];
    SEOMeta::setTitle("How It's Done in Texas | Simple and Easy Loan Process");
    SEOMeta::setDescription("Learn how our loan process works in Texas and get a clear understanding of what to expect. Simple and easy steps to get the funds you need in TX.");
    SEOMeta::addKeyword("Texas loan process", "how to get a loan in Texas", "Texas easy loans", "simple funding Texas", "Texas loan application process", "get a loan today in Texas");
    return view('howitsdone', $data);
  }
  public function why_choose_us()
  {
    $track = $this->tracker();
    $data = ["bannerbg" => "/land/sage-left6.jpg",  "headtxtcolor" => "white", "martop" => "40", "headalign" => "text-center", "headpg" => "THE SHORT TERM HASSLE-FREE LOAN", "headsub" => "The funds you need when you need them.", "safe" => "on"];
    SEOMeta::setTitle("Why Choose Us in Texas | Trusted Loan Solutions");
    SEOMeta::setDescription("Discover why thousands of Texans choose us for their loan needs. Competitive rates, fast funding, and exceptional customer service in Texas.");
    SEOMeta::addKeyword("why choose us in Texas", "Texas loan benefits", "competitive rates Texas", "fast funding Texas", "exceptional service Texas", "trusted Texas lender");
    return view('why_choose_us', $data);
  }

  public function bad_credit_loans()
  {
    $data = ["bannerbg" => "images/47.jpg", "headpg" => "BAD CREDIT LOANS", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "25", "headsub" => "Get Approved Despite Your Credit History"];
    SEOMeta::setTitle("Bad Credit Loans | Get Approved Today | " . config('app.name'));
    SEOMeta::setDescription("Apply for bad credit loans and get approved today! We offer flexible terms and fast funding for those with poor credit history. No credit discrimination.");
    SEOMeta::addKeyword("bad credit loans", "poor credit loans", "credit score loans", "get a loan with bad credit", "bad credit financing", "loans for bad credit", "no credit check loans");
    return view('bad-credit-loans', $data);
  }
  public function installmen_loans()
  {
    $data = ["bannerbg" => "images/47.jpg", "headpg" => "INSTALLMENT LOANS THAT WORK", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "35"];
    SEOMeta::setTitle("Texas Installment Loans | Flexible Repayment Terms");
    SEOMeta::setDescription("Apply for installment loans in Texas and get flexible repayment terms that fit your budget. Fast funding and affordable monthly payments in TX.");
    SEOMeta::addKeyword("Texas installment loans", "Texas flexible loans", "Texas monthly payment loans", "Texas affordable loans", "Texas long-term loans", "Texas fixed-term loans");
    return view('installmen-loans', $data);
  }

  public function payday_loans_near_me()
  {
    $data = ["bannerbg" => "images/Best-payday-loans-near-you.jpg", "headpg" => "BEST PAYDAY LOANS NEAR ME", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle("Payday Loans in Texas | Fast Cash Today");
    SEOMeta::setDescription("Find payday loans in Texas and get fast cash today! Apply online and get approved in minutes. Convenient locations throughout TX.");
    SEOMeta::addKeyword("Texas payday loans", "payday loans in Texas", "fast cash Texas", "Texas loans near me", "quick cash Texas", "cash advance Texas");
    return view('payday-loans-near-me', $data);
  }

  public function same_day_payday_loans()
  {
    $data = ["bannerbg" => "images/51.jpg", "headpg" => "SAME DAY PAYDAY LOANS", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle("Texas Same Day Payday Loans | Get Cash Today");
    SEOMeta::setDescription("Apply for same day payday loans in Texas and get cash in your account today! Fast approval and instant funding for unexpected expenses in TX.");
    SEOMeta::addKeyword("Texas same day payday loans", "Texas fast cash today", "Texas instant funding loans", "Texas quick same day loans", "Texas emergency cash loans", "Texas same day cash advance");
    return view('same-day-payday-loans', $data);
  }
    public function instant_payday_loans_usa()
  {
    $data = ["bannerbg" => "images/53.jpg", "headpg" => "PAYDAY LOAN USA", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "35"];
    SEOMeta::setTitle("Texas Weekend Payday Loans | Get Cash Saturday & Sunday");
    SEOMeta::setDescription("Apply for weekend payday loans in Texas and get cash Saturday and Sunday! Fast funding and instant approval for unexpected expenses in TX.");
    SEOMeta::addKeyword("Texas weekend payday loans", "Texas Saturday loans", "Texas Sunday loans", "Texas weekend cash advance", "Texas quick weekend funding", "Texas emergency weekend loans");
    return view('payday-loan-usa', $data);
  }
  public function express_loans()
  {
    $data = ["bannerbg" => "images/53.jpg", "headpg" => "BEST EXPRESS LOANS IN USA", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "35"];
    SEOMeta::setTitle("Express Loans Texas | Fast Funding in Minutes");
    SEOMeta::setDescription("Get express loans in Texas with fast funding in minutes! Apply online and receive instant approval for quick cash solutions in TX.");
    SEOMeta::addKeyword("express loans Texas", "Texas fast funding loans", "quick cash loans Texas", "Texas instant approval loans", "rapid funding loans Texas", "Texas fast cash solutions");
    return view('express-loans', $data);
  }
  public function weekend_payday_loans()
  {
    $data = ["bannerbg" => "images/56.jpg", "headpg" => "WEEKEND PAYDAY LOAN ALTERNATIVE", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle("Texas Weekend Payday Loans | Get Cash Saturday & Sunday");
    SEOMeta::setDescription("Apply for weekend payday loans in Texas and get cash Saturday and Sunday! Fast funding and instant approval for unexpected expenses in TX.");
    SEOMeta::addKeyword("Texas weekend payday loans", "Texas Saturday loans", "Texas Sunday loans", "Texas weekend cash advance", "Texas quick weekend funding", "Texas emergency weekend loans");
    return view('weekend-payday-loans', $data);
  }


  public function holiday_vacation_loans()
  {
    $data = ["bannerbg" => "images/holiday-loans.jpg", "headpg" => "BEST HOLLIDAY LOANS IN USA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle("Texas Holiday Loans | Funding for Vacations & Breaks");
    SEOMeta::setDescription("Apply for holiday loans in Texas and fund your dream vacation or break! Fast approval and instant funding for holidays, vacations, and getaways in TX.");
    SEOMeta::addKeyword("Texas holiday loans", "Texas vacation loans", "Texas break loans", "Texas travel funding", "Texas holiday financing", "Texas vacation cash advance");
    return view('holiday-vacation-loans', $data);
  }
  public function fastloansusa()
  {
    $data = ["bannerbg" => "images/fastloans.jpg", "headpg" => "BEST FAST LOANS IN USA", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "30"];
    SEOMeta::setTitle("Fast Loans USA | Quick Cash Solutions");
    SEOMeta::setDescription("Apply for fast loans in the USA and get quick cash solutions! Fast approval and instant funding for unexpected expenses.");
    SEOMeta::addKeyword("fast loans USA", "quick loans USA", "fast cash USA", "instant funding loans USA", "rapid loans USA", "USA fast cash solutions");
    return view('fast-loans-usa', $data);
  }

  public function testVideosImages()
  {
    $data = [
      "bannerbg" => "images/test-banner.jpg",
      "headpg" => "Site Content Test Page",
      "headtxtcolor" => "white",
      "headalign" => "text-center",
      "martop" => "15",
      "headsub" => "Test YouTube Videos and Header Images",
      "headphonehide" => true
    ];
    return view('test-videos-images', $data);
  }

}
