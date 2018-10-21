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
                <a class="tracking-categories-home" href="index.php">Back to Home</a>
                
                <div id="room_fileds">
                    <h2 class="label">Aerobic Exercises:</h2>
                    <div class="content">
                        <span></span>
                    </div>
                    <h2 class="label">Strength Exercises:</h2>
                    <div class="content">
                        <span></span>
                    </div>
                    <h2 class="label">Cardio Exercises:</h2>
                    <div class="content">
                        <span></span>
                    </div>
                    <h2 class="label">Core Training:</h2>
                    <div class="content">
                        <span></span>
                    </div>
                    <h2 class="label">Stretching:</h2>
                    <div class="content">
                        <span></span>
                    </div> 
                </div>

            </div>
            <div class="tracking-items">
                <button class="tracking-items-add" onclick="add_fields();" name="addexer">Add Exercise</button>
                <button class="tracking-items-change" name="changetheme">Change Theme</button>
            </div>';
    } else {
        echo '<section class="main-container">
                  <div class="main-design-wrapper">
                    <div class="main-wrapper">
                        <img class="cal_logo" src="CaliberLogo.jpg">
                        <h3>The best way to improve your lives</h3>
                        <p>Caliber is the best fitness tracking application<br>developed to make your lives easier. Our products<br> have proved to keep everyone organized and on track!</p>
                        <a href="#">Contact Us</a>
                        <a href="#">Your Dashboard</a>
                    </div>
                    <div class="secondary-wrapper">
                        <h3>Who we are</h3>
                        <p>Caliber utilzes the most practical and feasible<br>toolkit for tracking your fitness levels. Whether<br>you are starting from the beginning, as a professional<br>athlete, or bodybuilding, Caliber provides the complete<br>toolkit for you and your activity. Caliber&apos;s fastidiously<br>designed approach makes it very practical and facile for<br>your use. Get yourself into the routine and affirm your<br>position among others.</p>
                        <a href="#">Explore how Caliber works</a>
                    </div>
                  </div>
                  <div class="under-design-wrapper">
                    <div class="under-wrapper">
                      <h3>Athletes First</h3>
                        <p>At Caliber, everyone is an athlete even if you<br>are a beginner. At Caliber, we believe that financial situations<br>play a major role in shaping who you are. We carefully developed<br>robust systems to help you fulfill your dreams with zero cost to you.<br>Because there is no need to pay to use, you can get excercising with<br>just a couple of clicks.</p>
                    </div>
                  </div>
                  <div class="under-main-wrapper">
                    <div class="two-main-wrappers">
                      <h3>Consistently Advancing</h3>
                        <p>Caliber is always improving with new features being added<br>every couple of months. We, at Caliber, believe that advancing<br>is the main part of success, and we constantly refine Caliber to<br>keep up with the demand. From practicing to repeating, by adopting<br>Caliber, you get the fullest access to the best Tracking application.</p>
                    </div>
                    <div class="two-main-wrappers">
                      <h3>Our Plans</h3>
                        <p>We plan on developing one of the most advanced<br>tracking systems to include features like classes, a<br>featured page for the top picks, a chatting system and<br>many more to come. Headquartered in Salt Lake City<br>Caliber plans on making Caliber available worldwide<br>for opinions on your workout schedules from experts.</p>
                    </div>
                  </div>
                  <div class="getting-started-main-wrapper">
                    <div class="getting-started-wrappers">
                      <h3>Track your fitness</h3>
                        <p>We are the heroes</p>
                        <a href="#">Explore how Caliber works</a>
                    </div>
                    <div class="getting-started-wrappers">
                      <h3>Case Studies</h3>
                        <p>Again, we are the heroes</p>
                        <a href="#">Explore how Caliber works</a>
                    </div>
                  </div>
            </section>';
    }
    // <button class="tracking-categories-button" onclick="add_fields();" name="addcateg">Add Category</button>

    
