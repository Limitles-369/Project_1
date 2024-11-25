<?php require("../mybase/header.php"); ?>

  <?php require("../mybase/nav_bar.php"); ?>
  <?php require("../../db/db.php"); ?>

  <?php
    // SQL query to fetch all student data
    $sql = "SELECT * FROM students";
    $result = mysqli_query($connect, $sql);
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?php echo ($row['ID']); ?></td>
          <td><?php echo ($row['Name']); ?></td>
          <td><?php echo ($row['Email']); ?></td>
          <td><?php echo ($row['password']);?></td> <!-- Masked password for security -->
          <td>
            <a href="edit_stu.php?id=<?php echo htmlspecialchars($row['ID']); ?>" class="btn btn-primary">Edit</a>
            <a href="delete_stu.php?id=<?php echo htmlspecialchars($row['ID']); ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <?php require("../mybase/footer.php"); ?>

