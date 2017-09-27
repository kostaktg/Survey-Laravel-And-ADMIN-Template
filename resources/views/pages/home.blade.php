@extends('layouts.master')





@section('content')
	


        <!--Home page style-->
        <header class="home-bg">
		<div class="overlay-img">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="header-details">
							<h1>Participate <br>in our SOMETHING survey.<i class="fa fa-circle"></i></h1>
							<p>Your text TOP</p>
							<a href="{{url('survey/1')}}"><button  class="btn btn-default">Take SURVEY</button></a>
						</div>
					</div>
					

				</div>
			</div>
		</div>	
        </header>

        <!-- Sections -->
        <section id="promotion-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Small<br> discription<i class="fa fa-circle"></i></h1>
						<p>Your text</p>
						
						
						</div>
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Small<br> discription<i class="fa fa-circle"></i></h1>
						<p>Your text</p>
						
						
						</div>
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Small<br> discription<i class="fa fa-circle"></i></h1>
						<p>Your text</p>
						<!-- <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a> -->
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
        </section>
		
		
		<section id="portfolio-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
            <!-- 16:9 aspect ratio -->
  <div class="form-group">
  <img  class="" style="float:left; margin:20px;" src="images/Untitled.png"></img>
  </div>
    <div class="" class="form-group">
  <h2>About this Research Project</h2>
  <p>Thank you for taking the time to visit this site and participate in this survey. My name is Chad Botes and the results of this will be used in the writing of a dissertation for an MSc in Environmental Economics through the University of London, School of Oriental and African Studies, Centre for Development, Environment and Policy and possibly for publication in an academic journal.  The purpose of this research is to shed light on the value derived by road users from different attributes and aspects of greenspace along roads, in particular Ren Ai Road, Section 4 in Taipei City. This kind of research is useful in understanding road user preferences for greenspace and informing greenspace design and policy in terms of how to generate the most value for users and thus increasing the return on investment in greenspace and other transport amenities. If you would like to receive a copy of the dissertation (in English only) please refer back to this page after January 1st 2017. </p>
</div>

            </div> <!-- /container -->       
        </section>
		
		
		<section id="our-team" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
						<div class="team-heading">
							<h1>Our Team<i class="fa fa-circle"></i></h1>
							<p>Your text.</p>
						</div>
				
				<div class="team-member">
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="team">
							<img src="" alt="" />
							<div class="team-info">
								<h2>Name</h2>
								<h5>Web Developer</h5>
								<p>Your text</p>
							</div>
						</div>	
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="team">
							<img src="" alt="" />
							<div class="team-info">
								<h2>Name</h2>
								<h5>Web Designer</h5>
								<p>Your text.</p>
							</div>
						</div>	
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="team">
							<img src="" alt="" />
							<div class="team-info">
								<h2>Name</h2>
								<h5>Web Designer</h5>
								<p>Your text</p>
							</div>
						</div>	
					</div>
					
					<div class="team-more">
						<!-- <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a> -->
					</div>
					
				</div>	
					
				</div>
                
            </div> <!-- /container -->       
        </section>
		
		<div class="scroll-top">
		

			
		</div>
	
        <!--Footer-->
        <footer>
            <div class="container">
			<hr>
            	<div class="row">
				
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="social-network">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copyright">
							<p>GERYVIG <i class="fa fa-heart"></i> by Kostadin Giuviiski </a>2017. All rights reserved.</p>
						</div>
					</div>
					
            	</div>
            </div>

@endsection