<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\OfferRequest;
use App\Http\Controllers\Controller;
use App\Offer;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('offers.index');
    }

    public function confirm(OfferRequest $request)
    {
        $offer = new Offer($request->all());
        

    return view('offers.confirm',compact('offer'));    
    }

    
    public function complete(OfferRequest $request)
    {
        $input = $request->except('action');

        if ($request->action === '戻る') {
            return redirect()->action('OfferController@index')->
            withInput($input);
        }

        Offer::create($request->all());

        $request->session()->session_regenerateToken();

        return view('offers.complete');
    }

}    

