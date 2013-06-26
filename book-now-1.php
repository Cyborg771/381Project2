<?php include 'head.php' ?>

<body>
	
    <?php include 'nav.php' ?>
    
    <div class="main book-now" id="book-now-1">
        <div id="progress">
            <span class="active">1</span> <span class="separator">&middot;&middot;&middot;</span> 2 <span class="separator">&middot;&middot;&middot;</span> 3 <span class="separator">&middot;&middot;&middot;</span> 4
        </div>
        <form>
        	<section id="part1">
            	<h1>Book a Helicopter Flight.</h1>
                
                    <fieldset id="choose-package">
                        <legend>Choose Your Package <a class="info" href="tours-packages.php">Info &raquo;</a></legend>
                        
                        <div class="package">
                            
                            <input type = "radio"
                                         name = "package"
                                         id = "20MinuteSampler"
                                         value = "20 Minute Sampler"
                                         checked = "checked"
                                         required
                                          />
                            <label for = "20MinuteSampler" class="packageSelector">
                                <img src="images/package_1_square.png" class="squareImage" alt="package1"/>
                                <img src="images/package_1.png" class="recImage" alt="package1" />
                                20 Minute Sampler
                            </label>
                        </div>

                        <div class="package">
                            <input type = "radio"
                                         name = "package"
                                         id = "TotalAdventurePackage"
                                         value = "Total Adventure Package"
                                          />
                            <label for = "TotalAdventurePackage" class="packageSelector">
                                <img src="images/package_2_square.png" class="squareImage" alt="package2" />
                                <img src="images/package_2.png" class="recImage" alt="package2" />
                                Total Adventure Package
                            </label>
                        </div>

                        <div class="package">
                            <input type = "radio"
                                         name = "package"
                                         id = "GroupTour"
                                         value = "Group Tour"
                                        />
                            <label for = "GroupTour" class="packageSelector">
                                <img src="images/package_3_square.png" class="squareImage" alt="package3" />
                                <img src="images/package_3.png" class="recImage" alt="package3" />
                                Group Tour
                            </label>
                        </div>
                    </fieldset>
                
                

                
            </section>
            <section id="part2">
                <div class="form-column" id="column1">
                    <h2><label>Date</label></h2>
                    <a class="info note" href="flight-schedule.php">Check Flight Schedule &raquo;</a>
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
                    <h2><label>Flight Time</label></h2>
                    <a class="info note" href="flight-schedule.php">Check Flight Schedule &raquo;</a>
                    <select id="FlightTime">
                        <option value=""></option>
                        <option value="9AM">9:00 AM</option>
                        <option value="1AM">1:00 PM</option>
                        <option value="6PM">6:00 PM</option>
                    </select>
                    <h2><label>Number of Tickets</label></h2>
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
                <div class="form-column" id="column2">
                    <h2><label>Comments</label></h2>
                    <span class="note">Please note any special requests.</span>
                    <textarea rows="4" cols="22"></textarea>
                    <a href="book-now-2.php" class="button highlighted">CONFIRM</a>
                </div>
            </section>
        </form>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
