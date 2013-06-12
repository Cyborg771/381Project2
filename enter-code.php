<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <div class="main" id="enter-code">
    	<section id="part1">
	    	<h1>
	    		Manage Bookings
	    	</h1>
	    	




	    	<form>
	    		<label for="code"><h2>Confirmation Code</h2></label>
	    		<p>
	    			Enter your confirmation code below to view and edit your flight booking.
	    	 	</p>
                <input type="text" id="code" placeholder="00012345">
                <a href="manage-bookings.php" class="button highlighted">SUBMIT</a>
	    	</form>
	    	
    	</section>
    	<section id="part2">
    		<h2>
    			Lost your confirmation code?
    		</h2>
    		<p>
    			Your confirmation code was emailed to you when you confirmed your booking.
    		</p>
    		<p>
    			If you have lost your code, <a href="contact-us.php">contact us</a> and we'll get it sorted out!
    		</p>
  
	    	
    	</section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
