<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $about = Abouts::find(1);
        return view('admin.abouts.index',compact('about'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'title'      => 'required',
            'content' => 'required',
        ]);
        $fileNames = array();
        $fileNames2 = array();
        if ( $request->images ) {
            for ($i=0; $i < sizeof($request->images) ; $i++) { 
                if ( $request->images[$i] ) {
                    $fileName = time().rand(1,100).'.'.$request->images[$i]->extension();  
                    $request->images[$i]->move(public_path('uploads'), $fileName);
                    $fileNames[] = $fileName;
                }
            }
        } 
        Abouts::create(array_merge($request->all(), ['images' => implode(", ",$files)]));
   
        return redirect('admin/abouts/index')
                        ->with('success','About created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abouts  $about
     * @return \Illuminate\Http\Response
     */
    public function show(Abouts $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abouts  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = Abouts::find($id);
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abouts  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'      => 'required',
            'content' => 'required',
        ]);
        $updateData = Abouts::find($id);
        $fileName = '';
        $fileNames = array();
        $fileNames2 = array();
        if ( $request->images ) {
            for ($i=0; $i < sizeof($request->images) ; $i++) { 
                if ( $request->images[$i] ) {
                    $fileName = time().rand(1,100).'.'.$request->images[$i]->extension();  
                    $request->images[$i]->move(public_path('uploads'), $fileName);
                    $fileNames[] = $fileName;
                }
            }
        } 
        
        $updateData->title = $request->title;
        if ( ! empty( $fileNames ) ) {
            $updateData->images = implode(", ",$fileNames);    
        }
        $updateData->content = $request->content;
        $updateData->save();

        return redirect('admin/abouts/index')
            ->with('success', 'About updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abouts  $about
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Abouts::find($id);
        $deleteProduct->delete();
        return redirect('admin/abouts/index')
            ->with('success', 'About deleted successfully');
    }
}
