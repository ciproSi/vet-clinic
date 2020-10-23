<style>
    .owner {border-bottom: 2px solid grey;}
</style>

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

        <div class="pets">
            @foreach ($owner->pets as $pet)
                <div class="pet">
                    {{$pet->name}}<br>
                    {{$pet->breed}}
                </div>
            @endforeach

        </div>
    </div>  
    @endforeach
</div>



