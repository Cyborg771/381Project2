<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
        
        $('.details').fadeOut(0);
        
        $('.cal-cell').click(function() {
            $did = "#"+$(this).attr('id')+"-details";
            $('.details').fadeOut(100);
            $($did).delay(100).fadeIn(100);
        });
        
        
	});
    </script>
    
        <div class="main" id="flight-schedule">
            <section id="part1">
                <h1>Flight Schedule</h1>
                <div class="cal-month">
                    <div class="cal-row">
                        <h2><a href="#" class="month-picker">&laquo;</a> <span class="month-picker">June</span> <a href="#" class="month-picker">&raquo;</a></h2>
                    </div>
                    <div class="call-row header">
                        <div class="cal-cell header">
                            Sun
                        </div>
                        <div class="cal-cell header">
                            Mon
                        </div>
                        <div class="cal-cell header">
                            Tue
                        </div>
                        <div class="cal-cell header">
                            Wed
                        </div>
                        <div class="cal-cell header">
                            Thu
                        </div>
                        <div class="cal-cell header">
                            Fri
                        </div>
                        <div class="cal-cell header">
                            Sat
                        </div>
                    </div>
                    <div class="cal-row">
                        <div class="cal-cell cell-faded" id="d0">
                            26
                        </div>
                        <div class="cal-cell cell-faded" id="d1">
                            27
                        </div>
                        <div class="cal-cell cell-faded" id="d2">
                            28
                        </div>
                        <div class="cal-cell cell-faded" id="d3">
                            29
                        </div>
                        <div class="cal-cell cell-faded" id="d4">
                            30
                        </div>
                        <div class="cal-cell cell-faded" id="d5">
                            31
                        </div>
                        <div class="cal-cell" id="d6">
                            1
                        </div>
                    </div>
                    <div class="cal-row">
                        <div class="cal-cell" id="d7">
                            2
                        </div>
                        <div class="cal-cell" id="d8">
                            3
                        </div>
                        <div class="cal-cell" id="d9">
                            4
                        </div>
                        <div class="cal-cell" id="d10">
                            5
                        </div>
                        <div class="cal-cell" id="d11">
                            6
                        </div>
                        <div class="cal-cell" id="d12">
                            7
                        </div>
                        <div class="cal-cell" id="d13">
                            8
                        </div>
                    </div>
                    <div class="cal-row">
                        <div class="cal-cell" id="d14">
                            9
                        </div>
                        <div class="cal-cell" id="d15">
                            10
                        </div>
                        <div class="cal-cell" id="d16">
                            11
                        </div>
                        <div class="cal-cell" id="d17">
                            12
                        </div>
                        <div class="cal-cell" id="d18">
                            13
                        </div>
                        <div class="cal-cell" id="d19">
                            14
                        </div>
                        <div class="cal-cell" id="d20">
                            15
                        </div>
                    </div>
                    <div class="cal-row">
                        <div class="cal-cell" id="d21">
                            16
                        </div>
                        <div class="cal-cell" id="d22">
                            17
                        </div>
                        <div class="cal-cell" id="d23">
                            18
                        </div>
                        <div class="cal-cell" id="d24">
                            19
                        </div>
                        <div class="cal-cell" id="d25">
                            20
                        </div>
                        <div class="cal-cell" id="d26">
                            21
                        </div>
                        <div class="cal-cell" id="d27">
                            22
                        </div>
                    </div>
                    <div class="cal-row">
                        <div class="cal-cell" id="d28">
                            23
                        </div>
                        <div class="cal-cell" id="d29">
                            24
                        </div>
                        <div class="cal-cell" id="d30">
                            25
                        </div>
                        <div class="cal-cell" id="d31">
                            26
                        </div>
                        <div class="cal-cell" id="d32">
                            27
                        </div>
                        <div class="cal-cell" id="d33">
                            28
                        </div>
                        <div class="cal-cell" id="d34">
                            29
                        </div>
                    </div>
                    <div class="cal-row">
                        <div class="cal-cell" id="d35">
                            30
                        </div>
                        <div class="cal-cell cell-faded" id="d36">
                            1
                        </div>
                        <div class="cal-cell cell-faded" id="d37">
                            2
                        </div>
                        <div class="cal-cell cell-faded" id="d38">
                            3
                        </div>
                        <div class="cal-cell cell-faded" id="d39">
                            4
                        </div>
                        <div class="cal-cell cell-faded" id="d40">
                            5
                        </div>
                        <div class="cal-cell cell-faded" id="d41">
                            6
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="part2">
                <div class="details" id="d0-details">
                    <h3>May 26</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d1-details">
                    <h3>May 27</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d2-details">
                    <h3>May 28</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d3-details">
                    <h3>May 29</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d4-details">
                    <h3>May 30</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d5-details">
                    <h3>May 31</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d6-details">
                    <h3>June 1</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d7-details">
                    <h3>June 2</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d8-details">
                    <h3>June 3</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d9-details">
                    <h3>June 4</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d10-details">
                    <h3>June 5</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d11-details">
                    <h3>June 6</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d12-details">
                    <h3>June 7</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d13-details">
                    <h3>June 8</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d14-details">
                    <h3>June 9</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d15-details">
                    <h3>June 10</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d16-details">
                    <h3>June 11</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d17-details">
                    <h3>June 12</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d18-details">
                    <h3>June 13</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d19-details">
                    <h3>June 14</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d20-details">
                    <h3>June 15</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d21-details">
                    <h3>June 16</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d22-details">
                    <h3>June 17</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d23-details">
                    <h3>June 18</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d24-details">
                    <h3>June 19</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d25-details">
                    <h3>June 20</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d26-details">
                    <h3>June 21</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d27-details">
                    <h3>June 22</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d28-details">
                    <h3>June 23</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d29-details">
                    <h3>June 24</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d30-details">
                    <h3>June 25</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d31-details">
                    <h3>June 26</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d32-details">
                    <h3>June 27</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d33-details">
                    <h3>June 28</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d34-details">
                    <h3>June 29</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d35-details">
                    <h3>June 30</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d36-details">
                    <h3>July 1</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <a href="book-now-1.php"><li>6:00PM</li></a>
                    </ul>
                </div>
                <div class="details" id="d37-details">
                    <h3>July 2</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <a href="book-now-1.php"><li>1:00PM</li></a>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d38-details">
                    <h3>July 3</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d39-details">
                    <h3>July 4</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                    
                </div>
                <div class="details" id="d40-details">
                    <h3>July 5</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <li class="booked">9:00AM</li>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
                <div class="details" id="d41-details">
                    <h3>July 6</h3>
                    <p>Flight Times:</p>
                    <ul>
                        <a href="book-now-1.php"><li>9:00AM</li></a>
                        <li class="booked">1:00PM</li>
                        <li class="booked">6:00PM</li>
                    </ul>
                </div>
            </section>
            
        </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
