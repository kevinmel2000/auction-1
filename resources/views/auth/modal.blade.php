
@if (count($errors) > 0)
    <div class="container">
    <div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                    </div>
@endif
  <!-- Log in Modal dialog -->
  <div id="logInModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
        </div>

        <form id="login" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">

          <div class="modal-body">
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <a class="btn btn-link" href="#" data-toggle="modal" data-dismiss="modal" data-target="#resetPassword">Forgot Your Password?</a>

              </div>
            </div>

          </div><!-- .modal-body -->

          <div class="modal-footer">
            <button type="button" class="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="button">Login</button>
          </div>
        </form>
      </div>

    </div><!-- /.modal-dialog -->
  </div>  <!-- /.modal -->




 <!-- Reset Password Modal dialog -->
  <div id="resetPasswordModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Reset</h4>
        </div>
  	<form id="resetPassword" class="form-horizontal" role="form" method="POST" action="/password/email">

          <div class="modal-body">

		<div class="form-group">
			<label class="col-md-4 control-label">E-Mail Address</label>
			<div class="col-md-6">
				<input type="email" class="form-control" name="email" value="{{ old('email') }}">
			</div>
		</div>

          </div><!-- .modal-body -->

          <div class="modal-footer">
           <button type="button" class="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="button">
					Send Password Reset Link
				</button>
          </div>
        </form>
      </div>

    </div><!-- /.modal-dialog -->
  </div>  <!-- /.modal -->

 <!-- Sign Up Modal dialog -->
  <div id="signUpModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
        </div>

        <form id="signUpModal" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">

          <div class="modal-body">

            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Address</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">City</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="city" value="{{ old('city') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">State</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="state" value="{{ old('state') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Zip</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Confirm Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
              </div>
            </div>
          </div><!-- .modal-body -->
          <div class="modal-footer">
            <button type="button" class="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="button">Sign Up</button>
          </div>

        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  @section('js')
    $('#logInModal, #resetPasswordModal, #signUpModal').on('show.bs.modal', function (event) {
      var modal = $(this)
        var $form =   modal.find('form');
        $form.append($('<input type="hidden" name="_token" value="{{ csrf_token() }}">'));
})


  @endsection
