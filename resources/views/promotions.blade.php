@extends('layouts.app')
@section('content')

    @include('logo')

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
                        Check Back Soon For The Latest Promotions And Events!
{{--                        <img src="/images/KPDC-back-fall-2020.jpg" alt="" class="img-fluid">--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
