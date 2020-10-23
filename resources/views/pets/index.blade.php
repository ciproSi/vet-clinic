@extends('layouts.main', ['title' => 'List of all pets'])

@section('content')
    <h1>List of pets</h1>
        <table class="table-striped">
            <thead>
                <th>
                    <td>
                        Pet ID
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Breed
                    </td>
                    <td>
                        Weight
                    </td>
                    <td>
                        Age
                    </td>
                    <td>
                        Owner
                    </td>
                </th>
                <tbody>
                    @foreach ($pets as $pet)
                        <tr>
                            <td>&nbsp;</td>
                            <td>{{ $pet->id }}</td>
                            <td><a href="/pets/{{ $pet->id }}">{{ $pet->name }}</a></td>
                            <td>{{ $pet->breed }}</td>
                            <td>{{ $pet->weight }} pounds</td>
                            <td>{{ $pet->age }}</td>
                            <td><a href="/owners/{{ $pet->owner->id }}">{{ $pet->owner->name }} {{ $pet->owner->surname }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
@endsection
    

