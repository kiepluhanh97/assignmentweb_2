<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$conn = new mysqli("localhost", "root", "123456", "assignment2_1");
mysqli_set_charset($conn, 'UTF8');

$result = $conn->query("SELECT templId, templUserid, templUpTime, templType, templName, templUrl, templDesc, templScore, templCategory, templNumberDownload, templImg1 FROM templ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"id":"'  . $rs["templId"] . '",';
  $outp .= '"userid":"'   . $rs["templUserid"]        . '",';
  $outp .= '"uptime":"'. $rs["templUpTime"]     . '",';
  $outp .= '"type":"'. $rs["templType"]     . '",';
  $outp .= '"name":"'. $rs["templName"]     . '",';
  $outp .= '"url":"'. $rs["templUrl"]     . '",';
  $outp .= '"desc":"'. $rs["templDesc"]     . '",';
  $outp .= '"score":"'. $rs["templScore"]     . '",';
  $outp .= '"category":"'. $rs["templCategory"]     . '",';
  $outp .= '"numberdownload":"'. $rs["templNumberDownload"]     . '",';
  $outp .= '"img":"'. $rs["templImg1"]     . '"}';

}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>