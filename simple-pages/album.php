<style>
.jumbotron{
	background-color: rgba(27,94,174, 0.9);
	bottom-padding: 0px;
	min-height: 100px;
}

.jumbotron-heading{
	font-weight: 700;
	color: white;
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
  background-color: rgba(255,255,255,0.8); 
   padding-bottom: 10px;
}

.portfolio h2 {
  color: rgb(27,94,174);
  margin-bottom: 25px;
}

.portfolio-grid {
  margin-top: 0px;
}

.portfolio-grid .row {
  margin: 0;
}

.portfolio-grid .row > div {
  padding: 10px;
}


.portfolio-grid .row > div .card img {
  width: 100%;
}

.portfolio-grid .row > div .card .portfolio-over {
  position: absolute;
  border-radius:100%;
  display: table-cell;
  vertical-align: middle;
  width: 100%;
  height: 100%;
  background: rgba(27,94,174, 0.8);
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

<div class="container-fluid main-area" style="padding-bottom:25px;">
  <div class="row">
    <section class="jumbotron text-center" style ="height: 300px">
      <div class="container">
        <h1 class="jumbotron-heading" style="color: white;">The Gail Photos</h1>
        <p style="color: white;">See Okinawan life through Gail's eyes</p>
      </div>
    </section>
</div>
</div>

    <div class="portfolio" id="portfolio">
      <div class="portfolio-grid">
	   <div class="container">
		<div class="row row-centered">
		  <div class="col-xs-9 col-xs-offset-2 col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0">
            <div class="card card-block">
              <a href="/items/browse?tags=Daily+Life+%26+Work&view=grid"><img class="img-circle img-responsive img-center" alt="" src="/files/original/6d8bd5229e20fc6ffd99d7b6647cd9b4.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Daily Life and Work
                  </h3>
                </div>
              </div></a>
            </div>
			<h3 class="text-center" style="color: rgb(27,94,174)"><b> Daily Life and Work </b></h3>
          </div>

          <div class="col-xs-9 col-xs-offset-2 col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0">
            <div class="card card-block">
              <a href="/items/browse?tags=Heritage&view=grid"><img class="img-circle img-responsive img-center" alt="" src="/files/original/8837003f366b6559a16e68efe05d274a.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Heritage
                  </h3>
                </div>
              </div></a>
            </div>
			<h3 class="text-center" style="color: rgb(27,94,174)"><b> Heritage </b></h3>
          </div>

          <div class="col-xs-9 col-xs-offset-2 col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0">
            <div class="card card-block">
              <a href="/items/browse?tags=Ocean+Life&view=grid"><img class="img-circle img-responsive img-center" alt="" src="/files/original/6a3dc4bd056a2c066b38fb13fb45478c.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Maritime Life
                  </h3>
                </div>
              </div></a>
            </div>
			<h3 class="text-center" style="color: rgb(27,94,174)"><b> Maritime Life </b></h3>
          </div>

          <div class="col-xs-9 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
            <div class="card card-block">
              <a href="/items/browse?tags=People&view=grid"><img class="img-circle img-responsive img-center" alt="" src="/files/original/9c5cec1875e514150223e97f9af51a95.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    People
                  </h3>
                </div>
              </div></a>
            </div>
			<h3 class="text-center" style="color: rgb(27,94,174)"><b> People </b></h3>
          </div>
		  
		  <div class="col-xs-9 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0">
            <div class="card card-block">
              <a href="/items/browse?tags=Landscapes&view=grid"><img class="img-circle img-responsive img-center" alt="" src="/files/original/65a6d73fcbdb0d5122e2b27581c2c888.png">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Landscapes
                  </h3>
                </div>
              </div></a>
            </div>
		     <h3 class="text-center" style="color: rgb(27,94,174)"><b> Landscapes </b></h3>
          </div>        

		</div>
       </div>
	 </div>
	</div>
	</div> 
  <div class="row">
    <section class="jumbotron text-center">
    </section>
	</div>
<!--
</div>
<div class="container-fluid main-area" style="padding-bottom:50px;">
  <div class="row">
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">The Gail Photos</h1>
        <p class="lead text-muted">Blah blah blah Mr. Gail Blah blah copy</p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container-fluid">
        <div class="row-fluid">
          <!-- One Container of 3, one of 2--><!--
          <div class="container-fluid">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <a href="/items/browse?tags=Daily+Life+%26+Work&view=grid">
                  <img src="/files/original/6d8bd5229e20fc6ffd99d7b6647cd9b4.png" class="img-responsive"/>
                </a>
                <p class="card-text">Daily Life and Work</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <a href="/items/browse?tags=Heritage&view=grid">
                  <img src="/files/original/8837003f366b6559a16e68efe05d274a.png" class="img-responsive"/>
                </a>
                <p class="card-text">Heritage</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <a href="/items/browse?tags=Ocean+Life&view=grid">
                  <img src="/files/original/6a3dc4bd056a2c066b38fb13fb45478c.png" class="img-responsive"/>
                </a>
                <p class="card-text">Maritime Life</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <a href="/items/browse?tags=People&view=grid">
                  <img src="/files/original/9c5cec1875e514150223e97f9af51a95.png" class="img-responsive"/>
                </a>
                <p class="card-text">People</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <a href="/items/browse?tags=Landscapes&view=grid">
                  <img src="/files/original/65a6d73fcbdb0d5122e2b27581c2c888.png" class="img-responsive"/>
                </a>
                <p class="card-text">Landscapes</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->