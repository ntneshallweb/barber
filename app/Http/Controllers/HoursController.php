<?php

namespace App\Http\Controllers;

use App\Models\Hours;
use Illuminate\Http\Request;

class HoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = Hours::latest()->paginate(15);
        return view('admin.hours.index',compact('hours'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hours.create');
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
            'day' => "required",
        ]);
        Hours::create($request->all());
   
        return redirect('admin/hours/index')
                        ->with('success','Hours created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hours  $Hours
     * @return \Illuminate\Http\Response
     */
    public function show(Hours $Hours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hours  $Hours
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hours = Hours::find($id);
        return view('admin.hours.edit', compact('hours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hours  $Hours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'day' => "required",
        ]);
        $updateData = Hours::find($id);
        $updateData->day = $request->day;
        $updateData->starttime = $request->starttime;
        $updateData->endtime = $request->endtime;
        $updateData->save();

        return redirect('admin/hours/index')
            ->with('success', 'Hours updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hours  $Hours
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Hours::find($id);
        $deleteProduct->delete();
        return redirect('admin/hours/index')
            ->with('success', 'Hours deleted successfully');
    }
}
