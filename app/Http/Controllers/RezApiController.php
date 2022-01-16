<?php

namespace App\Http\Controllers;
use App\Models\Rezervacija;
use App\Http\Resources\RezResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RezApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rezervacija::all();

    }
    public function create()
    {
        return view('api.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervacija $rez)
    {
        return new RezResource($rez);

    }
    public function store(Request $request)
    {

        $r = new Rezervacija();
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->email = $request->input('email');
        $r->destinacija = $request->input('destinacija');
        $r->polazak = $request->input('polazak');
        $r->povatak = $request->input('povatak');
        $r->napomena = $request->input('napomena');
        $r->brPutnika = $request->input('brPutnika');
        $r->user_id = $request->input('user_id');
        $r->grad_id = $request->input('grad_id');
        $success= $r->save();
        return [
                 'success' => $success
            ];
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rez = Rezervacija::find($id);
        return view('api.edit')->with('rez',$rez);
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

        $rez = Rezervacija::find($id);
        $success= $rez->update($request->all());
        return [
             'success' => $success
        ];
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
           $rez = Rezervacija::find($id);
        $success = $rez->destroy($id);

        return [
            'success' => $success
        ];
    }
    public function search($destinacija)
    {
        //vraca sve one kojima se negde destinaciji nalazi neki od proslednog stringa-u, nalazi proslednjeni string
        //ovo je klasicna pretraga
         return Rezervacija::where('destinacija','like','%'.$destinacija.'%')->get();
    }
}
