@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: auto;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title">Classes</h1>
        </div>
    </div>

    <div class="container my-5">

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header class-cat-1" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Northport Summer Dance Classes
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=NPT&Session=2020%20Summer%20Classes&sort=StartDate,Days,StartTime"></script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-2" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kings Park Summer Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=KP&session=2020%20Summer%20Classes&sort=StartDate,Days,StartTime"></script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-3" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Kings Park Summer Camps
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=KP&Session=2020%20Summer%20Camps&sort=StartDate,Days,StartTime"></script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-4" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            High School Musical Workshop
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Session=2020%20High%20School%20Musical&sort=StartDate,Days,StartTime"></script>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
