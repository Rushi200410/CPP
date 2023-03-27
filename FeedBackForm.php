<!DOCTYPE html>
<html>
<head>
<title> ASSIGNMENT FORM </title><!-- To add Title -->
</head>
<!-- The Main Containtent is Present in Body -->
<body style=" background-color: #bfffff; padding-right: 400px; padding-left: 400px;">
<!-- 
    backgorung-color is to add color 
    padding is to leave space 
    #73C2FB =  Light Blue color in HEX code
-->

<form style="Background-color:#87CEFA;" action="data.php" method="get">
<!-- 
    #0080FF =  Blue color in HEX code
    action is the page of output
    methad is the type to send the data(get or post)
-->

<h1 style="Background-color:#0000FF;" align="center"><br>Welcome to this project<br></h1>
<!--
    <br> - tag is used to go to the next line
    #000080 =  Dark Blue color in HEX code
    align is to add a alignment (legt,center,right)
-->
<label style=" padding-right: 25px; padding-left: 25px;"> First Name : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="firstname" placeholder="Enter your First Name" maxlength="20" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->
<label style=" padding-right: 25px; padding-left: 25px;"> Last Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="lastname" placeholder="Enter your Last Name" maxlength="20" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->
<label style=" padding-right: 25px; padding-left: 25px;"> Father's Name : </label> &nbsp;
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="fathername" placeholder="Enter your Father's Name" maxlength="20" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->
<label style=" padding-right: 25px; padding-left: 25px;"> Mother's Name : </label> 
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="mothername" placeholder="Enter your Mother's Name" maxlength="20" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->
<label style=" padding-right: 25px; padding-left: 25px;">Phone Number : </label>
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="number" name="number" placeholder="Enter your Number" maxlength="10" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->

<label style=" padding-right: 25px; padding-left: 25px;"> Bulding : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="bulding" placeholder="Enter your Bulding Name" maxlength="20" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->
<label style=" padding-right: 25px; padding-left: 25px;"> Lacality(Area) : </label> 
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="Locality" placeholder="Enter your Area Name" maxlength="20" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->

<label style=" padding-right: 25px; padding-left: 25px;"> City: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="City">
    <!--
        to add a list 
    -->
<option>Ahmadnagar</option>
<option>Akola</option>
<option>Amravati</option>
<option>Aurangabad</option>
<option>Bhandara</option>
<option>Bhusawal</option>
<option>Bid</option>
<option>Buldhana</option>
<option>Chandrupur</option>
<option>Daulatabad</option>
<option>Dhule</option>
<option>Jalgaon</option>
<option>Kalyan</option>
<option>Kari</option>
<option>Kolapur</option>
<option>Mahabaleshwar</option>
<option>Malegaon</option>
<option selected="true">Mumbai</option><!-- to set Mumbai as default -->
<option>Nagpur</option>
<option>Nanded</option>
<option>Nashik</option>
<option>Osmanabad</option>
<option>Pandharpur</option>
<option>Parbhani</option>
<option>Pune</option>
<option>Ratnagiri</option>
<option>Sangli</option>
<option>Satara</option>
<option>Sevagram</option>
<option>Solapur</option>
<option>Thane</option>
<option>Ulhasnagar</option>
<option>Vasai-Virar</option>
<option>Wardha</option>
<option>Yavatmal</option>
</select>
<br><br>


<label style=" padding-right: 25px; padding-left: 25px;"> Age : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="number" name="age" placeholder="Enter your Age" maxlength="3" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->
<label style=" padding-right: 25px; padding-left: 25px;"> Gender : </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- to add a Radio button -->
<input type="radio" name="Gender">Male </input><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="Gender">Female </input><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="Gender">Other </input><br>
<br><br>

<label style=" padding-right: 25px; padding-left: 25px;"> Email Address: </label>&nbsp;&nbsp;
<!--
    <br> - tag is used to go to the next line
    &nbsp; is to add space
-->
<input type="text" name="Email" placeholder="Enter your Email Address" maxlength="50" style=" padding-right: 25px; padding-left: 25px;"> <br><br><br>
</input>
<!--
    placeholder is the hint shown in the textbox 
    maxlength is the max no. of charactors to be used in the textbox
-->


<!--
    the following is the code to add 2 buttons
-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Submit" name="b1" style=" padding-right: 25px; padding-left: 25px;">
</input><!-- add a submit button -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Reset" value="Clear" name="Clear" sleep="500" style=" padding-right: 25px; padding-left: 25px;"> <br><br>
</input><!-- add a clear button -->


</form><!-- end the form -->
</body><!-- end the body-->
</html><!-- end the HTML code -->