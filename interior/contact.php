<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interior Decoration</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="templatemo_container">
        <div id="templatemo_top">
            <div id="templatemo_header">
                <div id="templatemo_header_logo_area">
                    <div id="templatemo_header_logo">
                        INTERIOR <span class="small_text">HEAVEN</span>
                                 <span>DESIGN</span>
                    </div>
                    <div id="templatemo_header_slogan">
                        
                    </div>
                </div>            
            </div>
            <div id="templatemo_menu">
                	<ul>
                      
                        <li><a href="index.html" >HOME</a></li>
                        <li><a href="office.html" ">OFFICE</a></li>
                        <li><a href="kitchen.html">KITCHEN</a></li>
                        <li><a href="room.html">LIVING ROOM</a></li>
                        <li><a href="bathroom.html">BATHROOM</a></li>
                        <li><a href="contact.php" class="current">CONTACT</a></li>
                   </ul> 
            </div>   
        </div>

        <div class="cleaner"></div>
        <div id="templatemo_welcome_area">
          <div class="templatemo_title_1">
          <h1> FEEDBACK</h1>
</div>
<div>
<?php
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) 
	{
		if(empty($_POST[$key])) 
		{
			$message = ucwords($key) . " field is required";
			break;
		}
	}
	


	if(!isset($message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO  form(name, email, message) VALUES
		( '" . $_POST["name"] . "', '" . $_POST["email"] . "',  '" . $_POST["message"] . "')";

		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$message = "feedback received!";	
			unset($_POST);
		} else {
			$message = "Try Again!";	
		}
	}
}
?>
	



</head>
<body>
<div id=form>
<form name="frmform" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<div class="message"><?php if(isset($message)) echo $message; ?></div>

<tr>
<br><td>name</td>
<td><input type="text" class="demoInputBox" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></td>
</tr>

<tr>
<td>email</td>
<td><input type="text" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
</tr>
<tr>


<tr>
<td>message</td>
<td><input type="text" class="demoInputBox" name="message" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>"></td>
</tr>

</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>
</div>
<br>


<a href="#"><img src="images/templatemo_img_9.jpg" alt="Image" border="0" /></a></center>
		  <div class="cleaner"></div>
      </div><!-- End Of welcome area -->
      <div id="templatemo_welcome_bottom"></div>
      <div id="templaetmo_bottom_area">
      		<div class="templatemo_three_col">
            	<div class="templatemo_title_2 title_left">
                	<h2>Budget Ideas</h2>
              <p1> selecting beautiful designs and also cheep one is favourable to all type of people.</p1>
                </div>
            	</div>
            
            <div class="templatemo_v_line"></div>
<div class="templatemo_three_col">
            	<div class="templatemo_title_2 title_mid">
                	<h2>Ancient Design</h2>
<p1> The ancient interior designs are trend nowadays.People moved to very advanced trend setting designs for their house in which ancient designs are one of them.</p1>
                </div>
            	
        		
     
       	</div>
            <div class="templatemo_v_line"></div>
            <div class="templatemo_three_col">
            	<div class="templatemo_title_2 title_right">
                	<h2>Wall Decoration</h2>
<p1> Great wall decor doesn't have to be expensive. It also doesn't necessarily have to be "art."</p1>
                </div>
            	
                
               
            </div>
            <div class="cleaner"></div>
      </div>
      <div id="templatemo_footer">
      	
       
           
      </div>
</div>

<div align=center></div></body>
</html>