<?php
$title= "Add Student";
session_start();
include 'components/login_check.php';
include 'components/header.php'; 
include 'components/navbar.php';
?>

<div class="container my-3">
  <h4>Add Student </h4>
  <form method='POST' action='students_crud.php'>
      <div class="row">
          <div class='mb-3 col-md-4'>
              <label for='student_name' class='form-label float-start'>Student Name * </label>
              <input type='text' oninput="this.value = this.value.toUpperCase()" class='form-control' id='student_name' name='student_name' required>
              
          </div>
          <div class='mb-3 col-md-4'>
              <label for='student_class' class='form-label float-start'>Class * </label>
              <input type='text' oninput="this.value = this.value.toUpperCase()" class='form-control' id='student_class' name='student_class' required>
          </div>
          <div class='mb-3 col-md-4'>
              <label for='father_name' class='form-label float-start'>Father Name * </label>
              <input type='text' oninput="this.value = this.value.toUpperCase()" class='form-control' id='father_name' name='father_name' required>
          </div>
          <div class='mb-3 col-md-4'>
              <label for='address' class='form-label float-start'>Address * </label>
              <!-- <input type='text' oninput="this.value = this.value.toUpperCase()" class='form-control' id='address' name='address' required> -->
              <textarea name="address" oninput="this.value = this.value.toUpperCase()" id="address" cols="30" rows="2" class='form-control' required></textarea>
          </div>
          
          <div class='mb-3 col-md-4'>
              <label for='phone' class='form-label float-start'>Parent's Mobile Number * </label>
              <input type='number' min="1000000000" max="9999999999" class='form-control' id='phone' name='phone' required>
              <small class='form-text text-muted'>10 digit Mobile number</small>
          </div>
          
          <div class="mb-3 col-12">
              <button type='submit' id='submitBtn' class='btn btn-primary mb-3' onclick="return confirm('Sure to submit ?')">Submit</button>
              <p>* fiels required</p>
          </div>
      </div>
  </form>
</div>

<?php include_once 'components/footer.php';