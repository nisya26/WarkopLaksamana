<html>
<body>
<?php
include "koneksi.php"; ?>
<a href="contact.php">Question List</a>
<table width ="600" border ="1" cellspacing="0" cellpadding="0">
<tr>
<th align ="center">No</th>
<th>Message</th>
<th>Name</th>
<th>Email</th>
</tr>


<?php
$i = 0;
$query = mysqli_query($con, "SELECT * FROM
komentar order by email");
while ($m = mysqli_fetch_array($query))
{ $i++;
?>
<tr>
<td align="center"><?php print $i; ?></td>
<td> <?php print $m['message']; ?></td>
<td> <?php print $m['name']; ?></td>
<td> <?php print $m['email']; ?></td>


</tr>
<?php
}
?>
</table>
</html>