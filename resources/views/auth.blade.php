@include('temp.header')

<section class="bg-banner" style="padding: 50px 0">
    <div class="container">
      @if (session('scs'))
        <div class="row">
          <div class="col">
            <div class="alert alert-success" role="alert">
              {{session('scs')}}
            </div>
          </div>
        </div>
      @endif
      @if (session('err'))
        <div class="row">
          <div class="col">
            <div class="alert alert-danger" role="alert">
              {{session('err')}}
            </div>
          </div>
        </div>
      @endif
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Register Now..</h4>
                        <form action="/auth/reg" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="name" class="form-label">Nama</label>
                              <input type="text" class="form-control rounded-pill" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control rounded-pill" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control rounded-pill" id="password" name="password" minlength="8" required>
                            </div>
                            <div class="mb-3">
                              <label for="tanggal" class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control rounded-pill" id="tanggal" name="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control rounded-pill" id="alamat" name="alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="profesi" class="form-label">Profesi</label>
                                <input type="text" class="form-control rounded-pill" id="profesi" name="profesi" required>
                            </div>
                            <button type="submit" class="btn button-home  bg-event text-white rounded-pill w-100 fw-bold">Register</button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Have an account?</h4>
                        <form action="/auth/log" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control rounded-pill" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control rounded-pill" id="password" name="password" minlength="8" required>
                            </div>
                            <button type="submit" class="btn button-home  bg-event text-white rounded-pill w-100 fw-bold">Login</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('temp.footer')