<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCipoHirdetesRequest;
use App\Models\CipoHirdetes;
use Illuminate\Http\Request;
use function Sodium\add;

class CipoHirdetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cipohirdetes.index", [
            "cipok" => CipoHirdetes::all(),
            "title" => "Cipők"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cipohirdetesek.create", [
            "title" => "Új cipő felvétele",
            $cipok = CipoHirdetes::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCipoHirdetesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCipoHirdetesRequest $request)
    {
        $dataFiltered = $request->validated();
        $cipok = CipoHirdetes::created($dataFiltered);
        return redirect()->route("cipohirdetesek.show",["id" => $cipok->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cipok = CipoHirdetes::findOrFail($id);
        return view('cipohirdetesek.show',[
            "title" => "{$cipok->nev} nevű cipő",
            "cipok" => $cipok
        ]);
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
        //
    }
}
