@extends('layouts.app')
@section('content')

    @include('logo')

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title">Classes</h1>
        </div>
    </div>

    <div class="container my-5">
        <p class="text-center sticky-top blue-head py-3 font-weight-bold text-dark">Don't see a class or time you're looking for? <a href="#footer">Contact us</a> so we may be able to accommodate you. Thank you</p>
        <p class="text-center">All classes can be taken virtually or in person.</p>
        <div class="accordion" id="accordionExample">
{{--            <div class="card">--}}
{{--                <div class="card-header class-cat-4" id="headingFour">--}}
{{--                    <h2 class="mb-0">--}}
{{--                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">--}}
{{--                            Northport Fall Dance Classes--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">--}}
{{--                    <div class="card-body">--}}
{{--                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=NPT&session=2020%20-%202021%20Fall%20Season&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-center pb-5">--}}
{{--                        <div class="purple-rectangle text-center" style="width: 50%;">--}}
{{--                            <a href="/calendar" class="text-white">View Our Calendar</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-header class-cat-1" id="headingFive">--}}
{{--                    <h2 class="mb-0">--}}
{{--                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">--}}
{{--                            Kings Park Fall Dance Classes--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">--}}
{{--                    <div class="card-body">--}}
{{--                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=KP&session=2020%20-%202021%20Fall%20Season&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-center pb-5">--}}
{{--                        <div class="purple-rectangle text-center" style="width: 50%;">--}}
{{--                            <a href="/calendar" class="text-white">View Our Calendar</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-header class-cat-2" id="headingSix">--}}
{{--                    <h2 class="mb-0">--}}
{{--                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">--}}
{{--                            Smithtown Fall Dance Classes--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">--}}
{{--                    <div class="card-body">--}}
{{--                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=SMT&session=2020%20-%202021%20Fall%20Season&sort=StartDate,Days,StartTime"></script>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-center pb-5">--}}
{{--                        <div class="purple-rectangle text-center" style="width: 50%;">--}}
{{--                            <a href="/calendar" class="text-white">View Our Calendar</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- summer -->

            <div class="card">
                <div class="card-header class-cat-4" id="headingSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Northport Summer Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=NPT&session=2021%20Summer%20Classes&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                    <div class="card-footer d-flex justify-content-center pb-5">
                        <div class="purple-rectangle text-center" style="width: 50%;">
                            <a href="/calendar" class="text-white">View Our Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-1" id="headingEight">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Kings Park Summer Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=KP&session=2021%20Summer%20Classes&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                    <div class="card-footer d-flex justify-content-center pb-5">
                        <div class="purple-rectangle text-center" style="width: 50%;">
                            <a href="/calendar" class="text-white">View Our Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-2" id="headingNine">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Smithtown Summer Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=SMT&session=2021%20Summer%20Classes&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                    <div class="card-footer d-flex justify-content-center pb-5">
                        <div class="purple-rectangle text-center" style="width: 50%;">
                            <a href="/calendar" class="text-white">View Our Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-4" id="headingTen">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Northport Summer Dance Camps
                        </button>
                    </h2>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=NPT&session=2021 Summer Camps&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                    <div class="card-footer d-flex justify-content-center pb-5">
                        <div class="purple-rectangle text-center" style="width: 50%;">
                            <a href="/calendar" class="text-white">View Our Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-1" id="headingEleven">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            Kings Park Summer Dance Camps
                        </button>
                    </h2>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=KP&session=2021%20Summer%20Camps&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                    <div class="card-footer d-flex justify-content-center pb-5">
                        <div class="purple-rectangle text-center" style="width: 50%;">
                            <a href="/calendar" class="text-white">View Our Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-2" id="headingTwelve">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            Smithtown Summer Dance Camps
                        </button>
                    </h2>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=SMT&session=2021%20Summer%20Camps&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                    <div class="card-footer d-flex justify-content-center pb-5">
                        <div class="purple-rectangle text-center" style="width: 50%;">
                            <a href="/calendar" class="text-white">View Our Calendar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container my-5">
        <div class="row m-0 p-0">
            <div class="col-sm m-0 p-0">
                <a href="/images/kp-summer-1.pdf" target="_blank"><img src="/images/kp-summer-1.png" alt="summer" class="img-fluid"></a>
            </div>
            <div class="col-sm m-0 p-0">
                <a href="/images/kp-summer-2.pdf" target="_blank"><img src="/images/kp-summer-2.png" alt="summer" class="img-fluid"></a>
            </div>
        </div>
    </div>

@endsection
