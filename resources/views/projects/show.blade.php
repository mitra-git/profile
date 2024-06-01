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
                        <h2 class="mt-0 fw-bolder">{{$project->title}}</h2>
                        <hr class="divider divider-black" />
                    </div>
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-lg-5 justify-content-center">
                            <img class="img-fluid" style="object-fit: cover;height:35rem!important"
                                src="{{env('APP_URL')}}{{$project->image}}" alt="..." />
                        </div>
                        <div class="col-lg-7 py-5 py-md-0">
                            <p class="mb-4" style="text-align: justify">{{$project->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
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

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center mx-auto py-3">
                    <h2 class="mt-0 fw-bolder">Siteplan & Location</h2>
                    <hr class="divider divider-black" />
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6 justify-content-center">
                        <img class="img-fluid" style="object-fit: cover;height:100%!important"
                            src="{{env('APP_URL')}}{{$project->siteplan}}" alt="..." />
                    </div>
                    <div class="col-lg-6 justify-content-center">
                        {!! str_replace('<iframe', '<iframe class="custom-map"' , $information->google_map) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center mx-auto py-3">
                    <h2 class="mt-0 fw-bolder">Type</h2>
                    <hr class="divider divider-black" />
                </div>
                <div class="row">
                    @foreach($projectType as $p)
                    <div class="col-sm-4 py-4 position-relative">
                        <a
                            href="{{ route('project.detail', ['id_project' => $project->id, 'id_project_type' => $p->id]) }}">
                            <div class="img-fluid"
                                style="height:30rem!important;width:100%;object-fit:cover;background: linear-gradient(to bottom, rgba(26, 26, 26, 0.5) 0%, rgba(33, 33, 33, 0.5) 100%), url('{{env('APP_URL')}}{{$p->image}}'); background-size: cover;align-content:end">
                                <div>
                                    <h4 class="mt-0 fw-bolder text-white text-center">{{$p->name}}</h4>
                                    <p class="text-white text-center">{{$p->small_description}}</p>
                                </div>
                            </div>
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