<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::latest()->paginate(15);
        return view('admin.service.index',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'icon'        => 'required',
            'title'       => 'required',
            'description' => 'required',
        ]);
        $fileName = '';
        if ( $request->icon ) {
            $fileName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('uploads'), $fileName);
        }
        Services::create(array_merge($request->all(), ['icon' => $fileName]));
   
        return redirect('admin/service/index')
                        ->with('success','Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);
        $updateData = Services::find($id);
        $fileName = '';
        if ( $request->icon ) {
            $fileName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('uploads'), $fileName);
        }
        $updateData->icon = $request->icon;
        $updateData->title = $request->title;
        $updateData->description = $request->description;
        $updateData->save();

        return redirect('admin/service/index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Services::find($id);
        $deleteProduct->delete();
        return redirect('admin/service/index')
            ->with('success', 'Service deleted successfully');
    }
}
