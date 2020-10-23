@extends('layouts.main', ['title' => 'Detail of pet'])

@section('content')

<div class="row">
    <div class="col-4">
        <img style="width:300px;" src="/images/pets/{{ $pet->image }}" alt="{{ $pet->image }}">
    </div>
    <div class="col-8">
        <h4>Name: {{ $pet->name }}</h4>
        <h4>Breed: {{ $pet->breed }}</h4>
        <h4>Weight: {{ $pet->weight }} pounds</h4>
        <h4>Owner: {{ $pet->owner->name }} {{ $pet->owner->surname }}</h4>
    </div>
</div>
<div class="row">
    <div class="col-3">

    </div>
    <div class="col-3">
        <a href="#" class="btn btn-danger">Delete pet</a>
    </div>
    <div class="col-3">
        <a href="#" class="btn btn-info">Update pet</a>
    </div>
    <div class="col-3">
        
    </div>
    
</div>
    
@endsection