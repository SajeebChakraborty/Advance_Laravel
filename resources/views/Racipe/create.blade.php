@extends('Layouts.layout')

@section('body')
    <h1>Create Recipe</h1>
    {{-- create a form containing name,instruction and description using tailwind css --}}
    <form action="{{route('recipes.store')}}" method="POST">
        @csrf
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm m-2">
                <div class="bg-white border-2 border-gray-400 rounded-lg shadow-md overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                                Name
                            </label>
                            <input type="text" name="name"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name" value="{{old('name')}}" >
                            @error('name')
                                <small class="text-red-800">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="font-bold text-xl mb-2">
                            <label for="instruction" class="block text-gray-700 text-sm font-bold mb-2">
                                Instruction
                            </label>
                            <textarea name="instruction" id="instruction" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Instruction">{{old('instruction')}}</textarea>
                            @error('instruction')
                                <small class="text-red-800">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="font-bold text-xl mb-2">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                                Description
                            </label>
                            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description">{{old('description')}}</textarea>
                            @error('description')
                                <small class="text-red-800">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- create a multi select input using tailwind named ingradients --}}
                        <div class="font-bold text-xl mb-2">
                            <label for="ingradients" class="block text-gray-700 text-sm font-bold mb-2">
                                Ingradients
                            </label>
                            <select name="ingradients[]" id="ingradients" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" multiple>
                                @foreach ($ingradients as $ingradient)
                                    <option value="{{$ingradient->id}}">{{$ingradient->name}}</option>
                                @endforeach
                            </select>
                            @error('ingradients')
                                <small class="text-red-800">{{$message}}</small>
                            @enderror
                        </div>

                        {{-- create a submit button --}}
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Create Recipe
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection