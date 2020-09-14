<?php

namespace App\Http\Controllers;

use App\Product;
use App\Entry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Entry::all();



        return view('products.index',compact('products'));
    }

    public function favorite(Product $product)
    {
        $user = Auth::user();

        if ($user->hasFavorited($product)) {
            $user->unfavorite($product);
        } else {
            $user->favorite($product);
        }

        return redirect()->route('products.show', $product);
    }

    public function create()
    {

        $areas = Entry::$areas;
        $ages = Entry::$ages;
        $types = Entry::$types;        
        
        return view('products.create',compact('areas','ages','types'));
    }


    public function store(Request $request)
    {
        
        $product = new Product();
        $product->name = $request->input('name');
        $product->tel = $request->input('tel');
        $product->email = $request->input('email');
        $product->area = $request->input('area');
        $product->age = $request->input('age');
        $product->type = $request->input('type');
        $product->image = $request->input('image');
        $product->hp = $request->input('hp');
        $product->body = $request->input('body');
        $product->entry_id = $request->input('entry_id');
 
        $product->save();

        return redirect()->route('products.show', ['id' => $product->id]);
    }
    
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
         $entries = Entry::all();

        return view('products.edit', compact('product', 'entries'));
    }

  
    public function update(Request $request, Product $product)
    {
        $product->name = $request->input('name');
        $product->tel = $request->input('tel');
        $product->email = $request->input('email');
        $product->area = $request->input('area');
        $product->age = $request->input('age');
        $product->type = $request->input('type');
        $product->image = $request->input('image');
        $product->hp = $request->input('hp');
        $product->body = $request->input('body');
        $product->entry_id = $request->input('entry_id');
        $product->update();

        return redirect()->route('products.show',['id' => $product->id]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
