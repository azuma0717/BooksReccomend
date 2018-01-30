<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('includes.header')

<!-- main -->
<header class="masthead bg-info text-white text-center">
    <div class="container">
        <div class="row vertical-offset-100">
        	<div class="col-md-4 col-md-offset-4" style="margin: 0 auto">
        		<div class="panel panel-default">
    			  	<div class="panel-heading">
    			    	<h3 class="panel-title" style="margin-bottom:30px">Books Uplaod</h3>
    			 	</div>
    			  	<div class="panel-body">
    			    	<form accept-charset="UTF-8" action="booksEdit" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        			    	  	<div class="form-group{{ $errors->has('bName') ? ' has-error' : '' }}">
        			    		    <input id="bName" placeholder="Book's name" type="text" class="form-control" name="bName" value="{{ old('bName') }}" required autofocus>
                          @if ($errors->has('bName'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('bName') }}</strong>
                              </span>
                          @endif

        			    		  </div>
                      <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                        <input id="reason" placeholder="Reason" type="text" class="form-control" name="reason" value="{{ old('reason') }}" required>

                        @if ($errors->has('reason'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reason') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <input class="form-control" id="file" name="avatar" type="file">
                      </div>

        			    		<input class="btn btn-lg btn-block" style="background-color:yellow; color:navy" name="upload" type="submit" value="Upload">
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
