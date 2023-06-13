<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $comics = Comic::orderBy('id', 'desc')->paginate(4);
    return view('comics.index', compact('comics'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  //PRIMA DI TUTTO VALIDO I DATI, REQUEST VALIDATE VEDE SE SONO VALIDI ALTRIMENTI REINDIRIZZA AL FORM
    $request->validate([
    'title' => 'required|min:3',
    'description' => 'required',
    'thumb' => 'required',
    'price' => 'required|numeric',
    'series' => 'required',
    'sale_date' => 'required|date',
    'type' => 'required',
    'artists' => 'required',
    'writers' => 'required',
], [
    'title.required' => 'Il titolo è un campo obbligatorio.',
    'title.min' => 'Il titolo deve avere almeno :min caratteri.',
    'description.required' => 'La descrizione è un campo obbligatorio.',
    'thumb.required' => 'Il thumb è un campo obbligatorio.',
    'price.required' => 'Il prezzo è un campo obbligatorio.',
    'price.numeric' => 'Il prezzo deve essere un numero.',
    'series.required' => 'La serie è un campo obbligatorio.',
    'sale_date.required' => 'La data di vendita è un campo obbligatorio.',
    'sale_date.date' => 'La data di vendita deve essere una data valida.',
    'type.required' => 'Il tipo è un campo obbligatorio.',
    'artists.required' => 'Gli artisti sono un campo obbligatorio.',
    'writers.required' => 'Gli scrittori sono un campo obbligatorio.',
]);



    // QUI RICEVO I DATI DAL FORM DI CREATE
        $form_data = $request->all();

        $new_comic = new Comic();

        $new_comic->fill($form_data);


        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);



        //dd($new_comic);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */


     //usa il find implicitamente
     public function show(Comic $comic)
    {
    return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}