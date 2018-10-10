<?php

namespace App\Http\Controllers;

use App\Provider;
use App\DocumentType;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $providers = Provider::paginate();
         //dd($providers[0]->typedoc);
         return view('providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents = DocumentType::pluck('name', 'id');
        return view('providers.create', compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->name = $request->input('name');
        $provider->document = $request->input('document');
        $provider->document_id = $request->input('document_id');
        $provider->address = $request->input('address');
        $provider->phone = $request->input('phone');
        $provider->email = $request->input('email');
        $provider->banck = $request->input('banck');
        $provider->acount = $request->input('acount');
        if($provider->save()){  
            return redirect()->route('providers.index')->with('info', 'Proveedor guardado con éxito');
        }
        else{
            return redirect()->route('providers.index')->with('info', 'El proveedor no se guardó');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        return view('providers.show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        $documents = DocumentType::pluck('name', 'id');
        return view('providers.edit', compact('documents', 'provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.edit', $provider->id)->with('info', 'Proveedor actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return back()->with('info', 'Proveedor eliminado correctamente');
    }
}
