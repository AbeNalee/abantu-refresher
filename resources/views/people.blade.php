@extends('layouts')

@section('title', 'People')

@section('content')

    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
@endsection
