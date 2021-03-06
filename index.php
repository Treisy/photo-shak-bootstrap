<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PhotoShak</title>
	<link rel="stylesheet" href="css/vendors/bootstrap.min.css">
	<link rel="stylesheet" href="css/vendors/lightbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--nav section-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">PhotoShak</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav pull-right">
					<li class="active">
						<a id="three-columns">3 Column Layout</a>
					</li>
					<li>
						<a id="four-columns">4 Column Layout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="20000">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						</ol>
						
						<!--Slides-->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/sample1.jpg" class="img-thumbnail">
							</div>

							<div class="item">
								<img src="img/sample2.jpg" class="img-thumbnail">
							</div>

							<div class="item">
								<img src="img/sample3.jpg" class="img-thumbnail">
							</div>

							<div class="item">
								<img src="img/sample4.jpg" class="img-thumbnail">
							</div>

							<div class="item">
								<img src="img/sample5.jpg" class="img-thumbnail">
							</div>

							<div class="item">
								<img src="img/sample6.jpg" class="img-thumbnail">
							</div>
						</div>

						<!--Controls-->
						<a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--Tabs Container-->
	<section>
		<div class="container">
			<div role="tabpanel">
				<!--Tabs-->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Photos</a>
					</li>
					<li role="presentation">
						<a href="#one" aria-controls="one" role="tab" data-toggle="tab">Category One</a>
					</li>
					<li role="presentation">
						<a href="#two" aria-controls="two" role="tab" data-toggle="tab">Category Two</a>
					</li>
				</ul>

				<!--Tab Panes-->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="all">
						<div class="row">
							<div class="col-md-4">
								<a href="img/sample1.jpg" data-lightbox="gallery" data-title="Sample Image One">
									<img src="img/sample1.jpg" class="img-thumbnail">
									<div class="title">Sample Image One</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample2.jpg" data-lightbox="gallery" data-title="Sample Image Two">
									<img src="img/sample2.jpg" class="img-thumbnail">
									<div class="title">Sample Image Two</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample3.jpg" data-lightbox="gallery" data-title="Sample Image Three">
									<img src="img/sample3.jpg" class="img-thumbnail">
									<div class="title">Sample Image Three</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample4.jpg" data-lightbox="gallery" data-title="Sample Image Four">
									<img src="img/sample4.jpg" class="img-thumbnail">
									<div class="title">Sample Image Four</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample5.jpg" data-lightbox="gallery" data-title="Sample Image Five">
									<img src="img/sample5.jpg" class="img-thumbnail">
									<div class="title">Sample Image Five</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample6.jpg" data-lightbox="gallery" data-title="Sample Image Six">
									<img src="img/sample6.jpg" class="img-thumbnail">
									<div class="title">Sample Image Six</div>
								</a>
							</div>
						</div>
					</div>

					<!--Tab panel Category One-->
					<div role="tabpanel" class="tab-pane" id="one">
						<div class="row">
							<div class="col-md-4">
								<a href="img/sample1.jpg" data-lightbox="gallery" data-title="Sample Image One">
									<img src="img/sample1.jpg" class="img-thumbnail">
									<div class="title">Sample Image One</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample2.jpg" data-lightbox="gallery" data-title="Sample Image Two">
									<img src="img/sample2.jpg" class="img-thumbnail">
									<div class="title">Sample Image Two</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample3.jpg" data-lightbox="gallery" data-title="Sample Image Three">
									<img src="img/sample3.jpg" class="img-thumbnail">
									<div class="title">Sample Image Three</div>
								</a>
							</div>
						</div>
					</div>

					<!--Tab panel Category Two-->
					<div role="tabpanel" class="tab-pane" id="two">
						<div class="row">
							<div class="col-md-4">
								<a href="img/sample4.jpg" data-lightbox="gallery" data-title="Sample Image Four">
									<img src="img/sample4.jpg" class="img-thumbnail">
									<div class="title">Sample Image Four</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample5.jpg" data-lightbox="gallery" data-title="Sample Image Five">
									<img src="img/sample5.jpg" class="img-thumbnail">
									<div class="title">Sample Image Five</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="img/sample6.jpg" data-lightbox="gallery" data-title="Sample Image Six">
									<img src="img/sample6.jpg" class="img-thumbnail">
									<div class="title">Sample Image Six</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/vendors/jquery-3.2.1.min.js"></script>
	<script src="js/vendors/bootstrap.min.js"></script>
	<script src="js/vendors/lightbox.js"></script>
	<script src="js/main.js"></script>
</body>
</html>