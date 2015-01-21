<?php //Use with http://alphapixels.com/prepros/ , must be used before any content is output (ie, functions.php)
$lastModified=filemtime(__FILE__); 
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Expert Las Vegas contractors answer questions about home remodeling and basic renovations." />
<title>Las Vegas Contractor for Home Renovations | Expert Answers to FAQ about Remodeling</title>
<meta name="keywords" content="Las Vegas contractor,expert home renovation answers,repair and remodeling questions" />
<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700|Roboto+Slab:400,500,700|Roboto+Condensed:400italic,500,400,700" rel="stylesheet" type="text/css">
<!-- Bootstrap core CSS 
<link href="../css/bootstrap.min.css" rel="stylesheet">-->

<!-- Add custom CSS here-->
<link rel="stylesheet" type="text/css" href="css/theme.css">

<!-- LESS
<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js"></script> -->

<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->
<style>
.carousel-inner .active.left {
	left: -33%;
}
.carousel-inner .next {
	left: 33%;
}
.carousel-inner .prev {
	left: -33%;
}
<!--
.carousel-control.left, .carousel-control.right {
	background-image: none;
}
-->
</style>
</head>
<body id="faqpage">
<?php require("inc/nav.php"); ?>
<div class="container">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li><a href="./">Home</a></li>
      <li class="active">Las Vegas Contractor F.A.Q.</li>
    </ol>
  </div>
</div>
<section class="header">
  <div class="container">
    <div class="row clearfix">
      <div class="page-title col-lg-12">
        <div class="col-sm-8 page-header">
          <h1>Las Vegas Contractors Answers &amp; Advice</h1>
          <h4>Custom renovations and remodeling for residence &amp; business</h4>
        </div>
        <div class="col-sm-4">
          <?php require("inc/contact.php"); ?>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <hr>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-8"> <img src="images/las-vegas-kitchen-remodels.jpg" alt="Las Vegas Kitchen Remodels" width="1200" height="480" class="img-responsive margin-bottom-md"> 
      
      <!--<div class="col-sm-12">
      <div class="twentytwenty-container"> <img src="images/before-after-remodel/master-bath-stone-tile-marble-remodel.jpg" width="1200" height="480" alt="Master bath remodel with tile, marble &amp; stone" /> <img src="images/before-after-remodel/large-custom-bathroom-renovations.jpg" width="1200" height="480" alt="Large customized bathroom renovations in Vegas" /> </div>
    </div>-->
      
      <p class="lead">Our standing in the industry is exceptional in part because we welcome the opportunity to educate our clients and explain the process(es) involved with a remodel or renovation project. The recommendations we make are based solely on what is best for your particular needs. Because of this, Team Tile &amp; Stone is more efficient with our estimates, timelines and final outcome. To begin understanding what to expect when working with us, please view some of our most frequently asked questions (FAQ)...</p>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#free-estimates"> Do you give free estimates? </a> </h4>
          </div>
          <div id="free-estimates" class="panel-collapse collapse">
            <div class="panel-body"> <strong>Yes, we do offer free estimates.</strong> Before we are able to begin, we require some basic information from you. We have estimators who specialize in different aspects of the remodeling process. Depending on what you need done and the area of town you live in is important for us to properly set you up with a member of our staff that will best fit your needs. Please <a href="custom-remodel-renovation-quote.php">custom quote for home remodels form</a> and a representative will be in touch shortly.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#set-appointment"> How do I set an appointment? </a> </h4>
          </div>
          <div id="set-appointment" class="panel-collapse collapse">
            <div class="panel-body"> Once we have your information, we can pair you with the proper member of our staff that can ensure you receive the specialized service you require. First though, we need you to <a href="custom-remodel-renovation-quote.php">complete the order form</a> and answer some questions so we make sure we have one of our estimators who handles the work you want done to get in touch with you.  add link here. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#home-repair-service"> Do you do repairs? </a> </h4>
          </div>
          <div id="home-repair-service" class="panel-collapse collapse">
            <div class="panel-body"> Not exactly as we are not a repair contracting service. Our specialization is <a href="custom-services/bathroom-remodeling.php">complete bathroom renovations</a>, <a href="custom-services/kitchen-remodel.php">kitchen remodels</a>, <a href="custom-services/stone-and-tile-flooring.php">complete floor replacement</a> and <a href="custom-services/bathroom-remodeling.php">countertop replacements</a>. If you are considering repairing several areas, it may be in your best interest to replace instead of repair. Common in all Las Vegas track homes, is the white tile installed in the kitchen and bathrooms. That tile chips easily and the grout is very difficult to clean. Consider taking this opportunity to replace the entire counter or floor? It's guaranteed to look much better and just might be more cost effective in the long AND short term. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#small-projects"> Do you do small jobs? </a> </h4>
          </div>
          <div id="small-projects" class="panel-collapse collapse">
            <div class="panel-body"> It really depends on both of our ideas of &ldquo;small.&rdquo; Under normal circumstances, it is not economically feasible, but not always. It is not about greed! It's sometimes just too expensive for us to take on a project with all of the procedures involved, thus forcing us to quote a ludacrous amount. Rather than subject both parties to unneccesary work, we suggest <a href="custom-remodel-renovation-quote.php">completing the remodel quote form</a> and from your answers we'd be more knowledgable as to whether your proejct(s) are within our scope of work. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#license-insurance"> Are you licensed and insured? </a> </h4>
          </div>
          <div id="license-insurance" class="panel-collapse collapse">
            <div class="panel-body"> Yes add licences </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Las-Vegas-locations"> What areas of Las Vegas and Henderson do you serve? </a> </h4>
          </div>
          <div id="Las-Vegas-locations" class="panel-collapse collapse">
            <div class="panel-body"> We do work all over Las Vegas, Henderson, Summerlin, North Las Vegas and as far as Anthem. We concentrate on quality not quantity. Let us know what part of town you are in and we can let you know if we are currently working in that part of town. <a href="custom-remodel-renovation-quote.php">Complete the custom quote</a> online order form and be certain to put in your major cross streets. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#remodel-bath-timeframe"> What is the turnaround time for bathroom remodels? </a> </h4>
          </div>
          <div id="remodel-bath-timeframe" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Typically, it takes 7-14 days depending on the amount of work performed and your cooperation to give us access to the house. The extent of the work being performed is the determining factor most of the time. Gutting the entire bathroom and running new pipes? Then the renovation can extend the timeline a bit. Just doing touch-ups and minor esthetics? Then the bathroom should be completed quicker.</p>
              <p>When scheduling a bath remodel, we always strive to complete it in the fastest time possible. Obviously, the more projects we can complete, the more we can bill. But, quality is our priority, not speed. We do not cut corners. Our mindset is that if we do not do it correctly, you'll be calling us back, so therefor, we LOSE time. Getting it done right the first time is vital for us as we also know that our work is for years (possibly forever), not temporary. We promoise, two weeks of inconvienience will seem like nothing, when compared against the many, many years of enjoyment you’ll get.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#references"> Do you offer references? </a> </h4>
          </div>
          <div id="references" class="panel-collapse collapse">
            <div class="panel-body"> Most definitely! We have hundreds of references. Once we <a href="custom-remodel-renovation-quote.php">know a more about your specific job</a>, we can supply you with references to contact or write to our <a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#117;&#115;&#116;&#111;&#109;&#101;&#114;&#45;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#64;&#116;&#101;&#97;&#109;&#116;&#105;&#108;&#101;&#97;&#110;&#100;&#115;&#116;&#111;&#110;&#101;&#46;&#99;&#111;&#109;'>&#99;&#117;&#115;&#116;&#111;&#109;&#101;&#114;&#45;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#64;&#116;&#101;&#97;&#109;&#116;&#105;&#108;&#101;&#97;&#110;&#100;&#115;&#116;&#111;&#110;&#101;&#46;&#99;&#111;&#109;</a>
 reps. We also have plenty of reviews online at <a href="http://www.yelp.com/biz/team-tile-and-stone-las-vegas" target="_blank" title="Yelp">Yelp</a>, AngiesList, <a href="http://www.homeadvisor.com/rated.TeamTileandStoneLLC.41628879.html" target="_blank" title="HomeAdvisor">Homeadvisor</a>, etc. If you'd like, please read some of our favorite and most recent <a href="reviews-las-vegas-contractor.php">client feedback and testimonials</a>.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#woodfloors"> Do you do hardwood or laminate floors? </a> </h4>
          </div>
          <div id="woodfloors" class="panel-collapse collapse">
            <div class="panel-body"> No, we only do tile floor replacement and stone flooring renovation. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#carpet-install"> Do you do carpeting? </a> </h4>
          </div>
          <div id="carpet-install" class="panel-collapse collapse">
            <div class="panel-body"> No, but we will remove all the old carpeting that harbors dust, mildew, dirt and replace it with clean easy to maintain long lasting custom tile or stone flooring. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#cultured-marble"> Do you do cultured marble? </a> </h4>
          </div>
          <div id="cultured-marble" class="panel-collapse collapse">
            <div class="panel-body"> No, but we do tile, stone and granite. Cultured marble is becoming a thing of the past and is not commonly used in modern homes. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#cabinet-reface"> Do you do cabinet re-facing? </a> </h4>
          </div>
          <div id="cabinet-reface" class="panel-collapse collapse">
            <div class="panel-body">
              <p>No. But if you are going to go to the expense and inconvenience of putting your kitchen or bathroom out of commission for a little while then why not consider changing out your cabinets. If you are to the point that you want them redone then they are probably fairly old.</p>
              <p>Las Vegas is full of track homes that were thrown together during the boom. The workmanship is not always the greatest and a lot of cheap materials were used. They could be pulling away from the walls or have shelves that are starting to crack where the shelf meets the side of the cabinet.</p>
              <p>There are so many new storage options available. Why not consider replacing them. It doesn’t take much longer than a re-facing  and the end results will finally give you the storage and design esthetic you’ve always wanted.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#haul-materials"> Do you haul away all the old materials? </a> </h4>
          </div>
          <div id="haul-materials" class="panel-collapse collapse">
            <div class="panel-body"> Yes, We safely remove and dispose of all materials we take out of the home. Some items can be recycled and we make sure they end up at the proper recycling facility instead of just ending up in a landfill. We care about the environment. Toilets and sinks can be ground up and mixed with concrete to make paving stones and that is just one of the uses how old materials can become new again. </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#move-furniture"> Do you move furniture? </a> </h4>
          </div>
          <div id="move-furniture" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Yes, A few small items is fine but say we are doing an entire living room dining/ kitchen area. We are not a moving company and don’t specialize in heavy objects. We don’t want to cause damage to any of your items and have to purchase additional insurance for any job that needs to have a lot of items moved. </p>
              <p>A standard rate from a moving company is $90 per hour with a 2 hour minimum. We will only charge you by the hour. You will need to take all items off the furniture prior to us moving them. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 sidebar"> <img src="images/team-tile-and-stone-las-vegas.png" width="312" height="96" alt="Team Tile &amp; Stone Las Vegas" class="img-responsive logo"/>
      <?php require("inc/sideform.php"); ?>
    </div>
  </div>
  <!-- /.row --> 
  
  <!-- Service Paragraphs -->
  <hr>
  <div class="row"> </div>
  <!-- /.row --> 
  
  <!-- Service Images -->
  <div class="row">
    <h2 class="page-header">Home Remodel Projects Showcase</h2>
    <div class="carousel slide" id="TTCarousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="col-sm-4"> <a class="gallery-images" rel="fancybox" href="images/redo-guest-bath-sink-vanity-lg.jpg" title="Redo guest bathrooms, sinks and vanities"><img src="images/guest-bathroom-remodels.jpg" width="750" height="450" alt="Guest bath remodels" class="img-responsive"/></a>
            <h3>Guest Bath Vanities</h3>
            <p>Service one description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
            <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="item">
          <div class="col-sm-4"> <a class="gallery-images" rel="fancybox" href="images/las-vegas-custom-bathroom-remodeling.jpg" title="Custom bathroom remodeling, design and installation"><img class="img-responsive" src="images/custom-tile-vanity-design-renovation.jpg" alt="Custom bathroom vanity of wood, vessel sinks and tiled floor"></a>
            <h3>Contemporary Bath Remodel</h3>
            <p>Service two description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
            <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="item">
          <div class="col-sm-4"> <a class="gallery-images" rel="fancybox" href="images/beautiful-glass-enclosed-tile-shower.jpg" title="Master bath tile &amp; glass enclosed corner shower"><img class="img-responsive" src="images/marble-tile-glass-shower.jpg" alt="Glass enclosed tiled shower"></a>
            <h3>Master Bathroom Renovation</h3>
            <p>Service three description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
            <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="item">
          <div class="col-sm-4"> <a class="gallery-images" rel="fancybox" href="images/beautiful-glass-enclosed-tile-shower.jpg" title="Master bath tile &amp; glass enclosed corner shower"><img class="img-responsive" src="images/marble-tile-glass-shower.jpg" alt="Glass enclosed tiled shower"></a>
            <h3>Master Bathroom Renovation</h3>
            <p>Service three description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
            <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="item">
          <div class="col-sm-4"> <a class="gallery-images" rel="fancybox" href="images/beautiful-glass-enclosed-tile-shower.jpg" title="Master bath tile &amp; glass enclosed corner shower"><img class="img-responsive" src="images/marble-tile-glass-shower.jpg" alt="Glass enclosed tiled shower"></a>
            <h3>Master Bathroom Renovation</h3>
            <p>Service three description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
            <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a> </div>
        </div>
      </div>
      <a class="left carousel-control" href="#TTCarousel" data-slide="prev"><span class="entypo-left-open"></span></a> <a class="right carousel-control" href="#TTCarousel" data-slide="next"><span class="entypo-right-open"></span></a> </div>
  </div>
  <div class="row well cta v-center">
    <div class="col-lg-9 col-md-9 col-sm-8">
      <h4>Team Tile &amp; Stone is Las Vegas&rsquo; premiere home and business remodeling contractor </h4>
      <p>The more familiar our clients are with custom renovations and repair, the quicker we can pinpoint exactly what works best for your space.</p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 text-center"> <a class="btn btn-lg btn-primary" href="custom-remodel-renovation-quote.php">Get Custom Renovation Quote</a></div>
  </div>
</div>
<!-- /.container -->
<?php require_once('inc/footer.php'); ?>
<script>
$('#TTCarousel').carousel({
  interval: 10000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>
</body>
</html>
