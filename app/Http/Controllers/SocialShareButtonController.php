<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Models\Admin\Slider;
use App\Models\Admin\Teacher;
use App\Models\Admin\Department;
use App\Models\Admin\Location;
use App\Models\Admin\Staff;
use App\Models\Admin\Notice;
use App\Models\Admin\News;
use App\Models\Admin\campusmale;
use App\Models\Admin\campusfemale;
use App\Models\Admin\about;
use App\Models\Admin\more;
use App\Models\Admin\onlineclass;
use App\Models\beteacher;
use App\Models\Division;
use App\Models\District;
use Session;
use DB;
use Toastr;
use Share;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class SocialShareButtonController extends Controller
{
    public function shareWidgate(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['more'] = more::first();
        $data['shareComponent'] = Share::page('https://www.dtmqa.org/')
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram();

        return view('frontend.Be-Part-of-Us', $data);
    }

}
