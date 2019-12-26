<?php
     include_once 'header.php';
 ?>
 <?php
     include_once 'index.php';
 ?>

<div class="tabs-container">
    <div class="tabs-container__sidebar">
        <a href="#" class="tabs-container__tabs tabs-container__tabs--active" data-for-tab="1">Launch</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="2">Authentication</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="3">Track Activity</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="4">Track Food</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="5">Analytics</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="6">Efficiency</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="7">Locations</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="8">Disputes</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="9">Settings</a>
    </div>
    <?php
        include_once 'signedInTabs/launch.php';
        include_once 'signedInTabs/authentication.php';
        include_once 'signedInTabs/activity.php';
        include_once 'signedInTabs/food.php';
        include_once 'signedInTabs/analytics.php';
        include_once 'signedInTabs/efficiency.php';
        include_once 'signedInTabs/location.php';
        include_once 'signedInTabs/disputes.php';
        include_once 'signedInTabs/settings.php';
    ?>
</div>

<?php
    include_once 'footer.php';
?>
   <!--
 <div class="tracking-items">
     <button class="tracking-items-change" name="changetheme">Change Theme</button>
 </div> -->