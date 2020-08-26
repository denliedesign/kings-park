@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center"><h1 class="text-white text-center page-title">About</h1></div>
    </div>

    <div id="staff">
        <div class="container">
            <div class="my-5">
                <div class="row mb-5 text-center" id="numbers-and-icons">
                    <div class="col-sm mb-2" style="color: #e8bc4f;">
                        <ion-icon name="time"></ion-icon>
                        <br>
                        33 Years
                    </div>
                    <div class="col-sm mb-2" style="color: #8a33ac;">
                        <ion-icon name="color-palette"></ion-icon>
                        <br>
                        20 Styles
                    </div>
                    <div class="col-sm mb-2" style="color: #9cdbe1;">
                        <ion-icon name="home"></ion-icon>
                        <br>
                        3 Locations
                    </div>
                    <div class="col-sm mb-2" style="color: black;">
                        <ion-icon name="people"></ion-icon>
                        <br>
                        1 KP Dance Family
                    </div>
                </div>
                <img src="/images/about-fam.jpeg" alt="" class="img-fluid">
                <p class="text-center mt-2" id="about-welcome">
                    Nick and I would like to welcome you to KP Dance Center! When we say you are our <span>family</span>, we truly mean it. This is not just our business it is our <span>passion</span>. Sharing our <span>love of dance</span> with you child, all the while building their <span>confidence</span> is what we strive for every day. We want you to feel at ease leaving your most <span>valued</span> treasures in our capable hands. We believe in always keeping the lines of <span>communication</span> open, so please don’t hesitate to come to us with any questions or concerns you may have. Once again… welcome to our family. May we dance together for many years to come!
                </p>
            </div>
        </div>
{{--        <div class="pt-5">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm relative-img-wrap">--}}
{{--                        <img src="/images/teacher1.jpg" alt="" style="width: 300px;">--}}
{{--                        <div class="purple-overlap-box"></div>--}}
{{--                        <p class="about-name-sm">Miss Dana</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm relative-img-wrap">--}}
{{--                        <img src="/images/teacher2.jpg" alt="" style="width: 300px;">--}}
{{--                        <div class="purple-overlap-box"></div>--}}
{{--                        <p class="about-name-sm">Miss Corinne</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm relative-img-wrap">--}}
{{--                        <img src="/images/teacher7.jpg" alt="" style="width: 300px;">--}}
{{--                        <div class="purple-overlap-box"></div>--}}
{{--                        <p class="about-name-sm">Miss Sarah</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-5">--}}
{{--                    <div class="col-sm relative-img-wrap">--}}
{{--                        <img src="/images/teacher4.jpg" alt="" style="width: 300px;">--}}
{{--                        <div class="purple-overlap-box"></div>--}}
{{--                        <p class="about-name-sm">Megz</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm relative-img-wrap">--}}
{{--                        <img src="/images/teacher5.jpg" alt="" style="width: 300px;">--}}
{{--                        <div class="purple-overlap-box"></div>--}}
{{--                        <p class="about-name-sm">Miss Becca</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm relative-img-wrap">--}}
{{--                        <img src="/images/teacher6.jpg" alt="" style="width: 300px;">--}}
{{--                        <div class="purple-overlap-box"></div>--}}
{{--                        <p class="about-name-sm">Mr Nicholas</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="bg-blue-fade-flip mt-5 py-5">
                <div class="container text-center">
                    <h1 class="text-center" style="font-weight: 900; text-transform: uppercase;">Master Teachers That KPDC Has Welcomed</h1>
                    <span class="design-1">Emily Shock
                    </span>
                    <span class="design-2">Talia Favia
                    </span>
                    <span class="design-3">Mikey Alley
                    </span>
                    <span class="design-4">Will Wingfield
                    </span>
                    <span class="design-1">The Beat Freaks
                    </span>
                    <span class="design-2">Tyler Wall
                    </span>
                    <span class="design-3">Amara Barner
                    </span>
                    <span class="design-4">Clinton Edward
                    </span>
                    <span class="design-1">Kent Boyd
                    </span>
                    <span class="design-2">Comforte Fedoke
                    </span>
                    <span class="design-3">Billy Bell
                    </span>
                    <span class="design-4">Ade Obayomi
                    </span>
                    <span class="design-1">Stephen "Twitch" Boss
                    </span>
                    <span class="design-2">Sabra
                    </span>
                    <span class="design-3">Tyler Wall
                    </span>
                    <span class="design-4">Spellman Sisters
                    </span>
                    <span class="design-1">Theresa Stone
                    </span>
                    <span class="design-2">Kelsey Ludwig
                    </span>
                    <span class="design-3">Angel Armas
                    </span>
                    <span class="design-4">Brian Friedman
                    </span>
                    <span class="design-1">Teddy Tedholm
                    </span>
                    <span class="design-2">Jason Samuels Smith
                    </span>
                    <span class="design-3">Kelby Brown
                    </span>
                    <span class="design-4">Sheila Barker
                    </span>
                    <span class="design-1">Joshua Allen
                    </span>
                    <span class="design-2">Sean Van Derwilt
                    </span>
                    <span class="design-3">Noel Bajandas
                    </span>
                    <span class="design-4">Brandon Girouard
                    </span>
                    <span class="design-1">Tyce Diorio
                    </span>
                    <span class="design-2">Monique Borromeo
                    </span>
                    <span class="design-3">The All Star Strikers
                    </span>
                    <span class="design-4">Chaz Buzan
                    </span>
                    <span class="design-1">Kameron Bink
                    </span>
                    <span class="design-2">Amelia Lowe
                    </span>
                    <span class="design-3">Will Thomas
                    </span>
                    <span class="design-4">Derek Piquette
                    </span>
                    <span class="design-1">Megz Alfonso</span>
                    <span class="design-2">Shannon Mather</span>
                    <span class="design-3">Gianna Martello</span>
                </div>
            </div>
{{--    </div>--}}

@endsection
