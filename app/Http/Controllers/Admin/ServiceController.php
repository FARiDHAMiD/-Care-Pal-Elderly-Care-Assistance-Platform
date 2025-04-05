<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $data = [
            'page_name' => 'services',
            'page_title' => 'services',
            'services' => $services,
        ];

        return view('admin.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'page_name' => 'services',
            'page_title' => 'services',
        ];
        return view('admin.services.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        $service->addMedia($request->file('service_image'))
            ->toMediaCollection('service_image', 'public');

        session()->flash('alert_message', ['message' => 'The Service has been created successfully', 'icon' => 'success']);
        return redirect()->route('services.index');
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
        $service = Service::find($id);


        // dd($service->getFirstMediaUrl('service_image'));

        $data = [
            'page_name' => 'services',
            'page_title' => 'services',
            'service' => $service,
        ];
        return view('admin.services.edit', $data);
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

        $service = Service::find($id);
        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        if ($request->service_image) {

            $service->clearMediaCollection('service_image');
            $service->addMedia($request->file('service_image'))
                ->toMediaCollection('service_image', 'public');
        }

        session()->flash('alert_message', ['message' => 'The Service has been updated successfully', 'icon' => 'success']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        session()->flash('alert_message', ['message' => 'The service has been deleted successfully', 'icon' => 'success']);
        return redirect()->back();
    }
}
