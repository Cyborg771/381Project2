<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
		
		$path = $(location).attr('href').split("#");
		if ($path.length > 1) { $currentAnswer = '#'+$path[1]+"-answer"; }
		else { $currentAnswer = "#default-answer" }
		$('.answer').fadeOut(0);
		$($currentAnswer).fadeIn(100);
		
		$('.question').click(function() {
			$qid = $(this).attr('id');
			$qid = $qid.split("_")[0];
			$aid = "#"+$qid+"-answer";
			if ($aid != $currentAnswer) {
				$currentAnswer = $aid;
				$('.answer').fadeOut(100);
				$($aid).delay(100).fadeIn(100);
			}
		});
	});
	</script>
    
    <div class="main" id="faq">
    	<section id="part1">
        	<div id="questions">
                <h1>Frequently Asked Questions</h1>
                <ul>
                    <li><a class="question" href="#" id="pickup">Where do I go to get picked up?</a></li>
                    <li><a class="question" href="#" id="what-to-bring">What should I bring?</a></li>
                    <li><a class="question" href="#" id="additional">Additional Questions?</a></li>
                    <li><a class="question" href="#" id="life">What is the meaning of life?</a></li>
                    <li><a class="question" href="#" id="woodchuck">How much wood could a woodchuck chuck?</a></li>
                    <li><a class="question" href="#" id="fat">Does this dress make me look fat?</a></li>
                </ul>
                <h1>Policies</h1>
                <ul>
                    <li><a class="question" href="#" id="safety">Saftey</a></li>
                    <li><a class="question" href="#" id="cancellation">Cancellation</a></li>
                    <li><a class="question" href="#" id="privacy">Privacy</a></li>
                </ul>
            </div>
        </section>
        <section id="part2">
        	<div class="answer" id="default-answer">
            	<h1>Welcome to the FAQ</h1>
                <p>Our most frequently asked questions are listed on the left side of the page. If you have any additional questions feel free to <a href="contact-us.php">contact</a> us.<p>
            </div>
        	<div class="answer" id="pickup-answer">
            	<h1>Where do I go to get picked up?</h1>
                <p>Morbi quis semper diam. Nunc interdum tincidunt fermentum. Fusce ornare mi ut lectus vulputate consequat. Aenean tempus tristique convallis. Aenean aliquet congue risus, a pellentesque mi pulvinar quis. Donec consequat venenatis mollis. Aliquam erat volutpat. Nullam id elit arcu.</p>
            </div>
            <div class="answer" id="what-to-bring-answer">
            	<h1>What should I bring?</h1>
                <p>Donec facilisis convallis ornare. Aenean id dui volutpat mi viverra auctor interdum sit amet nisi. Morbi elementum id elit sit amet sagittis. Suspendisse lobortis, leo quis tincidunt bibendum, sem libero ornare erat, ut commodo orci diam vel magna. Phasellus semper justo erat, eu tristique nisl tempus id. Nam accumsan egestas augue a auctor.</p>
			</div>
            <div class="answer" id="additional-answer">
            	<h1>Additional questions?</h1>
                <p>Nullam suscipit, ligula eget ornare faucibus, lacus quam rutrum dui, in pulvinar erat ipsum et neque. Aliquam eu metus nec orci condimentum consequat. Aliquam aliquam, ipsum malesuada egestas lacinia, nulla metus aliquam augue, egestas accumsan enim ligula a lectus. Duis et pulvinar risus. Fusce sollicitudin orci non nisi congue convallis. Praesent aliquam a velit vulputate molestie. Phasellus pellentesque ut elit mattis condimentum.</p>
            </div>
            <div class="answer" id="life-answer">
            	<h1>What is the meaning of life?</h1>
                <p>Suspendisse cursus, est et interdum ultricies, massa lorem aliquet est, ac luctus nulla nisl et magna. Praesent id dolor sed arcu commodo consequat. Nunc venenatis eget eros quis porttitor. Mauris blandit consequat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="answer" id="woodchuck-answer">
            	<h1>How much wood could a wood chuck chuck?</h1>
                <p>uis lacinia risus in consectetur bibendum. Pellentesque auctor ultrices mauris, at convallis quam fringilla et. Quisque mi sapien, rutrum at ullamcorper ut, egestas nec mi. Suspendisse non gravida nunc, ut laoreet augue. Phasellus quis est risus.</p>
            </div>
            <div class="answer" id="fat-answer">
            	<h1>Does this dress make me look fat?</h1>
                <p>Sed blandit consectetur consectetur. Donec eu volutpat turpis. Vestibulum adipiscing, purus quis venenatis hendrerit, risus purus consequat risus, iaculis volutpat neque ante lacinia tortor. Vestibulum a tortor in nisi scelerisque iaculis id in elit. Quisque sem justo, posuere id semper at, viverra ut mauris. Maecenas luctus molestie justo a convallis. Nullam varius venenatis ipsum et interdum. Nulla consequat eleifend augue in porttitor.</p>
            </div>
            
            <div class="answer" id="safety-answer">
            	<h1>Safety Policy:</h1>
                <p>Ut tincidunt ligula sit amet ipsum dictum, eu rutrum leo facilisis. Proin magna orci, iaculis in feugiat et, venenatis sed augue. Curabitur et malesuada nisl, at adipiscing orci. Morbi consequat dapibus convallis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed quis libero vel urna convallis auctor. Sed non dolor eleifend, scelerisque quam vitae, aliquam lectus. Maecenas volutpat lectus libero, condimentum tincidunt justo eleifend non. Curabitur bibendum quis felis in luctus. Sed ac urna gravida, condimentum urna cursus, posuere massa.</p>
            </div>
            <div class="answer" id="cancellation-answer">
            	<h1>Cancellation Policy:</h1>
                <p>Nam facilisis vel justo non molestie. Pellentesque ligula massa, lobortis ut metus in, egestas scelerisque enim. Nullam aliquam, purus ut consequat faucibus, nisi mauris ultricies quam, vel iaculis elit est quis massa. Sed molestie interdum nisi a commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi vulputate eros leo, id rhoncus arcu gravida ac. Mauris et eleifend odio, non ornare nisi. Cras et orci porttitor, fringilla lectus eget, viverra justo. Nulla in massa nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus eleifend sed arcu et eleifend. Pellentesque interdum condimentum turpis laoreet pharetra. Cras dignissim pharetra leo.</p>
            </div>
            <div class="answer" id="privacy-answer">
            	<h1>Privacy Policy:</h1>
                <p>Nunc quis tincidunt erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc viverra, neque sed egestas consequat, lorem nisi imperdiet metus, ut hendrerit odio diam sed mauris. Suspendisse nec lacus nec est aliquam viverra. Nulla scelerisque rutrum rhoncus. Nulla lorem sapien, laoreet eget lorem at, venenatis sodales tellus. Sed quis justo mauris. Praesent cursus erat tortor, id viverra tellus tincidunt eget. Quisque dictum tellus enim, sed viverra eros ultrices scelerisque. Curabitur in diam quam.</p>
            </div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
