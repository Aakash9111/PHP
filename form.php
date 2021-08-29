<Html>     
<title>  
Registration Form  
</title>   
<!<link rel="stylesheet" href="form.css" type="text/css">
<style>
input[type="file"]{

}
.add{
	border:hidden;
	height:28px;
	border-radius:7px;
	height:65px;
	}


.w{
	border:hidden;
	height:30px;
	border-radius:7px;}
.f{
	border:hidden;
	font-size:15px;
	font-family:cursive;
}	
body{ background-color: lightseagreen;
	 padding-top:100px;
     padding-bottom:100px;}
.sub{
	margin-left:220px;
	font-size:18px;
	font-style:bold;
	border:hidden;
    background-color:white;
    border-radius:20px;
	width:82px;
	height:40px;
	}
div{  background-color: mediumaquamarine;
     font-size:25px;
     opacity:0.9;
     font-family:cursive;
	 border:2px dotted black;
	 margin-left:270px;
     margin-right:270px;
	 border-radius:20px;
	 padding-top:20px;
	 padding-left:20px;
	 padding-right:20px;
	 padding-bottom:20px;
	 }
form{padding-left:100px;}
.sub:hover{
	background-color:black;
	opacity: 0.6;
	color:white;
	}


</style>
<body> 

<div>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">  
<br>  
Firstname : <input type="text" class="w" name="fname" placeholder="  Firstname" autofocus/> <br> <br>
Middlename: <input type="text" class="w" name="mname"  placeholder="  Middlename" /> <br> <br>
Lastname  : <input type="text" class="w" name="lname"  placeholder="  Lastname" required/> <br> <br>

Gender    :
<input type="radio" class="radio" name="gender" value="Male" required/> Male  
<input type="radio" class="radio" name="gender" value="Female" required/> Female  
<input type="radio" class="radio" name="gender" value="Others" required/> Others    
 <br> 
<br>
Date of Birth : <input type=date class="w"   ><br><br>
Applicant's Photo :<input type=file class="f" ><br><br>
Signature's Photo :<input type=file class="f" ><br><br>
Phone No. : <input type="text" size="2" value="+91" class="w" readonly/> 
<input type="tel" class="w" maxlength="10"  name="phone" placeholder="  Phone"  required/><br><br>
Address   : <input type="textbox" class="add" size=25 name="Address" placeholder="  Address" required/>  
<br><br>
Email     : <input type="email" class="w" name="email" placeholder="  Email" required/> <br>    
<br> 
Password  : <input type="password" class="w" name="pass" maxlength=10 placeholder="  Password" required> <br>   
<br> 
Re-type password: <input type="password" class="w" maxlength=10 name="repass" placeholder="  Re-type Password" required> <br> <br>  
<input class="sub" type="submit" name="Sub"/>  
</form>  
</div>
<?php
if(isset($_POST["Sub"]))
{
echo $_POST["fname"];
echo "<br>";
echo $_POST["mname"];
echo "<br>";
echo $_POST["lname"];
echo "<br>";
echo $_POST["gender"];
echo "<br>";
echo $_POST["phone"];
echo "<br>";
echo $_POST["Address"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
}
?>
</body>  
</html> 