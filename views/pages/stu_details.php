<?php require("../mybase/header.php"); ?>
<?php require("../mybase/nav_bar.php"); ?>
<?php require("../../db/db.php"); ?>

<?php
  // SQL query to fetch all student data
  $sql = "SELECT * FROM students";
  $result = mysqli_query($connect, $sql);
?>

<div class="container-fluid mt-0;padding-left-0 padding-right-0">
  <table class="table table-striped table-bordered w-100">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Role</th>
        <th scope="col" style="text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?php echo ($row['ID']); ?></td>
          <td><?php echo ($row['Name']); ?></td>
          <td><?php echo ($row['Email']); ?></td>
          <td><?php echo ($row['password']); ?></td>
          <td><?php echo ($row['Role']); ?></td>
          <td style="width: 200px; text-align: center;">
            <a href="Stu_update.php?id=<?php echo ($row['ID']); ?>" class="btn btn-primary btn-sm">Update</a>
            <a href="delete_stu.php?id=<?php echo ($row['ID']); ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<?php require("../mybase/footer.php"); ?>
