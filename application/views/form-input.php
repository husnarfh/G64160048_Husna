 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"></link>
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<title>Register</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

		body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #333;
}

.carousel {
  margin-bottom: 4rem;
}

.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

.carousel-item {
  height: 32rem;
  background-color: #333;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}

.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}

.featurette-divider {
  margin: 5rem 0; 
}

.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


@media (min-width: 40em) {

  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

	#container {
		margin: 10px;
	}

	.form-signin {
 	 	width: 100%;
  		max-width: 330px;
  		padding: 15px;
  		margin: 0 auto;
	}

	label {
 	 	color: #000;
 	 	font-family: inherit;
	}

	.mastfoot {
  color: rgba(0, 0, 0, .5);
  text-align: center;
}
	</style>
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Booksie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="welcome">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Donate</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
<div id="container">
	<div id="body">
		<a href="<?php echo site_url('welcome') ?>"><button type="button" class="btn btn-primary">Back</button></a>
		<form action="<?php echo site_url('welcome/insert') ?>" method="POST" class="form-signin">
		<div class="form-group">
    	<label for="exampleInputName1">Book Title</label>
    	<input type="text" name="title" class="form-control" id="exampleInputName1"placeholder="Enter book title">
  </div>
		<div class="form-group">
    	<label for="exampleInputEmail1">Email</label>
    	<input type="email" name="email" class="form-control" id="exampleInputEmail1"placeholder="Enter your email">
  </div>
			<div class="form-group">
    	<label for="exampleInputNumber1">ISBN</label>
    	<input type="number" name="isbn" class="form-control" id="exampleInputIsbn1"placeholder="Enter ISBN">
  </div>
			<div class="form-group">
    	<label for="exampleFormControlGender1">Genre</label>
    <select name="genre" class="form-control" id="exampleFormControlGenre1">
      <option>Fiction</option>
      <option>Non-Fiction</option>
</select>
  </div>
			<div class="form-group">
    	<label for="exampleInputSynopsis1">Synopsis</label>
    	<input type="text" name="synopsis" class="form-control" id="exampleInputSynopsis1" placeholder="Enter the synopsis">
  </div>
			<button type="submit" class="btn btn-primary">Submit</button

		</form>
	</div>
<br>
<br>
	<footer class="mastfoot">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
      </footer>	
</div>

</body>
</html>