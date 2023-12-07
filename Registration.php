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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO studentregistration (Surname, Firstname, Middlename, `Matriculation Number`, `Date of Birth`, Gender, `Phone Number`, Nationality, `State`, LGA, `Residential Address`, `Email Address`, `Programme Type`, `Course of First Degree Study (For Postgraduates)`, `Year of Entry (eg 2022/2023)`, Faculty, Department, `Course of Present Study`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Surname'], "text"),
                       GetSQLValueString($_POST['Firstname'], "text"),
                       GetSQLValueString($_POST['Middlename'], "text"),
                       GetSQLValueString($_POST['Matriculation_Number'], "text"),
                       GetSQLValueString($_POST['Date_of_Birth'], "text"),
                       GetSQLValueString($_POST['Gender'], "text"),
                       GetSQLValueString($_POST['Phone_Number'], "text"),
                       GetSQLValueString($_POST['Nationality'], "text"),
                       GetSQLValueString($_POST['State'], "text"),
                       GetSQLValueString($_POST['LGA'], "text"),
                       GetSQLValueString($_POST['Residential_Address'], "text"),
                       GetSQLValueString($_POST['Email_Address'], "text"),
                       GetSQLValueString($_POST['Programme_Type'], "text"),
                       GetSQLValueString($_POST['Course_of_First_Degree_Study_For_Postgraduates'], "text"),
                       GetSQLValueString($_POST['Year_of_Entry_eg_20222023'], "text"),
                       GetSQLValueString($_POST['Faculty'], "text"),
                       GetSQLValueString($_POST['Department'], "text"),
                       GetSQLValueString($_POST['Course_of_Present_Study'], "text"));

  mysql_select_db($database_fill, $fill);
  $Result1 = mysql_query($insertSQL, $fill) or die(mysql_error());

  $insertGoTo = "Succes Submit.jpg";
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
<title>Home</title>
<style type="text/css">
<!--
body {
	background-color: #333333;
}
.style3 {
	font-size: 12px;
	color: #FFFFFF;
}
.style4 {color: #006600}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style16 {color: #669900}
.style8 {color: #FFFFFF}
.style9 {color: #000000; }
.style9 {font-size: 14px;
	font-weight: bold;
}
.style17 {color: #0000CC; }
.style18 {font-size: 16px; font-weight: bold; color: #009900; }
.style22 {
	color: #000099;
	font-weight: bold;
}
.style31 {font-size: 14px}
.style26 {font-size: 12px;
	font-weight: bold;
}
.style27 {font-size: 12px}
.style28 {font-size: 12px; font-weight: bold; color: #000000; }
.style33 {color: #00FF00}
.style34 {color: #FF0000}
.style35 {color: #0000FF; }
.style37 {color: #333333; font-weight: bold; }
.style38 {
	font-size: 28px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="932" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
    <!--DWLayoutTable-->
    <tr>
      <td height="238" colspan="3" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p><img src="Images/Delsu Logo.jpg R.jpg" width="700" height="200" border="0" /></p>
        <p>&nbsp;</p>
      </div></td>
      <td width="5"></td>
    </tr>
    <tr>
      <td height="19" colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td height="24" colspan="3" valign="top"><div align="center" class="style4">
        <p class="style3"><span class="style31"><strong>! HOME !</strong> <strong><a href="About Us.html" class="style8">ABOUT US</a> !</strong> <strong><a href="admission.html" class="style8">ADMISSION </a>! <a href="Faculties.html" class="style8">FACULTIES</a> !<a href="Applydelsu.php" class="style8"> APPLY</a> !<a href="Administration.html" class="style8"> ADMINISTRATION</a> !</strong> <span class="style37"><a href="News.html">NEWS</a> </span><strong>!</strong> <strong><a href="Journal.html" class="style8">JOURNAL</a> !</strong> <strong><a href="Contact Us.html" class="style8">CONTACT US</a> ! <a href="Report ViewR.php" class="style8">REPORT VIEW</a> !! </strong></span></p>
      </div></td>
      <td></td>
    </tr>
    <tr>
      <td height="28" colspan="3" valign="top"><marquee>
      <div align="center"><span class="style16">Welcome To Delta State, University Abraka, Delta State, Nigeria</span>      </div>
      </marquee> </td>
      <td></td>
    </tr>
    <tr>
      <td width="246" height="3"></td>
      <td width="440"></td>
      <td width="241"></td>
      <td></td>
    </tr>
    
    
    
    
    
    <tr>
      <td height="200" colspan="4" valign="top" bgcolor="#333333">
            
    <div align="center"><img src="Images/0cba8101bacf74e3096f1aa216167a68.jpg" width="265" height="200" /><img src="Images/Delsu Barner 2.gif" width="400" height="200" /><img src="Images/0cba8101bacf74e3096f1aa216167a68.jpg" width="265" height="200" /></div>      </tr>
    <tr>
    <td height="19" colspan="4" valign="top">      </tr>
    <tr>
      <td height="3">    
      <td>    
      <td colspan="2" rowspan="6" valign="top" bgcolor="#CCCCCC">                                                                                                                                                                                                                                                                                                                      <div align="center" class="style9">
          <p align="center" class="style8">&nbsp;</p>
          <p align="center" class="style17">OUR PROGRAMMES</p>
          <marquee direction="up" scrollamount="2" scrolldelay="2">
          <div align="left">&lt;&gt; Pre-Degree </a>
            </p>
          </div>
          <p align="left" class="style9">&lt;&gt; First Degree</p>
          <p align="left" class="style9">&lt;&gt; Master's Degree </p>
          <p align="left" class="style9">&lt;&gt; M.Phil./PhD</p>
          <p align="left" class="style9">&lt;&gt; Ph.D </p>
          <p align="center" class="style9"><img src="Images/Delsu 14.jpeg" width="80" height="80" /></p>
          <p align="left" class="style8">&nbsp;</p>
          <p align="center" class="style18">OUR FACULTIES </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Engineering </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Law </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Management Sciences </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Pharmacy </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Science </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Social Sciences </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Education </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Clinical Medicine </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Basic Medical Sciences </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Basic Clinical Sciences </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Arts </p>
          <p align="left" class="style9">&lt;&gt;Faculty Of Agriculture </p>
          <p align="left" class="style9">&nbsp;</p>
          <p align="left" class="style9">&nbsp;</p>
          <p align="left" class="style9">&nbsp;</p>
          </marquee>
          </div>
    <p align="left"></p>      </tr>
    
    
    
    
    
    
    
    
    

    
    
    <tr>
      <td rowspan="6" valign="top" bgcolor="#CCCCCC">                                                    
            
        <p>&nbsp;</p>
        <p align="center" class="style22">QUICK LINKS </p>
        <ul>
          <li class="style26"><span class="style33"><span class="style8"><a href="Faculty of Engineering.html">Faculty Of Engineering</a></span></span></li>
          <li class="style3"></li>
          <li class="style26"><span class="style33"><span class="style8"><a href="Faculty of Law.html">Faculty Of Law </a></span></span></li>
          <li class="style3"></li>
          <li class="style26"><a href="Faculty of Management Sciences.html" class="style35">Faculty Of Management Sciences</a></li>
          <li class="style27"> </li>
          <li class="style26"><span class="style33"><span class="style8"><span class="style33"><span class="style8"><a href="Faculty of Pharmacy.html">Faculty Of Pharmacy </a></span></span></span></span></li>
          <li class="style3"></li>
          <li class="style26"><span class="style34"><span class="style8"><a href="Faculty of Science.html">Faculty Of Science </a></span></span></li>
          <li class="style3"></li>
          <li class="style26"><a href="Faculty of Social Science.html">Faculty Of Social Sciences </a></li>
          <li class="style27"></li>
          <li class="style26"><a href="Faculty of Education.html">Faculty Of Education </a></li>
          <li class="style27"></li>
          <li class="style26"><a href="Faculty of Clinical Medicine.html">Faculty Of Clinical Medicine</a></li>
          <li class="style27"> </li>
          <li class="style26"><a href="Faculty of Basic Medical Sciences.html">Faculty Of Basic Medical Sciences</a></li>
          <li class="style27"> </li>
          <li class="style26"><a href="Faculty of Arts.html">Faculty Of Arts </a></li>
          <li class="style27"></li>
          <li class="style26"><a href="Faculty of Agriculture.html">Faculty Of Agriculture</a> </li>
        </ul>
        <p align="left" class="style28"></p>
        <p align="left">&nbsp;</p>
        <p align="left" class="style9">&nbsp;</p>
      <p>&nbsp;</p>
      <td height="35" valign="top" bgcolor="#3366FF">      <div align="center">
        <h1 class="style38">STUDENT REGISTRATION </h1>
    </div>    </tr>
    <tr>
    <td height="23" valign="top" bgcolor="#FFFFFF"><div align="center"><strong><marquee>Kindly Provide Your Correct Details</marquee>  </strong></div>    </tr>
    <tr>
    <td height="6"></tr>
    <tr>
      <td height="162" valign="top" bgcolor="#FFFFFF"><form method="post" name="form1" action="<?php echo $editFormAction; ?>">
        <table align="center">
          <tr valign="baseline">
            <td nowrap align="right">Surname:</td>
            <td><input type="text" name="Surname" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Firstname:</td>
            <td><input type="text" name="Firstname" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Middlename:</td>
            <td><input type="text" name="Middlename" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Matriculation Number:</td>
            <td><input type="text" name="Matriculation_Number" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Date of Birth:</td>
            <td><input type="text" name="Date_of_Birth" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Gender:</td>
            <td><label>
              <select name="Gender" id="Gender">
                <option>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Phone Number:</td>
            <td><input type="text" name="Phone_Number" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Nationality:</td>
            <td><label>
              <select name="Nationality" id="Nationality">
                <option>Select Nationality</option>
                <option>Nigerian</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">State:</td>
            <td><label>
              <select name="State" id="State">
                <option>Select Nationality</option>
                <option>Nigerian</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">LGA:</td>
            <td><label>
              <select name="LGA" id="LGA">
                <option>Select LGA</option>
                <option>Abia North</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Residential Address:</td>
            <td><input type="text" name="Residential_Address" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Email Address:</td>
            <td><input type="text" name="Email_Address" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Programme Type:</td>
            <td><label>
              <select name="Programme Type" id="Programme Type">
                <option>Select Programme Type</option>
                <option>Pre-Degree</option>
                <option>Undergraduate</option>
                <option>Postgraduate</option>
                <option>Professional</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Course of First Degree Study (For Postgraduates):</td>
            <td><label>
              <select name="Course of First Degree Study (For Postgraduates)" id="Course of First Degree Study (For Postgraduates)">
                <option>Select Course of First Degree Study (For Postgraduates)</option>
                <option>English</option>
                <option>Maths</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Year of Entry (eg 2022/2023):</td>
            <td><input type="text" name="Year_of_Entry_eg_20222023" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Faculty:</td>
            <td><label>
              <select name="Faculty" id="Faculty">
                <option>Select Faculty</option>
                <option>Science</option>
                <option>Law</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Department:</td>
            <td><label>
              <select name="Department" id="Department">
                <option>Select Department</option>
                <option>Law</option>
                <option>Chemistry</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Course of Present Study:</td>
            <td><label>
              <select name="Course of Present Study" id="Course of Present Study">
                <option>Select Course of Present Study</option>
                <option>Law</option>
                <option>English</option>
                <option>Others</option>
              </select>
              <br />
              <select name="Level of Study" id="Level of Study">
                <option>Select Level of Study</option>
                <option>100</option>
                <option>200</option>
				<option>300</option>
				<option>400</option>
				<option>500</option>
				<option>600</option>
				<option>700</option>
				<option>800</option>
				<option>900</option>
                <option>Others</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">&nbsp;</td>
            <td><input type="submit" value="Submit"></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1">
      </form>
        <p>&nbsp;</p>
    </tr>
    <tr>
      <td height="763"></tr>
    
    
    
    
    
    
    
    <tr>
      <td height="3">      
      <td>    
    <td>      </tr>
    
    
    
    
    
    
    
    
    
    

    
    
    <tr>
    <td height="57" colspan="4" valign="top" bgcolor="#333333">      </tr>
    
    <tr>
      <td height="23" colspan="4" valign="top" bgcolor="#333333"><div align="center" class="style7">COPYRIGHT @ DELTA STATE UNIVERSITY ABRAKA 2023 </div></td>
    </tr>
  </table>
</div>
</body>
</html>
