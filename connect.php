<?php 

$title = filter_input(INPUT_POST, 'title');
$name = filter_input(INPUT_POST, 'name');
$blogText = filter_input(INPUT_POST, 'blogText');


$conn = new mysqli("localhost", "root", "3sKCoNa1LjVwVAqY", "blogposts");

$blogText = mysqli_real_escape_string($conn, $blogText);
$sql = "INSERT INTO posts (name, title, blogText)
	values ('$name', '$title', '$blogText')";
if ($conn->query($sql)){
	header("Location: ViewPosts.php");
} else { 
	echo "Error!";
}
$conn->close();


?>