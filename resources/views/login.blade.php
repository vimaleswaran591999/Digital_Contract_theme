
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tommorrow Souken</title>
    <!-- Add AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- Add AdminLTE CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"
    />

    <!-- Login CSS -->
    <link rel="stylesheet" type="text/css" href="login.css" />
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 order-md-2">
            <p>Image</p>
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3><strong>トゥモロー総研</strong> に ログイン</h3>
                </div>
                <form action="{{route('login')}}" method="post">
                  @if (Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if (Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                  <div class="form-group first">
                    <label for="username">メールアドレス</label>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control @if($errors->has('username')){{'is-invalid'}} @endif"
                        placeholder=""
                        id="username"
                        name="username"
                        value="{{old('username')}}" 
                      />
                      
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                      @if($errors->has('username')) 
                      <div class="invalid-feedback">{{$errors->first('username')}}</div>
                      @endif
                    </div>
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">パスワード</label>
                    <div class="input-group mb-3">
                      <input
                        type="password"
                        class="form-control 
                        @if($errors->has('password')){{'is-invalid'}} @endif
                        "
                        placeholder=""
                        id="password"
                        name="password"
                        
                      />
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                      @if($errors->has('password')) 
                      <div class="invalid-feedback">{{$errors->first('password')}}</div>
                      @endif
                    </div>
                  </div>
                  <div class="d-flex mb-5 align-items-center">
                    <div class="control__indicator"></div>

                    <span class="ml-auto"
                      ><a href="#" class="forgot-pass"
                        >パスワード再発行</a
                      ></span
                    >
                  </div>
                  <button type="submit"
                    
                    class="btn text-white btn-block btn-success"
                    >ログイン</button
                  >
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>