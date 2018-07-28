<?php
    if (isset($_SESSION['u_id'])) {
        echo "You are successfully logged in!";
        /* echo '<div class="contact-form">
                <form id="contact-form" action="contactform.php" method="post">
                    <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                    <input type="email" name="email" placeholder="Your e-mail" class="form-control" required>
                    <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                    <textarea name="message" placeholder="Message" class="form-control" row="4" required></textarea>
                    <button type="submit" name="contactsubmit" class="form-control">Send Message</button>
            </div>'; */
        echo '<div class="tracking-categories">
                <a href="index.php">Back to Home</a>
                <button name="addcateg">Add Category</button>
            </div>
            <div class="tracking-items">
                <button name="addexer">Add Exercise</button>
                <button name="changetheme">Change Theme</button>
            </div>';
    } 
