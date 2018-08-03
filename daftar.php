<html>
<head>
</head>
<body background ="backg.jpg">
<?php
include "koneksi.php"; ?>
<br><br><br><br><br>
<center>
<table width="600" border="1" cellspacing="0" cellpadding="0">
<tr>
<th align="center">No</th>
<th>email</th>
<th>nama</th>
<th>subject</th>
<th>message</th>
<a href="index.php">Kembali ke home</a>
</tr></center>

<?php
$i = 0;
$query = mysqli_query($con, "SELECT * FROM  komentar order by email");
while ($m = mysqli_fetch_array($query))
{ $i++;
?>
<tr>
<td align="center"><?php print $i; ?></td>
<td><?php print $m['message']; ?></td>
<td><?php print $m['name']; ?></td>
<td><?php print $m['email']; ?></td>


<?tr>
<?php
}
?>
</table>
</body>
</html>