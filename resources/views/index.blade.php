<h1>Details of pets</h1>

@foreach ($pets as $pet)
    <h2>{{ $pet->id }}</h2>
    <h2>{{ $pet->name }}</h2>
    <h2>{{ $pet->breed }}</h2>
    <h2>{{ $pet->weight }}</h2>
    <h2>{{ $pet->species }}</h2>
    <h2>{{ $pet->age }}</h2>
@endforeach

