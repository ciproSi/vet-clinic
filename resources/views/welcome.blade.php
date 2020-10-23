@extends('layouts.main', ['title' => 'Vet Clinic Homepage'])


@section('content')
    
    @if (session()->get('flash_message'))
        <div class="alert alert-success">
            <h4>{{ session()->get('flash_message') }}</h4>
        </div>
    @endif

    <a href="/owners" class="btn btn-primary">Show all owners</a>
    <a href="/pets" class="btn btn-primary">Show all pets</a>
    
    <form action="owners/search" method="POST">
        @csrf
        <label for="surname">Search owner based to his surname:</label>
        <input id="surname" type="text" name="surname"/>
        <button class="btn btn-primary">Search</button>
    </form>
    <form action="/pets/search" method="POST">
        @csrf
        <label for="pet">Search pet based to its name:</label>
        <input id="pet" type="text" name="pet"/>
        <button class="btn btn-primary">Search</button>
    </form>

@endsection



