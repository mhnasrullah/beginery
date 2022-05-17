@include('admin.template.header')

<div class="container py-5">
    <div class="row">
        <div class="col-12 col-lg-3 mb-4">
            {{-- form --}}
            <div class="card">
                <div class="card-body">
                    <h5>Edit Event</h5>
                    <form method="POST" action="/a/event/u/{{$event->id}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="lastposter" value={{$event->poster}}>
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" required name="title" value={{$event->title}}>
                        </div>
                        <div class="mb-3">
                          <label for="time" class="form-label">Time</label>
                          <input type="datetime-local" class="form-control" id="time" required name="time" value={{str_replace(' ','T',$event->time)}}>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Last Poster</label>
                            <img src={{'/storage/img/event/'.$event->poster}} class="w-100" style="object-fit: cover; object-position: center;" alt="" height="200px">
                        </div>
                        <div class="mb-3">
                          <label for="poster" class="form-label">Poster</label>
                          <input type="file" class="form-control" id="poster" name="poster">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.template.footer')