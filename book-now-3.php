<?php include 'head.php' ?>

<body>
	
    <?php include 'nav.php' ?>
    
    <div class="main book-now" id="book-now-3">
        <div id="progress">
            1 <span class="separator">&middot;&middot;&middot;</span> 2 <span class="separator">&middot;&middot;&middot;</span> <span class="active">3</span> <span class="separator">&middot;&middot;&middot;</span> 4
        </div>
        <form>
            <section id="part1">
                <h1>Book a Helicopter Flight.</h1>
                <h2>Payment Info:</h2>
                <div class="form-column" id="column1">
                    <h3><label for="name">Name</label></h3>
                    <input type="text" id="name" required autofocus>
                    <br />

                    <h3><label for="email">Email</label></h3>
                    <input type="email" id="email" required>
                    <br />

                    <h3><label for="phone">Phone</label></h3>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-column" id="column2">
                    <h3><label for="address">Address</label></h3>
                    <input type="text" id="address" required>
                    <br />

                    <h3><label for="city">City</label></h3>
                    <input type="text" id="city" required>
                    <br />

                    <select id="province">
                        <option value="BC">BC</option>
                        <option value="AB">AB</option>
                        <option value="MB">MB</option>
                        <option value="NB">NB</option>
                        <option value="NL">NL</option>
                        <option value="NT">NT</option>
                        <option value="NS">NS</option>
                        <option value="NU">NU</option>
                        <option value="ON">ON</option>
                        <option value="PE">PE</option>
                        <option value="QC">QC</option>
                        <option value="SK">SK</option>
                        <option value="YT">YT</option>
                    </select>
                    <select id="country">
                        <option value="CANADA">CANADA</option>
                        <option value="USA">USA</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                </div>
                <a href="book-now-2.php" class="back">&laquo; Go Back</a>
            </section>
            <section id="part2">
                <div class="form-column" id="column3">
                    <h3><label for="postal-code">Postal Code</label></h3>
                    <input type="text" id="postal-code" required>
                    <br />
    
                    <h3><label for="credit-card">Credit Card #</label></h3>
                    <input type="text" id="credit-card" required>
                    <br />
    
                    <h3><label for="expiry-month">Expiry</label></h3>
    <!--                 <input type="month" id="Month"/> -->
                    <select id="expiry-month">
                        <option value="BC">01</option>
                        <option value="AB">02</option>
                        <option value="MB">03</option>
                        <option value="NB">04</option>
                        <option value="NL">05</option>
                        <option value="NT">06</option>
                        <option value="NS">07</option>
                        <option value="NU">08</option>
                        <option value="ON">09</option>
                        <option value="PE">10</option>
                        <option value="QC">11</option>
                        <option value="SK">12</option>
                    </select>
                    /
                    <select id="expiry-year">
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
                    </select>
    
                    <h3><label for="secure-code"><abbr title="Card Security Code: Find it on the back of your credit card.">CSC</abbr></label></h3>
                    <input type="text" id="secure-code" required>
                </div>

                <a href="book-now-4.php" class="button highlighted">CONFIRM</a>
            </section>


        </form>
    </div>
    
    <?php include 'footer.php' ?>
    
</body>
</html>
