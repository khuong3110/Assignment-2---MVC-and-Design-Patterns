
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Assignment 2 - MVC and Design Patterns</title>
</head>
<body>
    <h1>Hello From My View!</h1>
    <?php
    $user = new User();
    $user->userID = 'kkhuat';
    $user->role = 'Student';
    $user->firstname = 'Khuong';
    $user->lastname = 'Khuat';
    $user->email = 'kkhuat@iupui.edu';


      echo "<ul>";
      echo "<li>" . "User ID: " . $userID . "</li>";
      echo "<li>" . "First Name: " . $firstname . "</li>";
      echo "<li>" . "Last Name: " . $lastname . "</li>";
      echo "<li>" . "Email: " . $email . "</li>";
      echo "<li>" . "Role: " . $role . "</li>";
      echo "</ul>";
    ?>
</body>
</html>
