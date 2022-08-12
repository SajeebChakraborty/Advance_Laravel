@extends('Layouts.layout')
@section('title')
    <title>Recipeis</title>
@endsection
@section('body')
    {{-- create a list of card views using tailwind --}}
    <div class="flex flex-wrap justify-center">
        @foreach ($himus as $recipe)
            <div class="w-full max-w-sm m-2">
                <div class="bg-white border-2 border-gray-400 rounded-lg shadow-md overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            {{ $recipe->name }}
                        </div>
                        {{-- demo food recipe image in a div --}}
                        <div class="flex justify-center">
                            {{-- get a randomly image from food1 food2 food3 --}}
                            
                            <img src="{{ asset('images/food1.jpg') }}" alt="food1" class="w-full">
                        </div>

                        <p class="text-gray-700 text-base">
                            {{ $recipe->description }}
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        @foreach ($recipe->ingradients as $ingradient)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                {{$ingradient->name}}
                            </span>
                        @endforeach
                        {{-- create a button named instructions which will open a drawer --}}
                        <button class="inline-block bg-red-500 rounded-full px-3 py-1 text-sm font-semibold hover:bg-red-600 text-white mr-2">
                            View Details
                        </button>

                    </div>
                </div>
            </div>
        @endforeach
    
@endsection