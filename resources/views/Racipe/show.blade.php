@extends('Layouts.layout')


@section('body')
<h1>{{ $recipe->name }}</h1>
<h3>{{ $recipe->instruction }}</h3>
<h5>{{ $recipe->description }}</h5>


<form action="{{route('recipes.destroy',['recipe'=>$recipe->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
            Delete Recipe
        </button>
    </form>



@endsection()