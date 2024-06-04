@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Include jQuery (ensure it's included before Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">

<script src='//pchen66.github.io/js/three/three.min.js'></script>
<script src='//pchen66.github.io/js/panolens/panolens.min.js'></script>
<?php header('Access-Control-Allow-Origin: *'); ?>

<style>
    .image-container {
        height: 40rem;
    }

    .image-container:before {
        content: attr(data-image);
    }

    .custom-map {
        width: 500px;
        max-width: 1080px;
        /* or any specific width you want, like 600px */
        height: 400px;
        /* or any specific height you want */
        border: 0;
    }

    @media (max-width: 767px) {

        /* Adjust the max-width value as needed for your mobile breakpoint */
        .custom-map {
            width: 100%;
            height: 300px;
            /* Adjust the height for mobile as needed */
        }
    }

    .lightboxOverlay {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9999;
        background-color: #f37321 !important;
        filter: alpha(Opacity=80);
        opacity: .8;
        display: none;
    }
</style>

@section('content')

<div
    style="height: 50%; min-height: 40%; background-image: url({{env('APP_URL')}}{{$project->header_image}}); background-size: cover;">
</div>

<div style="background-color:#eeeeef">
    <div style="padding-top:5rem">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center mx-auto py-3">
                        <h2 class="mt-0 fw-bolder">{{$projectType->name}}</h2>
                        <hr class="divider divider-black" />
                    </div>
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-lg-7 justify-content-center">
                            <img class="img-fluid" style="object-fit: cover;height:30rem!important;width:100%!important"
                                src="{{env('APP_URL')}}{{$projectType->image}}" alt="..." />
                        </div>
                        <div class="col-lg-5 py-5 py-md-0" style="background-color:#f37321">
                            <div class="py-3 px-3">
                                <h3 class="mt-0 ml-2 fw-bolder text-white">Spesifikasi</h3>
                                <table class="table table-borderless" style="border-color: transparent!important;">
                                    <thead class="text-white">
                                        <tr>
                                            <th style="align-content: center;">Luas Bangunan
                                            </th>
                                            <th class="text-white">: {{$projectType->luas_bangunan}} m2</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white fw-bold">
                                        <tr>
                                            <td style="align-content: center;">Luas Tanah</td>
                                            <td class="text-white">: {{$projectType->luas_tanah}} m2</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Fondasi</td>
                                            <td class="text-white">: {{$projectType->fondasi}}</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Dinding</td>
                                            <td class="text-white">: {{$projectType->dinding}}</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Plafon</td>
                                            <td class="text-white">: {{$projectType->plafon}} meter</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Kamar Tidur</td>
                                            <td class="text-white">: {{$projectType->kamar_tidur}}</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Kamar Mandi</td>
                                            <td class="text-white">: {{$projectType->kamar_mandi}}</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Carport</td>
                                            <td class="text-white">: {{$projectType->carport}}</td>
                                        </tr>
                                        <tr>
                                            <td style="align-content: center;">Air</td>
                                            <td class="text-white">: {{$projectType->air}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                    @foreach($projectTypeImages as $p)
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

    <style>
        .side-by-side .gallery-item {
            display: inline-block;
            width: 32%;
            /* Adjust width as needed */
            vertical-align: top;
        }

        .side-by-side {
            text-align: center;
        }

        @media (max-width: 768px) {
            .side-by-side .gallery-item {
                display: block;
                width: 100%;
            }
        }
    </style>

    <div class="container pb-5 pt-5 px-0">
        <div class="col-sm-12">
            <div class="row">
                <div class="grid grid-cols-6">
                    <div class='image-container'></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Check the number of gallery items
        var galleryItemsCount = $('.gallery-item').length;

        // Initialize Slick slider if there are 3 or more items
        if (galleryItemsCount >= 3) {
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024, // You can adjust this breakpoint as needed
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 768, // Mobile breakpoint
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        } else {
            // Add 'side-by-side' class if there are fewer than 3 items
            $('.multiple-items').addClass('side-by-side');
        }

        $('.gallery-item a').on('click', function(){
            // Remove the 'active' class from all gallery items
            $('.gallery-item').removeClass('active');

            // Add the 'active' class to the clicked item's parent
            $(this).parent().addClass('active');
        });
    });
</script>
<script type="text/javascript">
    const d = document;
    d.addEventListener('DOMContentLoaded', () => {
        const viewer = new PANOLENS.Viewer({
            'container': d.querySelector('.image-container')
        });

        const images = ['{{env('APP_URL')}}{{$projectType->image_360}}'];

        viewer.add(new PANOLENS.ImagePanorama(images[0]));

        d.querySelector('button').addEventListener('click', e => {
            e.target.dataset.index = 1 - e.target.dataset.index;
            let imgpath = images[Number(e.target.dataset.index)];
            viewer.dispose();
            viewer.add(new PANOLENS.ImagePanorama(imgpath));
        })
    })
</script>
@endsection