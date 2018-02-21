<!--/**
 * Created by PhpStorm.
 * User: petersdata
 * @author Peter Street
 * Date: 2/6/18
 * Time: 12:46 PM
 */
 -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>pwp</title>
		<!-- Here is the required bootstrap meta tags (taken from class materials)-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Add Custom CSS Here -->
<link rel=""stylesheet" href="css/style.css"
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>
	<body>
		<div>
			<!--
			Here is the top navbar (found on www.getbootstrap.com)
			navbar has no l/r margins - containers with container-fluid are the same
			the float is set to top so the bar stays on top of the document
			fixed stays on the top of the page and ruined the layout,
			the navbar is dark, with a dark background
			the brand, which allows text, is justified center
			I would like to learn how to get the three dot/buttons on the left! -->
			<nav class="navbar float-top navbar-dark bg-info justify-content-center ">
				<a class="navbar-brand" href="#">Peter Street's Personal Web Site Project</a>
			</nav>
		</div>


		<!--Here I created a div and created a container. my is margins top and bottom mx is margins left to right -->
		<div class="container my-3 mx-5">
			<!-- navbar with "Bootstrap Challenge" Title and 4 "links" aligned right.
			 Here I created a navbar that will expanded when medium. with light text and background and rounded border-->
			<nav class="navbar navbar-expand-md navbar-info justify-content-center bg-light border rounded">
				<!-- the  navbar-brand gets our text in the nav bar -->
				<a class="navbar-brand" href="#">AbqGig!</a>
				<!--Here I created buttons that collapse in white. Again sample  -->
				<button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarToggler">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Here I continue the with the collapsable button "elements" and order them from left to right and justify them on the right or end -->
				<div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
					<!-- Here I create the unordered list which creates the "links"
					The mt settings affect the thickness of the navbar-->
					<ul class="navbar-nav ml-auto mt-0 mt-sm-0">
						<li class="nav-item">
							<a class="nav-link" href="#">What are we doing?</a>
						</li>
						<li class="nav-item align-items-center">
							<a class="nav-link" href="#">Our Strategies:</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Why are we doing it?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Who is AbqGig</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="jumbotron container mt-5 bg-primary text-white">
				<h1 class="display-4">AbqGig!</h1>
				<p class="lead">Making Albuquerque a Smart Gigabit City</p>
			</div>
			<div class="jumbotron container mt-5 bg-secondary text-white">
				<h1 class="display-4">What are we doing?</h1>
				<p class="lead">AbqGig is a community broadband working group between the technology industry, academic institutions, research labs, local governments, businesses, startups, and residents working togeather to improve the high-speed broadband infrastructure and service in Albuquerque, NM</p>
				</p>
			</div>
			<div class="jumbotron container mt-5 bg-info text-white">
				<h1 class="display-4">Our Strategies:</h1>
				<p class="lead">Educate Private and Public Sector Stakeholders</p>
				<p class="lead">Locate new technologies in emergent industries that drive next gen gig applications</p>
				<p class="lead">Bringing modern wireless technology to underserved communities</p>
			</div>
				<div class="jumbotron container mt-5 bg-success text-white">
					<h1 class="display-4">Why are we doing it?</h1>
					<p class="lead">To support policies that improve broadband competition by encouraging and removing barriers to the deployment of high-speed networks.</p>
				</p>
			</div>



		</div>

		<div class="container-fluid bg-light my-4 p-5">
			<div class="row align-items-center">
				<div class="col-lg-4 text-center">
					<a href="https://placeimg.com/250/250/nature"><img src="https://placeimg.com/250/250/nature"></a>
				</div>
				<div class="col-lg-8 align-self-center p-4">
					<h1>Mozilla and NSF </h1>
					<h2>Wireless Innovation for a Networked Society</h2>
					<h3>AbqGig | BarelasGig | Honorable Mention</h3>
				</div>
			</div>
		</div>
		<!-- Bottom section with 4 rounded images and text boxes -->
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/174/174/nature"><img src="https://placeimg.com/174/174/nature" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Ric Aguilar</p>
					</div>

				</div>
				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/animals"><img src="https://placeimg.com/175/175/animals" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Tom Feldman</p>
					</div>
				</div>

				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/architecture"><img src="https://placeimg.com/175/175/architecture" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Michael Sanchez</p>
					</div>
				</div>

				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/tech"><img src="https://placeimg.com/175/175/tech" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Peter Street</p>
					</div>
				</div>
			</div>
		</div>
		<form class="container my-3 mx-5">
			<div class="form-group">
				<label for="userContactForm">Your Email address</label>
				<input type="email" class="form-control" id="userInputEmail" aria-describedby="emailHelp" placeholder="Enter your email please">
				<small id="emailHelp" class="form-text text-muted">I will sell your email for as much money as I can!</small>
			</div>

			<div class="form-group">
				<label for="userContactForm">Please use your social security number as your password</label>
				<input type="password" class="form-control" id="userInputPassword" aria-describedby="passwordHelp" placeholder="Enter your password please"> <small id="passwordHelp" class="form-text text-muted">I have already have a buyer for your social security number!</small>
			</div>
			<div class="container">
				<h2>Please type your message here!</h2>
				<p>We will certainly ignore all requests submitted:</p>
				<form>
					<div class="form-group">
						<label for="comment">Message:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</form>
			</div>
			<div>

			</div>
			<div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>

		</form>
		<!-- Here is the bottom navbar (found on www.getbootstrap.com) with adjusted float, not fixed,text is dark, with a dark background, and justified center. Not clear what the navbar-brand or href do but when I remove the "elements" the text is dark so I left them in! Additionally I can not get the bottom bar to extend to the sides of the page like I did the top bar.-->
<div>
	<nav class="navbar navbar-fixed-bottom navbar-dark bg-dark justify-content-center">
		<a class="navbar-brand" href="#">Funny text at the bottom of the page!</a>
	</nav>
</div>
	</body>
</html>