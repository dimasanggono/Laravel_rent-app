@extends('layouts.app')

@section('content')
<div class="headers"></div>

<section class="section-vehicles" id="vehicles" style="margin-top: -80px;">
    <div class="container">
        <div class="row">
            <div class="text-center vehicles-heading" style="margin-top: 30px;">
                <h2>Find Your Favorite Vehicles!</h2>
                <p>Have a very pleasant experience</p>
            </div>
            <div class="section-vehicles-content">
                <div class="container">
                    <div class="section-vehicles-item row justify-content-center">
                        @foreach ($data as $item )
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card card-shadow">
                                <img src="{{ Storage::url($item->image) }}" class="card-img-top" style="max-width: 100%; height: auto;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->name}}</h5>
                                    <p class="card-text">Rp.{{ number_format($item->price) }} / days</p>
                                    <a href="{{route('detail', $item->id)}}" class="btn btn-primary btn-view">View Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="container">
                        <div class="col-12 mt-4 mx-auto text-center">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection