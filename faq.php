<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
		
		$path = $(location).attr('href').split("#");
		if ($path.length > 1) { $currentAnswer = '#'+$path[1]+"-answer"; }
		else { $currentAnswer = "#default-answer" }
		$('.answer').fadeOut(0);
		$($currentAnswer).fadeIn(0);
		
		$('.question').click(function() {
			$qid = $(this).attr('id');
			$qid = $qid.split("_")[0];
			$aid = "#"+$qid+"-answer";
			if ($aid != $currentAnswer) {
				$currentAnswer = $aid;
				$('.answer').fadeOut(200);
				$($aid).delay(200).fadeIn(200);
			}
		});
	});
	</script>
    
    <div class="main" id="faq">
    	<section id="part1">
        	<div id="questions">
                <h1>Frequently Asked Questions</h1>
                <ul>
                    <li><a class="question" href="#part2" id="pickup">Where do I go to get picked up?</a></li>
                    <li><a class="question" href="#part2" id="arrival-time">What time should I arrive?</a></li>
                    <li><a class="question" href="#part2" id="what-to-bring">What should I bring?</a></li>
                    <li><a class="question" href="#part2" id="training">What does the safety training involve?</a></li>
                    <li><a class="question" href="#part2" id="payment">Do you accept other payment methods?</a></li>
                    <li><a class="question" href="#part2" id="change">How can I change/cancel my booking?</a></li>
                </ul>
                <h1>Policies</h1>
                <ul>
                    <li><a class="question" href="#part2" id="safety">Safety</a></li>
                    <li><a class="question" href="#part2" id="cancellation">Cancellation</a></li>
                    <li><a class="question" href="#part2" id="privacy">Privacy</a></li>
                </ul>
            </div>
        </section>
        <section id="part2">
        	<div class="answer" id="default-answer">
            	<h1>Welcome to the FAQ</h1>
                <p>Our most frequently asked questions are listed on this page. If you have any additional questions feel free to <a href="contact-us.php">contact</a> us.<p>
            </div>
        	<div class="answer" id="pickup-answer">
            	<h1>Where do I go to get picked up?</h1>
                <p>Please come to 1111 Mountain Pkwy, Burnaby BC. The 501 bus takes you right there, or you can drive or bike. You will see a big sign that says 'SkyAir'. stand under it and Jamie or Soheil will come out to meet you!</p>
                <iframe class="large-frame" style="width:425px;height:174px;border:none;margin:0;" src="https://maps.google.ca/maps?q=1111+mountain+pkwy+burnaby&amp;hl=en&amp;sll=49.274191,-122.936059&amp;sspn=0.011928,0.033023&amp;t=h&amp;hnear=1111+Burnaby+Mountain+Pkwy,+Burnaby,+Greater+Vancouver,+British+Columbia&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=49.274191,-122.936059&amp;output=embed"></iframe>
                <iframe class="small-frame" style="width:250px;height:200px;border:none;margin:0;" src="https://maps.google.ca/maps?q=1111+mountain+pkwy+burnaby&amp;hl=en&amp;sll=49.274191,-122.936059&amp;sspn=0.011928,0.033023&amp;t=h&amp;hnear=1111+Burnaby+Mountain+Pkwy,+Burnaby,+Greater+Vancouver,+British+Columbia&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=49.274191,-122.936059&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?q=1111+mountain+pkwy+burnaby&amp;hl=en&amp;sll=49.274191,-122.936059&amp;sspn=0.011928,0.033023&amp;t=h&amp;hnear=1111+Burnaby+Mountain+Pkwy,+Burnaby,+Greater+Vancouver,+British+Columbia&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=49.274191,-122.936059&amp;source=embed" class="google-link">View Larger Map</a></small>
            </div>
            <div class="answer" id="arrival-time-answer">
            	<h1>What time should I arrive?</h1>
                <p>Please arrive at the time you made your booking for. We've allowed time for a 20 minute safety session in addition to your flight time.</p>
			</div>
            <div class="answer" id="what-to-bring-answer">
            	<h1>What should I bring?</h1>
                <p>Just bring yourself and a piece of photo ID so that we can match you with your booking. No need to print anything out.</p>
<p>Bring anything you might want to access during your flight (a bottle of water, or your camera for example).</p>
<p>Due to safety regulations, <strong>please leave the alcohol at home</strong>. No knives or weapons are allowed onboard either.</p>
<p>I'd also recommend leaving the portable videogames at home, but that's just me.</p>
			</div>
            <div class="answer" id="training-answer">
            	<h1>What does the safety training involve?</h1>
                <p>safety training is generally a 20 minute session where we go over the basics of being safe in a helicopter. Basically, no sticking your arms out the windows, stuff like that.</p>
                <p>Much of it involves showing you specific parts of the aircraft interior, so it is best done in person. But don't worry, we make it simple so that even little kids can understand.</p>
			</div>
            <div class="answer" id="payment-answer">
            	<h1>Do you accept other payment methods?</h1>
                <p>No, unfortunately we can only accept payment by credit card at the moment.</p>
			</div>
            <div class="answer" id="change-answer">
            	<h1>How can I change/cancel my booking?</h1>
                <p>You can do change your booking on the <a href="enter-code.php">Manage Bookings</a> page. Make sure you have your confirmation code, which was sent to your email when you completed your booking.</p>
                <p>Please keep in mind that to cancel your booking you must notify us <strong>3 days in advance</strong> to receive a full refund.</p>
                <p>If you're sure you want to cancel, please <a href="contact-us.php">contact us</a> to sort it out.</p>
			</div>
            
            
            <div class="answer" id="safety-answer">
            	<h1>Safety Policy:</h1>
                <p>All passengers must attend a manditory 20 minute safety session and sign a waiver prior to take off.</p>
                <p>No alcohol, weapons, or pets inside the helicopter.</p>
                <p>Our pilot reserves the right to cancel or bring the helicopter back down at any time before or during the flight if there is any unsafe behavior, weather and other conditions.</p>
                <p>we do not recommend our services to those who are afraid of heights or with serious medical conditions.</p>
            </div>
            <div class="answer" id="cancellation-answer">
            	<h1>Cancellation Policy:</h1>
                <p>Please keep in mind that to cancel your booking you must notify us <strong>3 days in advance</strong> to receive a full refund. This is because we devote time to making sure we are ready for you to arrive, time that we can't get back.</p>
                <p>If you're sure you want to cancel, please <a href="contact-us.php">contact us</a> to sort it out.</p>
            </div>
            <div class="answer" id="privacy-answer">
            	<h1>Privacy Policy:</h1>
                <p>All information collected on our site and otherwise is used only for the purposes of booking and paying for your helicopter flights. We would never do something so sinister as to spam you or sell your information. We promise.</p>
            </div>
        </section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
