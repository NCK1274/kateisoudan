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
        // 作成した全ての企業を表示するアクション
        $products = Product::all();
        // 全てのデータを変数に代入

        return view('products.index',compact('products'));
        // productsディレクトリのindex.bladeに渡す
        // 第二引数はコントローラー内の変数をビューに渡す
    }

        // マイページのお気に入り
    public function favorite(Product $product)
    {
        $user = Auth::user();
        // 現在のユーザー情報を取得

        if ($user->hasFavorited($product)) {        //条件
        // お気に入りかどうかのチェック    
            $user->unfavorite($product);            //真であれば実行
        } else {
            $user->favorite($product);              //偽であれば実行
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
        

        // idを渡す
        // $pro Product.new();

        // // 問い合わせる
        // $id =$request['product']['id']

        // // 受けわたす
        // $product = $pro->all($id);

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
