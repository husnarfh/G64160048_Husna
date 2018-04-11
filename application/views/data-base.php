<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"></link>
  	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<title>Book List</title>

	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #fff;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 40px 0 14px 0;
		padding: 40px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #fff;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em){
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}

	.mt-auto, .my-auto {
    margin-top: auto!important;
  }

	.mastfoot {
  	color: #000;
     margin: 300px 0 0 0;
     text-align: center;
	}

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

	</style>
</head>
<body>
 <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index/">Booksie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index/">Home <span class="sr-only"></span></a>
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
	<br>
	<br>
	<div id="body">
	<div class="row">
  <div class="column"></div>
	<table class="table table-bordered table-dark">
		<thead>
			<tr>
				<th scope="col">ID Book</th>
				<th scope="col">Book Title</th>
				<th scope="col">Email</th>
				<th scope="col">ISBN</th>
				<th scope="col">Genre</th>
				<th scope="col">Synopsis</th>
				<th scope="col">Option</th>
			</tr>
			</thead>
			<?php 
			$id = 1;
			foreach($hasil as $r){ ?>
			<tr>
				<th><?php echo $id++ ?></th>
				<th><?php echo $r['title'] ?></th>
				<th><?php echo $r['email'] ?></th>
				<th><?php echo $r['isbn'] ?></th>
				<th><?php echo $r['genre'] ?></th>
				<th><?php echo $r['synopsis'] ?></th>
				<th><a href="<?php echo site_url('welcome/form_edit/'.$r['id_book']) ?>" class="btn btn-primary">Edit</a> ||
			<button type="button" class="btn btn-secondary"><a href="<?php echo site_url('welcome/delete/'.$r['id_book']) ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a></button></th>
			</tr>
			<?php } ?>

		</table>
	<div class="column"></div>


		</div>
			
	</div>

<footer class="mastfoot">
     <div class="inner">
     <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
      </footer>	
</div>

</body>
</html>