<html>
    <body>

<p>Hello</p>
<?php
/*
* import checksum generation utility
* You can get this utility from https://developer.paytm.com/docs/checksum/
*/
require_once("PaytmChecksum.php");

$orderId=$_POST["ORDERID"];
echo $orderId;
$paytmParams = array();
$paytmParams["body"] =  array(
    "userInfo"      => array(
        "custId"    => "CUST_001",
    ),
);
/* initialize an array */
$paytmParam = array();

/* add parameters in Array */
$paytmParam["MID"] = "nbCBZo84436307724140";
$paytmParam["ORDERID"] = $orderId;

/**
* Generate checksum by parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$paytmChecksum = PaytmChecksum::generateSignature($paytmParam, 'HsKuY%63DZkHISOz');
$verifySignature = PaytmChecksum::verifySignature($paytmParam, 'HsKuY%63DZkHISOz', $paytmChecksum);

$paytmParams["head"] = array(
    "signature"    => $paytmChecksum
);
echo "\n".$paytmChecksum;
?>
</body>
</html>
