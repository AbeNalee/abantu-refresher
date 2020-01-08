@extends('layouts')

@section('title', 'People')

@section('content')

    <a href="/people/create">Add Person</a>
    <ul>
        @forelse($people as $person)
            <li>{{ $person->name }}||{{ $person->age }}</li>

        @empty
            <li>No People available</li>
        @endforelse
    </ul>


@endsection
