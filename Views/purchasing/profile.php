<?php

session_start();

if(!isset($_SESSION['user_id']))
    {

    header("location: ../../login.php");
}

include('../../Config/database.php');

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i",$id);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>My Profile</h2>

<table>

<tr>
<th>Name</th>
<td><?php echo $user['name']; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $user['email']; ?></td>
</tr>

<tr>
<th>Phone</th>
<td><?php echo $user['phone']; ?></td>
</tr>

<tr>
<th>Role</th>
<td><?php echo $user['role']; ?></td>
</tr>

</table>

</div>

<?php include('footer.php'); ?>