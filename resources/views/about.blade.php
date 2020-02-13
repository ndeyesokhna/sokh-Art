<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sokhna'Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('temp/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('temp/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('temp/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('temp/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('temp/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('temp/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/style.css')}}">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+221773553486</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">sokhnatoure454@gail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">vente de tableau d'art &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Sokhna'Art</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse"
		  
		  data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
		   aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	     
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link">  ACCUEIl</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Boutiques</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{route('shop')}}">Boutiques</a>
              	<a class="dropdown-item" href="{{route('wishlist')}}">Liste de souhaits</a>
                <a class="dropdown-item" href="{{route('product_single')}}">Produit unique</a>
                <a class="dropdown-item" href="{{route('cart')}}"> Mon panier</a>
                <a class="dropdown-item" href="{{route('checkout')}}">Caissier </a>
               
                
              </div>
            </li>

	  
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

	        </ul>
	      </div>
	    </div>
    </nav>
    
    <section class="ftco-section ftco-degree-bg">
  
    			<div class="ftco-animate">
          <div class="container">
    		<div class="d-flex justify-content-center">
    			<div class="">
    				
    				<div class="product">
            <div class="">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{$product->image ? asset($product->image)
						 : asset('uploads/images/default.png')}}" alt="Colorlib Template" style="width:253px; height:246px;">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$product->name}}</a></h3>
                <h2> <a href="#">{{$product->catogory->name}}  </a></h2>
    						<div class="pricing">
		    						<p class="price"><span class="mr-2 ">{{$product->description}}</p>
		    					</div>
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 ">{{$product->price}}</p>
		    					</div>
	    					</div>
                </div>
    				</div>
    			</div>
          </div>
			

   </section>




      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Abonnez-vous à notre newsletter</h2>
          	<span>Recevez des mises à jour par e-mail sur nos dernières boutiques et nos offres spéciales</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter  votre email">
                <input type="submit" value="Envoyer" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sokhna'Art</h2>
               
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Magasin</a></li>
                <li><a href="#" class="py-2 d-block">À propos</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contactez-nous</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Aidez-moi</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Informations sur la livraison</a></li>
	                <li><a href="#" class="py-2 d-block">Résultats &amp;Échange</a></li>
	                <li><a href="#" class="py-2 d-block">termes &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Politique de confidentialité</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQ</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Vous avez des questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Dakar sacre coeur</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+221773553486</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sokhnatoure454 gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
			
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('temp/js/jquery.min.js')}}"></script>
  <script src="{{asset('temp/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('temp/js/popper.min.js')}}"></script>
  <script src="{{asset('temp/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('temp/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('temp/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('temp/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('temp/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('temp/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('temp/js/aos.js')}}"></script>
  <script src="{{asset('temp/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('temp/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('temp/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('temp/js/google-map.js')}}"></script>
  <script src="{{asset('temp/js/main.js')}}"></script>
    
  </body>
</html>