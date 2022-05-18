@include('admin.template.header')

<div class="container py-5">
    <div class="row">
        <div class="col-12 col-lg-3 mb-4">
            {{-- form --}}
            <div class="card">
                <div class="card-body">
                    <h5>Edit service</h5>
                    <form method="POST" action="/a/service/u/{{$service->id}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="lastgambar" value={{$service->gambar}}>
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" required name="nama" value="{{$service->nama}}">
                        </div>
                        <div class="mb-3">
                          <label class="mb-2">Gambar</label>
                          <img src={{'/storage/img/service/'.$service->gambar}} class="w-100 mb-3" style="object-fit: cover; object-position: center;" alt="" height="200px">
                          <input type="file" class="form-control" id="Gambar" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.template.footer')