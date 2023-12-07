<?php require_once('../Connections/fill.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO studentregistration (Surname) VALUES (%s)",
                       GetSQLValueString($_POST['textfield'], "date"));

  mysql_select_db($database_fill, $fill);
  $Result1 = mysql_query($insertSQL, $fill) or die(mysql_error());

  $insertGoTo = "Registration.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form3")) {
  $insertSQL = sprintf("INSERT INTO login (username) VALUES (%s)",
                       GetSQLValueString(isset($_POST['textfield2']) ? "true" : "", "defined","1","0"));

  mysql_select_db($database_fill, $fill);
  $Result1 = mysql_query($insertSQL, $fill) or die(mysql_error());

  $insertGoTo = "Registration.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Page</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="856" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="227" height="14"></td>
      <td width="4"></td>
      <td width="350"></td>
      <td width="4"></td>
      <td width="271"></td>
    </tr>
    <tr>
      <td height="40"></td>
      <td></td>
      <td colspan="2" valign="top" bgcolor="#000066"><div align="center">
        <h1 class="style1">REGISTRATION PAGE </h1>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="5"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="20"></td>
      <td colspan="2" valign="top"><div align="center"><strong><marquee>Kindly Provide Your Correct Details</marquee> </strong></div>
        <form id="form2" name="form2" method="POST" action="<?php echo $editFormAction; ?>">
          <strong>
          <label>Username</label>
          </strong>
          <label>
            <input type="text" name="textfield" />
          </label>
          <input type="hidden" name="MM_insert" value="form2">
        </form>
        <form id="form3" name="form3" method="POST" action="<?php echo $editFormAction; ?>">
          <strong>
          <label>Password</label>
          </strong>
          <label>
            <input type="text" name="textfield2" />
          </label>
          <input type="hidden" name="MM_insert" value="form3">
        </form>
        <form id="form4" name="form4" method="post" action="">
          <label>
            <input type="submit" name="Submit" value="Submit" />
          </label>
        </form>
      </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="621"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
</body>
</html>
