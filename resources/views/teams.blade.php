@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title-small">Competition Teams</h1>
        </div>
    </div>

    <div id="teams">
        <div class="container my-5">
            <div class="d-flex justify-content-center">
                <iframe width="100%" height="624" src="https://www.youtube.com/embed/GfVQ_WCwNE0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="pl-3 mt-3" id="national-title">National Champions</p>
            <p class="pl-3" id="national-years">2019, 2017, 2016, 2015, 2014, 2012, 2011</p>
            <p class="text-center">
                Be a part of our top scoring competition team. Work with incredible artists such as Tyce Diorio , Ade Obeyami, Theresa Stone, and Megz Alfonso. Creating award winning dancers since 1987!
                We want you to be a part of our National Award winning dance family. Auditions are FREE and OPEN to the public. Call to reserve your spot <span id="call">631-269-0751</span>.</span>
                <br><br><strong>#kpdcfamily</strong>
            </p>
            <div class="card-columns">
                <img src="/images/teams1.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams2.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams3.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams4.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams5.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams6.jpeg" alt="" class="img-fluid mb-3">
{{--                <img src="/images/team7.jpeg" alt="" class="img-fluid mb-3">--}}
                <img src="/images/teams8.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams9.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/teams10.jpg" alt="" class="img-fluid mb-3">
                <img src="/images/teams11.jpeg" alt="" class="img-fluid mb-3">
            </div>
        </div>
    </div>

@endsection
