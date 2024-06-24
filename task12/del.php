<?php


include("./dbconn2.php");
$id = $_GET ["id"];
$sql = "DELETE FROM students where id='$id'";


$conn->query($sql);

echo"<br> Data Deleted Succ";


header("Refresh:5 URL=./select_st.php");

?>