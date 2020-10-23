@extends('layouts.main', ['title' => 'List of all owners'])

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
                        <td><a href="/owners/{{ $owner->id }}">{{$owner->name}} {{$owner->surname}}</a></td>
                        <td>{{$owner->city}}</td>
                        <td>{{$owner->street}}</td>
                        <td>{{$owner->phone}}</td>
                        <td>{{ $owner->email }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    

@endsection
