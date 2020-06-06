<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::table('product')
                ->join('category', 'id_category', '=', 'category.id')
                ->join('cashier', 'id_cashier', '=', 'cashier.id')
                ->select('product.id','product.name', 'product.price', 'category.name AS Category','cashier.name AS Cashier')
                ->get();
        
        return view('home',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = DB::table('category')->get();
        $cas = DB::table('cashier')->get();
        return view('create',['cat'=>$cat,'cas'=>$cas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array([
            'name'=>$request->name,
            'price'=>$request->price,
            'id_category'=>$request->id_category,
            'id_cashier'=>$request->id_cashier
        ]);
        DB::table('product')->insert($data);

        return redirect()->route('main.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = DB::table('category')->get();
        $cas = DB::table('cashier')->get();
        $data = DB::table('product')->where('id',$id)->first(); 
        return view('edit',compact('cat','cas','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DB::table('product')->where('id',$id)->first();
        $input = $request->except(['_token','_method']);
        DB::table('product')->where('id', $id)->update($input);
        
        return redirect()->route('main.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('product')->where('id',$id)->delete();
        return redirect()->route('main.index');
    }
}
