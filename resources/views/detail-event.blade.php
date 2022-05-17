@include('temp.header')

<section class="py-5 bg-event" id="detail-event">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-lg-4">
                <img src={{'/storage/img/event/'.$event->poster}} class="w-100" alt="" srcset="">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h1>{{$event->title}}</h1>

                <h6 class="mt-4">Tata Tertib</h6>
                <ul class="mb-4">
                    <li>Pengguna yang telah terdaftar diharapkan hadir 15 menit sebelum acara dimulai</li>
                    <li>Pengguna dapat menghubungi admin jika ingin melakukan pembatalan</li>
                    <li>Pengguna diharapkan mengikuti jalannya acara secara kondusif</li>
                    <li>Link acara akan dikirimkan 30 menit sebelum acara dimulai</li>
                </ul>

                <script src="/js/cntdown.js"></script>
                <div class="row">
                    <div class="col-3 text-center">
                        <div
                            class="bg-white py-4 text-black fw-semibold fs-2 rounded-3" id="d{{$event->id}}">
                        </div>

                        <script>
                            var {{"idd".$event->id}} = "{{'d'.$event->id}}";
                            var {{"d".$event->id}} = document.getElementById({{"idd".$event->id}});
                            var {{'td'.$event->id}} = "{{$event->time}}";

                            setInterval(() => {
                                {{'d'.$event->id}}.innerHTML = 
                                    cntdown({{'td'.$event->id}}).days
                            }, 1000);

                        </script>
                        <div class="text-white">Day</div>
                    </div>
                    <div class="col-3 text-center">
                        <div id="h{{$event->id}}"
                            class="bg-white py-4 text-black fw-semibold fs-2 rounded-3">
                            </div>
                            <script>
                                var {{"idh".$event->id}} = "{{'h'.$event->id}}";
                                var {{'h'.$event->id}} = document.getElementById({{"idh".$event->id}});
                                var {{'th'.$event->id}} = "{{$event->time}}";
                                setInterval(() => {
                                    {{'h'.$event->id}}.innerHTML = 
                                        cntdown( {{'th'.$event->id}} ).hours

                                }, 1000);
                            </script>
                        <div class="text-white">Hr</div>
                    </div>
                    <div class="col-3 text-center">
                        <div id="m{{$event->id}}"
                            class="bg-white py-4 text-black fw-semibold fs-2 rounded-3">
                            </div>
                            <script>
                                var {{"idm".$event->id}} = "{{'m'.$event->id}}";
                                var {{"m".$event->id}} = document.getElementById({{"idm".$event->id}});
                                var {{'tm'.$event->id}} = "{{$event->time}}";
                                setInterval(() => {
                                    {{'m'.$event->id}}.innerHTML = 
                                        cntdown( {{'tm'.$event->id}} ).minutes

                                }, 1000);
                            </script>    
                        <div class="text-white">Min</div>
                    </div>
                    <div class="col-3 text-center">
                        <div id="s{{$event->id}}"
                            class="bg-white py-4 text-black fw-semibold fs-2 rounded-3">
                            </div>
                            <script>
                                var {{"ids".$event->id}} = "{{'s'.$event->id}}";
                                var {{"s".$event->id}} = document.getElementById({{"ids".$event->id}});
                                var {{'ts'.$event->id}} = "{{$event->time}}";
                                setInterval(() => {
                                    {{"s".$event->id}}.innerHTML = 
                                        cntdown({{'ts'.$event->id}} ).seconds

                                }, 1000);
                            </script>
                        <div class="text-white">Sec</div>
                    </div>
                </div>
                
                @if (! $join)
                <a href={{"/event/join/".str_replace(' ','__',$event->title)}}
                                            class="mt-4 btn btn-light rounded-pill w-100 fw-bold">JOIN
                                            EVENT</a>
                @else
                <p class="mt-4 text-center rounded-pill w-100 fw-bold">Selamat Anda Telah Terdaftar<br><span class="fw-normal">Silahkan check email anda</span></p>
                @endif
                
            </div>
        </div>
    </div>
</section>

@include('temp.footer')