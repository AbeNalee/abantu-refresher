@extends('layouts')

@section('title', 'Edit Person Details')

@section('content')

    <form action="/people/{{ $person->id }}" method="post">
        @method('PATCH')
        @csrf
        <input type="text" name="name" autocomplete="off" value="{{ $person->name }}">
        <input type="text" name="age" autocomplete="off" value="{{ $person->age }}">

        <button>Save Person</button>
    </form>

@endsection