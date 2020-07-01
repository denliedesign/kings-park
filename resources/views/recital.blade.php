@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title">Recital</h1>
        </div>
    </div>

    <div id="recital">
        <div class="container my-5">
            <h2 class="text-center">Looking forward to the...<br> <span id="recital-title">2021 Thirty-Third Annual Recital</span></h2>
            <div class="card-columns my-5">
                <img src="/images/recital1.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/recital2.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/recital4.jpeg" alt="" class="img-fluid mb-3">
            </div>
        </div>
    </div>

@endsection
