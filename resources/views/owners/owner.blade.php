
 
 <h1>{{$owner->name }} {{$owner->surname }}</h1>
 


<section>
    <h2>Personal information </h2>
     <p> City: {{$owner->city }}</p>
     <p> Street: {{$owner->street }}</p>
     <p>Telephone: {{$owner->phone }}</p>
     <p>Email Address{{$owner->email }}</p>
</section>

 {{-- <p> {{$owners->pets }}</p> --}}