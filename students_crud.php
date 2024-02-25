<?php
session_start();
include 'components/login_check.php';
include 'components/dbCon.php';
include 'components/validate.php';

// add student
if (isset($_POST['student_name'])) {
  $student_name = validate($_POST['student_name']);
  $class = validate($_POST['student_class']);
  $father_name = validate($_POST['father_name']);
  $address = validate($_POST['address']);
  $phone = validate($_POST['phone']);
  date_default_timezone_set('Asia/Kolkata');
  $curr_date = date('Y-m-d H:i:s');
  $sql = <<<EOF
  INSERT INTO students VALUES (NULL,'$student_name','$class','$father_name','$address','$phone','$curr_date');
  EOF;
  $ret = $db->exec($sql);
  if (!$ret) {
    // echo $db->lastErrorMsg();
    echo 'Some error ocurred in db';
  } else {
    $_SESSION['alert'] = ["success", "Student added successfully"];
    header('Location: index.php');
    exit;
  }
}
//delete student
if (isset($_GET['delete'])) {
  $delete_student = validate($_GET['id']);
  $sql = <<<EOF
  DELETE from students where id = '$delete_student';
  EOF;
  $ret = $db->exec($sql);
  if (!$ret) {
    // echo $db->lastErrorMsg();
  } else {
    $_SESSION['alert'] = ["success", "Student deleted successfully"];
    header('Location: index.php');
    exit;
  }
}
