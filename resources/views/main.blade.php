<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<!-- main -->
<header class="masthead bg-primary text-white text-center">
  <div class="container">
    <img class="img-fluid mb-5 d-block mx-auto" src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:150px; height:150px;float:left; border-radius:50%; margin-left:25px;margin-top:-50px">

    <h1 class="text-uppercase mb-0">Books Reccomend</h1>
    <hr class="star-light">
    <h2 class="font-weight-light mb-0">You can check a Reccomendation books everytime</h2>
  </div>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">Reccomendation Books</h2>
    <hr class="star-dark mb-5">
    <div class="row">

<!-- ////////////////////////books date display//////////////////////////////////////////////////////////////// -->
    @foreach($data as $value)
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-{{$value->id}}">
          <div class="portfolio-item-caption d-flex position-absolute h-100" style="width:86%; border-radius:5%;">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="/uploads/images/{{$value->image}}" style="border-radius:5%" alt="">
        </a>
        <h4 style="margin-top:-30px">{{$value->bName}}</h4>
      </div>

<!--//////////-/ Portfolio Modal  /////////////////////////////////////////-->
      @if ($value->uid == Auth::user()->id)
      <div class="portfolio-modal mfp-hide" id="portfolio-modal-{{$value->id}}">
        <div class="portfolio-modal-dialog bg-white">
          <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
          </a>
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2 class="text-secondary text-uppercase mb-0">{{$value->bName}}</h2>
                <h3 class="text-secondary text-uppercase mb-0">My Reccomendation</h3>
                <hr class="star-dark mb-5">
                <img class="img-fluid mb-5" src="/uploads/images/{{$value->image}}" alt="">
                <p class="mb-5">{{$value->reason}}</p>
                <a class="btn btn-danger btn-lg rounded-pill" href="/delete/{{$value->id}}">
                  <i class="fa fa-close"></i>
                  Delete</a>
                  <a class="btn btn-warning btn-lg rounded-pill" href="/edit&{{$value->id}}">
                    <i class="fa fa-close"></i>
                    Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @else
      <div class="portfolio-modal mfp-hide" id="portfolio-modal-{{$value->id}}">
        <div class="portfolio-modal-dialog bg-white">
          <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
          </a>
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2 class="text-secondary text-uppercase mb-0">{{$value->bName}}</h2>
                <h3 class="text-secondary text-uppercase mb-0">{{$value->uName}}'s Reccomendation</h3>
                <hr class="star-dark mb-5">
                <img class="img-fluid mb-5" src="/uploads/images/{{$value->image}}" alt="">
                <p class="mb-5">{{$value->reason}}</p>
                <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                  <i class="fa fa-close"></i>
                  Close Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endguest
    @endforeach
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->

    </div>
  </div>
</section>

    <!-- Footer -->
@include('includes.footer')

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

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
