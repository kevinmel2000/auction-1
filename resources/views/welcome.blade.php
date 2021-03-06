@extends('app')
@section('content')
<div class="container">

@include('auth.modal')
 
  <section>
  	<div id="banner_outer">
    	<div id="banner_inner">
      	<h1 id="banner_text">Want some<br/>mercury?</h1>
			</div>
  	</div>
  	<div id="sign_outer">
    	<table id="sign_inner">
				<tr>
					<td id="log_in_box">
						<a href="#" data-toggle="modal" data-target="#logInModal"  >Log In</a>
					</td>
					<td id="sign_up_box">
						<a href="#" data-toggle="modal" data-target="#signUpModal"   >Sign Up</a>
					</td>
				</tr>
      </table>
  	</div>
  </section>

</div>
@yield('registration')
@endsection