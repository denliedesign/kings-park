@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <a href="/"><img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: 157px;"></a>
    </div>

    <div class="bg-blue-fade py-5 mt-5 d-flex justify-content-center">
        <div class="purple-box-head d-flex align-items-center justify-content-center">
            <h1 class="text-white text-center page-title">Classes</h1>
        </div>
    </div>

    <div class="container my-5">
        <p class="text-center">Don't see a class or time you're looking for? <a href="#footer">Contact us</a> so we may be able to accommodate you. Thank you</p>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header class-cat-4" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Northport Fall Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=NPT&session=2020%20-%202021%20Fall%20Season&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-1" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Kings Park Fall Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=KP&session=2020%20-%202021%20Fall%20Season&sort=StartDate,Days,StartTime&Hidecols=Ages,Openings"></script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header class-cat-2" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Smithtown Fall Dance Classes
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=540329&Loc=SMT&session=2020%20-%202021%20Fall%20Season&sort=StartDate,Days,StartTime"></script>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
