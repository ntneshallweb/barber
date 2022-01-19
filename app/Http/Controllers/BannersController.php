<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banners::find(1);
        return view('admin.banners.index',compact('banner'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'description' => 'required',
        ]);
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                if ( $file ) {
                    $name = time().'.'.$file->extension();
                    $file->move(public_path('uploads'), $name);  
                    $files[] = $name;
                }
            }
        }
        Banners::create(array_merge($request->all(), ['images' => implode(", ",$files)]));
   
        return redirect('admin/banners/index')
                        ->with('success','Banner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banners $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banners::find($id);
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banners  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'      => 'required',
            'description' => 'required',
        ]);
        $updateData = Banners::find($id);
        $fileName = '';
        $fileNames = array();
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
            $updateData->image = implode(", ",$fileNames);    
        }
        $updateData->description = $request->description;
        $updateData->sub_title = $request->subtitle;
        $updateData->save();

        return redirect('admin/banners/index')
            ->with('success', 'Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Banners::find($id);
        $deleteProduct->delete();
        return redirect('admin/banners/index')
            ->with('success', 'Banner deleted successfully');
    }
}
