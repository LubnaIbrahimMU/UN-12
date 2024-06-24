<?php
include('./dbconn2.php');

$data = $conn->query("SELECT * FROM students")->fetchAll();

// $stmt = $conn->prepare("SELECT * FROM users");
// $stmt->execute();
// $data=$stmt->fetchAll();
// foreach($data as $k) {
// echo "<br>" .$k['user_name'] . " " .$k["phone_number"] . " " .$k["email"]."<br>";
// }
                    //  <a href='./up_users.php?id={$k['user_id']}'>{$k['user_id']}</a>

// $data = $conn->query("SELECT * FROM users")->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th> Student Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $k) {

            echo "
             <tr>
                    <td> {$k['name']}</td>
                    <td>{$k["contact_info"]}</td>
                    <td>{$k["email"]}</td>
                    <td>
                    <a href='./update.php?id={$k['id']}'>Edit</a>
                    </td>
                    <td>
                    <a href='./del.php?id={$k['id']}'>Delete</a>
                    </td>
            </tr>";
        }
        
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
