@include('temp.header')

<section class="bg-event" id="detail-event">
    <div class="container-fluid py-5 position-relative" style="background : url('/storage/img/service/{{$service->gambar}}'); ">
        <div class="bg-event-service"></div>
        <div class="container position-relative" style="z-index: 2">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg-4 p-3 rounded-pill bg-blue">
                        <p class="p-0 m-0 text-center text-white"><span class="h2">{{$service->nama}}'</span> Events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
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
    </div>
</section>

@include('temp.footer')