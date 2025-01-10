<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Slider;
use App\Models\Header;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function index() {

        $slider = Slider::where('status','1')->first();
        $about = About::where('status','1')->first();
        $skills = Skill::where('status','1')->first();
        
        return view('frontend.pages.index', compact('slider','about','skills'));
    }

}
