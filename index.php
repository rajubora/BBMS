<?php
include"connection.php";
?>

<html>
<head>
<title>Admin login </title>
<link rel="stylesheet" type="text/css" href="css/s1.css">
</head> 

<body>
<div id="full">
<div id="inner_full">
<div id="header"><h2>Blood Bank Managemnet System</h2> </div>
<div id="body">
<br><br><br><br><br>
<form action="" method="post">
<table align="center">

<tr>
<td width="200px" height="70px"><b> Username</b> </td>
<td width="100px" height="70px"><input type="text" name="un" placeholder="enter username"  style=" width:180px; height:30px;border-radius:10px;" ></td>
</tr>

<tr>
<td width="200px" height="70px"> <b>Password</b> </td>
<td width="200px" height="70px"><input type="text" name="pw" placeholder="enter password" style=" width:180px; height:30px;border-radius:10px;"></td>
</tr>
<tr>
<td><input type="submit" name="sm" placeholder="login" style=" width:70px; height: 30px; border-radius:3px; "></td>
 </tr>
</table>
</form>
<?php
if(isset($_POST["sm"]))
{
    $un=$_POST["un"];
    $pw=$_POST["pw"];
}

?>
</div>

<div id="footer" align="center"><h4> copyright to my project </h4></div>
</div>
</div>
</body>





</html>
