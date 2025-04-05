<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Caregiver;
use App\Models\User;

class CaregiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caregivers = User::whereRoleIs('caregiver')->latest();
        $data = [
            'page_name' => 'caregivers',
            'page_title' => 'caregivers',
            'caregivers' => $caregivers->get(),
        ];
        return view('admin.caregivers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'page_name' => 'caregivers',
            'page_title' => 'Create Caregiver',
        ];
        return view('admin.caregivers.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $user =  User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        $user->attachRole('caregiver');

        Caregiver::create([
            'user_id' => $user->id,
            'gender' => $request->gender,
            'location' => $request->location,
            'date_of_birth' => $request->date_of_birth,
            'hourly_rate' => $request->hourly_rate,
            'avalability' => $request->avalability,
            'experience_years' => $request->experience_years,
            'certifications' => $request->certifications,
            'bio' => $request->bio,
        ]);

        session()->flash('alert_message', ['message' => 'Request Submitted Successfully, we will contact you back, Thanks!', 'icon' => 'success']);
        return redirect()->back();
    }

    function activate($id)
    {
        $user = User::find($id);
        $user->caregiver->update([
            'active' => 1,
        ]);
        session()->flash('alert_message', ['message' => 'Caregiver Activated Successfully!', 'icon' => 'success']);
        return redirect()->back();
    }

    function deactivate($id)
    {
        $user = User::find($id);
        $user->caregiver->update([
            'active' => 0,
        ]);
        session()->flash('alert_message', ['message' => 'Caregiver Deactivated Successfully!', 'icon' => 'success']);
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
