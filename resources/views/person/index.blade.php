@extends('layouts.app')

@section('title', 'People')

@section('content')

    <a href="/people/create">Add Person</a>
    <ul>
        @forelse($people as $person)
            <a href="people/{{$person->id}}"><li>{{ $person->name }}||{{ $person->age }}</li></a>
            <a href="people/{{$person->id}}/edit">Edit</a> ||
            <form action="/people/{{$person->id}}" method="post">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @empty
            <li>No People available</li>
        @endforelse
    </ul>


@endsection
