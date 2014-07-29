<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
        <style>
            @import"style.css";

            
            .address_col{
                width: 300px;
                float: left;
                margin-top:30px;
                margin-left: 40px;
            }
            
            .email_col {
                width: 480px;
                margin-top:40px;
                float: right;            
            }

            #middle {
				width: 640px;
				min-height: auto;
				float: left;
				padding-top: 10px;
				position: relative;
			}
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var map_canvas = document.getElementById('map_canvas');
                var map_options = {
                    center: new google.maps.LatLng(44.5403, -78.5463),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(map_canvas, map_options)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </head>
    <body>
        <div id="header">
			<div id="top_bar">
				<div id="top_menu">
					<a href="http://localhost/AEI_CHINESE/"><img src="img/logo1.png"></a>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="courses.html">Courses</a></li>
						<li><a href="schedule.html">Schedule</a></li>
						<li><a href="teachers.html">Teachers</a></li>
						<li><a href="careers.html">Careers</a></li>
						<li><a href="FAQ.html">FAQ</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div>
				<div id="map_canvas"></div>
			</div>
		</div>

		<div id="main_wrapper">
			<div id="main_content">
				<div id="left_sidebar">
					<div class="address_col">
                    <?php
                        include './contact/contact.html';
                    ?>
                	</div>
				</div>

				<div id="middle">
					<div class="email_col">
                		<?php
                		    include './contact/email.html';                  
                		?>             
            		</div>
				</div>

				<div id="main_bottom">
				</div>

			</div>
		</div>

		<div id="footer">
			<div id="footer_content">
				<address> 
				<h2>American Educational Center</h2>
    			17 Abcdefg Street<br>
    			New York, NY 10001 <br>
    			Phone: 123-456-7890<br>
      			<h5>Copyright © 2014 American Educational Center</h5> 
      			</address>
			</div>
		</div>


        <div id="loc_content">
            
        </div>
            
      
    </body>
</html>
