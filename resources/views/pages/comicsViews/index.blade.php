@extends('layouts.app')

@section('main')
    <main>
        {{-- {{dd($comics)}} --}}
        <div class="overflow-x-auto">
            <table class="w-full border-collapse table-fixed">
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
                        <td class="px-4 py-2 border">{{ $element['id'] }}</td>
                        <td class="px-4 py-2 border">
                            <a href="{{ route('comics.show', ['comic' => $element['id']]) }}">
                                {{$element['title']}}
                            </a>
                        </td>
                        <td class="px-4 py-2 border">{{$element['description']}}</td>
                        <td class="px-4 py-2 border">
                            <img src="{{$element['thumb']}}" alt="Thumb" class="w-20 h-auto">
                        </td>
                        <td class="px-4 py-2 border">{{$element['price']}}</td>
                        <td class="px-4 py-2 border">{{$element['series']}}</td>
                        <td class="px-4 py-2 border">{{$element['sale_date']}}</td>
                        <td class="px-4 py-2 border">{{$element['type']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </main>
@endsection