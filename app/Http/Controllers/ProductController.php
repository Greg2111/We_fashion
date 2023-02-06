<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\AdminController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::where('visibility', 'publié')->latest()->paginate(6);

        return view('products.index')->with('products', $products);
    }

    public function femme()
    {
        $femmes = Product::where('id_cat', '2')->where('visibility', 'publié')->paginate(6);
        return view('products.femmes', compact('femmes'));
    }
    public function homme()
    {

        $hommes = Product::where('id_cat', '1')->where('visibility', 'publié')->paginate(6);
        return view('products.hommes', compact('hommes'));
    }
    public function solde()
    {
        $soldes = Product::where('status', 'en solde')->paginate(6);
        return view('products.soldes', compact('soldes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {


        $image = $request->file('image');

        $filename = Str::uuid()->toString(). "." . $image->getClientOriginalExtension();

        // je precise où l'image s'en va lorsqu'elle est enregistrée
        $image->move(storage_path('app/public/images'), $filename);


        $categories = Category::find($request->input('id_cat'));

        $results = $request->all();
        $product = new Product;
        $product->fill($results);
        $categories->product()->save($product);
        return redirect()->back()
                         ->with('success','Product added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product, $id)
    {
        $request = request();
        $image = $request->file('image');

        $filename = Str::uuid()->toString(). "." . $image->getClientOriginalExtension();

        // je precise où l'image s'en va lorsqu'elle est enregistrée
        $image->move(storage_path('app/public/images/hommes'), $filename);

        $product = Product::FindOrFail($id);
        
        $categories = Category::find($request->input('id_cat'));

        $results = $request->all();
        $product->fill($results);
        $categories->product()->save($product);


        return redirect()->back()
                        ->with('success','le produit à bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()
                        ->with('success','le produit à bien été supprimer');
    }
}
