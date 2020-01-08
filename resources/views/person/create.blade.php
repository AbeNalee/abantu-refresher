@extends('layouts.app')

@section('content')

    <p style="color:red;">@error('name') {{ $message }} @enderror </p>
    <p style="color:red;">@error('age') {{ $message }} @enderror </p>
    <form action="/people" method="post">
        @csrf
        <input type="text" name="name" autocomplete="off" placeholder="Name">
        <input type="text" name="age" autocomplete="off" placeholder="Age">

        <button>Add Person</button>
    </form>

@endsection