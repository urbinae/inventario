<?php

namespace App\Http\Controllers;

use App\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('permission:lotes.create')->only(['create', 'store']);
        $this->middleware('permission:lotes.index')->only('index');
        $this->middleware('permission:lotes.edit')->only(['edit', 'update']);
        $this->middleware('permission:lotes.show')->only('show');
        $this->middleware('permission:lotes.destroy')->only('destroy');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = Lote::paginate();
        return view('lotes.index', compact('lotes'));
        //obtener articulos y categorias
        /*$categorias = Categoria::with('articulos')->get();
        return view('...', compact('categorias'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lote = new Lote();
        $lote->name = $request->input('name');
        $lote->slug = $this->create_slug($request->input('name'));
        
        if($lote->save()){  
            return redirect()->route('lotes.edit', $lote->id)->with('info', 'lote guardada con éxito');
        }
        else{
            return redirect()->route('lotes')->with('info', 'La lote no se guardó');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function show(Lote $lote)
    {
        return view('lotes.show', compact('lote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit(Lote $lote)
    {
        return view('lotes.edit', compact('lote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lote $lote)
    {
        $lote->update($request->all());
        return redirect()->route('lotes.edit', $lote->id)->with('info', 'Lote actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lote $lote)
    {
        $lote->delete();
        return back()->with('info', 'Lote eliminado correctamente');
    }

    private function create_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/','-',$string);
        $slug = strtolower($slug);
        return $slug;
    }
}
