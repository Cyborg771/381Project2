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
                            <h2>20 Minute Sampler</h1>
                        </div>
                    </div>
                </a>
                <a href="#p2" class="packageLink" id="p2">
                    <div class="packageImage" id="package2">
                        <div class="packageName" id="p2-name">
                            <h2>Total Adventure Package</h1>
                        </div>
                    </div>
                </a>
                <a href="#p3" class="packageLink" id="p3">
                    <div class="packageImage" id="package3">
                        <div class="packageName" id="p3-name">
                            <h2>Group Tours</h1>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section id="part2">
            <div class="packageDescription" id="p1-description">PACKAGE 1</div>
            <div class="packageDescription" id="p2-description">PACKAGE 2</div>
            <div class="packageDescription" id="p3-description">PACKAGE 3</div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
