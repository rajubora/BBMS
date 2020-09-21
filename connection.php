<?php
$db=new PDO("mysql:host=localhost;dbname=pro_bbms","root","");
if($db)
{
    echo"connect";

}
else
{
    echo"not connect";
}
?>