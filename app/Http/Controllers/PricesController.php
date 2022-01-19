<?php

namespace App\Http\Controllers;

use App\Models\Prices;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Prices::latest()->paginate(15);
        return view('admin.prices.index',compact('prices'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prices.create');
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
            'title' => "required",
            'description' => "required",
            'price' => "required",
            'type' => "required",
        ]);
        Prices::create($request->all());
   
        return redirect('admin/prices/index')
                        ->with('success','Prices created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prices  $Prices
     * @return \Illuminate\Http\Response
     */
    public function show(Prices $Prices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prices  $Prices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prices = Prices::find($id);
        return view('admin.prices.edit', compact('prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prices  $Prices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title' => "required",
            'description' => "required",
            'price' => "required",
            'type' => "required",
        ]);
        $updateData = Prices::find($id);
        $updateData->title = $request->title;
        $updateData->price = $request->price;
        $updateData->description = $request->description;
        $updateData->type = $request->type;
        $updateData->save();

        return redirect('admin/prices/index')
            ->with('success', 'Prices updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prices  $Prices
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Prices::find($id);
        $deleteProduct->delete();
        return redirect('admin/prices/index')
            ->with('success', 'Prices deleted successfully');
    }
}
