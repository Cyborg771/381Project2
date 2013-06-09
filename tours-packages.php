<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
		
		$path = $(location).attr('href').split("#");
		if ($path.length > 1) { $currentDescription = '#'+$path[1]+"-description"; }
		else { $currentDescription = "#p1-description" }
		$('.packageDescription').fadeOut(0);
        $('.packageName').fadeOut(0);
		$($currentDescription).fadeIn(0);
		
		$('.packageLink').click(function() {
			$pid = $(this).attr('id');
			$did = "#"+$pid+"-description";
			if ($did != $currentDescription) {
				$currentDescription = $did;
				$('.packageDescription').fadeOut(200);
				$($did).delay(200).fadeIn(200);
			}
		});
        
        $('.packageLink').mouseover(function() {
            $pid = $(this).attr('id');
            $nid = "#"+$pid+"-name";
            $($nid).fadeIn(200);
        });
        
        $('.packageLink').mouseleave(function() {
            $pid = $(this).attr('id');
            $nid = "#"+$pid+"-name";
            $($nid).fadeOut(200);
        });
        
        
	});
	</script>
    
    <div class="main" id="tours-packages">
        <section id="part1">
            <div id="packages">
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
            <div class="packageDescription" id="p1-description">
                <h1>20 Minute Sampler</h1>
                <h2>$89</h2>
                <p>A once-in-a-lifetime experience without breaking the bank.</p>
                <iframe width="370" height="215" src="http://www.youtube.com/embed/iOGweu4A6aE" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="packageDescription" id="p2-description">
                <h1>Total Adventure Package</h1>
                <h2>$129</h2>
                <p>This 2-hour journey covers five waypoints all over the lower mainland. Truly unforgettable.</p>
                <iframe width="370" height="215" src="http://www.youtube.com/embed/iOGweu4A6aE" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="packageDescription" id="p3-description">
                <h1>Group Tours</h1>
                <h2>$79 (Per Person)</h2>
                <p>Take to the skies with your friends &amp; family, or save by sharing a trip with others.</p>
                <iframe width="370" height="215" src="http://www.youtube.com/embed/iOGweu4A6aE" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
