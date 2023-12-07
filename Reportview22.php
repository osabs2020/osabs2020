<?php require_once('../Connections/Comfirmdev.php'); ?>
<?php
$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_Comfirmdev, $Comfirmdev);
$query_Recordset1 = "SELECT * FROM studentrecord";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $Comfirmdev) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="1797" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="81" height="13"></td>
    <td width="363"></td>
    <td width="123"></td>
    <td width="371"></td>
    <td width="87"></td>
    <td width="352"></td>
    <td width="420"></td>
  </tr>
  <tr>
    <td height="28"></td>
    <td></td>
    <td colspan="3" valign="top"><div align="center">
      <h2 class="style1">LIST OF APPLIED STUDENT </h2>
    </div></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="41"></td>
    <td></td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center"><strong>2023/2024 ACADEMIC SESSION </strong></div></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="138">&nbsp;</td>
    <td colspan="5" valign="top">&nbsp;
      <table border="1">
        <tr>
          <td>Surname</td>
          <td>Firstname</td>
          <td>Middlename</td>
          <td>Gender</td>
          <td>Dateofbirth</td>
          <td>Nationality</td>
          <td>State</td>
          <td>LGA</td>
          <td>Address</td>
          <td>Phonenumber</td>
          <td>email</td>
          <td>Faculty</td>
          <td>Department</td>
          <td>Courseofstudy</td>
          <td>Id</td>
        </tr>
        <?php do { ?>
          <tr>
            <td><?php echo $row_Recordset1['Surname']; ?></td>
            <td><?php echo $row_Recordset1['Firstname']; ?></td>
            <td><?php echo $row_Recordset1['Middlename']; ?></td>
            <td><?php echo $row_Recordset1['Gender']; ?></td>
            <td><?php echo $row_Recordset1['Dateofbirth']; ?></td>
            <td><?php echo $row_Recordset1['Nationality']; ?></td>
            <td><?php echo $row_Recordset1['State']; ?></td>
            <td><?php echo $row_Recordset1['LGA']; ?></td>
            <td><?php echo $row_Recordset1['Address']; ?></td>
            <td><?php echo $row_Recordset1['Phonenumber']; ?></td>
            <td><?php echo $row_Recordset1['email']; ?></td>
            <td><?php echo $row_Recordset1['Faculty']; ?></td>
            <td><?php echo $row_Recordset1['Department']; ?></td>
            <td><?php echo $row_Recordset1['Courseofstudy']; ?></td>
            <td><?php echo $row_Recordset1['Id']; ?></td>
          </tr>
          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
      </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="137">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
