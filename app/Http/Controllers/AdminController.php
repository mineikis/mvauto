<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Automobilis;
use LaravelLocalization;
use Carbon\Carbon;
use File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        LaravelLocalization::setLocale('lt');
        $aktyvus = Automobilis::visiAktyvus();

        return View::make('/admin', compact('aktyvus'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Automobilis::find($id);
        $auto->aktyvus = false;
        $auto->pardavimo_data = new Carbon();
        $auto->save();
        
        $directory = public_path().'/images/'.$id;
        $success = File::deleteDirectory($directory);
        return redirect()->intended('admin');
    }
    public function grizoILietuva($id)
    {
        $auto = Automobilis::find($id);
        $auto->greitai = false;
        $auto->save();

        return redirect()->intended('admin');
    }
}
