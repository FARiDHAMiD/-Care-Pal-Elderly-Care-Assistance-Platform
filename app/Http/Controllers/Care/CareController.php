<?php

namespace App\Http\Controllers\Care;

use App\Http\Controllers\Controller;
use App\Models\Caregiver;
use App\Models\Client;
use App\Models\Job;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class CareController extends Controller
{

    public function index()
    {
        $data = [
            'page_title' => 'Egy Devs'
        ];
        return view('care.index', $data);
    }

    public function about()
    {
        $data = [
            'page_title' => 'About Us'
        ];
        return view('care.about', $data);
    }

    public function contact()
    {
        $data = [
            'page_title' => 'Conatct Us'
        ];
        return view('care.contact', $data);
    }

    public function services()
    {
        $services = Service::all();
        $data = [
            'page_title' => 'Services',
            'services' => $services,
        ];
        return view('care.services', $data);
    }

    public function staff()
    {
        $data = [
            'page_title' => 'Caring Staff'
        ];
        return view('care.staff', $data);
    }

    public function staff_profile($id)
    {
        $user = User::find($id);
        $data = [
            'page_title' => 'Staff Profile',
            'user' => $user
        ];
        return view('care.staff_profile', $data);
    }

    public function staff_profile_edit()
    {
        $user = auth()->user();
        $profile = $user->caregiver;
        $data = [
            'page_title' => 'Edit Profile',
            'user' => $user,
            'profile' => $profile,
        ];
        return view('care.staff_profile_edit', $data);
    }

    public function staff_profile_update(Request $request)
    {
        $user = auth()->user();
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $user->caregiver->update([
            'title' => $request->title,
            'gender' => $request->gender,
            'location' => $request->location,
            'date_of_birth' => $request->date_of_birth,
            'experience_years' => $request->experience_years,
            'hourly_rate' => $request->hourly_rate,
            'availability' => $request->availability,
            'certifications' => $request->certifications,
            'bio' => $request->bio,
        ]);
        session()->flash('alert_message', ['message' => 'Profile updated successfully', 'icon' => 'success']);
        return redirect()->back();
    }

    public function profile()
    {
        $user = auth()->user();
        $jobs = $user->client->jobs;
        // dd($jobs);
        $data = [
            'page_title' => 'Profile',
            'user' => $user,
            'jobs' => $jobs,
        ];

        return view('care.profile', $data);
    }


    public function profile_update(Request $request)
    {
        $client = auth()->user();
        User::find($client->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        Client::where('user_id', $client->id)->update([
            'address' => $request->address,
            'requirements' => $request->requirements,
        ]);

        session()->flash('alert_message', ['message' => 'Profile Updated successfully', 'icon' => 'success']);
        return redirect()->back();
    }

    public function request_service()
    {
        $services = Service::all();
        $data = [
            'page_title' => 'Service Request',
            'services' => $services
        ];
        return view('care.request_service', $data);
    }

    public function request_service_store(Request $request)
    {
        // dd($request->services);
        $job = Job::create([
            'client_id' => auth()->user()->client->id,
            'title' => 'title',
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'status' => 'open'
        ]);
        $job->services()->sync($request->services);

        session()->flash('alert_message', ['message' => 'Request Submitted Successfully, we will contact you back, Thanks!', 'icon' => 'success']);
        return redirect()->back();
    }

    public function request_join()
    {
        $user = auth()->user();

        $data = [
            'page_title' => 'Join Staff',
            'user' => $user,
        ];

        return view('care.request_join', $data);
    }

    public function request_join_store(Request $request)
    {
        $user = auth()->user();

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $user->detachRole('client');
        $user->attachRole('caregiver');

        Caregiver::create([
            'user_id' => $user->id,
            'gender' => $request->gender,
            'location' => $request->location,
            'date_of_birth' => $request->date_of_birth,
            'hourly_rate' => $request->hourly_rate,
            'availability' => $request->availability,
            'experience_years' => $request->experience_years,
            'certifications' => $request->certifications,
            'bio' => $request->bio,
        ]);

        session()->flash('alert_message', ['message' => 'Request Submitted Successfully, we will contact you back, Thanks!', 'icon' => 'success']);
        return redirect()->back();
    }
}
