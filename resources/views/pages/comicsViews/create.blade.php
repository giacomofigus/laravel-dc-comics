@extends('layouts.app')

@section('main')
<main class="flex items-center justify-center h-screen text-white">
    
    <div class="flex flex-col items-center p-5 px-9  border-4 ">
        
       <form action="{{ route('comics.store') }}" method="POST" class="">
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        </div>
    @endif

        <h1 class="text-4xl font-extrabold mb-5 leading-none tracking-tight text-slate-100 tracking-wide ">Inserire nuovo record</h1>
        
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label block">Titolo</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="title"
                    id="title"
                />
            </div>

            <div class="mb-3">
                <label for="descrizione" class="form-label block">Descrizione</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="descrizione"
                    id="descrizione"
                />
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label block">Thumb</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="thumb"
                    id="thumb"
                />
            </div>
            
            <div class="mb-3">
                <label for="prezzo" class="form-label block">Prezzo</label>
                <input
                    type="number"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="prezzo"
                    id="prezzo"
                />
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label block">Series</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent border p-1 w-full"
                    name="series"
                    id="series"
                />
            </div>
            
            <div class="mb-3">
                <label for="sale_date" class="form-label block">Sale Date</label>
                <input
                    type="date"
                    class="form-control mt-1 rounded-full bg-transparent border p-1  w-full"
                    name="sale_date"
                    id="sale_date"
                />
            </div>
            
            <div class="mb-3">
                <label for="type" class="form-label block">Tipo</label>
                <input
                    type="text"
                    class="form-control mt-1 rounded-full bg-transparent p-1 border  w-full"
                    name="type"
                    id="type"
                />
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Salva</button>
            
        </form>

    </div>
</main>
@endsection