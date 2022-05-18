@include('admin.template.header')

<div class="container py-5">
    <div class="row">
        <div class="col-12 col-lg-3 mb-4">
            {{-- form --}}
            <div class="card">
                <div class="card-body">
                    <h5>Tambah Service</h5>
                    <form method="POST" action="/a/service" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" required name="nama">
                        </div>
                        <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar</label>
                          <input type="file" class="form-control" id="gambar" required name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                {{-- list --}}
                @foreach ($service as $s)    
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src={{'/storage/img/service/'.$s->gambar}} style="object-fit: cover; object-position: center;" class="card-img-top w-100" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{$s->nama}}</h5>
                            <hr>
                            <div class="d-flex gap-3">
                                <a href="/a/service/e/{{$s->id}}" class="btn btn-info px-4">Edit</a>
                                <a href="/a/service/d/{{$s->id}}" class="btn btn-danger">Hapus</a>
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