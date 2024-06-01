@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Include jQuery (ensure it's included before Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
<style>
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
</style>

<div
    style="height: 40%; min-height: 30%; background-image: url({{env('APP_URL')}}{{$project->header_image}}); background-size: cover;">
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
                    @foreach($projectImages as $p)
                    <div class="col-sm-4 py-4">
                        <img src="{{env('APP_URL')}}{{$p->image}}"
                            style="height:20rem!important;width:100%;object-fit:cover" />
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

<script type="text/javascript">
    $(document).ready(function(){
        $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: false, // Removes the previous and next buttons
  autoplay: true, // Enables autoplay
            autoplaySpeed: 2000 // Sets the autoplay speed in milliseconds
});
    });
</script>
@endsection