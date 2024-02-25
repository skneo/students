<?php
if (isset($_SESSION['alert'])) {
  $alert_type = $_SESSION['alert'][0];
  $alert_message = $_SESSION['alert'][1];
  echo "<div class='alert alert-$alert_type' role='alert'><b>$alert_message</b></div>";
  unset($_SESSION['alert']);
}
