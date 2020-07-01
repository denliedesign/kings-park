@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title-small">Promotions</h1>
        </div>
    </div>

    <div id="promotions">
        <div class="container my-5">
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
{{--            <h3 class="text-center mt-3"><strong>Spring Dance Classes</strong></h3>--}}
{{--            <p class="text-center">--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias blanditiis cupiditate deserunt ducimus earum eligendi, expedita fugit in iusto laboriosam minima porro sapiente sit!--}}
{{--                <br><br>--}}
{{--                Al cum deleniti ea eaque eveniet explicabo impedit laboriosam nihil!--}}
{{--            </p>--}}

        </div>
    </div>

@endsection
