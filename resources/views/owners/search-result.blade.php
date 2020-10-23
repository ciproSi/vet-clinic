@extends('layouts.main', ['title' => 'Search results'])

@section('content')
    <h4>Search results</h4>
    <table class="table-striped">
        <thead>
            <tr>
                <td><h5>Owner name</h5></td>
                <td><h5>Pets</h5></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td><a href="/owners/{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</a></td>
                    <td>
                        @foreach ($owner->pets as $pet)
                            <a href="/pets/{{ $pet->id }}">{{ $pet->name }}</a>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>    
    </table>    

@endsection