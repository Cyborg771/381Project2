<?php include 'head.php' ?>

<body>
	
    <?php include 'nav.php' ?>
    
    <div class="main" id="book-now">
        <div id="progress">
            <span class="active">1</span> <span class="separator">&middot;&middot;&middot;</span> 2 <span class="separator">&middot;&middot;&middot;</span> 3
        </div>
        <form>
        	<section id="part1">
            	<h1>Book a Helicopter Flight.</h1>
                
                    <fieldset id="choose-package">
                        <legend>Choose Your Package <a class="info" href="tours-packages.php">Info &raquo;</a></legend>
                        
                        <div class="package">
                            <label for = "20MinuteSampler">
                                <img src="images/package_1_square.png" />
                                <h2>20 Minute Sampler</h2>
                            </label>
                            <input type = "radio"
                                         name = "package"
                                         id = "20MinuteSampler"
                                         value = "20 Minute Sampler"
                                         checked = "checked"
                                          />
                        </div>

                        <div class="package">
                            <label for = "TotalAdventurePackage">
                                <img src="images/package_2_square.png" />
                                <h2>Total Adventure Package</h2>
                            </label>
                            <input type = "radio"
                                         name = "package"
                                         id = "TotalAdventurePackage"
                                         value = "Total Adventure Package"
                                          />
                        </div>

                        <div class="package">
                            <label for = "GroupTour">
                                <img src="images/package_3_square.png" />
                                <h2>Group Tour</h2>
                            </label>
                            <input type = "radio"
                                         name = "package"
                                         id = "GroupTour"
                                         value = "Group Tour"
                                        />
                        </div>
                    </fieldset>
                
                

                
            </section>
            <section id="part2">
                <div class="form-column">
                    <label><h2>Date</h2></label>
                    <a class="info note" href="flight-schedule.php">Check Flight Schedule &raquo;</a>
                    <input type="date" id="FlightDate">
                    <label><h2>Flight Time</h2></label>
                    <a class="info note" href="flight-schedule.php">Check Flight Schedule &raquo;</a>
                    <select id="FlightTime">
                        <option value=""></option>
                        <option value="9AM">9:00 AM</option>
                        <option value="1AM">1:00 PM</option>
                        <option value="6PM">6:00 PM</option>
                    </select>
                    <label><h2>Number of Tickets</h2></label>
                    <select id="NumberOfTickets">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <!-- <input type="range" name="range" min="1" max="10"> --> 
                </div>
                <div class="form-column">
                    <label><h2>Comments</h2></label>
                    <span class="note">Please note any special requests.</span>
                    <textarea rows="4" cols="22"></textarea>
                    <a href="#" class="button highlighted">CONFIRM</a>
                </div>
            </section>
        </form>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>