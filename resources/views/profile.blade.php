<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('includes.header')

<!-- main -->
<header class="masthead bg-default text-gray text-center">
    <div class="container">
        <div class="row vertical-offset-100">
        	<div class="col-md-4 col-md-offset-4" style="margin: 0 auto">
        		<div class="panel panel-default">
    			  	<div class="panel-heading">
    			    	<h3 class="panel-title" style="padding-bottom:30px;">Profile Edit</h3>
    			 	</div>
    			  	<div class="panel-body">

    			    	<form accept-charset="UTF-8" action="/profile" method="post" enctype="multipart/form-data">
                    <fieldset>

                      <img src="/uploads/avatars/{{ $user->avatar }}" style="width:200px; height:200px;float:left; border-radius:5%; margin-left:70px; margin-bottom:50px;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        			    	  	<div class="form-group{{ $errors->has('bName') ? ' has-error' : '' }}">
        			    		    <input id="name" placeholder="Book's name" type="text" class="form-control" name="name" value="{{ $user->name}}" required autofocus >
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('bName') }}</strong>
                              </span>
                          @endif

        			    		  </div>
                      <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                        <input id="email" placeholder="Reason" type="text" class="form-control" name="email" value="{{ $user->email }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reason') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <input class="form-control" id="file" name="avatar" type="file">
                      </div>

        			    		<input class="btn btn-lg btn-block" style="background-color:gray; color:white" name="update" type="submit" value="Update">

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
