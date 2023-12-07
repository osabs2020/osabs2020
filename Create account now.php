<?php require_once('Connections/create.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO createaccount (Surname, `Middle Name`, `First Name`, `User ID`, `Email Address`, `Phone Number`, Password, `Confirm Password`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Surname'], "text"),
                       GetSQLValueString($_POST['Middle_Name'], "text"),
                       GetSQLValueString($_POST['First_Name'], "text"),
                       GetSQLValueString($_POST['User_ID'], "text"),
                       GetSQLValueString($_POST['Email_Address'], "text"),
                       GetSQLValueString($_POST['Phone_Number'], "text"),
                       GetSQLValueString($_POST['Password'], "text"),
                       GetSQLValueString($_POST['Confirm_Password'], "text"));

  mysql_select_db($database_create, $create);
  $Result1 = mysql_query($insertSQL, $create) or die(mysql_error());

  $insertGoTo = "Delsuweb/Succes Submit.jpg";
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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 30px;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
.style3 {
	font-size: 25px;
	font-weight: bold;
}
.style4 {font-size: 25px; font-weight: bold; color: #FFFFFF; }
.style5 {
	color: #FF9900;
	font-weight: bold;
	font-size: 24px;
}
.style6 {
	color: #FFFFFF;
	font-size: 50px;
}
.style7 {color: #FFFFFF; font-weight: bold; font-size: 24px; }
.style8 {color: #FF9900; font-weight: bold; font-size: 22px; }
-->
</style>
</head>

<body>
<div align="center">
  <table width="945" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <!--DWLayoutTable-->
    <tr>
      <td width="19" height="70">&nbsp;</td>
      <td width="254">&nbsp;</td>
      <td width="46">&nbsp;</td>
      <td width="38">&nbsp;</td>
      <td width="251">&nbsp;</td>
      <td width="42">&nbsp;</td>
      <td width="28">&nbsp;</td>
      <td width="8">&nbsp;</td>
      <td width="241">&nbsp;</td>
      <td width="18">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top" bgcolor="#000033"><div align="center">
        <h1 class="style1">CREATE ACCOUNT </h1>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="27">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td valign="top" bgcolor="#FFFFFF"><div align="center">
        <h1 class="style2">Sign Up To Continue </h1>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="52">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <tr>
      <td height="1"></td>
      <td rowspan="3" valign="top" bgcolor="#000033"><div align="center">
        <h1 class="style3">&nbsp;</h1>
        <p class="style3">&nbsp;</p>
        <h1 class="style3"><img src="Delsuweb/Images/animated-welcome-image-0216.gif" width="220" height="56" /><span class="style6">!</span></h1>
          <h1 class="style4"><span class="style7">Sign Up To Your Account</span></h1>
      </div>        </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19">&nbsp;</td>
      <td colspan="6" valign="top" bgcolor="#000033"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td rowspan="3" valign="top" bgcolor="#000033"><div align="center">
        <h1 class="style4">&nbsp;</h1>
        <h1 class="style4">&nbsp;</h1>
        <h1 class="style4">WELCOME </h1>
      </div>
      <p align="center" class="style5">To </p>
      <p align="center" class="style8">Your Delsu Account </p></td>
      <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <tr>
      <td height="287"></td>
      <td colspan="5" rowspan="3" valign="top">&nbsp;
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
          <div align="center">
            <table align="center">
              <tr valign="baseline">
                <td nowrap align="right"><strong>Surname:</strong></td>
                <td><input type="text" name="Surname" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>Middle Name:</strong></td>
                <td><input type="text" name="Middle_Name" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>First Name:</strong></td>
                <td><input type="text" name="First_Name" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>User ID:</strong></td>
                <td><input type="text" name="User_ID" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>Email Address:</strong></td>
                <td><input type="text" name="Email_Address" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>Phone Number:</strong></td>
                <td><input type="text" name="Phone_Number" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>Password:</strong></td>
                <td><input type="text" name="Password" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"><strong>Confirm Password:</strong></td>
                <td><input type="text" name="Confirm_Password" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">&nbsp;</td>
                <td><input type="submit" value="Sign Up"></td>
              </tr>
                      </table>
            <input type="hidden" name="MM_insert" value="form1">
          </div>
      </form>        <p align="center">&nbsp;</p></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="1"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="47"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <tr>
      <td height="585"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
</body>
</html>
