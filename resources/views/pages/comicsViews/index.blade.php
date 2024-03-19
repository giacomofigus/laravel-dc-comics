@extends('layouts.app')

@section('main')
    <main>
        {{-- {{dd($comics)}} --}}
        <h1 class="text-4xl font-extrabold mb-5 leading-none tracking-tight text-gray-900 ">Lista Comics</h1>
        <div class="">
            
            <a
            name=""
            id=""
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "
            href="{{ route('comics.create') }}"
            role="button"
            >Crea Comic</a>

            <table class="w-full border-collapse table-fixed mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Titolo</th>
                        <th class="px-4 py-2">Descrizione</th>
                        <th class="px-4 py-2">Thumb</th>
                        <th class="px-4 py-2">Prezzo</th>
                        <th class="px-4 py-2">Series</th>
                        <th class="px-4 py-2">Sale Date</th>
                        <th class="px-4 py-2">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comics as $element)

                    <tr class="bg-white border-b-4">

                        <td class="px-4 py-2 border">
                            {{ $element['id'] }}
                        </td>
                        
                        <td class="px-4 py-2 border">
                            <a href="{{ route('comics.show', ['comic' => $element['id']]) }}">
                                {{$element['title']}}
                            </a>
                        </td>
                        
                        
                        <td class="px-4 py-2 border">
                            <img src="{{$element['thumb']}}" alt="Thumb" class="w-20 h-auto">
                        </td>
                        
                        <td class="px-4 py-2 border">
                            {{$element['price']}}
                        </td>
                        
                        <td class="px-4 py-2 border">
                            {{$element['series']}}
                        </td>
                        
                        <td class="px-4 py-2 border">
                            {{$element['sale_date']}}
                        </td>
                        
                        <td class="px-4 py-2 border">
                            {{$element['type']}}
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </main>
@endsection