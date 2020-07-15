@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title-small">Promotions</h1>
        </div>
    </div>

    <div id="promotions">
        <div class="container my-5">
            <div class="row d-flex justify-content-center align-items-center mb-5">
                <div class="col-sm">
                    <img src="/images/sparkle-squad-beach-ballet.PNG" alt="" class="img-fluid">
                </div>
                <div class="col-sm">
                    <h3 class="text-center mt-3"><strong>Summer Special!</strong></h3>
                    <p class="text-center px-3">
                        Sparkle Squad and Beach Ballet together! Normally $95- combined special $75- WOW! Hurry this offer won’t last. Limited spots available. 2 hours of dancing fun!
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-blue-fade py-5">
            <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-sm mb-3">
                        <img src="/images/kings-park-promo.png" alt="" class="img-fluid">
                        <img src="/images/kings-park-promo-3.png" alt="" class="img-fluid mt-3">
                    </div>
                    <div class="col-sm mb-3">
                        <img src="/images/kings-park-promo-2.png" alt="" class="img-fluid">
                        <img src="/images/kings-park-promo-4.png" alt="" class="img-fluid mt-3">
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
