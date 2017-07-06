<?php echo head(array('bodyid'=>'home')); ?>
<style>
.boxCaption{
  position:absolute;
  top: 45%;
  left:50%;
  text-align: center;
  transform: translateX(-50%) translateY(-50%);
}

.card{
  position:relative;
}

.mediumcard{
  min-height:20rem;
  width: 100%;
  text-align:center;
  left: 50%;
  float: left;
  padding: .75rem;
  margin-bottom: 2rem;
  background-color:#94efba;
}

.album{
  min-height:25rem;
  background-color: transparent;
}

.mediumlogo{
  opacity:0.75; max-height:10rem; max-width: 10rem; position: absolute
}
</style>

<div class="container-fluid" style="width:100%;padding-left:0px;padding-right:0px;">
  <img src="<?php echo img('bannertext.jpg', 'assets/img');?>" class="img-responsive">
</div>

<div class="container-fluid main-area">
  <div class="row">
    <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>

    <!--Based this carousel off of: http://codepen.io/rtpHarry/pen/ogVord-->
    <div class="container" style="padding-top:50px;">
      <div class="row">
        <h1>Recently Digitized Items</h1>
        <div class="col-md-12">
          <div class="carousel carousel-showmanymoveone slide" id="recentItemsCarousel">
            <div class="carousel-inner">
              <?php
              $items = get_recent_items(8);
              set_loop_records('items',$items);
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
                  <?php echo item_image($imageType='fullsize', array('class' => "img-responsive")); ?>
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

    <div class="container">
      <div class="row">
        <h1>Featured Article</h1>
        <div class="col-md-12">
          <div class="mediumcard">
            <div class="mediumlogo">
              <a href="https://medium.com/@TheGailProject">
                <img src="<?php echo img('medium.png', 'assets/img');?>" alt="" class="img-responsive" style="padding:1rem;"/>
              </a>
            </div>    

            <h3 style="padding-left:10rem;padding-right: 10rem;">"By Command of Major General Eagles”: Archival Documents and Lived Historical Experience</h3>
            <h4>Alan Christy</h4><br/>
            <p style="padding-left:5rem;padding-right:5rem;">Imagine yourself going into an archive, passing through the bureaucratic entry procedures under the watchful eyes of an archivist. There is the moment when the materials you requested arrive. If the archive is good and organized, you open a cardboard box to find a sheaf of folders each holding an assortment of papers. If your heart is pounding in excitement, you are probably a historian, if not by profession then by temperament. You are filled with anticipation because, as Gail Project member Jessie Haupt says, you are about to “touch history...”</p>
            <a href="https://medium.com/the-gail-project/by-command-of-major-general-eagles-archival-documents-and-lived-historical-experience-ef27099dfcb1"
              <h4>Read More</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <h1>Connect With Us</h1>
        <div class="album text-muted">
          <!-- One Container of 3, one of 2-->
          <div class="container-fluid">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="background-color: #a7d2e5;">
                <a href="https://twitter.com/thegailproject">
                  <img src="<?php echo img('twitter.png', 'assets/img');?>" alt="" class="img-responsive" style="opacity:0.5"/>
                  <div class="boxCaption">
                    <font color="white" style="text-shadow: 2px 2px #a7d2e5;">
                      <p style="font-weight: bold;">
                        We post to twitter about once a day, with facts about okinawa and quotes from luminaries in the project.
                      </p>
                    </font>
                  </div>
                </a>
                <p class="card-text">Twitter</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="background-color: #77a9ff;">
                <a href="https://www.facebook.com/TheGailProject/">
                  <img src="<?php echo img('facebook.png', 'assets/img');?>" class="img-responsive" style="opacity:0.5"/>
                  <div class="boxCaption">
                    <font color="white" style="text-shadow: 2px 2px #77a9ff;">
                      <p style="font-weight: bold;">
                        Our Facebook houses our larger posts, including events and important announcements.
                      </p>
                    </font>
                  </div>
                </a>
                <p class="card-text">Facebook</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="background-color: #f9a4a4;">
                <a href="https://www.instagram.com/thegailproject/">
                  <img src="<?php echo img('insta.png', 'assets/img');?>" class="img-responsive" style="opacity:0.5"/>
                  <div class="boxCaption">
                    <font color="white"  style="text-shadow: 2px 2px #f9a4a4;">
                      <p style="font-weight: bold;">
                        Instagram is where we post pictures related to the project, including photos taken during travel to Okinawa and group photos.
                      </p>
                    </font>
                  </div>
                </a>
                <p class="card-text">Instagram</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="background-color: #939bc1;">
                <a href="http://thegailproject.tumblr.com/">
                  <img src="<?php echo img('insta.png', 'assets/img');?>" class="img-responsive" style="opacity:0.5"/>
                  <div class="boxCaption">
                    <font color="white" style="text-shadow: 2px 2px #939bc1;">
                      <p style="font-weight: bold;">
                        Our Tumblr is for our longer-form, blog-style posts, and travel logs.
                      </p>
                    </font>
                  </div>
                </a>
                <p class="card-text">Tumblr</p>
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
    <a class="btn btn-warning btn-lg" href="https://securelb.imodules.com/s/1069/index.aspx?sid=1069&gid=1&pgid=780&dids=644&">Contribute</a>
  </div>
</div>

<?php echo foot(); ?>