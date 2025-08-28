<?php
include('config/database.php');

// Handle fetch (GET)
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $connect->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        die('User  not found');
    }

// Handle update (POST)
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];


    $stmt = $connect->prepare("UPDATE users SET username = ?, password = ?, email = ? WHERE user_id = ?");
    $stmt->bind_param("sssi", $uname, $pass, $mail, $id);

    if ($stmt->execute()) {
        echo "Updated successfully";
        header("Location: user.php");
        exit;
    } else {
        echo "Invalid request.";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="css/edit_user.css">

</head>
<body>
    <section>
        <h2>Edit User</h2>
        <form action="edit_user.php?id=<?php echo htmlspecialchars($_GET['id']); ?>" method="post">
            <div class="container">
                <!-- Hidden field to pass user id-->
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['user_id']); ?>">
                
                <label for="uname"><b>Username: </b></label>
                <input type="text" name="uname" placeholder="Enter username" 
                value="<?php echo htmlspecialchars($user['username']); ?>"><br>

                <label for="pass"><b>Password: </b></label>
                <input type="password" name="pass" placeholder="Enter password"><br>

                <label for="mail"><b>Email:</b></label>
                <input type="email" name="mail" placeholder="Enter email" 
                value="<?php echo htmlspecialchars($user['email']); ?>"><br> 

                <button type="submit" name="update">Update</button>
            </div>
        </form>

        <button>
          <a href="user.php">Users</a>
        </button>
    </section>
</body>
</html>
