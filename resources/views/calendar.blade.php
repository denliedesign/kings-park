@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: auto;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title-small">Calendar</h1>
        </div>
    </div>

    <div id="calendar" class="my-5">
        <div class="container">
            <p class="text-center">Coming soon! Check back for studio updates.</p>
{{--            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">--}}
{{--                <div class="col mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <a href="/calendar/july" style="text-decoration: none;">--}}
{{--                            <div class="card-gradient gradient-purple d-flex align-items-center justify-content-center">--}}
{{--                                <p class="text-uppercase text-center">KPDC<br>July<br>2020</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-gradient gradient-blue d-flex align-items-center justify-content-center">--}}
{{--                            <p class="text-uppercase text-center">KPDC<br>August<br>2020</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-gradient gradient-gold d-flex align-items-center justify-content-center">--}}
{{--                            <p class="text-uppercase text-center">KPDC<br>September<br>2020</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection
