@extends('layouts.bakery')
@section('title')
    Home
@endsection
@section('contents')


            <div class='main-bg d-flex justify-content-center align-items-center'>
                <div class='container py-5 px-5 d-flex justify-content-center align-items-center'>

                    <div class='col-8 py-5 text-center'>
                        <h1 class='rem3 pb-3 text-white fw-bold'>WORLD-FAMOUS, DELICIOUSLY DECADENT COOKIES</h1>

                        <button type="button" class="mt-3 btn btn-primary btn-lg">SHOP NOW</button>
                    </div>

                </div>
            </div>


            <!-- promotion start -->
            <div class='promo-bg container my-5 py-5 text-white'>

                <div class='text-center'>
                    <h2>COOKIES DAY SALE</h2>
                    <p class='mt-3 rem4 promo-highlight fw-bold'><u>UP TO 50% OFF</u></p>
                    <p class='rem1p5'>August 4 is National Chocolate Chip Cookie Day.</p>
                </div>

            </div>
            <!-- promotion end -->

            <div class='d-flex mt-5 bg-light'>
                <div class='col-6 px-5 pt-3'>
                    <p>Dr.Sweet's factory All Rights Reserved 2021</p>
                </div>

                <div class='col-6 pt-2 d-flex justify-content-end px-5'>
                    <div>
                        <i class="fab fa-twitter fa-2x px-1"></i>
                        <i class="fab fa-instagram fa-2x px-1"></i>
                        <i class="fab fa-pinterest fa-2x px-1"></i>
                        <i class="fab fa-facebook fa-2x px-1"></i>
                    </div>
                </div>

            </div>

@endsection
