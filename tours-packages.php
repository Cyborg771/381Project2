<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
		
		$path = $(location).attr('href').split("#");
		if ($path.length > 1) { $currentDescription = '#'+$path[1]+"-description"; }
		else { $currentDescription = "#p1-description" }
		$('.packageDescription').fadeOut(0);
        $('.packageName').fadeTo(0, 0.3);
		$($currentDescription).fadeIn(0);
        
        if ($path.length > 1) { $currentTouchLink = '.'+$path[1]+"-touch"; }
        else { $currentTouchLink = ".p1-touch" }
        $('.touchLink').fadeTo(0, 0.5);
        $($currentTouchLink).fadeTo(0, 1);
		
		$('.packageLink').click(function() {
			$pid = $(this).attr('id');
			$did = "#"+$pid+"-description";
            $tid = "."+$pid+"-touch";
			if ($did != $currentDescription) {
				$currentDescription = $tid;
                $currentTouchLink = $tid;
				$('.packageDescription').fadeOut(200);
				$($did).delay(210).fadeIn(200);
			}
            $('.touchLink').fadeTo(0, 0.5);
            $($tid).fadeTo(0, 1);
		});
        
        $('.packageLink').mouseover(function() {
            $pid = $(this).attr('id');
            $nid = "#"+$pid+"-name";
            $($nid).fadeTo(100, 0.7);
        });
        
        $('.packageLink').mouseleave(function() {
            $pid = $(this).attr('id');
            $nid = "#"+$pid+"-name";
            $($nid).fadeTo(100, 0.3);
        });
        
        
	});
	</script>
    
    <div class="main" id="tours-packages">
        <section id="part1">
            
            <div id="choose-package" class="touch-picker">
                
                <div class="package">
                    <a href="#part2" class="packageLink touchLink p1-touch" id="p1">
                        <img src="images/package_1_square.png" class="squareImage" />
                        <img src="images/package_1.png" class="recImage" />
                        <h2>20 Minute Sampler</h2>
                    </a>
                </div>

                <div class="package">
                    <a href="#part2" class="packageLink touchLink p2-touch" id="p2">
                        <img src="images/package_2_square.png" class="squareImage" />
                        <img src="images/package_2.png" class="recImage" />
                        <h2>Total Adventure Package</h2>
                    </a>
                </div>
                
                <div class="package">
                    <a href="#part2" class="packageLink touchLink p3-touch" id="p3">
                        <img src="images/package_3_square.png" class="squareImage" />
                        <img src="images/package_3.png" class="recImage" />
                        <h2>Group Tour</h2>
                    </a>
                </div>
                
            </div>
            
            <div id="packages" class="desktop-picker">
                <a href="#p1" class="packageLink" id="p1">
                    <div class="packageImage" id="package1">
                        <div class="packageName" id="p1-name">
                            <h2>20 Minute Sampler</h2>
                        </div>
                    </div>
                </a>
                <a href="#p2" class="packageLink" id="p2">
                    <div class="packageImage" id="package2">
                        <div class="packageName" id="p2-name">
                            <h2>Total Adventure Package</h2>
                        </div>
                    </div>
                </a>
                <a href="#p3" class="packageLink" id="p3">
                    <div class="packageImage" id="package3">
                        <div class="packageName" id="p3-name">
                            <h2>Group Tours</h2>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section id="part2">
            <h1>Tours &amp; Pakcages</h1>
            <div class="packageDescription" id="p1-description">
                <h2>20 Minute Sampler</h2>
                <h3>$89</h3>
                <p>A once-in-a-lifetime experience without breaking the bank. Praesent commodo nisi nisl, fringilla interdum felis blandit eget. Nulla nec cursus augue. Duis tincidunt elit nec ullamcorper mattis.</p>
                <a href="book-now-1.php">Book Now &raquo;</a>
                <p class="fine-print">Package good for up to three (3) passengers at a time. For larger groups see our Group Tours. Customers must sign a liability waiver prior to boarding the helicopter. Additional legalese and other nonsense that you probably won't read and that won't make much of a difference for the vast majority of people. Yadda.</p>
            </div>
            <div class="packageDescription" id="p2-description">
                <h2>Total Adventure Package</h2>
                <h3>$129</h3>
                <p>This 2-hour journey covers five waypoints all over the lower mainland. Truly unforgettable. Integer vestibulum eget velit eget mattis. Nullam massa massa, ultrices ut purus sit amet, egestas ultricies orci. Fusce nec accumsan tellus. Curabitur massa dui, vehicula sed sodales bibendum, tincidunt ac mi. Sed iaculis dolor sem, sit amet commodo ipsum ultricies ut.</p>
                <a href="book-now-1.php">Book Now &raquo;</a>
                <p class="fine-print">Package good for up to three (3) passengers at a time. For larger groups see our Group Tours. Customers must sign a liability waiver prior to boarding the helicopter. Additional legalese and other nonsense that you probably won't read and that won't make much of a difference for the vast majority of people. Yadda.</p>
            </div>
            <div class="packageDescription" id="p3-description">
                <h2>Group Tours</h2>
                <h3>$79 (Per Person)</h3>
                <p>Take to the skies with your friends &amp; family, or save by sharing a trip with others. Duis a ante sed purus pulvinar lobortis fringilla sed orci. Morbi mattis vulputate elit, non ornare sapien varius id. Morbi tristique felis et sem blandit eleifend. Mauris porta in nisl ut tempor. Nullam metus nisi, ornare eu interdum eu, vestibulum a dui. Duis dignissim tempus mi, ut tristique tellus.</p>
                <a href="book-now-1.php">Book Now &raquo;</a>
                <p class="fine-print">Groups are limited to nine (9) passengers at a time as per CATSA regulations. Customers must sign a liability waiver prior to boarding the helicopter. Additional legalese and other nonsense that you probably won't read and that won't make much of a difference for the vast majority of people. Yadda.</p>
            </div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
