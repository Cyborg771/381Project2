    <header>
        <a href="index.php" id="logo">
            <img src="images/logo.png" alt="Sky Air"/>
        </a>
        <nav>
            <ul>
                <li><a href="book-now-1.php">Book Now</a></li>
                <li><a href="tours-packages.php">Tours &amp; Packages</a></li>
                <li><a href="flight-schedule.php">Flight Schedule</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
            <form>
                <select name="menu" onChange="top.location.href = this.form.menu.options[this.form.menu.selectedIndex].value;
return false;">  <!-- This line of javascript makes the form submit automatically on selection, without having to press a button. Learned from here: http://www.mediacollege.com/internet/javascript/navigation/drop-menu.html -->
                    <option value="#" selected>Navigation</option>
                    <option value="index.php">Home</option>
                    <option value="tours-packages.php">Tours &amp; Packages</option>
                    <option value="book-now-1.php">Book Now</option>
                    <option value="enter-code.php">Manage Bookings</option>
                    <option value="flight-schedule.php">Flight Schedule</option>
                    <option value="about-us.php">About Us</option>
                    <option value="faq.php">FAQ</option>
                    <option value="contact-us.php">Contact Us</option>
                </select>
            </form>
        </nav>
    </header>