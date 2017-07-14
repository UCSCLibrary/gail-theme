
<style>
.no-gutter > [class*='col-'] {
    padding-right:0;
    padding-left:0;
}
.row.no-gutters {
  margin-right: 0;
  margin-left: 0;
  bottom-padding: 0;
}

.col-max{
	max-height: 280px;
}


.jumbotron{
    background:url("/files/simple_page_resize/64b4c37446a5814640aa67fc30efab9e.png") no-repeat center center;
	height:500px;
	background-repeat: no-repeat;
	background-size: 100% auto;
	background-color: rgb(201,201,201);
}
h1{
	font-weight: 700;
	color: rgb(255,255,255);
}
.text-left {
    position: absolute;
	left:115px;
	top:230px;
	font-size: 72px;
}
/* ==================================================
  Elements
  ================================================== */

.card {
  position: relative;
  padding: 0;
  border: 0;
  border-radius: 0;
  margin: 0;
  overflow: hidden;
}

a:hover {
  text-decoration: none !important;
}
/* ==================================================
  Portfolio Styling
  ================================================== */
.portfolio {
  background-color: rgb(34,34,34); 
  padding-bottom: 0;
}

.portfolio h2 {
  color: #199EB8;
  margin-bottom: 25px;
}

.portfolio-grid {
  margin-top: 0px;
}

.portfolio-grid .row {
  margin: 0;
}

.portfolio-grid .row > div {
  padding: 0;
}

.portfolio-grid .row > div .card img {
  width: 100%;
}

.portfolio-grid .row > div .card .portfolio-over {
  position: absolute;
  display: table-cell;
  vertical-align: middle;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  top: 0;
  left: 0;
  text-align: center;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.portfolio-grid .row > div .card .portfolio-over > div {
  position: relative;
  top: 40%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.portfolio-grid .row > div .card .portfolio-over .card-title {
  color: #fff;
  font-size: 30px;
}

.portfolio-grid .row > div .card .portfolio-over .card-text {
  color: #fff;
  opacity: .75;
  padding: 0 45px;
}

.portfolio-grid .row > div .card:hover .portfolio-over {
  opacity: 1;
  visibility: visible;
}
</style>
</div>

<!--
<div class="container-fluid main-area">
  <div class="row">
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">The Gail Photos</h1>
        <p class="lead text-muted">Blah blah blah Mr. Gail Blah blah copy</p>
      </div>
    </section>
   <div class="jumbotron">
     <div class="container">
	   <div class="row">
	   </div> 
	 </div>
   </div>
   
   <div class="row">
    <section class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter"> 
				<div class="col-lg-4 col-md-6"> 
					<a href="/items/browse?tags=Daily+Life+%26+Work&view=grid">
                        <img src="https://bootstrapmade.com/demo/themes/Bell/img/porf-2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            <div class="col-lg-4 col-md-6">
                    <a href="/items/browse?tags=Heritage&view=grid">
                        <img src="/files/simple_page_resize/8837003f366b6559a16e68efe05d274a.png" class="img-responsive" alt="">
                    </a>
                </div>
		<div class="col-lg-4 col-md-6">
                    <a href="/items/browse?tags=Ocean+Life&view=grid">
                        <img src="/files/simple_page_resize/6a3dc4bd056a2c066b38fb13fb45478c.png" class="img-responsive" alt="">
                    </a>
                </div>
		<div class="col-lg-6 col-md-6">
                    <a href="/items/browse?tags=People&view=grid">
                        <img src="/files/simple_page_resize/9c5cec1875e514150223e97f9af51a95.png" class="img-responsive" alt="">
                    </a>
                </div>
		<div class="col-lg-6 col-md-12">
                    <a href="/items/browse?tags=Landscapes&view=grid">
                        <img src="/files/simple_page_resize/65a6d73fcbdb0d5122e2b27581c2c888.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--###########################################################-->

    <div class="jumbotron">
	  <div class="container">
	    <div class="row">
		  <div class="text-left">
	        <!--div class="text-vertical-center"-->
	          <h1>DOCUMENTS</h1>
	        <!--/div-->
	      </div>
		</div>
	  </div>
    </div>
	 <div class="portfolio" id="portfolio">
      <div class="portfolio-grid">
		<div class="row no-gutter row-centered">
		  <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card card-block">
              <a href="/items/browse?tags=Daily+Life+%26+Work&view=grid"><img alt="" src="/files/simple_page_resize/category1.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Daily Life and Work
                  </h3>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card card-block">
              <a href="/items/browse?tags=Heritage&view=grid"><img alt="" src="/files/simple_page_resize/category2.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Heritage
                  </h3>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card card-block">
              <a href="/items/browse?tags=Ocean+Life&view=grid"><img alt="" src="/files/simple_page_resize/category3.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Maritime Life
                  </h3>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-6 col-max">
            <div class="card card-block">
              <a href="/items/browse?tags=People&view=grid"><img alt="" src="/files/simple_page_resize/category4.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    People
                  </h3>
                </div>
              </div></a>
            </div>
          </div>
		  
		  <div class="col-lg-5 col-md-6 col-sm-10 col-max">
            <div class="card card-block">
              <a href="/items/browse?tags=Landscapes&view=grid"><img alt="" src="/files/simple_page_resize/category5.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Landscapes
                  </h3>
                </div>
              </div></a>
            </div>
          </div>        
		</div>
       </div>
	 </div>