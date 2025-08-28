<?php

include('config/database.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="css/user.css">
</head>
<body>
      <section class="section">
          <h2>All Users</h2>

          <table id="users">
              <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>

                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php if($result && mysqli_num_rows($result) > 0): // check if the row has values  ?> 
                <?php while($row = mysqli_fetch_assoc($result)): // allows to retrieve our data ?>
                <tr>
                    <td>
                        <?php echo $row['username']?>
                    </td>
                    <td>
                        <?php echo $row['password']?>
                    </td>
                    <td>
                        <?php echo $row['email']?>
                    </td>
                    <td>
                          <!-- This will get the id of the user that has clicked -->
                        <a href="edit_user.php? id=<?php echo $row['user_id'] ?>">Edit</a>
                    </td>
                  </tr>
                  <?php endwhile; ?>
                  <?php else: ?>
                    <tr>
                        <td colspan="4">No users found</td>
                    </tr>
                  <?php endif; ?>
              </tbody>
              
          </table>
          <button>
                <a href="add_user.php">Add User</a>
          </button>
      </section>
</body>
</html>