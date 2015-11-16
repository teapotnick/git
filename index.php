<?php

echo '<link rel="stylesheet" type="text/css" href="css/SnowingEffect.css">';
// YYY
include('template-parts/header.php'); ?>

  <!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
    	<li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
    	<div class="item active">
    		<img src="/images/ps4_long.jpg" alt="First slide">
    		<div class="container">
    			<div class="carousel-caption">
    				<h1>PS4</h1>
    				<p>The Sony Playstation 4 is a quint essential Christmas present to get your kids if you haven't done so already. They'll probably want Metal Gear Solid 5 and the new Fallout.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
    			</div>
    		</div>
    	</div>
    	<div class="item">
    		<img src="/images/robot.png" alt="Second slide">
    		<div class="container">
    			<div class="carousel-caption">
    				<h1>Giant Killer Robot</h1>
    				<p>Alternatively you could buy your child a giant killer robot that is capably of detroying the human race. These can come in both remote control and mecha forms, with the mecha form allowing the child to augment their own body rather than control the device from a remote location.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
    			</div>
    		</div>
    	</div>
    	<div class="item">
    		<img src="/images/lair.jpg" alt="Third slide">
    		<div class="container">
    			<div class="carousel-caption">
    				<h1>Evil Lair</h1>
    				<p>Alternatively, if a robot and PS4 simply isn't enough, you can purchase a large space of land in a remote off shore location and build your child an evil lair. This will allow them to plan their attacks in private, and give them the space they need to design and build future evil devices.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
    			</div>
    		</div>
    	</div>
		<div class="item">
    		<img src="/images/grass.jpg" alt="Fourth slide">
    		<div class="container">
    			<div class="carousel-caption">
					<img src="/images/hamster1.gif" class="hamster" alt="Third slide">
					<img src="/images/hamster2.gif" class="hamster" alt="Third slide">
					<img src="/images/hamster3.gif" class="hamster" alt="Third slide">
					<img src="/images/hamster4.gif" class="hamster" alt="Third slide">
					<img src="/images/hamster5.gif" class="hamster" alt="Third slide">
					<br />
    				<h1>Dancing Hamsters</h1>
    				<p>Once considered a staple character of the early days of the internet, it's been long enough that these furry rodents now count as "retro" and they are back in season. People who purchased this item also bought The Dancing Baby.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
    			</div>
    		</div>
    	</div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    	<div class="col-lg-4">
    		<img class="img-circle" src="images/past.jpg" alt="PAST" style="width: 140px; height: 140px;">
    		<h2>Christmas Past</h2>
    		<p>Some muppet, on a guilt trip.</p>
    		<p><a class="btn btn-default" href="javascript:clickFirstButton()" role="button" style="background-color:#2fa9de" >View details &raquo;</a></p>
    	</div><!-- /.col-lg-4 -->
    	<div class="col-lg-4">
    		<img class="img-circle" src="images/present.jpg" alt="PRESENT" style="width: 140px; height: 140px;">
    		<h2>Christmas Present</h2>
    		<p>Some fat guy in need of a shave.</p>
    		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    	</div><!-- /.col-lg-4 -->
    	<div class="col-lg-4">
    		<img class="img-circle" src="images/future.jpg" alt="FUTURE" style="width: 140px; height: 140px;">
    		<h2>Christmas Future</h2>
    		<p>Judgemental prescient grim reaper style figure</p>
    		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    	</div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

	<script type="text/javascript" >
		function clickFirstButton(){
			alert("There are no details");
		}
	</script>

    <!-- START THE FEATURETTES -->

       <hr class="featurette-divider">

    <div class="row featurette">
    	<div class="col-md-7">
    		<h2 class="featurette-heading">This is a very Christmasy image. <span class="text-muted">It'll blow your mind.</span></h2>
    		<p class="lead">Look it's an image of... the corner of a fireplace.  But this is the first google image search result for "Christmas" for an image of this size.  At least there's a reindeer in there.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/image1.jpg" alt="Generic placeholder image">
    	</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/image2.jpg" alt="Generic placeholder image">
    	</div>
    	<div class="col-md-7">
    		<h2 class="featurette-heading">This is the next most Christmasy image on Google <span class="text-muted">See for yourself.</span></h2>
    		<p class="lead">If you reckognise these guys you may want to keep it yo yourself</p>
    	</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    	<div class="col-md-7">
    		<h2 class="featurette-heading">And lastly, this one.</h2>
    		<p class="lead">A very seasonal tree.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/image3.jpg" alt="Generic placeholder image">
    	</div>
    </div>

    <hr class="featurette-divider">
                                
    <div class="row featurette">
    	<div class="col-md-7">  
    		<h2 class="featurette-heading">Sweden's Donald Duck Christmas Eve</h2>
    		<p class="lead">In Sweden, on Christmas Eve, about half of the population settles down in front of the TV to watch a Donald Duck special called Kalle Anka which, along with its characters and cartoons, are ingrained in Swedish pop culture as a Christmas tradition.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/kalle-anka.jpg" alt="Kalle Anke">
    	</div>
    </div>

    <hr class="featurette-divider">
                                
    <div class="row featurette">
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/62331wct.jpg" alt="Kalle Anke">
    	</div>
    	<div class="col-md-7">  
    		<h2 class="featurette-heading">Merry Christmas Paul</h2>
    		<p class="lead">Paul McCartney earns $400,000 a year off his Christmas song, which is widely regarded as the worst song he ever recorded.</p>
    	</div>
    </div>

    <hr class="featurette-divider">
                                
    <div class="row featurette">
    	<div class="col-md-7">  
    		<h2 class="featurette-heading">Greek Christmas</h2>
    		<p class="lead">We frequently abbreviate Christmas as X-mas because of ancient tradition. X is the Greek letter "chi" which is an abbreviation for the word "Christ" in Greek.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/kalle-anka.jpg" alt="Kalle Anke">
    	</div>
    </div>

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
    	<p class="pull-right"><a href="#">Back to top</a></p>
    	<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div><!-- /.container -->

<?php include('template-parts/footer.php'); ?>
