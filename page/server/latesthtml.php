<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$conn = new mysqli("localhost", "root", "123456", "assignment2_1");
mysqli_set_charset($conn, 'UTF8');

$result = $conn->query("SELECT templId, templUserid, templUpTime, templType, templName, templUrl, templDesc, templScore, templCategory, templNumberDownload, templImg1,templImg2,templImg3 FROM templ WHERE templType = 0 ORDER BY templUpTime DESC LIMIT 8");

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
  $outp .= '"img1":"'. $rs["templImg1"]     . '",';
  $outp .= '"img2":"'. $rs["templImg2"]     . '",';
  $outp .= '"img3":"'. $rs["templImg3"]     . '"}';

}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>