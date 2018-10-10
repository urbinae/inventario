<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:products.create')->only(['create', 'store']);
        $this->middleware('permission:products.index')->only('index');
        $this->middleware('permission:products.edit')->only(['edit', 'update']);
        $this->middleware('permission:products.show')->only('show');
        $this->middleware('permission:products.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        //dd($products[0]->category);
        return view('products.index', compact('products'));
        //para la api
        /*
        $products = Product::all();
        return $products;
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $this->create_slug($request->input('name'));
        $product->visible = 1;
        $product->category_id = $request->input('category_id');
        
        if($product->save()){  
            return redirect()->route('products.index')->with('info', 'Producto guardado con éxito');
        }
        else{
            return redirect()->route('products')->with('info', 'El Producto no se guardó');
        }

        //para la api
        /*
        $product = Product::create($request->all());
        return $product;
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.edit', $product->id)->with('info', 'Producto actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('info', 'Producto eliminado correctamente');
    }

    private function create_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/','-',$string);
        $slug = strtolower($slug);
        return $slug;
    }
}
