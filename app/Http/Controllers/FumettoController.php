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

        $request->validate(
            [
                'titolo'=>'required|max:50|min:2',
                'descrizione'=>'required|min:5',
                'cover'=>'required|max:250',
                'prezzo'=>'required|numeric|min:1',
                'serie'=>'required|max:50|min:2',
                'data_di_vendita'=>'required|max:10|min:10',
                'tipologia'=>'required|max:50|min:2',
            ],
            [
                'titolo.required'=>'Il titolo è obbligatorio',
                'titolo.max'=>'Il titolo può essere lungo massimo 50 caratteri',
                'titolo.min'=>'Il titolo deve avere almeno 2 caratteri',
                'descrizione.required'=>'Inserisci una descrizione',
                'descrizione.min'=>'La descrizione deve avere più di cinque caratteri',
                'cover.required'=>'Inserisci un\'indirizzo',
                'cover.max'=>'L\'indirizzo non può essere più lungo di 250 caratteri',
                'prezzo.required'=>'Inserisci il costo',
                'prezzo.numeric'=>'Il prezzo deve essere inserito in numeri',
                'prezzo.min'=>'Il prezzo deve essere inserito deve essere superiore ad 1€',
                'serie.required'=>'La serie è obbligatoria',
                'serie.max'=>'La serie può contenere massimo 50 caratteri',
                'serie.min'=>'La serie deve avere almeno 2 caratteri',
                'data_di_vendita.required'=>'Inserisci la data',
                'data_di_vendita.max'=>'La data deve essere di 10 caratteri e come separatore deve esserci: -',
                'data_di_vendita.min'=>'La data deve essere di 10 caratteri e come separatore deve esserci: -',
                'titolo.required'=>'Il titolo è obbligatorio',
                'titolo.max'=>'Il titolo può essere lungo massimo 50 caratteri',
                'titolo.min'=>'Il titolo deve avere almeno 2 caratteri',
                'tipologia.required'=>'La tipologia è obbligatorio',
                'tipologia.max'=>'La tipologia può essere lunga massimo 50 caratteri',
                'tipologia.min'=>'La tipologia deve avere almeno 2 caratteri'
            ],
        );

        $data = $request->all();

        $new_fumetto = new Fumetto();
        $new_fumetto->fill($data);
        $new_fumetto->slug = Str::slug($data['titolo'], '-');
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
