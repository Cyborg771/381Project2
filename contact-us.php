<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <div class="main" id="contact-us">
    	<section id="part1">
	    	<h1>
	    		Contact Us
	    	</h1>
	    	<p>Feel free to contact us at any time. We'd love to hear from you!
	    	</p>
	    	<ul>
	    		<li>Email: <a href="mailto:hello@skyair.com">hello@skyair.com</a></li>
	    		<li>Phone: 604.888.8888</li>
	    	</ul>
	    	<hr />
	    	<form>
	    		<label><h2>Name</h2></label>
                <input type="text" id="name">

	    		<label><h2>Email</h2></label>
                <p class="info note">*We need this so we can respond to you.</a>
                <input type="email" id="email" required>

	    		<label><h2>Your Message</h2></label>
                <span class="note">Please note any special requests.</span>
                <textarea rows="4" cols="22" id="message" required></textarea>
                <a href="#" class="button highlighted">SUBMIT</a>
	    	</form>
	    	
    	</section>
    	<section id="part2">
			<h2>
	    		Where We Are
	    	</h2>
    		<p>1111 Mountain Pkwy<br />
				Burnaby BC<br />
				A1I 2R3
	    	</p>
	    	<p>
	    		[MAP GOES HERE]
	    	</p>
    	</section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
