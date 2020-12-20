<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Favicon -->
<link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- Icons -->
<link href="{{ asset('/assets1/vendor/nucleo/css/nucleo.min.css') }}" rel="stylesheet">
<link href="{{ asset('/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

<!-- Argon CSS -->
<link type="text/css" href="{{ asset('/assets1/css/argon.min.css') }}" rel="stylesheet">
</head>
<body>

    <div class="row">
        <div class="col-md-4" id="login-button">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">

                  <div class="modal-body p-0">

      <div class="card bg-secondary border-0 mb-0">
          <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>


                  <div class="btn-wrapper text-center">
                      <a href="#" class="btn btn-neutral btn-icon">
                          <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                          <span class="btn-inner--text">Github</span>
                      </a>
                      <a href="#" class="btn btn-neutral btn-icon">
                          <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                          <span class="btn-inner--text">Google</span>
                      </a>
                  </div>


          </div>
          <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                  <small>Or sign in with credentials</small>
              </div>
              <form role="form">
                  <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email" type="email">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Password" type="password">
                      </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin">
                          <span class="text-muted">Remember me</span>
                      </label>
                  </div>
                  <div class="text-center">
                      <button type="button" class="btn btn-primary my-4">Sign in</button>
                  </div>
              </form>
          </div>
      </div>




                  </div>

              </div>
          </div>
      </div>

        </div>
      </div>
  <!-- Core -->
<script src="{{ asset('/assets1/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Argon JS -->
<script src="{{ asset('/assets1/js/argon.min.js') }}"></script>
</body>
</html>
