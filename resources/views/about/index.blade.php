@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Include jQuery (ensure it's included before Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">

@section('content')

<style>
    .lightboxOverlay {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9999;
        background-color: #f37321 !important;
        filter: alpha(Opacity=80);
        opacity: .8;
        display: none;
</style>

<div
    style="height: 50%; min-height: 40%; background-image: url({{env('APP_URL')}}{{$information->header_image}}); background-size: cover;">
</div>

<div style="background-color:#eeeeef">
    <div style="padding-top:5rem">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center mx-auto py-3">
                        <h2 class="mt-0 fw-bolder">About Java Residence</h2>
                        <hr class="divider divider-black" />
                    </div>
                    <div class="row gx-4 gx-lg-5">
                        <img class="img-fluid" style="object-fit: cover;height:100%!important"
                            src="{{env('APP_URL')}}{{$information->image}}" alt="..." />
                    </div>
                    <div class="col-sm-12">
                        <div class="text-center mx-auto py-3">
                            <p class="mb-4" style="text-align: justify">{{$information->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5 px-0">
        <div class="col-sm-12">
            <div class="row">
                <div class="multiple-items">
                    @foreach($imageInformation as $p)
                    <div class="col-sm-4 py-4 gallery-item">
                        <a href="{{env('APP_URL')}}{{$p->image}}" data-lightbox="gallery">
                            <img src="{{env('APP_URL')}}{{$p->image}}"
                                style="height:20rem!important;width:100%;object-fit:cover" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')
<!-- Include Slick JavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Include Lightbox JavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768, // You can set this to the breakpoint you want for mobile
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.gallery-item a').on('click', function(){
            // Remove the 'active' class from all gallery items
            $('.gallery-item').removeClass('active');

            // Add the 'active' class to the clicked item's parent
            $(this).parent().addClass('active');
        });
    });
</script>
@endsection