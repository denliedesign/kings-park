@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center" style="overflow:hidden; position: relative;">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title">Parties</h1>
        </div>
        <img src="/images/confetti-fg-4.png" alt="" class="img-fluid confetti-fg rellax d-none d-md-block" data-rellax-speed="-3">
    </div>

    <div id="parties" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 relative-img-wrap">
                    <img src="/images/kings-park-parties.jpeg" alt="" class="img-fluid">
                    <div class="purple-overlap-square-left d-none d-md-block"></div>
                </div>
                <div class="col-sm-7 d-flex align-items-center">
                    <div>
                        <p class="text-center" style="font-weight: 700; font-size: 1.75em; color: #8a33ac; ">
                            Hassle-Free Birthday Parties Starting At Only $300
                        </p>
                        <p class="text-center">
                            Looking for a fun and exciting venue to have your child's birthday party? Look no further! We at KP Dance Center realize how stressful it can be to plan a party, so let us do all the work while you sit back and enjoy a birthday party to always remember. We offer many packages and themes to suit every budget and birthday boy or girl. So stop in today and book the party of your child's dreams.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-7 d-flex align-items-center">
                    <div>
                        <p class="text-center" style="font-weight: 700; font-size: 1.75em; color: #8a33ac; ">
                            Birthdays Include
                        </p>
                        <p class="text-capitalize">
                            &#9830; Invite 16 friends.
                            <br>&#9830; 2 rooms rentals
                            <br>&#9830; DJ party lights
                            <br>&#9830; Food: Pizza, Cake, Juice & Water
                            <br>&#9830; All decorations and supplies
                            <br>&#9830; 90 minutes of dancing, games, & entertainment
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 relative-img-wrap">
                    <img src="/images/kings-park-party-table.jpeg" alt="" class="img-fluid">
                    <div class="purple-overlap-box d-none d-md-block"></div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-5 relative-img-wrap">
                    <img src="/images/kings-park-birthday-party.jpeg" alt="" class="img-fluid">
                    <div class="purple-overlap-square-left d-none d-md-block"></div>
                </div>
                <div class="col-sm-7 d-flex align-items-center">
                    <div>
                        <p class="text-center" style="font-weight: 700; font-size: 1.75em; color: #8a33ac; ">
                            Set your party apart!
                        </p>
                        <p class="text-center">
                            Contact us today to reserve a date for your next party. Trust our family-owned and operated business to provide you with affordable solutions for all your issues. When you hire us, we'll make sure your event is unique in every way.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
