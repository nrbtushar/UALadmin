<?php
if($_GET['ckpt']==1){
	
	$a="I am tushar";
	header("Location: test.php?a=$a&b=1");
	
	$strng=str_replace(array("\r\n", "\r", "\n",";",","), ";", $_GET['userIds']);
	$users = explode(";", $strng);
   //sort($users);
   foreach($users as $key=>$value)
   {
    if(is_null($value) || $value == '')
        unset($users[$key]);
    }
   
   foreach($users as $userId)
   print trim($userId)."<br>";
   print count($users);
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
</style>
</head>

<body>
<form>
<div align="center">
  <table width="671" border="0">
    <tr valign="top">
      <td height="202" align="right" valign="middle"><span class="style1">User ID</span></td>
      <td colspan="2"><textarea name="userIds" cols="65" rows="10" placeholder="User Id (ex abc;xyz;123)"></textarea></td>
    </tr>
    <tr valign="top">
      <td width="98" height="60" align="right">&nbsp;</td>
      <td width="377"><input type="hidden" name="ckpt" value="1" />
        <input type="submit" name="Submit" value="Submit" /> 
        I am tushar</td>
      <td width="182">Make kamal hossain</td>
    </tr>
  </table>
</div>
</form>
</body>
</html>