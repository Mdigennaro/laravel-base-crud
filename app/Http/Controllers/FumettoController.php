<?php

namespace App\Http\Controllers;

use App\Fumetto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $listaFumetti = Fumetto::/*orderBy('id', 'desc')->*/paginate(6);

        return view('fumettos.index', compact('listaFumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumettos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /* $request->validDate(
            [
                'titolo'=>'required|max:50|min:2',
                'description'=>'required|min:5'
            ],
            [
                'titolo.required'=>'Il titolo è obbligatorio',
                'titolo.max'=>'Il titolo può essere lungo massimo 50 caratteri',
                'titolo.min'=>'Il titolo deve avere almeno 2 caratteri'
            ],
            [
                'description.required'=>'Inserisci una descrizione',
                'description.min'=>'La descrizione deve avere più di cinque caratteri',
            ],
        );*/

        $data = $request->all();

        $new_fumetto = new Fumetto();
        $new_fumetto->fill($data);$new_fumetto->slug = Str::slug($data['titolo'], '-');
        $new_fumetto->save();

        return redirect()->route('fumettos.show', $new_fumetto);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Fumetto::find($id);

        return view('fumettos.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Fumetto::find($id);

        return view('fumettos.edit', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetto)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['titolo'], '-');
        $fumetto->update($data);

        return redirect()->route('fumettos.show', $fumetto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetto)
    {
        $fumetto->delete();

        return redirect()->route('fumettos.index')->with('deleted', " $fumetto->titolo è stato eliminato");
    }
}
