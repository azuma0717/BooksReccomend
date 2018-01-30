<!DOCTYPE html>
<html lang="en">

    <!-- Header -->
@include('includes.header')

<!-- main -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <div class="row vertical-offset-100">
        	<div class="col-md-4 col-md-offset-4" style="margin: 0 auto">
        		<div class="panel panel-default">
    			  	<div class="panel-heading">
    			    	<h3 class="panel-title" style="margin-bottom:30px">Please sign in</h3>
    			 	</div>
    			  	<div class="panel-body">
    			    	  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        			    	  	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <input id="email" placeholder="E-mail" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
        			    		  </div>
        			    		<div class="form-group">
        			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
        			    		</div>
        			    		<input class="btn btn-lg btn-success btn-block" name="login" type="submit" value="Login">
    			    	      </fieldset>
    			      </form>
    			    </div>
    			</div>
    		</div>
    	</div>
</header>


    <!-- Footer -->
@include('includes.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
