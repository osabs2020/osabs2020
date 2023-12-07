<?php require_once('../Connections/authentication.php'); ?>
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO signup (Firstname, Surname, Gender, Username, Password) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Firstname'], "text"),
                       GetSQLValueString($_POST['Surname'], "text"),
                       GetSQLValueString($_POST['Gender'], "text"),
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['Password'], "text"));

  mysql_select_db($database_authentication, $authentication);
  $Result1 = mysql_query($insertSQL, $authentication) or die(mysql_error());

  $insertGoTo = "signupmessage.html";
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
<title>Untitled Docum</title>
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
  <table width="872" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="202" height="37">&nbsp;</td>
      <td width="80">&nbsp;</td>
      <td width="282">&nbsp;</td>
      <td width="128">&nbsp;</td>
      <td width="180">&nbsp;</td>
    </tr>
    <tr>
      <td height="48">&nbsp;</td>
      <td>&nbsp;</td>
      <td valign="top" bgcolor="#003366"><h1 align="center" class="style1">SIGNUP PAGE </h1></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="185">&nbsp;</td>
      <td colspan="3" valign="top">&nbsp;
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
          <table align="center">
            <tr valign="baseline">
              <td nowrap align="right">Firstname:</td>
              <td><input type="text" name="Firstname" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Surname:</td>
              <td><input type="text" name="Surname" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Gender:</td>
              <td><input type="text" name="Gender" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Username:</td>
              <td><input type="text" name="Username" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Password:</td>
              <td><input type="password" name="Password" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">&nbsp;</td>
              <td><input type="submit" value="Signup"></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1">
        </form>
      <p>&nbsp;</p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="47">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
