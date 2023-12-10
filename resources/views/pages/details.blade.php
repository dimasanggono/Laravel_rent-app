@extends('layouts.app')

@section('content')
<div class="header">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
        </nav>
    </div>
</div>

<main>
    <section class="section-details mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-details">
                        <div class="card-body">
                            <img src="{{ Storage::url($products->image) }}" alt="" width="500px">
                            <h3 class="text-center">{{$products->name}}</h3>
                            <p>Our Fasility</p>
                            <p>{!!$products->description!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-informarion">

                        <div class="detail-information">
                            <h4 class="text-center mt-3">Detail Information</h4>
                        </div>
                        <hr>
                        <div class="card-body detail-content">
                            <div class="contianer">
                                <table class="table-responsive ">
                                    <thead>
                                        <tr>
                                            <th width="40%">
                                                <i class="fa fa-map-pin" aria-hidden="true"></i>
                                            </th>
                                            <td>{{$products->place}}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-money-bill" aria-hidden="true"></i>
                                            </th>
                                            <td>Rp.{{number_format($products->price)}}/Days</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </th>
                                            <td>Minimum 3 Days Rental</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                            </th>
                                            <td>Seamless Online Booking</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="d-grid">
                            <a href="https://web.whatsapp.com/" class="btn  btn-rent btn-primary">Rent Now <i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection