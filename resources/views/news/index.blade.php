@extends('layouts.master')

@section('content')

<div style="height: 40%; min-height: 30%; background-image: url('assets/img/News.jpg'); background-size: cover;">
</div>

<div style="background-color:#eeeeef">
    <section class="page-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <h2 class="mt-0 fw-bolder" style="color:#474443">News & Event</h2>
            <hr class="divider" style="background-color:#f37321;width:70%;max-width:10rem;margin: 1rem 0;" />
            <div class="row gx-4 gx-lg-5 portfolio-items" style="place-content: center">
                <div class="col-sm-12">
                    <div class="row" style="text-align: -webkit-center;">
                        @foreach ($news as $a)
                        <div class="col-sm-4 py-3">
                            <a href="{{ route('news.show', $a->id) }}">
                                <div class="card" style="width: 20rem; position: relative;">
                                    <div class="image-container" style="position: relative;">
                                        <img class="card-img-top" src="{{env('APP_URL')}}{{$a->image}}"
                                            alt="Card image cap">
                                        <div class="overlay">
                                            <div class="overlay-text" style="font-weight: 600">
                                                {{ $a->title }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#f37321;">
                                        <p class="card-text">{{ Str::limit(strip_tags($a->description), 300) }}</p>
                                        <hr class="divider"
                                            style="background-color:#ffffff;width:100%;max-width: 100%!important;height: 0.1rem!important;" />
                                        <p class="card-text">{{ $a->created_at->format('Y-m-d') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        <style>
                            .image-container {
                                position: relative;
                            }

                            .overlay {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(0, 0, 0, 0.8);
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                color: white;
                                font-size: 1.5rem;
                                text-align: center;
                                padding: 10px;
                                text-transform: uppercase;
                            }

                            .overlay-text {
                                padding: 10px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('jquery')

@endsection