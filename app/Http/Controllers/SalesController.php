<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SalesController;
use Illuminate\Http\Request;
use App\Models\Sale;


class SalesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale = Sale::all();
        return $sale;
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->name_seller = $request->name_seller;
        $sale->name_client = $request->name_client;
        $sale->name_product = $request->name_product;
        $sale->price = $request->price;
        $sale->date = $request->date;
        $sale->save();
        return $sale;
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return $sale;
    }

}