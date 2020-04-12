<html>
<title>Registration Form</title>
<head>
<style>
body{ background-color:gray;}
p{ font-size:50; color:red; text-align:center;}
fieldset{background-image:url('img.jpg'); background-repeat:no-repeat; background-size:cover; border:6px solid red; margin-top:0em;}
div{background-color:white;margin-top:0em;}
b{font-size:30; color:white;}
</style>
</head>
<body>
<fieldset >
<legend>
<p><?php echo "Registration Form" ?></p>
</legend>
<table width="100">
<colgroup>
<col width="40%"/>
<col width="40%"/>
<col width="20%"/>
</colgroup>
<b><label for="name">First Name:</label></b>
<input type="text" id="name" title="Enter the firstname;" placeholder="Enter The Firstname"/>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="name">Middle Name:</label></b>
<input type="text" id="name" title="Enter the Middlename;" placeholder="Enter The Middlename"/><br><br> 
<b><label for="name">Last Name:</label></b>
<input type="text" id="name" title="Enter the lastname;" placeholder="Enter The Lastname"/>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="date">Date Of Birth:<label></b>
<input type="Date" placeholder="dd-mm-yy">&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="genter">Gender:</label></b>
<select id="genter name="gender">
<option value="male"> Male</option>
<option value="male"> Female</option>
<option value="male">Others</option>
</select><br><br>
<b><label for="email">Email Id:</label></b>
<input type="email" title="Enter the Email id" placeholder="xyz@gmail.com" required>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="email"> Alternate Email Id:</label></b>
<input type="email" title="Enter the Email id" placeholder="xyz@gmail.com" required><br><br>
<b><label for="Phone no">Phone no:</label><b>
<input type="tel" id="phone no" name="phone" placeholder="91-xxxxxxxxxx" pattern="[0-9]{2}-[1-9]{10}" title="enter the phone number">&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="Phone no"> Alternate Phone no:</label><b>
<input type="tel" id="phone no" name="phone" placeholder="91-xxxxxxxxxx" pattern="[0-9]{2}-[1-9]{10}" title="enter the phone number"><br><br>
<b><label for="address">Address:</label>
<textarea name="address"rows="5" cols="30">
</textarea>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<label for="pincode">Pincode:</label>
<input type="number" placeholder="xxx xxx" pattern="(0-9){6}"><br><br>
</table>
<input type="Submit" value="Submit">
<input type="Reset" value="Reset">

</fieldset>
</div>
</body>
</html>