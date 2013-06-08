<?php include 'head.php' ?>

<body>

	<?php include 'nav.php' ?>
    
    <script>
	$(document).ready(function(){
        
        $('.details').fadeOut(0);
        
        $('.cal-cell').mouseover(function() {
            $did = "#"+$(this).attr('id')+"-details";
            $($did).delay(100).fadeIn(100);
        });
        
        $('.cal-cell').mouseleave(function() {
            $did = "#"+$(this).attr('id')+"-details";
            $($did).fadeOut(100);
        });
        
        
	});
    </script>
    
        <div class="main" id="flight-schedule">
            <section id="part1">
                <div class="cal-month">
                    <h2>June</h2>
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
                    May 26
                </div>
                <div class="details" id="d1-details">
                    May 27
                </div>
                <div class="details" id="d2-details">
                    May 28
                </div>
            </section>
            
        </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
