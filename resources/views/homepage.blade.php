@include('temp.header')
    <main id="banner" class="container-fluid banner bg-banner pb-5 d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center vh-80 justify-content-center">
                <div class="foto col-12 col-md-5 col-lg-6 order-md-2">
                    <img class="w-80 img-fluid" src="assets/banner_foto.png"
                        alt="three people with we should begin tagline">
                </div>
                <div class="banner-content col-12 col-md-7 col-lg-6 order-md-1">
                    <img class="img-fluid" src="assets/regineery.png" alt="logo beginnery">
                    <p class="fs-4 my-2">We believe that something big start with a little step.</p>
                    <div class="button">
                        <a target="_blank" href="https://www.instagram.com/beginnery.co/">
                            <button class="btn btn-default button-home">
                                <img src="assets/social-logo/instagram.svg" alt="intagram beginnery.co">Instagram
                            </button>
                        </a>
                        <a target="_blank" href="https://linktr.ee/Beginnery.co">
                            <button class="btn btn-default button-home linktree">
                                <img src="assets/social-logo/linktree.svg" alt="linktree beginnery.co" /> Link.tree
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section id="who-are-we">
        <div class="container-fluid bg-about pt-4">
            <div class="container">
                <div class="row py-5 align-items-center d-md-flex d-block justify-content-center">
                    <div class="col-md-5 about-one col-12 py-4">
                        <img class="img-fluid" src="assets/who-we-are.png" alt="who we are">
                    </div>
                    <div class="col-md-7 about-two fs-3 col-12">
                        <p>
                            <strong>Beginnery</strong> is a platform that focuses and provides
                            <strong>education</strong> about digital space to helps the
                            youngsters to <strong>prepare their future career</strong> in the digital <strong>creative
                                industry</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid about2">
            <div class="container">
                <div class="row about-content2">
                    <div class="col-4 about-three fs-1 lh-1">
                        <p class="my-auto mx-3">Grow & develop together</p>
                    </div>
                    <div class="col-4 about-four fs-1 lh-1">
                        <p class="my-auto mx-3">break your limit</p>
                    </div>
                    <div class="col-4 about-five fs-1 lh-1">
                        <p class="my-auto mx-3">know yourself better</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="event">
        <div class="container-fluid pt-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 event-heading">
                        <h2 class="title">Upcoming Event
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-event">
            <div class="container py-4">
                <div class="row">
                    <script src="/js/cntdown.js"></script>
                    @foreach ($event as $e)
                    <div class="col-lg-6 col-12">
                        <div class="card mb-3 bg-transparent border-0" style="max-width: 660px;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src={{'/storage/img/event/'.$e->poster}} class="img-fluid rounded-start"
                                        alt="poster test" style="object-fit : cover; object-position: center;">
                                </div>
                                <div class="col-md-7 p-4 d-flex align-items-center">
                                    <div class="card-body font-event">
                                        <h5 class="card-title head-event1">{{$e->title}}</h5>
                                        <div class="row mb-3">
                                            <div class="col-3 text-center">
                                                <div
                                                    class="bg-white py-3 py-md-1 text-black fw-semibold fs-5 rounded-3" id="d{{$e->id}}">
                                                </div>
                                                <script>
                                                    var {{"idd".$e->id}} = "{{'d'.$e->id}}";
                                                    var {{'d'.$e->id}} = document.getElementById({{"idd".$e->id}});
                                                    var {{'td'.$e->id}} = "{{$e->time}}";

                                                    setInterval(() => {
                                                        {{'d'.$e->id}}.innerHTML = 
                                                            cntdown({{'td'.$e->id}}).days
                                                    }, 1000);
                                                </script>
                                                <div class="text-white">Day</div>
                                            </div>
                                            <div class="col-3 text-center">
                                                <div id="h{{$e->id}}"
                                                    class="bg-white py-3 py-md-1 text-black fw-semibold fs-5 rounded-3">
                                                    </div>
                                                    <script>
                                                        var {{"idh".$e->id}} = "{{'h'.$e->id}}";
                                                        var {{'h'.$e->id}} = document.getElementById({{"idh".$e->id}});
                                                        var {{'th'.$e->id}} = "{{$e->time}}";
                                                        setInterval(() => {
                                                            {{'h'.$e->id}}.innerHTML = 
                                                                cntdown( {{'th'.$e->id}} ).hours

                                                        }, 1000);
                                                    </script>
                                                <div class="text-white">Hr</div>
                                            </div>
                                            <div class="col-3 text-center">
                                                <div id="m{{$e->id}}"
                                                    class="bg-white py-3 py-md-1 text-black fw-semibold fs-5 rounded-3">
                                                    </div>
                                                    <script>
                                                        var {{"idm".$e->id}} = "{{'m'.$e->id}}";
                                                        var {{"m".$e->id}} = document.getElementById({{"idm".$e->id}});
                                                        var {{'tm'.$e->id}} = "{{$e->time}}";
                                                        setInterval(() => {
                                                            {{'m'.$e->id}}.innerHTML = 
                                                                cntdown( {{'tm'.$e->id}} ).minutes

                                                        }, 1000);
                                                    </script>    
                                                <div class="text-white">Min</div>
                                            </div>
                                            <div class="col-3 text-center">
                                                <div id="s{{$e->id}}"
                                                    class="bg-white py-3 py-md-1 text-black fw-semibold fs-5 rounded-3">
                                                    </div>
                                                    <script>
                                                        var {{"ids".$e->id}} = "{{'s'.$e->id}}";
                                                        var {{"s".$e->id}} = document.getElementById({{"ids".$e->id}});
                                                        var {{'ts'.$e->id}} = "{{$e->time}}";
                                                        setInterval(() => {
                                                            {{"s".$e->id}}.innerHTML = 
                                                                cntdown({{'ts'.$e->id}} ).seconds

                                                        }, 1000);
                                                    </script>
                                                <div class="text-white">Sec</div>
                                            </div>
                                        </div>
                                        <a href={{"/event/".str_replace(' ','__',$e->title)}}
                                            target="_blank" type="button"
                                            class="btn btn-light rounded-pill w-100 fw-bold">JOIN
                                            EVENT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    @endforeach
                </div>
                        {{ $event->links() }}
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container-fluid pt-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 event-heading">
                        <h2 class="title">Our Content
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white">
            <div class="container">
                <ul class="content-body">
                    <li class="content-item bg-blue active">
                        <div class="section-title justify-content-center">
                            <img class="img-fluid" src="assets/content-logo/graphic-cycle-logo.svg"
                                alt="graphic cycle logo">
                        </div>
                        <div class="section-content">
                            <p class="mx-4 fs-5">
                                Graphic Cycle is a class segment that focuses on learning all about
                                graphics, starting
                                from graphic design, motion graphics, to videography.
                            </p>
                        </div>
                    </li>
                    <li class="content-item bg-purple">
                        <div class="section-title justify-content-center">
                            <img class="img-fluid" src="assets/content-logo/creative-marketing-logo.svg"
                                alt="creative marketing logo">
                        </div>
                        <div class="section-content">
                            <p class="mx-4 fs-5">
                                Creative Marketing is a class segment that focuses on learning
                                Marketing starting from basic marketing, digital marketing to creative marketing.
                            </p>
                        </div>
                    </li>
                    <li class="content-item bg-blue">
                        <div class="section-title justify-content-center">
                            <img class="img-fluid" src="assets/content-logo/socmed-creative-logo.svg"
                                alt="social media creative logo">
                        </div>
                        <div class="section-content">
                            <p class="mx-4 fs-5">
                                Social Media Creative is a class segment that focuses on learning
                                Branding through
                                social media, by increasing the use of social media for certain needs.
                            </p>
                        </div>
                    </li>
                    <li class="content-item bg-purple">
                        <div class="section-title justify-content-center">
                            <img class="img-fluid" src="assets/content-logo/web-dev-logo.svg"
                                alt="web development logo">
                        </div>
                        <div class="section-content">
                            <p class="mx-4 fs-5">
                                Web Development is a class segment that focuses on learning the world
                                of web basic
                                development, starting from programming fundamentals to UI/UX designers.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="collaborate" class="bg-white mt-5">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 collaborate-heading">
                        <h2 class="title">Let's Collaborate
                    </div>
                </div>
                <div class="row">
                    @foreach($service as $s)
                    <div class="col-12 col-md-6 my-4">
                        <div class="card bg-blue border-0 text-white text-center">
                            <div class="card-body">
                                <h5 class="card-title heading-collaborate1">{{$s->nama}}</h5>
                                <a href="{{'/s/'.$s->id}}" class="btn btn-light rounded-pill my-3 px-5 py-2">LET'S BEGIN!</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $service->links() }}
                </div>
            </div>
        </div>
    </section>


    @include('temp.footer');