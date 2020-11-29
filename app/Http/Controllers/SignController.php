<?php

namespace App\Http\Controllers;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Models\Sign;
use Illuminate\Http\Request;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sign = Sign::all();
        return view('signs.index',compact('sign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $signId
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        
        
        $sign = Sign::find($id);
        return view('signs.show',compact('sign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sign  $sign
     * @return \Illuminate\Http\Response
     */
    public function edit(Sign $sign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sign  $sign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sign $sign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sign  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $sign)
    {
        //
    }
}
