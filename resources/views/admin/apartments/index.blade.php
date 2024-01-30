@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Apartments</h1>
    </div>

    <div class="container">
        <a href="{{ route('admin.apartments.create') }}">
            <h4 class="">Create Apartment</h4>
        </a>
    </div>
    
    <div class="container">

        <div>
            @forelse ($apartments as $apartment)
                <div>
                    <p>
                        <a href="{{ route('admin.apartments.show', $apartment) }}">Details</a>
                        {{ $apartment->address}}
                    </p>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
    
@endsection