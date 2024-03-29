<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();

        return view('pages/comicsViews.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/comicsViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titolo' => 'required',
            'descrizione' => 'required',
            'thumb' => 'required',
            'prezzo' => 'required|numeric',
            'series' => 'required',
            'sale_date' => 'required|date',
            'tipo' => 'required',
        ]);

        $formData = $request->all();
        $newComic = new Comic();
        $newComic->fill($formData);

        // $newComic->titolo = $formData['title'];
        // $newComic->descrizione = $formData['descrizione'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->prezzo = $formData['prezzo'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->tipo = $formData['type'];

        $newComic->save();
        
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);

        return view('pages/comicsViews.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.comicsViews.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();
        $comic = Comic::find($id);
        $comic->update($formData);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
