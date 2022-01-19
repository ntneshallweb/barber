<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quotes::latest()->paginate(15);
        return view('admin.quotes.index',compact('quotes'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quotes.create');
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
            'img'       => 'required',
            'description' => 'required',
        ]);
        $fileName = '';
        if ( $request->img ) {
            $fileName = time().'.'.$request->img->extension();  
            $request->img->move(public_path('uploads'), $fileName);
        }
        Quotes::create(array_merge($request->all(), ['image' => $fileName]));
   
        return redirect('admin/quotes/index')
                        ->with('success','Quotes created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(Quotes $quotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quotes = Quotes::find($id);
        return view('admin.quotes.edit', compact('quotes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'description' => 'required',
        ]);
        $updateData = Quotes::find($id);
        $fileName = '';
        if ( $request->img ) {
            $fileName = time().'.'.$request->img->extension();  
            $request->img->move(public_path('uploads'), $fileName);
        }
        if( ! empty( $fileName ) ) {
            $updateData->image = $fileName;
        }
        $updateData->author = $request->author;
        $updateData->description = $request->description;
        $updateData->save();

        return redirect('admin/quotes/index')
            ->with('success', 'Quotes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Quotes::find($id);
        $deleteProduct->delete();
        return redirect('admin/quotes/index')
            ->with('success', 'Quotes deleted successfully');
    }
}
