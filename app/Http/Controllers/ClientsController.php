<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::latest()->paginate(15);
        return view('admin.clients.index',compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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
            // 'title'      => 'required',
            // 'description' => 'required',
        ]);
        if ( $request->file('image') ) {
            $name = time().'.'.$request->file('image')->extension();
            $request->file('image')->move(public_path('uploads'), $name);  
        }
        /*if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                if ( $file ) {
                    $name = time().'.'.$file->extension();
                    $file->move(public_path('uploads'), $name);  
                    $files[] = $name;
                }
            }
        }*/
        Clients::create(array_merge($request->all(), ['image' => $name]));
   
        return redirect('admin/clients/index')
                        ->with('success','Clients created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Clients::find($id);
        return view('admin.clients.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'title'      => 'required',
            // 'descripton' => 'required',
        ]);
        $updateData = Clients::find($id);
        $fileName = '';
        $fileNames = array();
        if ( $request->image ) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads'), $fileName);
            $updateData->image = $fileName;
        }
        /*if ( $request->image ) {
            for ($i=0; $i < sizeof($request->image) ; $i++) { 
                if ( $request->image[$i] ) {
                    $fileName = time().rand(1,100).'.'.$request->image[$i]->extension();  
                    $request->image[$i]->move(public_path('uploads'), $fileName);
                    $fileNames[] = $fileName;
                }
            }
        } */
        // $updateData->descripton = $request->descripton;
        $updateData->save();

        return redirect('admin/clients/index')
            ->with('success', 'Clients updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteProduct = Clients::find($id);
        $deleteProduct->delete();
        return redirect('admin/clients/index')
            ->with('success', 'Clients deleted successfully');
    }
}
