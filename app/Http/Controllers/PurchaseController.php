<?php

namespace App\Http\Controllers;

use App\Lote;
use App\Purchase;
use App\Product;
use App\Provider;
use App\Stock;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::paginate();
        $lotes = Lote::paginate();
        return view('purchases.index', compact('purchases', 'lotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::pluck('name', 'id');
        $providers = Provider::pluck('name', 'id');
        $lotes = Lote::pluck('name', 'id');
        return view('purchases.create', compact('products', 'providers', 'lotes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new Purchase();        
        $purchase->product_id = $request->input('product_id');
        $purchase->provider_id = $request->input('provider_id');
        $purchase->lote_id = $request->input('lote_id');
        $purchase->price = $request->input('price');
        $purchase->cant = $request->input('cant');
        $purchase->cost = (double)$request->get('cant') * (double)$request->get('price');
        $purchase->unity = $request->input('unity');
        //actualizar stock: revisar almacén del producto
        $product = Product::find($request->input('product_id'));
        $store = $product->stock;
        //dd($store);
        if (is_null($store)) {
            //dd('null');
            $store = new Stock();
            $store->product_id = $request->input('product_id');
            $store->stock = 0;
            $store->save();
        }
        $stock = $store->stock;
        //dd($stock);
        $stock = $stock + (double)$request->input('cant');
        //dd($stock);
        $purchase->stock = $stock;
        //dd($purchase->stock);
        $store->stock = $stock;
        //dd($store);
        $store->update();
        if($purchase->save()){  
            return redirect()->route('purchases.index')->with('info', 'Ingreso guardado con éxito');
        }
        else{
            return redirect()->route('purchases')->with('info', 'El Ingreso no se guardó');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
