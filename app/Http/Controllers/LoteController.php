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
        $title = "Lotes";
        return view('lotes.index', compact('lotes', 'title'));
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
        $title = "Nuevo Lote/Flete";
        return view('lotes.create', compact('title'));
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
        $lote->costo_fijo_usd = $request->input('costo_fijo_usd');
        $lote->costo_variable_usd = $request->input('costo_variable_usd');
        // $lote->costo_fijo_bs = 0;//$request->input('costo_fijo_bs');
        // $lote->costo_variable_bs = 0;//$request->input('costo_fijo_bs');
        // $lote->costo_fijo_cop = 0;//$request->input('costo_fijo_cop');
        // $lote->costo_variable_cop = 0;//$request->input('costo_fijo_cop');
        $lote->status = 1;
        $lote->slug = $this->create_slug($request->input('name'));

        if ($lote->save()) {
            return redirect()->route('lotes.edit', $lote->id)->with('info', 'lote guardada con éxito');
        } else {
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
        $title = "Lote/Flete";
        return view('lotes.show', compact('lote', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit(Lote $lote)
    {
        $title = "Modificar Lote";
        return view('lotes.edit', compact('lote', 'title'));
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
        return redirect()->route('lotes.show', $lote->id)->with('info', 'Lote actualizado con éxito');
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
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        $slug = strtolower($slug);
        return $slug;
    }
}
