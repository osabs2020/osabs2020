<?php require_once('file:///C|/Users/Programmer PC/Downloads/Connections/Comfirmdev.php'); ?>
<?php
mysql_select_db($database_Comfirmdev, $Comfirmdev);
$query_Recordset1 = "SELECT * FROM studentrecord";
$Recordset1 = mysql_query($query_Recordset1, $Comfirmdev) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style2 {color: #000066}
.style3 {
	font-size: 24px;
	font-weight: bold;
	color: #006600;
}
-->
</style>
</head>

<body>
<table width="1181" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="197" height="27">&nbsp;</td>
    <td width="110">&nbsp;</td>
    <td width="434">&nbsp;</td>
    <td width="142">&nbsp;</td>
    <td width="226">&nbsp;</td>
    <td width="72">&nbsp;</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center" class="style1">
      <h1 class="style2">LIST OF APPLIED STUDENTS </h1>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="26"></td>
    <td></td>
    <td valign="top"><h1 align="center" class="style3">2023/2024 Admission </h1></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="113" colspan="5" valign="top">&nbsp;
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
    <td height="56">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
