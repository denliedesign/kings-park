@extends('layouts.app')
@section('content')

    @include('logo')

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title-small">Calendar of Events</h1>
        </div>
    </div>

    <div id="calendar" class="my-5">
        <div class="d-flex justify-content-center">
            <div class="row m-0 p-0">
                <div class="col-sm-7 mb-2">
                    <iframe src="https://app.jackrabbitclass.com/eventcalendar.asp?orgid=540329" frameborder="0" width="100%" height="700"></iframe>
                </div>
                <div class="col-sm-5">
                    <img src="/images/studio-closings-21.png" alt="list of days studio is closed" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
