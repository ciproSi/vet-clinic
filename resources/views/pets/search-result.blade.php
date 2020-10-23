@extends('layouts.main', ['title' => 'Search results'])

@section('content')
    <h4>Search results</h4>
    <table class="table-striped">
        <thead>
            <tr>
                <td><h5>Pet name</h5></td>
                <td><h5>Owner</h5></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
                <tr>
                    <td><a href="/pets/{{ $pet->id }}">{{ $pet->name }} </a></td>
                    <td>
                        <a href="/owners/{{ $pet->owner->id }}">{{ $pet->owner->name }} {{ $pet->owner->surname }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>    
    </table>    

@endsection