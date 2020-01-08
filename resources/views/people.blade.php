@extends('layouts')

@section('title', 'People')

@section('content')

    <a href="/people/create">Add Person</a>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>


@endsection
