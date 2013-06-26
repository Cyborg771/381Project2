<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
		
		$path = $(location).attr('href').split("#");
		if ($path.length > 1) { $currentDescription = '#'+$path[1]+"-description"; }
		else { $currentDescription = "#p1-description" }
		$('.packageDescription').fadeOut(0);
		$($currentDescription).fadeIn(0);
        
        if ($path.length > 1) { $currentTouchLink = '.'+$path[1]+"-touch"; }
        else { $currentTouchLink = ".p1-touch" }
        $('.touchLink').fadeTo(0, 0.3);
        $($currentTouchLink).fadeTo(0, 1);
		
		$('.packageLink').click(function() {
			$pid = $(this).attr('id').split("-");
			$did = "#"+$pid[0]+"-description";
            $tid = "."+$pid[0]+"-touch";
			if ($did != $currentDescription) {
				$currentDescription = $tid;
                $currentTouchLink = $tid;
				$('.packageDescription').fadeOut(200);
				$($did).delay(210).fadeIn(200);
			}
            $('.touchLink').fadeTo(0, 0.3);
            $($tid).fadeTo(0, 1);
		});

	});
	</script>
    
    <div class="main" id="tours-packages">
        <section id="part1">
            
            <div id="choose-package">
                
                <div class="package">
                    <a href="#p1-link" class="packageLink touchLink p1-touch" id="p1">
                        <img src="images/package_1_square.png" class="squareImage" alt="package1" />
                        <img src="images/package_1.png" class="recImage" alt="package1" />
                        <h2>20 Minute Sampler</h2>
                    </a>
                </div>

                <div class="package">
                    <a href="#p2-link" class="packageLink touchLink p2-touch" id="p2">
                        <img src="images/package_2_square.png" class="squareImage" alt="package2" />
                        <img src="images/package_2.png" class="recImage" alt="package2" />
                        <h2>Total Adventure Package</h2>
                    </a>
                </div>
                
                <div class="package">
                    <a href="#p3-link" class="packageLink touchLink p3-touch" id="p3">
                        <img src="images/package_3_square.png" class="squareImage" alt="package3" />
                        <img src="images/package_3.png" class="recImage" alt="package3" />
                        <h2>Group Tour</h2>
                    </a>
                </div>
                
            </div>
        </section>
        <section id="part2">
            <h1>Tours &amp; Packages</h1>
            <div class="packageDescription" id="p1-description">
                <div class="descript">
                    <h2>20 Minute Sampler</h2>
                    <h3>$89 (Per Person)</h3>
                    <p>A once-in-a-lifetime experience without breaking the bank. This package includes a 20 minute briefing and safety session and then a 20 minute flight within a 5 mile radius of our starting point. You will have a great overview of the area and the experience of flying in a helicopter for a price that can't be beat.</p>
                    <a href="book-now-1.php" class="button highlighted">BOOK NOW</a>
                    <p class="fine-print">Up to three (3) passengers may be accomodated on any given flight. For larger groups see our Group Tours. Customers must sign a liability waiver prior to boarding the helicopter.</p>
                </div>
                <div class="customer-feedback">
                    <blockquote>"I got to show my son the city where we both grew up, he loved it! We'll both be back next year!"</blockquote> 
                    <cite>-Phil, Vancouver</cite>
                    <h3>Photos Taken on This Tour</h3>
                    <a href="images/20min-submitted-1.jpg" target="_blank"><img src="images/20min-submitted-1.jpg" alt="package1a" /></a>
                    <a href="images/20min-submitted-2.jpg" target="_blank"><img src="images/20min-submitted-2.jpg" alt="package1b" /></a>
                    <a href="images/20min-submitted-3.jpg" target="_blank"><img src="images/20min-submitted-3.jpg" alt="package1c" /></a>
                    <p>Have any comments or photos you would like to send us about this package? <a href="contact-us.php">Contact us!</a> We'd love to hear from you!</p>
                </div>
            </div>
            <div class="packageDescription" id="p2-description">
                <div class="descript">
                    <h2>Total Adventure Package</h2>
                    <h3>$229 (Per Person)</h3>
                    <p>This 2-hour journey covers five waypoints all over the lower mainland. This package includes a 20 minute briefing and safety session and then a 150 minute continuous flight within a 20 mile radius of our starting point. Truly unforgettable.</p>
                    <a href="book-now-1.php" class="button highlighted">BOOK NOW</a>
                    <p class="fine-print">Up to three (3) passengers may be accomodated on any given flight. For larger groups see our Group Tours. Customers must sign a liability waiver prior to boarding the helicopter.</p>
                </div>
                <div class="customer-feedback">
                    <blockquote>"Dude, this helicopter adventure was hardcore, just like me. DO IT!"</blockquote> 
                    <cite>-Vladimir, Alberta</cite>
                    <h3>Photos Taken on This Tour</h3>
                    <a href="images/adventure-submitted-1.jpg" target="_blank"><img src="images/adventure-submitted-1.jpg" alt="package2a" /></a>
                    <a href="images/adventure-submitted-2.jpg" target="_blank"><img src="images/adventure-submitted-2.jpg" alt="package2b" /></a>
                    <a href="images/adventure-submitted-3.jpg" target="_blank"><img src="images/adventure-submitted-3.jpg" alt="package2c" /></a>
                    <p>Have any comments or photos you would like to send us about this package? <a href="contact-us.php">Contact us!</a> We'd love to hear from you!</p>
                </div>
            </div>
            <div class="packageDescription" id="p3-description">
                <div class="descript">
                    <h2>Group Tours</h2>
                    <h3>$129 (Per Person)</h3>
                    <p>Take to the skies with your friends &amp; family, or save by sharing a trip with others. This package includes a 20 minute briefing and safety session and then a 60 minute continuous flight within a 20 mile radius of our starting point. </p>
                    <a href="book-now-1.php" class="button highlighted">BOOK NOW</a>
                    <p class="fine-print">Groups are limited to eight (8) passengers at a time as per CATSA regulations. Customers must sign a liability waiver prior to boarding the helicopter. </p>
                </div>
                <div class="customer-feedback">
                    <blockquote>"My husband and I got the experience we wanted and the hour length wasn't too long for the kids. Perfect!"</blockquote> 
                    <cite>-Audrey, Burnaby</cite>
                    <h3>Photos Taken on This Tour</h3>
                    <a href="images/group-submitted-1.jpg" target="_blank"><img src="images/group-submitted-1.jpg" alt="package3a" /></a>
                    <a href="images/group-submitted-2.jpg" target="_blank"><img src="images/group-submitted-2.jpg" alt="package3b" /></a>
                    <a href="images/group-submitted-3.jpg" target="_blank"><img src="images/group-submitted-3.jpg" alt="package3c" /></a>
                    <p>Have any comments or photos you would like to send us about this package? <a href="contact-us.php">Contact us!</a> We'd love to hear from you!</p>
                </div>
            </div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
