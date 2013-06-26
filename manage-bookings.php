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
                    <legend><a id="edit" class="button" href="#">Edit &raquo;</a></legend>
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
                        <li>9:00am</li>
                        <li>1</li>
                        
                        <li>00012345</li>
                        <li>June 1 2013</li>
                    </ul>
    	 		</fieldset>
            
                <fieldset class="booking-summaries" id="editing">
                    <legend><a id="save" class="button highlighted" href="#">Save &raquo;</a></legend>
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
                                <option value="1">20 Minute Sampler</option>
                                <option value="2">Total Adventure Package</option>
                                <option value="3">Group Tours</option>
                            </select>
                        </li>
                        <!--<li><input class="editable" type="date" id="FlightDate" value="2013-06-14"></li>-->
                        <li>
                            <select class="editable date" id="month">
                                <option value="JAN">Jan</option>
                                <option value="JAN">Feb</option>
                                <option value="JAN">Mar</option>
                                <option value="JAN">Apr</option>
                                <option value="JAN">May</option>
                                <option value="JAN">Jun</option>
                                <option value="JAN">Jul</option>
                                <option value="JAN">Aug</option>
                                <option value="JAN">Sep</option>
                                <option value="JAN">Oct</option>
                                <option value="JAN">Nov</option>
                                <option value="JAN">Dec</option>
                            </select>
                            <select class="editable date" id="day">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select class="editable date" id="year">
                                <option value="1">2015</option>
                                <option value="2">2014</option>
                                <option value="3">2013</option>
                            </select>
                        </li>
                        <li>
                            <select class="editable" id="FlightTime">
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
