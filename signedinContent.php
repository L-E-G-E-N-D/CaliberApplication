<?php
     include_once 'header.php';
 ?>
 <form action="insert.php" method="POST">
    <button onclick="OpenBox()">Enter Exercise Details</button>
        <div id="OpenBoxExer" style="visibility: hidden">
            <input type="text" placeholder="Exercise Name" name="exername" required><br>
            <input type="number" placeholder="Exercise Repetitions" name="exerreps" required><br>
            <input type="number" placeholder="Exercise Time" name="exertime" required><br>
            <input type="number" placeholder="Exercise Sets" name="exersets" required><br>
            <input type="number" placeholder="Exercise Weight" name="exerweight" required><br>
                <input type="radio" value="kilo" name="exerwdet" required>Kg.<br>
                <input type="radio" value="pound" name="exerwdet" required>Lbs.<br>
            <input type="submit" value="Submit">
        </div>
 </form>
    <!--
 <div class="tracking-items">
     <button class="tracking-items-change" name="changetheme">Change Theme</button>
 </div> -->