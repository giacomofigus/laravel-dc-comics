@extends('layouts.app')

@section('main')
    <main>
        {{-- {{dd($comics)}} --}}
        <div class="overflow-x-auto">
            <table class="w-full border-collapse table-fixed">
                <thead>
                    <tr class="bg-gray-200">
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
                        <td class="px-4 py-2">{{$element['title']}}</td>
                        <td class="px-4 py-2 ">{{$element['description']}}</td>
                        <td class="px-4 py-2"><img src="{{$element['thumb']}}" alt="Thumb" class="w-20 h-auto"></td>
                        <td class="px-4 py-2">{{$element['price']}}</td>
                        <td class="px-4 py-2">{{$element['series']}}</td>
                        <td class="px-4 py-2">{{$element['sale_date']}}</td>
                        <td class="px-4 py-2">{{$element['type']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </main>
@endsection