<?php require_once('../Connections/confirmeddev.php'); ?>
<?php
mysql_select_db($database_confirmeddev, $confirmeddev);
$query_Recordset1 = "SELECT * FROM studentrecord";
$Recordset1 = mysql_query($query_Recordset1, $confirmeddev) or die(mysql_error());
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
	color: #FFFFFF;
	font-weight: bold;
	font-size: 28px;
}
.style2 {font-size: 14px}
.style3 {
	font-size: 24px;
	font-weight: bold;
	color: #006633;
}
-->
</style></head>

<body>
<div align="center">
  <table width="2080" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="11" height="17"></td>
      <td width="306"></td>
      <td width="48"></td>
      <td width="356"></td>
      <td width="55"></td>
      <td width="333"></td>
      <td width="971"></td>
    </tr>
    <tr>
      <td height="40"></td>
      <td></td>
      <td colspan="3" valign="top" bgcolor="#000066"><div align="center">
        <h1><span class="style1">LIST OF APPLIED STUDENTS </span></h1>
      </div></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td></td>
      <td>&nbsp;</td>
      <td valign="top"><div align="center" class="style2">
        <h1 class="style3">2022/2023 Admission </h1>
      </div></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="85">&nbsp;</td>
      <td colspan="5" valign="top"><div align="center">
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
        </table>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="132"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
