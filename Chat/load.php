<?php
include("./config.php");

$table = $_SESSION['table'];
$sql = "SELECT `name`, `comment`, `post_time` FROM `comment-obesity`;";


$result = $conn->query($sql) or die($conn->error);

$row = $result->fetch_assoc();
while($row = $result->fetch_assoc())
{
$name = $row['name'];
$time = $row['post_time'];
$comment = $row['comment'];

?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}
?>
