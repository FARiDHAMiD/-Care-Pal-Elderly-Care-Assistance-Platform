<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        $data = [
            'page_name' => 'jobs',
            'page_title' => 'Jobs',
            'jobs' => $jobs,
        ];
        return view('admin.jobs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $caregivers = User::whereRoleIs('caregiver')->get();
        $job = Job::find($id);
        $data = [
            'page_title' => 'jobs',
            'job' => $job,
            'caregivers' => $caregivers,
        ];


        return view('admin.jobs.edit', $data);
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
        $job = Job::find($id);
        $job->update([
            'status' => $request->status,
        ]);
        $job->caregivers()->sync($request->caregivers);
        session()->flash('alert_message', ['message' => 'Job Request Updated Successfully', 'icon' => 'success']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        session()->flash('alert_message', ['message' => 'Job request has been deleted successfully', 'icon' => 'success']);
        return redirect()->route('jobs.index');
    }
}
