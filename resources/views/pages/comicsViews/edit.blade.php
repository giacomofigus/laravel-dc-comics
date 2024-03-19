@extends('layouts.app')

@section('main')
<main class="flex items-center justify-center h-screen text-white">
    <div class="flex flex-col items-center p-5 px-9  border-4 ">
        
       <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        @csrf
        @method('PUT')

        <h1 class="text-4xl font-extrabold mb-5 leading-none tracking-tight text-slate-100 tracking-wide ">Modifica prodotto</h1>

            
        <div class="mb-3">
            <label for="title" class="form-label block">Titolo</label>
            <input
                type="text"
                class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                name="title"
                id="titolo"
                value="{{ old('titolo') ?? $comic->titolo }}"
            />
        </div>

            <div class="mb-3">
                <label for="descrizione" class="form-label block">Descrizione</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="descrizione"
                    id="descrizione"
                    value="{{ old('descrizione') ?? $comic->descrizione }}"
                />
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label block">Thumb</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="thumb"
                    id="thumb"
                    value="{{ old('thumb') ?? $comic->thumb }}"
                />
            </div>
            
            <div class="mb-3">
                <label for="prezzo" class="form-label block">Prezzo</label>
                <input
                    type="number"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="prezzo"
                    id="prezzo"
                    value="{{ old('prezzo') ?? $comic->prezzo }}"
                />
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label block">Series</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="series"
                    id="series"
                    value="{{ old('series') ?? $comic->series }}"
                />
            </div>
            
            <div class="mb-3">
                <label for="sale_date" class="form-label block">Sale Date</label>
                <input
                    type="date"
                    class="form-control mt-1 rounded-full bg-transparent border p-1  w-full"
                    name="sale_date"
                    id="sale_date"
                    value="{{ old('sale_date') ?? $comic->sale_date }}"
                />
            </div>
            
            <div class="mb-3">
                <label for="type" class="form-label block">Tipo</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent p-1 border  w-full"
                    name="type"
                    id="type"
                    value="{{ old('tipo') ?? $comic->tipo }}"
                />
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Salva</button>
            
        </form>

    </div>
</main>
@endsection