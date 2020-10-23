@extends('layouts.main', ['title' => 'List of all owners'])

<a href="{{ action('OwnerController@create') }}">Create new Owner</a>

@if (session()->get('flash_message'))        
<div class="alert alert-success">            
    <h4>{{ session()->get('flash_message') }}</h4>        
</div>    
@endif

<div class="container">
    @foreach ($owners as $owner)
    <div class="owner">
        <h2>{{$owner->name}}</h2>
        <h2>{{$owner->surname}}</h2>
        <p>{{$owner->city}}</p>
        <p>{{$owner->street}}</p>
        <p>{{$owner->phone}}</p>
        <p>{{$owner->email}}</p>

@section('content')
    

@if (session()->get('flash_message'))
        <div class="alert alert-success">
            <h4>{{ session()->get('flash_message') }}</h4>
        </div>
    @endif
    <h1>List of all owners</h1>
    
    <table class="table-striped">
        <thead>
            <tr>
                <td>Name</td>
                <td>City</td>
                <td>Street</td>
                <td>Phone</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
                @foreach ($owners as $owner)
                    <tr>
                        <td>{{$owner->name}} {{$owner->surname}}</td>
                        <td>{{$owner->city}}</td>
                        <td>{{$owner->street}}</td>
                        <td>{{$owner->phone}}</td>
                        <td>{{ $owner->email }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    

@endsection


