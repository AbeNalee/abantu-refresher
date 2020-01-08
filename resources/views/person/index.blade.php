@extends('layouts')

@section('title', 'People')

@section('content')

    <a href="/people/create">Add Person</a>
    <ul>
        @forelse($people as $person)
            <a href="people/{{$person->id}}"><li>{{ $person->name }}||{{ $person->age }}</li></a>

        @empty
            <li>No People available</li>
        @endforelse
    </ul>


@endsection
