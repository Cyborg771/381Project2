<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <div class="main" id="contact-us">
    	<section id="part1">
	    	<h1>
	    		Contact Us
	    	</h1>
	    	<p class="subtitle">
	    		Feel free to contact us at any time. We'd love to hear from you!
	    	</p>


	    	<form>
	    		<h2><label for="name">Name</label></h2>
                <input type="text" id="name">
                <br>

	    		<h2><label for="email">Email</label></h2>
                <input type="email" id="email" required>
                <p class="info note">*Needed to email you back.</p>
                <br>

	    		<h2 class="message-title"><label for="message">Message</label></h2>
                <textarea rows="4" cols="22" id="message" required placeholder="Dear Sky Air..."></textarea>
                <a href="#" class="button highlighted">SUBMIT</a>
	    	</form>
	    	
    	</section>
    	<section id="part2">
    		<h2>
    			Ways to reach us
    		</h2>
    		<ul>
	    		<li><h3>Email:</h3> <a href="mailto:hello@skyair.com">hello@skyair.com</a></li>
	    		<li><h3>Phone:</h3> 604.888.8888</li>
	    		<li><h3>Address:</h3>  1111 Mountain Pkwy, Burnaby BC, A1I 2R3</li>
	    	</ul>
	    	<!-- Google Map embed code from Google. -->
	    	<iframe class="large-frame" style="width:425px;height:200px;border:none;margin:0;" src="https://maps.google.ca/maps?q=1111+mountain+pkwy+burnaby&amp;hl=en&amp;sll=49.274191,-122.936059&amp;sspn=0.011928,0.033023&amp;t=h&amp;hnear=1111+Burnaby+Mountain+Pkwy,+Burnaby,+Greater+Vancouver,+British+Columbia&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=49.274191,-122.936059&amp;output=embed"></iframe>
	    	<iframe class="small-frame" style="width:250px;height:200px;border:none;margin:0;" src="https://maps.google.ca/maps?q=1111+mountain+pkwy+burnaby&amp;hl=en&amp;sll=49.274191,-122.936059&amp;sspn=0.011928,0.033023&amp;t=h&amp;hnear=1111+Burnaby+Mountain+Pkwy,+Burnaby,+Greater+Vancouver,+British+Columbia&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=49.274191,-122.936059&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?q=1111+mountain+pkwy+burnaby&amp;hl=en&amp;sll=49.274191,-122.936059&amp;sspn=0.011928,0.033023&amp;t=h&amp;hnear=1111+Burnaby+Mountain+Pkwy,+Burnaby,+Greater+Vancouver,+British+Columbia&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=49.274191,-122.936059&amp;source=embed" class="google-link">View Larger Map</a></small>
	    	
    	</section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
