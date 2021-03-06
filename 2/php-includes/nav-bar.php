<style type='text/css'>
  .active {
    color: rgb(104, 218, 33) !important;
  }
</style>

<?php
  function which_page($page) {
    $filename = basename($_SERVER['PHP_SELF']);
    if ($filename === $page) {
      echo 'class="active"';
    }
  }
?>

<div id="nav-bar">
  <image id="burger-button" src="images/burger.png" onclick="mobileNavBar();"></image>
  <ul>
    <li <?php which_page('index.php');?> id="home"><a href="index.php">Home</a></li>
    <li <?php which_page('schedule.php');?> id="schedule"><a href="schedule.php">Schedule</a></li>
    <li <?php which_page('clients.php');?> id="clients"><a href="clients.php">Clients</a></li>
    <li <?php which_page('employees.php');?> id="employees"><a href="employees.php">Employees</a></li>
    <li <?php which_page('snow-call.php');?> id="call"><a href="snow-call.php">Snow Call</a></li>
    <li id="log-off" onclick="logOff();">Log Off</li>
  </ul>
</div>

<div id="drop-nav">
  <ul>
    <li class="nav-bar-button" id="home">Home</li>
    <hr class="spacer">
    <li class="nav-bar-button" id="schedule"><a href="schedule.php">Schedule</a></li>
    <hr class="spacer">
    <li class="nav-bar-button" id="clients"><a href="clients.php">Clients</a></li>
    <hr class="spacer">
    <li class="nav-bar-button" id="employees"><a href="employees.php">Employees</a></li>
    <hr class="spacer">
    <li class="nav-bar-button" id="call"><a href="snow-call.php">Snow Call</a></li>
    <hr class="spacer">
    <li id="log-off" onclick="logOff();">Log Off</li>
  </ul>
</div>