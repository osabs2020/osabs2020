<?php require_once('Connections/abraka.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO studentrecord (Surname, Firstname, Middlename, Gender, Dateofbirth, Nationality, `State`, LGA, Address, Phonenumber, email, Faculty, Department, `Course of study`, Id) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Surname'], "text"),
                       GetSQLValueString($_POST['Firstname'], "text"),
                       GetSQLValueString($_POST['Middlename'], "text"),
                       GetSQLValueString($_POST['Gender'], "text"),
                       GetSQLValueString($_POST['Dateofbirth'], "text"),
                       GetSQLValueString($_POST['Nationality'], "text"),
                       GetSQLValueString($_POST['State'], "text"),
                       GetSQLValueString($_POST['LGA'], "text"),
                       GetSQLValueString($_POST['Address'], "text"),
                       GetSQLValueString($_POST['Phonenumber'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['Faculty'], "text"),
                       GetSQLValueString($_POST['Department'], "text"),
                       GetSQLValueString($_POST['Course_of_study'], "text"),
                       GetSQLValueString($_POST['Id'], "text"));

  mysql_select_db($database_abraka, $abraka);
  $Result1 = mysql_query($insertSQL, $abraka) or die(mysql_error());

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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #FFFFFF; font-weight: bold; font-size: 36px; }
-->
</style>
</head>

<body>
<div align="center">
  <table width="888" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <!--DWLayoutTable-->
    <tr>
      <td width="156" height="15"></td>
      <td width="589"></td>
      <td width="143"></td>
    </tr>
    <tr>
      <td height="42"></td>
      <td valign="top" bgcolor="#000033"><h1 align="center" class="style2">APPLICATION PAGE </h1></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style1"><marquee>
      </marquee><marquee>Kindly Fill This Form With Your Correct Detail</marquee>
      </span></div></td>
      <td></td>
    </tr>
    <tr>
      <td height="3"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="479"></td>
      <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
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
                <td nowrap align="right">Dateofbirth:</td>
                <td><input type="text" name="Dateofbirth" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Nationality:</td>
                <td><label>
                  <select name="Nationality" id="Nationality">
                    <option>Select Nationality</option>
                    <option>Nigerian</option>
                    <option>Ghanian</option>
                    <option>Camerounian</option>
                    <option>Morrocan</option>
                    <option>Egyptian</option>
                    <option>Malian</option>
                    <option>American</option>
                    <option>Congolee</option>
                    <option>Algerian</option>
                    <option>Malian</option>
                    <option>Others</option>
                  </select>
                </label></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">State:</td>
                <td><label>
                  <select name="State" id="State">
                    <option>Select State</option>
                    <option>Adamawa</option>
                    <option>Abia</option>
                    <option>Katsina</option>
                    <option>Kaduna</option>
                    <option>Kano</option>
                    <option>Imo</option>
                    <option>Anambra</option>
                    <option>Ondo</option>
                    <option>Osun</option>
                    <option>Plataeu</option>
                    <option>Lagos</option>
                    <option>Oyo</option>
                    <option>Delta</option>
                    <option>Kwara</option>
                    <option>Niger</option>
                    <option>Benue</option>
                    <option>Ebonyi</option>
                    <option>Bayelsa</option>
                    <option>Cross River</option>
                    <option>Rivers</option>
                    <option>Akwaibom</option>
                    <option>Zamfara</option>
                    <option>Borno</option>
                    <option>Gombe</option>
                    <option>Taraba</option>
                    <option>Sokoto</option>
                    <option>Others</option>
                  </select>
                </label></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">LGA:</td>
                <td><label>
                  <select name="LGA" id="LGA">
                    <option>Select LGA</option>
                    <option>Mubi North</option>
				  <option>Mubi South</option>
                  <option>Ukwuani</option>
                  <option>Ndokwa West</option>
                  <option>Ndokwa East</option>
                  <option>Ika North</option>
                  <option>Ika South</option>
                  <option>Oshimili </option>
                  <option>Aniocha</option>
                  <option>Ika North-East</option>
                  <option>Isoko South</option>
                  <option>Patani</option>
                  <option>Oshimili North</option>
                  <option>Warri Central</option>
                  <option>Udu</option>
                  <option>Uvwie</option>
                  <option>Warri South</option>
                  <option>Warri North</option>
                  <option>Okpe</option>
                  <option>Sapele</option>
                  <option>Ethiope East</option>
                  <option>Ughelli South</option>
                  <option>Burutu</option>
                  <option>Ughelli North</option>
                  <option>Bomadi</option>
                  <option>Isoko North</option>
                  <option>Isoko South</option>
                  <option>Aniocha South</option>
                  <option>Demsa</option>
                  <option>Fufore</option>
                  <option>Ganye</option>
                  <option>Girei</option>
                  <option>Gombi</option>
                  <option>Guyuk</option>
                  <option>Hong</option>
                  <option>Jada</option>
                  <option>Numan</option>
                  <option>Lamurde</option>
                  <option>Madagali</option>
                  <option>Maiha</option>
                  <option>Mayo-Belwa</option>
                  <option>Shelleng</option>
                  <option>Song</option>
                  <option>Toungo</option>
                  <option>Yola North</option>
                  <option>Yola South</option>
                  <option>Akoko-Edo</option>
                  <option>Etsako East</option>
                  <option>Etsako Central</option>
                  <option>Etsao West</option>
                  <option>Owan West</option>
                  <option>Esan North-East</option>
                  <option>Esan Central</option>
                  <option>Esan South-East</option>
                  <option>Ovia South-West</option>
                  <option>Ovia North-East</option>
                  <option>Igueben</option>
                  <option>Egor</option>
                  <option>Uhunmwonde</option>
                  <option>Oredo</option>
                  <option>Ikpoba-Okha</option>
                  <option>Orhionmwon</option>
                  <option>Others</option>
                  </select>
                </label></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Address:</td>
                <td><input type="text" name="Address" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Phonenumber:</td>
                <td><input type="text" name="Phonenumber" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Email:</td>
                <td><input type="text" name="email" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Faculty:</td>
                <td><label>
                  <select name="Faculty" id="Faculty">
                    <option>Select Faculty</option>
                    <option>Education</option>
                    <option>Arts</option>
                    <option>Law</option>
                    <option>Pharmacy</option>
                    <option>Agriculture</option>
                    <option>Basic Clinical Science</option>
                    <option>Clinical Medicine</option>
                    <option>Engineering</option>
                    <option>Management Science</option>
                    <option>Pharmacy</option>
                    <option>Science</option>
                    <option>Social Sciences</option>
                    <option>Others</option>
                  </select>
                </label></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Department:</td>
                <td><label>
                  <select name="Department" id="Department">
                    <option>Select Department</option>
                    <option>Physics</option>
                    <option>Agric</option>
                    <option>Economics</option>
                    <option>Geography</option>
                    <option>Agric Economis</option>
                    <option>Agronomy</option>
                    <option>Agric Extension</option>
                    <option>Animal Science</option>
                    <option>Fisheries and Aquaculture</option>
                    <option>Forestry and Wildlife</option>
                    <option>English and Literary Studies</option>
                    <option>Fine and Applied Arts</option>
                    <option>History and International Studies</option>
                    <option>Language and Linguistics</option>
                    <option>Music</option>
                    <option>Religious Studies and Philosophy</option>
                    <option>Theatre Arts</option>
                    <option>Anathomic Pathology</option>
                    <option>Chemical Pathology</option>
                    <option>Haematology and Blood Transfusion</option>
                    <option>Medical Microbiology and Parasitology</option>
                    <option>Pharmacology and Therapeutics</option>
                    <option>Anesthesia</option>
                    <option>Community Medicine</option>
                    <option>Family Medicine</option>
                    <option>Medicine</option>
                    <option>Obstetrics and Gynaecology</option>
                    <option>Pediatrics</option>
                    <option>Psychiatric and Mental Health</option>
                    <option>Radiology</option>
                    <option>Surgery</option>
                    <option>Business Education</option>
                    <option>English Language Education</option>
                    <option>History Education</option>
                    <option>Early Childhood Education</option>
                    <option>Educational Management</option>
                    <option>Guidance and Counseling</option>
                    <option>Health and Safety Education</option>
                    <option>Human Kinetics</option>
                    <option>Institute of Education</option>
                    <option>Library and Information Science</option>
                    <option>Biology Education</option>
                    <option>Chemistry Education</option>
                    <option>Computer Science Education</option>
                    <option>Integrated Science Education</option>
                    <option>Maths Education</option>
                    <option>Physics Education</option>
                    <option>Economics Education</option>
                    <option>Geography Education</option>
                    <option>Political Science Education</option>
                    <option>Social Studies Education</option>
                    <option>Technical Education</option>
                    <option>Vocational Education</option>
                    <option>Chemical Engineering</option>
                    <option>Civil and Environmental Engineering</option>
                    <option>Electrical Engineering</option>
                    <option>Mechanical Engineering</option>
                    <option>Petroleum Engineering</option>
                    <option>Commercial and Property Law</option>
                    <option>Jurisprudence and Industrial Law</option>
                    <option>Private Law</option>
                    <option>Public Law</option>
                    <option>Accounting</option>
                    <option>Baning and Finance</option>
                    <option>Business Administration</option>
                    <option>Marketing and Entrepreneurship</option>
                    <option>Clinical Pharmacy and Administration</option>
                    <option>Pharmaceutical and Medical Chemistry</option>
                    <option>Pharmaceutical Microbiology and Biotechnology</option>
                    <option>Pharmaceutical and Industrial Pharmacy</option>
                    <option>Pharmacognosy and Traditional Medicine</option>
                    <option>Pharmacology and Toxicology</option>
                    <option>Animal and Environmental Biology</option>
                    <option>Biochemistry</option>
                    <option>Botany</option>
                    <option>Cemistry</option>
                    <option>Computer Science</option>
                    <option>Geology</option>
                    <option>Maths</option>
                    <option>Medical Laboratory Science</option>
                    <option>Microbiology</option>
                    <option>Physics</option>
                    <option>Science Laboratory Technology</option>
                    <option>Psychology</option>
                    <option>Mas Communication</option>
                    <option>Political Science</option>
                    <option>Others</option>
                  </select>
                </label></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Courseofstudy:</td>
                <td><label>
                  <select name="Courseofstudy" id="Courseofstudy">
                    <option>Select Courseofstudy</option>
                    <option>Physics</option>
                    <option>Agric</option>
                    <option>Economics</option>
                    <option>Geography</option>
                    <option>Agric Economis</option>
                    <option>Agronomy</option>
                    <option>Agric Extension</option>
                    <option>Animal Science</option>
                    <option>Fisheries and Aquaculture</option>
                    <option>Forestry and Wildlife</option>
                    <option>English and Literary Studies</option>
                    <option>Fine and Applied Arts</option>
                    <option>History and International Studies</option>
                    <option>Language and Linguistics</option>
                    <option>Music</option>
                    <option>Religious Studies and Philosophy</option>
                    <option>Theatre Arts</option>
                    <option>Anathomic Pathology</option>
                    <option>Chemical Pathology</option>
                    <option>Haematology and Blood Transfusion</option>
                    <option>Medical Microbiology and Parasitology</option>
                    <option>Pharmacology and Therapeutics</option>
                    <option>Anesthesia</option>
                    <option>Community Medicine</option>
                    <option>Family Medicine</option>
                    <option>Medicine</option>
                    <option>Obstetrics and Gynaecology</option>
                    <option>Pediatrics</option>
                    <option>Psychiatric and Mental Health</option>
                    <option>Radiology</option>
                    <option>Surgery</option>
                    <option>Business Education</option>
                    <option>English Language Education</option>
                    <option>History Education</option>
                    <option>Early Childhood Education</option>
                    <option>Educational Management</option>
                    <option>Guidance and Counseling</option>
                    <option>Health and Safety Education</option>
                    <option>Human Kinetics</option>
                    <option>Institute of Education</option>
                    <option>Library and Information Science</option>
                    <option>Biology Education</option>
                    <option>Chemistry Education</option>
                    <option>Computer Science Education</option>
                    <option>Integrated Science Education</option>
                    <option>Maths Education</option>
                    <option>Physics Education</option>
                    <option>Economics Education</option>
                    <option>Geography Education</option>
                    <option>Political Science Education</option>
                    <option>Social Studies Education</option>
                    <option>Technical Education</option>
                    <option>Vocational Education</option>
                    <option>Chemical Engineering</option>
                    <option>Civil and Environmental Engineering</option>
                    <option>Electrical Engineering</option>
                    <option>Mechanical Engineering</option>
                    <option>Petroleum Engineering</option>
                    <option>Commercial and Property Law</option>
                    <option>Jurisprudence and Industrial Law</option>
                    <option>Private Law</option>
                    <option>Public Law</option>
                    <option>Accounting</option>
                    <option>Baning and Finance</option>
                    <option>Business Administration</option>
                    <option>Marketing and Entrepreneurship</option>
                    <option>Clinical Pharmacy and Administration</option>
                    <option>Pharmaceutical and Medical Chemistry</option>
                    <option>Pharmaceutical Microbiology and Biotechnology</option>
                    <option>Pharmaceutical and Industrial Pharmacy</option>
                    <option>Pharmacognosy and Traditional Medicine</option>
                    <option>Pharmacology and Toxicology</option>
                    <option>Animal and Environmental Biology</option>
                    <option>Biochemistry</option>
                    <option>Botany</option>
                    <option>Cemistry</option>
                    <option>Computer Science</option>
                    <option>Geology</option>
                    <option>Maths</option>
                    <option>Medical Laboratory Science</option>
                    <option>Microbiology</option>
                    <option>Physics</option>
                    <option>Science Laboratory Technology</option>
                    <option>Psychology</option>
                    <option>Mas Communication</option>
                    <option>Political Science</option>
                    <option>Others</option>
                  </select>
                </label></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">Id:</td>
                <td><input type="text" name="Id" value="" size="32"></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">&nbsp;</td>
                <td><input type="submit" value="Submit"></td>
              </tr>
            </table>
            <input type="hidden" name="MM_insert" value="form1">
          </form>
          <p>&nbsp;</p>
      </div></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</div>
</body>
</html>
