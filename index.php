<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="payment_bgdlegend_paytm.php">

        ORDER ID: <input type="text" id="ORDERID" name="ORDERID">
            Amount: <input type="text" id="AMOUNT" name="AMOUNT">
            CUS ID: <input type="text" id="CUSID" name="CUSID">
            <input type="submit">
        </form>
        <br><br>
        <form method="post" action="PHPMailer/sendOTP.php">

Email: <input type="text" id="EMAILID" name="EMAILID">
OTP: <input type="text" id="OTP" name="OTP">
    <input type="submit">
</form>
<form method="post" action="payUHash.php">

txnid ID: <input type="text" id="txnid" name="txnid">
            Amount: <input type="text" id="amount" name="amount">
            productinfo ID: <input type="text" id="productinfo" name="productinfo">
            firstname: <input type="text" id="firstname" name="firstname">

            email: <input type="email" id="email" name="email">

            udf1: <input type="text" id="udf1" name="udf1">
            udf2: <input type="text" id="udf2" name="udf2">
            udf3: <input type="text" id="udf3" name="udf3">
            udf4: <input type="text" id="udf4" name="udf4">
            udf5: <input type="text" id="udf5" name="udf5">

            <input type="submit">
        </form>
        <br>
        <br>
        <form action='https://secure.payu.in/_payment' method='post'>
<input type="hidden" name="key" value="Cm0Gy1" />
<input type="text" name="txnid" value="t6svtqtjRdl4ws" />
<input type="text" name="productinfo" value="iPhone" />
<input type="text" name="amount" value="1" />
<input type="email" name="email" value="test@gmail.com" />
<input type="text" name="firstname" value="Ashish" />
<input type="text" name="lastname" value="Kumar" />
<input type="hidden" name="surl" value="https://bgdlegend.herokuapp.com/success.php" />
<input type="hidden" name="furl" value="https://bgdlegend.herokuapp.com/failed.php" />
<input type="text" name="phone" value="9988776655" />
<input type="text" name="hash" value="eabec285da28fd0e3054d41a4d24fe9f7599c9d0b66646f7a9984303fd6124044b6206daf831e9a8bda28a6200d318293a13d6c193109b60bd4b4f8b09c90972" />
<input type="submit" value="submit"> </form>
    </body>
</html>
