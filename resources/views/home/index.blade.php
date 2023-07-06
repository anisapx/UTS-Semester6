@extends('layout/app')

@section('content')
<style>
    .btn, .ctn{
        transition: .4s all;
        }
    .btn:hover,
    .ctn:hover{
        transform: scale(1.2);
    }
    .herocontent{
        background-size: cover;
        background-position:center;
        min-height: 60vh;
    }

    </style>
        <div
        class="herocontent"
        style="background-image:url('img/home/bgdeus.jpg'); background-position: center; padding-top: 150px; padding-bottom: 90px"
        >
            <div class="container container-satu">
                <div class="row align-items-center align-content-center">
                    <div class="col-md order-md-2">
                        <div class="card ml-auto" style="width: 18rem">
                            
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md order-md-1" style="color: white">
                        <div class="row mb-3 mt-5">
                            <h1 style="font-weight: bolder; font-size: 48px; color: white;">
                                SLEIGHT <br /> APPAREL n Co.
                            </h1>
                        </div>
                        <div class="row mb-5">
                            <p class="fs-6 fw-light">
                                <br />
                                
                            </p>
                        </div>
                        <div class="row">
                            <a href="{{route('produk')}}" style="width: 260px"
                                ><div class="button1 mb-5">
                                <div class="button1-left" style="float: left">
                                    Show More!
                                </div>
                                <div class="button1-right">
                                    <img src="{{ asset('img/icons/next.png') }}" alt="" />
                                </div></div
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
        class="container-fluid container container-satu"
        style="margin-top: 110px; margin-bottom: 110px"
        >
            <div class="row justify-content-center p-4">
                <div class="col-md mb-5">
                <img class="img-koki" src="{{asset('img/home/logomotor.png')}}" alt="" />
                </div>
                <div class="col-md">
                <div class="row">
                    <h2 class="fw-bold" style="font-size: 40px; color: #702b02">
                    Explore Our Product.
                    </h2>
                </div>
                <div class="row">
                    <p style="color: #adadad; font-size: 14px; font-weight: 500">
                    there are many new products and very limited items. there are many offers and many discounts please see our products!
                    </p>
                </div>
                <div class="row mb-4">
                    <div class="container2-img">
                    <img
                        class="mb-3"
                        src="{{asset('img/home/kaosdeus.jpg')}}"
                        alt=""
                    />
                    <h4 class="fw-bold"></h4>
                    </div>
                    <div class="container2-img">
                    <img
                        class="mb-3"
                        src="{{asset('img/home/coach Design 2 (Back).jpg')}}"
                        alt=""
                    />
                    <h4 class="fw-bold"></h4>
                    </div>
                    <div class="container2-img">
                    <img
                        class="mb-3"
                        src="{{asset('img/home/cewe.jpg')}}"
                        alt=""
                    />
                    <h4 class="fw-bold"></h4>
                    </div>
                </div>
                <div class="row">
                    <a
                    href="{{route('produk')}}"
                    class="ml-auto"
                    style="text-decoration: none;"
                    ><div class="container-btn-2">Show more</div></a
                    >
                </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 150px auto">
            <div class="my-5"
                style="background-image: url('{{ asset('img/home/us.jpeg') }}');
                    background: linear-gradient (0deg, orange, orange);
                    color: white;
                    background-size: cover;
                    border-radius: 10px;
                    width: 97%;
                    margin: auto;
                    text-align: center;
                    padding: 80px 0;">
                <h2 style="color: white; font-size: 25pt;">
                    Join to our Community<br />
                    SLEIGHT APPAREL n Co.
                </h2>
                <p style="color: white;">
                Are you ready to get more benefits?
                <br />
                join immediately and get many other benefits
                </p>
                <a href="https://www.instagram.com/sleight.apparel/" style="text-decoration: none; width: 140px;">
                    <div style="padding: 10px; background-color: #e18e4a; width: 120px; color: white; margin: auto; border-radius: 5px;">Join Now!</div>
                </a>
            </div>
        </div>
    </section>
@endsection
