@extends('layouts.app')
@section('content')

    @include('mobile')
    <div id="laptop-intro" class="d-none d-md-block">

        <div class="main-bg">
            <img src="/images/home-page-june.png" alt="little dancers" class="img-fluid">
            <div class="main-form" style="max-width: 500px;">
                <div class="form-content">
{{--                    <div class="main-logo">--}}
{{--                        @include('logo')--}}
{{--                    </div>--}}
                    <h1 class="page-title text-center" style="transform: rotate(0deg); font-size: 2.25em;">Start Your Dance Journey Today</h1>
                    <h2 class="page-title text-center" style="transform: rotate(0deg); font-size: 1em;">Make your first step the right step<br>with KP Dance Center</h2>
                    @include('/trial/create')
                </div>
            </div>
        </div>

{{--        @include('logo')--}}
{{--        <div class="row mt-4 mx-0">--}}
{{--            <div class="col p-0">--}}
{{--                <div class="text-center">--}}
{{--                    <h1 class="page-title" style="transform: rotate(0deg)">Start Your Dance Journey Today</h1>--}}
{{--                    <p>Make your first step the right step with KP Dance Center</p>--}}
{{--                </div>--}}
{{--                <div class="pb-4 px-3 d-flex align-items-center justify-content-center">--}}
{{--                    @include('/trial/create')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col p-0">--}}
{{--                <img src="/images/kings-park-dance-head-2.jpg" alt="" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}

        <p class="page-title-no-rotate text-center lead my-5">We’ve Taught Over 10,000 Children To Dance</p>
        <div style="height: 90vh;" class="text-center my-5" id="parallax-quotes">
            <div class="rellax" data-rellax-speed="-2" data-rellax-zindex="0" id="q-back-layer">
                <p class="word" id="word6">Our happy place
                    <br><span class="quotee">- Laura D</span>
                </p>
                <p class="word" id="word7">Boys dance too!
                    <br><span class="quotee">- Brandon N</span>
                </p>
                <p class="word" id="word19">The place to be
                    <br><span class="quotee">- Chris G</span>
                </p>
                <p class="word" id="word14">Very nurturing
                    <br><span class="quotee">- Zoie B</span>
                </p>
                <p class="word" id="word15">Our dance family
                    <br><span class="quotee">- The Hollands</span>
                </p>
                <p class="word" id="word26">Our happy place
                    <br><span class="quotee">- Ivy G</span>
                </p>
                <p class="word" id="word21">Our second family
                    <br><span class="quotee">- Jenn Z</span>
                </p>
            </div>
            <div class="rellax" data-rellax-speed="-1" data-rellax-zindex="1" id="q-mid-back-layer">
                <p class="word" id="word1">My kids happy place
                    <br><span class="quotee">- Robustellis</span>
                </p>
                <p class="word" id="word2">More than a dance studio
                    <br><span class="quotee">- Jen S</span>
                </p>
                <p class="word" id="word10">Quality and fun
                    <br><span class="quotee">- Kerri A</span>
                </p>
                <p class="word" id="word4">Our home away from home
                    <br><span class="quotee">- Shannon M</span>
                </p>
                <p class="word" id="word5">Love our KPDC family!
                    <br><span class="quotee">- Megan H</span>
                </p>
                <p class="word" id="word18">The best, barre none
                    <br><span class="quotee">- Lisa P</span>
                </p>
                <p class="word" id="word22">The best dance studio!
                    <br><span class="quotee">- Valdes</span>
                </p>
            </div>
            <div class="rellax" data-rellax-speed="1" data-rellax-zindex="2" id="q-mid-top-layer">
                <p class="word" id="word8">Our daughter's second home
                    <br><span class="quotee">- Lombardis</span>
                </p>
                <p class="word" id="word9">Dedicated teachers and staff
                    <br><span class="quotee">- Amy F</span>
                </p>
                <p class="word" id="word3">Studio with heart and talent
                    <br><span class="quotee">- Melissa M</span>
                </p>
                <p class="word" id="word11">KP Dance is on pointe
                    <br><span class="quotee">- Corinne M</span>
                </p>
                <p class="word" id="word23">Professional & inspiring
                    <br><span class="quotee">- Mary Kay D</span>
                </p>
                <p class="word" id="word24">An amazing experience
                    <br><span class="quotee">- Yekaterina M</span>
                </p>
            </div>
            <div class="rellax" data-rellax-speed="2" data-rellax-zindex="3" id="q-top-layer">
                <p class="word" id="word16">Studio with passion & heart
                    <br><span class="quotee">- Kupersmiths</span>
                </p>
                <p class="word" id="word17">Top notch ensemble of teachers
                    <br><span class="quotee">- Mary Kay D</span>
                </p>
                <p class="word" id="word20">Great classes for boys too!
                    <br><span class="quotee">- Karyn M</span>
                </p>
                <p class="word" id="word12">Raising confidence in their dancers
                    <br><span class="quotee">- Julie L</span>
                </p>
                <p class="word" id="word13">Builds character, strength and friendships!
                    <br><span class="quotee">- Kristina N</span>
                </p>
                <p class="word" id="word25">Best Birthday parties, hands down!
                    <br><span class="quotee">- Kathleen D</span>
                </p>
            </div>
        </div>
    </div>

{{--    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 mx-0">--}}
{{--        <div class="col p-0">--}}
{{--            <img src="/images/color-block-1.png" alt="dance with friends" class="img-fluid">--}}
{{--        </div>--}}
{{--        <div class="col p-0">--}}
{{--            <img src="/images/color-block-2.png" alt="make great kids" class="img-fluid">--}}
{{--        </div>--}}
{{--        <div class="col p-0">--}}
{{--            <img src="/images/color-block-3.png" alt="healthy and happy" class="img-fluid">--}}
{{--        </div>--}}
{{--        <div class="col p-0">--}}
{{--            <img src="/images/color-block-4.png" alt="tech enabled studio" class="img-fluid">--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="bg-blue-fade">
        <div class="row m-0 p-0 d-flex align-items-center justify-content-end">
            <div class="col-sm m-0 p-0">
                <div class="p-5">
                    <div>
                        <h1 class="text-center page-title" style="transform: rotate(0deg);">For over 30 years</h1>
                        <h2 class="text-center page-title" style="transform: rotate(0deg); font-size: 1em;">One stop shop for dance, acting, and voice. Creating community for all ages!</h2>
                        <p class="text-center">KP Dance Center is a family owned and operated studio that has been providing quality dance instruction to the Kings Park and surrounding areas since 1987. Here at KP Dance Center, the enthusiasm of your child to learn dance is what drives us. We pride ourselves in creating an environment that is warm, inviting and reminiscent of "home". </p>
                        <div class="d-flex justify-content-center">
                            <a href="/about"><button class="btn purple-rectangle-trial mt-2">Learn More</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    <img src="/images/summer-yay.gif" alt="yay summer" class="img-fluid">--}}

{{--    <div class="container mt-4">--}}
{{--        <div class="card-columns">--}}
{{--            <div class="card">--}}
{{--                <a href="https://bestof.longislandpress.com/voting/#/gallery/?group=365642" target="_blank" class="event-register-click">--}}
{{--                    <img src="/images/best-dance-best-party.gif" alt="best children's dance and party nomination" class="img-fluid" style="margin: 0 auto; display: block;">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <img src="/images/kings-park-dance-group.jpeg" alt="" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="card mt-4 border-0">--}}
{{--                <p id="mosaic-quote">"Creating <span>confident</span> and <span>enthusiastic</span> dancers one step at a time."</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div>
        <img src="/images/kings-park-barre.jpg" alt="" class="img-fluid">
    </div>

{{--    <div>--}}
{{--        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 m-0 p-0">--}}
{{--            <img src="/images/class-1.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-2.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-3.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-4.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-5.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-6.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-7.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-8.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-9.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-10.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-11.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-12.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-13.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-14.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-15.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-16.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-17.png" alt="class style" class="img-fluid">--}}
{{--            <img src="/images/class-18.png" alt="class style" class="img-fluid">--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row m-0 p-0 text-center">
        <div class="col-sm p-0 m-0">
            <div class="gold-head class-style-title">Traditional<br><span class="class-desc">regular class sizes &middot; ages 1.5 and up</span></div>
        </div>
        <div class="col-sm p-0 m-0">
            <div class="purple-head class-style-title">Private<br><span class="class-desc">one on one instruction &middot; ages 7 and up</span></div>
        </div>
        <div class="col-sm p-0 m-0">
            <div class="blue-head class-style-title">Semi-Private<br><span class="class-desc">controlled class size (6-9) &middot; ages 3 and up</span></div>
        </div>
        <div class="col-sm p-0 m-0">
            <div class="black-head class-style-title">Online<br><span class="class-desc">train from home &middot; ages 1.5 and up</span></div>
        </div>
    </div>

    <div class="bg-blue-fade-flip">
        <div class="container">
            <div class="row m-0 py-5">
                <div class="col-sm-5 d-flex align-items-end">
                    <img src="/images/kings-park-safer-studio.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-7 d-flex align-items-center justify-content-center">
                    <div>
                        <h1 class="page-title m-0" style="transform: rotate(0deg);">Why KP Dance Center?</h1>
                        <p id="why-list">
                            <br><span>1. </span> Small class sizes for more concentrated instruction.
                            <br><span>2. </span> Well designed curriculum in place for optimal learning and enjoyment.
                            <br><span>3. </span> Voice and acting classes offered for our aspiring pop idols and movie stars.
                            <br><span>4. </span> Find a class that fits you. Multiple class offerings and instructor options.
                            <br><span>5. </span> Floor to ceiling mirrors enable our students to see their feet from any area of the dance floor.
                            <br><span>6. </span> Staff certified in first aid and CPR.
                            <br><span>7. </span> Professional safety sprung raised flooring to prevent injury to our dancers.
                            <br><span>8. </span> Friendly, well qualified staff always available to answer questions.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background: #8a33ac;" class="text-white text-center">
        <div class="container">
            <h1 class="pt-5">Looking for...</h1>
            <div class="row">
                <div class="col-sm my-5">
                    <ion-icon name="star" style="font-size: 2.75em;"></ion-icon>
                    <h2 class="text-uppercase" style="font-weight: 800;">Cheer</h2>
                    <p>
                        <span class="style-class-title">Cheernastics</span>
                        <br>Our tumbling classes focus on the gymnastics skills that are associated with the sport and activity of cheerleading. Along with Hip Hop skills and fun.
                    </p>
                    <a href="https://app3.jackrabbitclass.com/regv2.asp?id=540329" target="_blank"><button class="btn btn-style-reg">Register Now</button></a>
                </div>
                <div class="col-sm my-5">
                    <ion-icon name="bulb" style="font-size: 2.75em;"></ion-icon>
                    <h2 class="text-uppercase" style="font-weight: 800;">Acting</h2>
                    <p>
                        <span class="style-class-title">Theatre</span>
                        <br>During this class participants will work on vocals, dancing, acting and exercises.
                    </p>
                    <a href="https://app3.jackrabbitclass.com/regv2.asp?id=540329" target="_blank"><button class="btn btn-style-reg">Register Now</button></a>
                </div>
                <div class="col-sm my-5">
                    <ion-icon name="mic" style="font-size: 2.75em;"></ion-icon>
                    <h2 class="text-uppercase" style="font-weight: 800;">Voice</h2>
                    <p>
                        <span class="style-class-title">Glee</span>
                        <br>Just like the hit show, a combination of dancing and singing to your favorite popular songs. Professional choreographers and vocal coaches work with the students to fine tune their skills.
                    </p>
                    <a href="https://app3.jackrabbitclass.com/regv2.asp?id=540329" target="_blank"><button class="btn btn-style-reg">Register Now</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-fade">
        <div class="py-5">
            <div id="partner-images" class="row m-0 p-0">
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/partner1.png" alt="" class="img-fluid"></div>
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/partner2.png" alt="" class="img-fluid"></div>
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/partner6.png" alt="" class="img-fluid"></div>
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/logo-safer-studio.png" alt="" class="img-fluid" style="filter: invert(100%);"></div>
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/logo-background-check.png" alt="" class="img-fluid"></div>
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/logo-sou.png" alt="" class="img-fluid"></div>
                <div class="col-sm d-flex justify-content-center p-0 my-1"><img src="/images/logo-tech-enabled.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

@endsection
