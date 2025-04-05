<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUS;
use App\Models\ApplicationStatu;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Carbon\Carbon;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    

    function index() {
        $data = [];
        return view('admin.home', $data);
    }

    public function about_us()
    {
        $aboutSection = AboutUS::firstOrCreate(
            [],  // Conditions to find the record
            ['phone' => '01015891836']   // Attributes to create if not found
        );
        $data = [
            'page_name' => 'About_Company_social',
            'page_title' => 'about_company_social',
            'aboutSection' => $aboutSection,
        ];
        return view('admin.about_us', $data);
    }

    public function contact_us()
    {
        if (Auth::user() && Auth::user()->hasRole('admin')) {
            return redirect()->back();
        } else {
            return view('');
        }
    }
}
