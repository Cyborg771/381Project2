<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
    $(document).ready(function(){
		
        $('#editing').hide();
    
		$('#edit').click(function() {
            $('#editing').show();
            $('#saved').hide();
		});
        
        $('#save').click(function() {
            $('#editing').hide();
            $('#saved').show();
		});
	});
    </script>
    
    <div class="main" id="manage-bookings">
    	<section id="part1">
	    	<h1>
	    		Manage Bookings
	    	</h1>

    	 		<fieldset class="booking-summaries" id="saved">
                    <legend><a id="edit" href="#">Edit &raquo;</a></legend>
                    <ul class="titles">
                        <li><h4>Package:</h4></li>
                        <li><h4>Date:</h4></li>
                        <li><h4>Time:</h4></li>
                        <li><h4>Tickets:</h4></li>
                        
                        <li><h4>Confirmation Code:</h4></li>
                        <li><h4>Date Booked:</h4></li>
                    </ul>
                    <ul>
                        <li>20 Minute Sampler</li>
                        <li>June 14 2013</li>
                        <li>10:30am</li>
                        <li>3</li>
                        
                        <li>00012345</li>
                        <li>June 1 2013</li>
                    </ul>
    	 		</fieldset>
            
                <fieldset class="booking-summaries" id="editing">
                    <legend><a id="save" href="#">Save &raquo;</a></legend>
                    <ul class="titles">
                        <li><h4>Package:</h4></li>
                        <li><h4>Date:</h4></li>
                        <li><h4>Time:</h4></li>
                        <li><h4>Tickets:</h4></li>
                        
                        <li><h4>Confirmation Code:</h4></li>
                        <li><h4>Date Booked:</h4></li>
                    </ul>
                    <ul>
                        <li><select class="editable" id="Package">
                                <option value=""></option>
                                <option value="1">20 Minute Sampler</option>
                                <option value="2">Total Adventure Package</option>
                                <option value="3">Group Tours</option>
                            </select>
                        </li>
                        <li><input class="editable" type="date" id="FlightDate"></li>
                        <li>
                            <select class="editable" id="FlightTime">
                                <option value=""></option>
                                <option value="9AM">9:00 AM</option>
                                <option value="1AM">1:00 PM</option>
                                <option value="6PM">6:00 PM</option>
                            </select>
                        </li>
                        <li>
                            <select class="editable" id="NumberOfTickets">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </li>
                        
                        <li>00012345</li>
                        <li>June 1 2013</li>
                    </ul>
    	 		</fieldset>


    	</section>
    	<section id="part2">
	    	<p>
    			Here is a summary of the bookings on your account. Any questions? <a href="contact-us.php">Contact us</a>.
    	 	</p>
    	</section>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
