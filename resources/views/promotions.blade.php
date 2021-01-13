@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title-small">Events</h1>
        </div>
    </div>

    <div id="promotions">
        <div class="my-5 mx-1">
            <div class="d-flex justify-content-center align-items-center">
                <div class="row p-0 m-0">
                    <div class="col-sm p-0 m-0">
                        <img src="/images/zombie-cheer.png" alt="zombie cheer session" class="img-fluid my-3 pr-3">
                    </div>
                    <div class="col-sm p-0 m-0">
                        <img src="/images/princess-academy.png" alt="princess academy session" class="img-fluid pr-3 my-3">
                    </div>
                    <div class="col-sm p-0 m-0">
                        <img src="/images/tik-tok.jpg" alt="tik tok session" class="img-fluid my-3">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row p-0 m-0">
                    <div class="col-sm p-0 m-0">
                        <a href="https://app.jackrabbitclass.com/eventcalendar.asp?orgID=540329" target="_blank" class="event-register-click">
                            <img src="/images/adult-hip-hop.jpeg" alt="" class="img-fluid my-3 pr-3">
                        </a>
                    </div>
                    <div class="col-sm p-0 m-0">
                        <img src="/images/dance-from-home.PNG" alt="" class="img-fluid my-3">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row p-0 m-0">
                    <div class="col-sm p-0 m-0">
                        <img src="/images/KPDC-back-fall-2020.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row p-0 m-0">
                    <div class="col-sm p-0 m-0">
{{--                        <img src="/images/kp-dance-bring-a-friend.png" alt="" class="img-fluid my-3">--}}
                    </div>
                    <div class="col-sm p-0 m-0">
{{--                        <img src="/images/kp-dance-boys.jpg" alt="" class="img-fluid my-md-3 pl-md-3">--}}
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="bg-blue-fade py-5">--}}
{{--            <div class="container">--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm mb-3">--}}
{{--                        <img src="/images/kings-park-promo.png" alt="" class="img-fluid">--}}
{{--                        <img src="/images/kings-park-promo-3.png" alt="" class="img-fluid mt-3">--}}
{{--                    </div>--}}
{{--                    <div class="col-sm mb-3">--}}
{{--                        <img src="/images/kings-park-promo-2.png" alt="" class="img-fluid">--}}
{{--                        <img src="/images/kings-park-promo-4.png" alt="" class="img-fluid mt-3">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
    </div>

@endsection
