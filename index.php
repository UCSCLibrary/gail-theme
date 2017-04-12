<?php echo head(array('bodyid'=>'home')); ?>
<style>
/*Carousel buttons should be transparent. */
.carousel-control.left,.carousel-control.right {
  background-image:none;
  width:50px;
  margin-left:-50px;
}
/*#recentCarousel {margin-left: 30px; margin-right: 30px;}

.carousel-control.left, .carousel-control.right {
  background: none;
  color: @red;
  border: none;
}
.carousel-control.left {margin-left: -100px; color: black;}
.carousel-control.right {margin-right: -100px; color: black;}*/


.intro-header{
  padding-top:50px;
  padding-bottom:500;
  text-align:center;
  background:url(/themes/Bootstrapv1/assets/img/bannertext.jpg) no-repeat center center;
  background-size:cover;
}
.jumbotron{
  background:url(/themes/Bootstrapv1/assets/img/bannertext.jpg) no-repeat center center;
  background-size:100% 100%;
}

/*css for connect with us*/
.thumbnail1 {
    position: relative;
	margin: 0 -15px;
}

.caption1 {
    position: absolute;
    top: 50%;
    left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
}

/*CSS for the box colors*/
.center-box{
	width:220px;
	height:200px;
}

.twt{
	background:#f00;
}
.fb{
	background:#3b5998;
}
.green{
	background:#00f;
}


/* CSS for new carousel */
.carousel-showsixmoveone {
  .carousel-control {
    width: 4%;
    background-image: none;
    &.left {
      margin-left: 15px;
    }
    &.right {
      margin-right: 15px;
    }
  }
  .cloneditem-1,
  .cloneditem-2,
  .cloneditem-3,
  .cloneditem-4,
  .cloneditem-5 {
    display: none;
  }
  .carousel-inner {
    @media all and (min-width: 768px) {
      @media (transform-3d), (-webkit-transform-3d) {
        > .item.active.right, > .item.next {
          transform: translate3d(50%, 0, 0);
          left: 0;
        }
        > .item.active.left,
        > .item.prev {
          transform: translate3d(-50%, 0, 0);
          left: 0;
        }
        > .item.left,
        > .item.prev.right,
        > .item.active {
          transform: translate3d(0, 0, 0);
          left: 0;
        }
      }
      > .active.left,
      > .prev {
        left: -50%;
      }
      > .active.right,
      > .next {
        left: 50%;
      }
      > .left,
      > .prev.right,
      > .active {
        left: 0;
      }
      .cloneditem-1,
      .cloneditem-2 {
        display: block;
      }
    }
    @media all and (min-width: 992px) {
      @media (transform-3d),
      (-webkit-transform-3d) {
        > .item.active.right,
        > .item.next {
          transform: translate3d(25%, 0, 0);
          left: 0;
        }
        > .item.active.left,
        > .item.prev {
          transform: translate3d(-25%, 0, 0);
          left: 0;
        }
        > .item.left,
        > .item.prev.right,
        > .item.active {
          transform: translate3d(0, 0, 0);
          left: 0;
        }
      }
      > .active.left,
      > .prev {
        left: -25%;
      }
      > .active.right,
      > .next {
        left: 25%;
      }
      > .left,
      > .prev.right,
      > .active {
        left: 0;
      }
      .cloneditem-3,
      .cloneditem-4,
      .cloneditem-5 {
        display: block;
      }
    }
  }
}
</style>

<div class="container-fluid" style="width:100%;padding-left:0px;padding-right:0px;">
  <img src="<?php echo img('bannertext.jpg', 'assets/img');?>" class="img-responsive">
</div>

<div class="container-fluid main-area">
  <div class="row">
    <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>

    <!-- New carousel has minor issues:
        left and right move a bunch over but are only supposed to move one at a time.
        Based this carousel off of: http://codepen.io/rtpHarry/pen/ogVord-->
    <div class="container fluid" style="padding-top:50px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel carousel-showsixmoveone slide" id="recentItemsCarousel">
              <div class="carousel-inner">
                <?php
                $items = get_recent_items(8);
                set_loop_records('items',$items);
                ?>
                <?php
                foreach (loop('items') as $item):
                  if (array_search($item,$items) == 0){
                    echo "<div class='item active'>";
                  }else {
                    echo "<div class='item'>";
                  }
                ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <?php
                  echo "<a href=". metadata($item, 'permalink') .">";
                  ?>
                    <?php echo item_image($imageType='thumbnail'); ?>
                  </a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <a class="left carousel-control" href="#recentItemsCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#recentItemsCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!--<div style="background: #D6DBDF">-->
      <h1>Project Highlights</h1>
      <div class="container fluid">

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="<?php echo img('Team.jpg', 'assets/img/frontpage');?>" class="img-responsive" style="max-height:215px;">
            <div class="caption" style="min-height:150px;">
              <h4>Introduction to the Gail Project</h4>
              <p>Learn more about the Gail Project and find out how you can help.</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="<?php echo img('StellaSign.jpg', 'assets/img/frontpage');?>" class="img-responsive" style="max-height:215px;">
            <div class="caption" style="min-height:150px;" >
              <h4>Do You have a Passport?</h4>
              <p>An essay and memoir about the project, written by one of our own alum, Stella Fronius</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="<?php echo img('Meeting.jpg', 'assets/img/frontpage');?>" class="img-responsive" style="max-height:215px;">
            <div class="caption" style="min-height:150px;">
              <h4>News & Events</h4>
              <p>Stay informed of our news and events relevant to the project.</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="<?php echo img('AlanRobert.jpg', 'assets/img/frontpage');?>" class="img-responsive" style="max-height:215px;">
            <div class="caption" style="min-height:150px;">
              <h4>Share Your History</h4>
              <p>Your stories help us build context and develop meaningful narratives,
                and are what allows us to draw conclusions and form expectations. Help us preserve your history.</p>
            </div>
          </div>
        </div>
      </div>
    <!--</div>-->
    </div>




    <div class="row">
      <h1>Connect With Us</h1>
      <div class="container fluid">
        <div class="col-xs-6 col-sm-6 col-md-3">
          <div class="row">
            <div class="thumbnail1 text-center">
			  <img src="<?php echo img('TW.jpg', 'assets/img');?>" alt="" class="center-block">
                <a
			       href="https://twitter.com/thegailproject">
			       <img src="<?php echo img('twitter.png', 'assets/img');?>" alt="" class="img-responsive" style="position:absolute;bottom:160px;right:220px;margin:0;padding:5px 3px;height:15%;width:10%;">
                </a>
			  <div class="caption1">
                <font color="white">
				 <p>On our reading list! http://blog.lareviewofbooks.org
				   /chinablog/journalism-love-wartime-
				   china-qa-eve-hundred-midnights-author-
				   bill-lascher/ ... h/t @mauracunningham
				 </p>
				</font>
              </div>
			</div>
          </div>
        </div>
       
	   <div class="col-xs-6 col-sm-6 col-md-3">
          <div class="row">
            <div class="thumbnail1 text-center">
			  <img src="<?php echo img('FB.jpg', 'assets/img');?>" alt="" class="center-block">
               <a
			       href="https://www.facebook.com/TheGailProject/">
			       <img src="<?php echo img('facebook.png', 'assets/img');?>" alt="" class="img-responsive" style="position:absolute;bottom:160px;right:220px;margin:0;padding:5px 3px;height:15%;width:10%;">
			   </a>
			  <div class="caption1">
               <font color="white">
				<p>
				   More achievements 
				   from the Gail Project students, 
				   this time highlighting Stella Fronius! 
				   http://news.ucsc.edu/2016/...
				   /humanities-national-contest.html
				</p>
			   </font>
              </div>
			</div>
          </div>
        </div>
        
		<div class="col-xs-6 col-sm-6 col-md-3">
          <!-- http://instafeedjs.com/ is a good resource for most recent. -->
          <div class="row">
            <div class="thumbnail1 text-center">
			  <img src="<?php echo img('Inst.jpg', 'assets/img');?>" alt="" class="center-block">
			    <a
			       href="https://www.instagram.com/thegailproject/">
			       <img src="<?php echo img('insta.png', 'assets/img');?>" alt="" class="img-responsive" style="position:absolute;bottom:160px;right:220px;margin:0;padding:5px 3px;height:15%;width:10%;">
                </a>
			  <div class="caption1">
                <font color="white">
				 <p>
				    The Gail Project An Okinawan-American Dialogue Follow us for updates on our historical research, podcasts, YouTube channel, interviews, travel, team photos, and more!
				 </p>
			   </font>
              </div>
             </a>
			</div>
          </div>
        </div>
        
		<div class="col-xs-6 col-sm-6 col-md-3">
          <!-- http://instafeedjs.com/ is a good resource for most recent. -->
		  <div class="row">
            <div class="thumbnail1 text-center">
			     <img src="<?php echo img('Medium.jpg', 'assets/img');?>" alt="" class="center-block">
              <a
				 href="https://medium.com/@TheGailProject">
				 <img src="<?php echo img('medium.png', 'assets/img');?>" alt="" class="img-responsive" style="position:absolute;bottom:160px;right:220px;margin:0;padding:5px 3px;height:15%;width:10%;">
			  </a>
			  <div class="caption1">
               <font color="white">
				<p>"By Command of Major General 
					Eagles”: Archival Documents and Lived
					Historical Experience
				
					   - By Alan Christy
				</p>
			   </font>
              </div>
			</div>
          </div>
        </div>
      </div>
    </div>





  </div>
</div>

<!-- Why is there an extra div? Who knows, but it fixes the footer width... -->
</div>

<div class="row" style="background-color:#3671d1;height:200px;margin-top:40px;">

  <div class="container fluid" style="text-align: center;margin-top:40px;">
    <h1>Find out how you can help</h1>
    <a class="btn btn-warning btn-lg" href="/contribute.php">Contribute</a>
  </div>
</div>



<script>//JS for recentItemCarousel
(function(){
  $('.carousel-showsixmoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
</script>

<?php echo foot(); ?>