@extends('layouts.main', ['title' => 'Vet Clinic Homepage'])


@section('content')
    
    @if (session()->get('flash_message'))
        <div class="alert alert-success">
            <h4>{{ session()->get('flash_message') }}</h4>
        </div>
    @endif
   
@endsection



