<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('admin_panel/assets/images/favicon.png')}}" />
  </head>
    <div class="content-wrapper d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color: #ADD8E6;">
        <div class="row w-100">
            <div class="col-md-6 mx-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Admin Login</h4>
                    <form class="forms-sample" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <div class="form-check">
        <label class="form-check-label text-muted">
            <input type="checkbox" class="form-check-input" name="remember">
            Remember me
            <i class="input-helper"></i>
        </label>
    </div>

    <button type="submit" class="btn btn-primary me-2">Login</button>
</form>

                  </div>
                </div>
              </div>
</div>
</div>

  <script src="{{asset('admin_panel/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin_panel/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('admin_panel/assets/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/template.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/todolist.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/file-upload.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/typeahead.js')}}"></script>
    <script src="{{asset('admin_panel/assets/js/select2.js')}}"></script>
  </body>
</html>