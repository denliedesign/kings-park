@extends('layouts.app')
@section('content')

    @include('logo')

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title">Recital</h1>
        </div>
    </div>

    <div id="recital">
        <div class="container my-5">
            <h2 class="text-center">Looking forward to the...<br> <span id="recital-title">2021 Thirty-Third Annual Recital</span></h2>
            <img src="/images/kp-recital.png" alt="come alive t-shirt design" class="img-fluid">

            <table class="table my-5 d-flex align-items-center justify-content-center" id="recital-table" style="color: black;">
                <tbody>
                <tr class="d-flex align-items-center">
                    <td><ion-icon name="calendar"></ion-icon></td>
                    <td>Sunday 6/13</td>
                </tr>
                <tr class="d-flex align-items-center">
                    <td><ion-icon name="location"></ion-icon></td>
                    <td>Radisson Hotel Hauppauge, 110 Vanderbilt Motor Parkway, Hauppauge, NY 11788</td>
                </tr>
                </tbody>
            </table>


            <div class="card-columns my-5">
                <img src="/images/recital1.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/recital2.jpeg" alt="" class="img-fluid mb-3">
                <img src="/images/recital4.jpeg" alt="" class="img-fluid mb-3">
            </div>
        </div>
    </div>

{{--    <div id="recital">--}}
{{--        <div class="container my-5">--}}
{{--            <h2 class="text-center">Looking forward to the...<br> <span id="recital-title">2021 Thirty-Third Annual Recital</span></h2>--}}
{{--            <div class="card-columns my-5">--}}
{{--                <img src="/images/recital1.jpeg" alt="" class="img-fluid mb-3">--}}
{{--                <img src="/images/recital2.jpeg" alt="" class="img-fluid mb-3">--}}
{{--                <img src="/images/recital4.jpeg" alt="" class="img-fluid mb-3">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
