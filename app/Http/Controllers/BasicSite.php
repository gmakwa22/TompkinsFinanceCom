<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Session;
use Auth;

class BasicSite extends Controller
{

public function farmequipment()
  {
    $data = ["bannerbg" => "unitedstates/nevada.jpg", "headpg" => "Unlock Fast Cash in Nevada Today!", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "25"];
SEOMeta::setTitle('Quick Loans Nevada - Get Fast Cash Advance in NV');
SEOMeta::setDescription('Get quick loans in Nevada with our fast and secure online application process. Receive cash advance in NV within 24 hours. Apply now and get approved today!');
SEOMeta::addKeyword('Nevada loans', 'quick loans NV', 'cash advance Nevada', 'fast loans Nevada', 'online loans NV', 'same day loans Nevada', 'Nevada payday loans', 'short term loans NV');
    return view('basicsite.farmequipment', $data);
  }  


}
