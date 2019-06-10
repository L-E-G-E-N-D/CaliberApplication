<?php
    if (isset($_SESSION['u_id'])) {
        /* echo '<div class="contact-form">
                <form id="contact-form" action="contactform.php" method="post">
                    <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                    <input type="email" name="email" placeholder="Your e-mail" class="form-control" required>
                    <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                    <textarea name="message" placeholder="Message" class="form-control" row="4" required></textarea>
                    <button type="submit" name="contactsubmit" class="form-control">Send Message</button>
            </div>'; */
        echo include_once 'signedinContent.php';
    } else {
        echo include_once 'mainPageContent.php';
    }
    // <button class="tracking-categories-button" onclick="add_fields();" name="addcateg">Add Category</button>

    
