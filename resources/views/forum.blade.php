<!DOCTYPE html>
<html lang="en">

<head>
    <title>Events</title>
    @include('includes.header')
</head>

<body>

@include('includes.navbar')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Forum</h2>
        <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- required bootstrap js -->
    <button type="submit" name="commit" class="btn get-started-btn btn-sm" data-toggle="modal" data-target="#login">
      Login
    </button>

    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
              <span>Login <i class="fa fa-sign-in"></i></span>
            </button>
            <div class="text-center">
              <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="modal fade" id="signup" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Signup</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
            </div>
            <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
              <span>Signup <i class="fa fa-sign-in"></i></span>
            </button>
            <div class="text-center">
              <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  </main><!-- End #main -->

  @include('includes.footer')

</body>

</html>