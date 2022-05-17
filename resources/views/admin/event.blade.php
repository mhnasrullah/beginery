@include('admin.template.header')

<div class="container py-5">
    <div class="row">
        <div class="col-12 col-lg-3 mb-4">
            {{-- form --}}
            <div class="card">
                <div class="card-body">
                    <h5>Tambah Event</h5>
                    <form method="POST" action="/a/event" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" required name="title">
                        </div>
                        <div class="mb-3">
                          <label for="time" class="form-label">Time</label>
                          <input type="datetime-local" class="form-control" id="time" required name="time">
                        </div>
                        <div class="mb-3">
                          <label for="poster" class="form-label">Poster</label>
                          <input type="file" class="form-control" id="poster" required name="poster">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                {{-- list --}}
                @foreach ($event as $e)    
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src={{'/storage/img/event/'.$e->poster}} style="object-fit: cover; object-position: center;" class="card-img-top w-100" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{$e->title}}</h5>
                            <p class="card-text">On : {{$e->time}}</p>
                            <hr>
                            <div class="d-flex gap-3">
                                <a href="/a/event/e/{{$e->id}}" class="btn btn-info px-4">Edit</a>
                                <a href="/a/event/d/{{$e->id}}" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@include('admin.template.footer')