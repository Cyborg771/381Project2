<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
		
		//Chooses which answer to display based on the page URL, default none
		$path = $(location).attr('href').split("#");
		if ($path.length > 1) { $currentAnswer = '#'+$path[1]+"-answer"; }
		else { $currentAnswer = "" }
		$('.answer').fadeOut(0);
		$($currentAnswer).fadeIn(100);
		
		$('.question').click(function() {
			$qid = $(this).attr('id');
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
                    <li><a class="question" href="#" id="what_to_bring">What should I bring?</a></li>
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
        	<div class="answer" id="pickup-answer">
            	<h2>Where do I get picked up?</h2>
            </div>
            <div class="answer" id="what_to_bring-answer">Stuff</div>
            <div class="answer" id="additional-answer">Additional answers</div>
            <div class="answer" id="life-answer">42</div>
            <div class="answer" id="woodchuck-answer">All of it</div>
            <div class="answer" id="fat-answer">No</div>
            
            <div class="answer" id="safety-answer">Saftey Stuff</div>
            <div class="answer" id="cancellation-answer">Cancellation Stuff</div>
            <div class="answer" id="privacy-answer">Privacy Stuff</div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
