<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>გალერია</title>
    </head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/s1.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">მარტვილის კანიონი</a></h2>
							<lable></lable>
							<h1><a href="#">განიტვირთე ფენომენალურად</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/s2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">გომის მთა</a></h2>
							<lable></lable>
							<h1><a href="#">განიტვირთე ფენომენალურად</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/s3.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">სვანეთი</a></h2>
							<lable></lable>
							<h1><a href="#">3 დღიანი ტური</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/s4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">სიღნაღი</a></h2>
							<lable></lable>
							<h1><a href="#">განიტვირთე ფენომენალურად</a></h1>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/s5.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">ყაზბეგი</a></h2>
							<lable></lable>
							<h1><a href="#">განიტვირთე ფენომენალურად</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>