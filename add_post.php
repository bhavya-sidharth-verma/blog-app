<form action="add_post.php" method="post">
    Title: <input type="text" name="title"><br>
    Content: <textarea name="content"></textarea><br>
    <input type="submit" value="Add Post">
</form>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "New post created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
