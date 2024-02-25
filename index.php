<?php
$title = "All Students";
session_start();
include 'components/login_check.php';
include 'components/header.php';
include 'components/dbCon.php';
?>

<div class="container my-3">
  <h4>All Students</h4>
  <a href="add_student.php">Add</a>
  <!-- table of students -->
  <div class='table-responsive'>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col" style='position:sticky; left:0'>Name</th>
          <th scope="col">Class</th>
          <th scope="col">Father Name</th>
          <th scope="col" style='min-width:150px'>Address</th>
          <th scope="col">Phone</th>
          <th scope="col" style='min-width:100px'>Added On</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = <<<EOF
        SELECT * from students;
        EOF;
        $ret = $db->query($sql);
        $i = 0;
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
          $i += 1;
          echo "<tr>" .
            "<td>$i</td>" .
            "<td style='position:sticky; left:0'>" . $row['name'] . "</td>" .
            "<td>" . $row['class'] . "</td>" .
            "<td>" . $row['father'] . "</td>" .
            "<td>" . $row['address'] . "</td>" .
            "<td>" . $row['phone'] . "</td>" .
            "<td>" . $row['added_on'] . "</td>" .
            "<td><a class='btn btn-sm btn-danger' onclick=\"return confirm('Sure to delete this student?')\" href='students_crud.php?delete=yes&id=" . $row['id'] . "'>Delete</a></td>" .
            "</tr>";
        }
        $db->close();
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php include_once 'components/footer.php'; ?>