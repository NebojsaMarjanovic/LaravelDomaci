<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grad;
use DB;

class GradoviController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $grads = Grad::all();

        return view('gradovi.index')->with('gradovi',$grads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gradovi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'naziv'=>'required',
            'drzava'=>'required',
            'naseljenost'=>'required',
            'opis'=>'required',
            'valuta'=>'required',

     ]);

        $g = new Grad();
        $g->naziv = $request->input('naziv');
        $g->drzava = $request->input('drzava');
        $g->naseljenost = $request->input('naseljenost');
        $g->opis = $request->input('opis');
        $g->valuta = $request->input('valuta');
        $g->save();

        return redirect('/gradovi')->with('success','Grad je kreirana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $grad = Grad::find($id);
         if(is_null($grad))
         {
             return response()->json('Grad nije pronadjen',404);
        }
         return view('gradovi.show')->with('grad',$grad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $grad = Grad::find($id);
        return view('gradovi.edit')->with('grad',$grad);
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

       $grad = grad::find($id);
        $grad->naziv = $request->input('naziv');
        $grad->drzava = $request->input('drzava');
        $grad->naseljenost = $request->input('naseljenost');
        $grad->opis = $request->input('opis');
        $grad->valuta = $request->input('valuta');
         $grad->save();

        return redirect('/gradovi')->with('success','Grad je uspesno izmenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grad = Grad::find($id);
        $grad->delete();
        return redirect('/gradovi')->with('success','Grad je uspesno izbrisan!');
    }
}
