 @extends('layouts.main')


 @section('content')
 
    <div class="row">
        <h2>Personal information</h2>
    </div>
    
    <div class="row">
        <nav>
            <a href="#" class="btn btn-danger">Delete client</a>
            <a href="#" class="btn btn-info">Update client</a>
        </nav>
    </div>
    <div class="row">
        <div class="col">
            <h4>{{$owner->name }} {{$owner->surname }}</h1>
            <p> City: {{$owner->city }}</p>
            <p> Street: {{$owner->street }}</p>
            <p>Telephone: {{$owner->phone }}</p>
            <p>Email Address{{$owner->email }}</p>
        </div>
        <div class="col">
            <h4>Pets</h4>
            @foreach ($owner->pets as $pet)
                <p><a href="/pets/{{ $pet->id }}">{{ $pet->name }}</a></p>
            @endforeach
        </div>
    </div>
    
 @endsection