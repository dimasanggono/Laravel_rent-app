@extends('layouts.app')

@section('title')
Liberated - Home
@endsection

@section('content')
<header class="text-center">
    <h1>
        Explore the Journey, Rent the Freedom <br /> Your Key to Seamless Travel Experiences with Our Motorcycles
        and
        Cars!
    </h1>
    <p class="mt-3">
        fleet of meticulously maintained vehicles is ready to elevate your travel experience. <br /> Embrace the
        freedom to
        explore new horizons as you embark on unforgettable journeys
    </p>

    <a href="#vehicles" class="btn btn-get-started px-3 mt-3">Get Started</a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-3 stats-detail">
                <h3>20k</h3>
                <p>Member</p>
            </div>
            <div class="col-3 col-md-3 stats-detail">
                <h3>30</h3>
                <p>Vehicles Fleet</p>
            </div>
            <div class="col-3 col-md-3 stats-detail">
                <h3>24/7 <i class="fa fa-headphones" aria-hidden="true"></i></h3>
                <p>Customer Support</p>
            </div>
            <div class="col-3 col-md-3 stats-detail">
                <h3>100%</h3>
                <p>Safety Standards</p>
            </div>
        </section>
    </div>
    <section class="section-vehicles" id="vehicles">
        <div class="container">
            <div class="row">
                <div class="text-center vehicles-heading">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-services" id="services">
        <div class="container">
            <div class="row">
                <div class="text-center services-heading">
                    <h2>Our Services</h2>
                    <p>We Give Your The Best Exprience</p>
                </div>
                <div class="section-services-content">
                    <div class="box-container">
                        <div class="box">
                            <i class="fa fa-wallet" aria-hidden="true"></i>
                            <h3>Daily Motorcycle & Cars Rental</h3>
                            <p>Providing Vehicles for daily or monthly rent with affordable rates.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-truck-fast" aria-hidden="true"></i>
                            <h3>Pick-Up and Drop-Off</h3>
                            <p>transportation service to and from customer-specified locations.
                                Convenient for customers without personal transportation to pick up and return</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            <h3>Comfort and Safety</h3>
                            <p>We provide extra comfort and safety, particularly for long-distance travel or family
                                trips.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-car" aria-hidden="true"></i>
                            <h3>Diverse Vehicle Options</h3>
                            <p>Customers can choose according to their needs and preferences, ranging from
                                economical options to luxury vehicles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial" id="testi">
        <div class="container">
            <div class="text-center testi-heading">
                <h2>Their Said About Us</h2>
                <p>Moment were giving them the best experience </p>
            </div>
            <div class="section-testi-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-testi text-center">
                                <div class="card-body">
                                    <img src="rental-app/image/user1.png" class="mb-4 rounded-circle" width="100px" alt="">
                                    <h4 class="card-title text-center">Roberto Carlos</h4>
                                    <hr />
                                    <p class="card-text text-center">“it was glorious and i could not stop to say
                                        wohooo for
                                        every single moment
                                        Dangkeeee”</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-testi text-center">
                                <div class="card-body">
                                    <img src="rental-app//image/user2.png" class="mb-4 rounded-circle" width="100px" alt="">
                                    <h4 class="card-title text-center">Krochy</h4>
                                    <hr />
                                    <p class="card-text text-center">“it was glorious and i could not stop to say
                                        wohooo for
                                        every single moment
                                        Dangkeeee”</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-testi text-center">
                                <div class="card-body">
                                    <img src="rental-app/image/user3.png" class="mb-4 rounded-circle" width="100px" alt="">
                                    <h4 class="card-title text-center">Jennifer</h4>
                                    <hr />
                                    <p class="card-text text-center">“it was glorious and i could not stop to say
                                        wohooo for
                                        every single moment
                                        Dangkeeee”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-contact mb-3 mt-4" id="contact">
        <div class="container">
            <div class="text-center contact-heading">
                <h2 style="font-weight: 800;">Contact Us</h2>
            </div>
            <div class="section-contact-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53182.87525985749!2d110.36375814830863!3d-7.806666711388197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1700751277044!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-center">Find us</h3>
                                    <p><b>Rent Location : </b> 695G+G3W, Jl. Lempuyangan Tengah III, Bausasran, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55211</p>

                                    <p><b>Operating Hours : </b> 06:00 AM – 09:00 PM WIB</p>
                                    <p><b>Customer Services : </b> 08123456789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection