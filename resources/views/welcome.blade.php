@extends('layouts.app')
@section('content')

    @include('mobile')
    <div id="laptop-intro" class="d-none d-md-block">
        <div class="d-none stoplight-info">
            <p class="mb-0">Classes moved to online only</p>
        </div>
        <div id="stoplight">
            <div class="row">
                <div class="col stoplight-col d-flex align-items-center justify-content-end">
                    <div class="triangle-top-right"></div>
                </div>
                <div class="col stoplight-col">
                    <div class="stop-block"></div>
                    <div class="red-light light-circle"></div>
                </div>
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-left"></div>
                </div>
            </div>
            <div class="row">
                <div class="col stoplight-col d-flex align-items-center justify-content-end">
                    <div class="triangle-top-right"></div>
                </div>
                <div class="col stoplight-col">
                    <div class="stop-block"></div>
                    <div class="yellow-light light-circle"></div>
                </div>
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-left"></div>
                </div>
            </div>
            <div class="row">
                <div class="col stoplight-col d-flex align-items-center justify-content-end">
                    <div class="triangle-top-right"></div>
                </div>
                <div class="col stoplight-col">
                    <div class="stop-block"></div>
                    <div class="green-light light-circle"></div>
                </div>
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-left"></div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <img src="/images/kings-park-dance-logo.png" alt="" style="width: 200px; height: auto;">
        </div>
        <div class="row mt-4 mx-0">
            <div class="col p-0">
                <img src="/images/kings-park-dance-head-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col p-0">
                <img src="/images/kings-park-dance-head-1.jpg" alt="" class="img-fluid">
            </div>
        </div>

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

    <div class="bg-blue-fade">
        <div class="container py-5">
            <div class="text-center main-about-txt">
                <span class="main-about-span">For over 30 years</span><br>One stop shop for dance, acting, and voice.<br>Creating community for all ages!
            </div>
            <p class="text-center">KP Dance Center is a family owned and operated studio that has been providing quality dance instruction to the Kings Park and surrounding areas since 1987. Here at KP Dance Center, the enthusiasm of your child to learn dance is what drives us. We pride ourselves in creating an environment that is warm, inviting and reminiscent of "home". </p>
            <div id="trial-modal" class="d-flex justify-content-center">
                <div data-toggle="modal" data-target="#trymodal" class="purple-rectangle d-flex align-items-center justify-content-center" style="cursor: pointer; width: 50%;">
                    <div>
                        <p class="pt-0 my-0 text-center">
                            FREE TRIAL
                        </p>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="trymodal" tabindex="-1" role="dialog" aria-labelledby="trymodalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-ivory text-white">
                            <div>
                                <img src="/images/freetrialform.jpeg" alt="" style="width: 100%;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="p-2"><ion-icon name="close-outline"></ion-icon></span>
                                </button>
                            </div>
                            <h5 class="modal-title text-dark text-center mt-2" id="trymodalLabel">Your First Class FREE</h5>
                            <small class="text-muted text-center">Limited availability. For a short time only.</small>
                            <div class="modal-body text-left text-dark mx-2">
                               @include('/trial/create')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card-columns">
            <div class="card">
                <img src="/images/kings-park-little-dancer.jpeg" alt="" class="img-fluid">
            </div>
            <div class="card">
                <img src="/images/kings-park-dance-group.jpeg" alt="" class="img-fluid">
            </div>
            <div class="card mt-4 border-0">
                <p id="mosaic-quote">"Creating <span>confident</span> and <span>enthusiastic</span> dancers one step at a time."</p>
            </div>
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

    <div>
        <img src="/images/kings-park-barre.jpg" alt="" class="img-fluid">
    </div>

    <div class="row m-0">
        <div class="col-sm text-center p-0 mb-3">
            <div class="gold-head class-style-title">Traditional<br><span class="class-desc">regular class sizes &middot; ages 1.5 and up</span></div>
            <p class="font-weight-bold">Twinkle Babies 1 1/2 - 2yrs old</p>
            <p>The perfect start for your dancer!  Dancers will have an introduction to ballet, tap, and creative movement while using props to inspire imagination, creativity, and most of all- FUN!</p>
            <div class="d-flex justify-content-center"><div class="gold-bar mb-3"></div></div>
            <p class="font-weight-bold">Twinkle Stars 3 - 6yrs old</p>
            <p>A class consisting of ballet, tap and jazz/creative movement. Dancers will build their skills and steps and begin to learn terminology in a fun and positive environment.  "Freeze Dance" is always a highlight for this class!</p>
            <a href="/classes"><button class="btn gold-btn">MORE</button></a>
        </div>
        <div class="col-sm text-center p-0 mb-3">
            <div class="purple-head class-style-title">Private<br><span class="class-desc">one on one instruction &middot; ages 7 and up</span></div>
            <p>One on one training in all of our offered styles- tap, jazz, ballet, voice, cheer, acting and more!  Private lessons provide targeted and goal oriented training for your child.  Perfect for students looking to work on flexibility, turns, leaps, cheer stunts and more</p>
            <a href="https://app3.jackrabbitclass.com/regv2.asp?id=540329" target="_blank"><button class="btn purple-btn">SIGN UP TODAY!</button></a>
        </div>
        <div class="col-sm text-center p-0 mb-3">
            <div class="blue-head class-style-title">Semi-Private<br><span class="class-desc">controlled class size (6-9) &middot; ages 3 and up</span></div>
            <p class="font-weight-bold">Stars Hip Hop 6 & up</p>
            <p>One of our most popular classes! Students have a great time learning the latest dance styles. They will be working isolations and encouraged to add their own style to movements. All music as well as steps are clean and age appropriate.</p>
            <div class="d-flex justify-content-center"><div class="blue-bar mb-3"></div></div>
            <p class="font-weight-bold">Technique 6 & up</p>
            <p>The basis of all fundamentals of dance, from holding your body correctly while performing, to executing skills properly in a routine. Strong technique extends across all areas of dance, regardless of the style of your routine.</p>
            <a href="/classes"><button class="btn blue-btn">MORE</button></a>
        </div>
        <div class="col-sm text-center p-0 mb-3">
            <div class="black-head class-style-title">Online<br><span class="class-desc">train from home &middot; ages 3 and up</span></div>
            <p class="font-weight-bold">Funky Tutu 4-6 yrs old</p>
            <p>We have combined two of our most popular classes! Dancers will develop flexibility, balance, and control through classicAL ballet and switch it up for the creative and energetic moves of today’s latest hip hop.</p>
            <div class="d-flex justify-content-center"><div class="black-bar mb-3"></div></div>
            <p class="font-weight-bold">Broadway Babies 3-5 yrs old</p>
            <p>An energetic, fun combination of Jazz and Tap. Dancers will be introduced to the beginning foundations of both styles, while dancing and grooving to energetic music.</p>
            <a href="/classes"><button class="btn black-btn">MORE</button></a>
        </div>
    </div>

    <div style="background: #8a33ac;" class="mt-5 text-white text-center">
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
        <div class="container py-5">
            <div class="row">
                <div class="col-sm"><img src="/images/partner1.png" alt="" class="img-fluid"></div>
                <div class="col-sm"><img src="/images/partner2.png" alt="" class="img-fluid"></div>
                <div class="col-sm"><img src="/images/partner6.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

@endsection
