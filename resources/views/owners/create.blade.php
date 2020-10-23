@extends('layouts.main', ['title' => 'Create new client'])

@section('content')
    
    <h1>Create new owner</h1>
    <form action="{{ action('OwnerController@store') }}" method="post">
        @if (count($errors) > 0)     
            @foreach ($errors->all() as $error)        
                <h4 class="alert alert-danger">{{ $error }}</h4>    
            @endforeach
        @endif
        
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" id="name" type="text" name="name"/>
        </div>
        <div class="form-group">
            <label for="surname">Surname:</label>
            <input class="form-control" id="surname" type="text" name="surname"/>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input class="form-control" id="city" type="text" name="city"/>
        </div>
        <div class="form-group">
            <label for="street">Street:</label>
            <input class="form-control" id="street" type="text" name="street"/>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input class="form-control" id="phone" type="text" name="phone"/>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" id="email" type="text" name="email"/>
        </div>
    
    
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection