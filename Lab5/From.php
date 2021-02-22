<?php
     $name="";
	 $err_name="";
     $uname="";
	 $err_uname="";
	 $pass="";
	 $err_pass="";
	 $cpass="";
	 $err_cpass="";
	 $email="";
	 $err_email="";
	 $phone="";
	 $err_phone="";
	 $address="";
	 $err_address="";
	 $bdate="";
	 $err_bdate="";
	 $gender="";
	 $err_gender="";
     $wdyhau="";
	 $err_wdyhau="";
	 $bio="";
	 $err_bio="";
		 
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
		     if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
		     }
			 else{
				 $name=$_POST["name"];
			 }
			 if(empty($_POST["user name"])){
				 $err_uname="Username Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["user name"]);
		     }
			 elseif(strlen($_POST["user name"])<6){
				 $err_uname="Username Must Be 6 characters Long";
			 }
			 elseif(strpos($_POST["user name"],"")){
				 $err_uname="Username Should Not Contain White Space";
			 }
			 else{
				 $uname=$_POST["user name"];
			 }
			 if(empty($_POST["pass"])){
				 $err_pass="Password Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["pass"]);
		     }
			 elseif(strlen($_POST["pass"])<8){
				 $err_pass="Password Must Be 8 Charachter Long";
			 }
			 elseif(!strpos($_POST["pass"],"#")){
			     $err_pass="[Password should contain special character]";
		     }
		     elseif(!is_numeric($_POST["pass"])){
			     $err_pass="[Password should contain Numeric values]";
		     }
		     elseif(!ctype_upper($_POST["pass"])){
			     $err_pass="[Password should contain UpperCase values]";
		     }
		     elseif(!ctype_lower($_POST["pass"])){
			     $err_pass="[Password should contain LowerCase values]";
		     }
		     elseif(strpos($_POST["pass"]," ")){
			     $err_pass="[Password should not contain white space]";
		     }
			 else{
				 $pass=$_POST["pass"];
			 }
			 if(empty($_POST["confirm pass"])){
				 $err_cpass="Confirm Your Password";
			 }
			 else{
				 $cpass=$_POST["confirm pass"];
			 }
			  if (empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(!strpos($_POST["email"],"@.")){
			     $err_email="[Email must contain @ and at least one dot after @]";
		     }			 
			 else {
                 $email =$_POST["email"];
             }
			 if(empty($_POST["phone number"])){
				 $err_phone="Insert Your Phone Number";
			 }
			 elseif(!is_numeric($_POST["phone number"])){
			     $err_phone="[Phone number should contain Numeric values only]";
		     }
			 else{
				 $phone=$_POST["phone number"];
			 }
			 if(empty($_address["address"])){
				 $err_address="Select Your Address";
			 }
			 else{
				 $address=$_POST["address"];
			 }
			 if(empty($_POST["birth date"])){
				 $err_bdate="Birth Date Required";
			 }
			 else{
				 $bdate=$_POST["birth date"];
			 }
			 if(empty($_POST["gender"])){
				 $err_gender="Select your gender";
			 }
			 else{
				 $gender=$_POST["gender"];
			 }
			 if(empty($_POST["where did you hear about us?"])){
				 $err_wdyhau="Select where did you hear about us?";
			 }
			 else{
				 $wdyhau=$_POST["where did you hear about us?"];
			 }
			 if(empty($_POST["bio"])){
				 $err_bio="Bio Required";
			 }
			 else{
				 $bio=$_POST["bio"];
			 }
		 } 
?>

<html>
     <head></head>
	 <body>
	      <fieldset>
              <legend><h1>Club Member Registration</h1></legend>
		       <form action="" method="post">
		       <table>
			         <tr>
					    <td><span>Name</span></td>
						<td>:<input type="text" name="name" value="<?php echo $name;?>" placeholder="Name">
						<span><?php echo $err_name;?></span></td>
					</tr>
			        <tr>
					    <td><span>Username</span></td>
						<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
					    <td><span>Password</span></td>
						<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
					    <td><span>Confirm Password</span></td>
						<td>:<input type="password" value="<?php echo $cpass;?>" name="cpass">
						<span><?php echo $err_cpass;?></span></td>
					</tr>
					<tr>
					    <td><span>Email</span></td>
						<td>:<input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					    <td><span>Phone</span></td>
						<td>:<input type="text" name="code" placeholder="Code" size="4">-<input type="text" name="number" placeholder="Number" size="10"></td>
					</tr>
					<tr>
					    <td><span>Address</span></td>
						<td>:<input type="text" name="sa" placeholder="Street Address" size="20"><br>
					    <input type="text" name="city" placeholder="City" size="7">-<input type="text" name="state" placeholder="State" size="7"><br>
					    <input type="text" name="postal/zipcode" placeholder="Postal/Zip Code" size="20"></td>
					</tr>
					<tr>
					    <td><span>Birth Date</span></td>
						<td>:<select name="day">
						<option disabled selected>Day</option>
						<?php
						     for($i=1;$i<=31;$i++){
								 echo "<option>$i</option>";
							 }
						?>
					    </select>
						<select name="month">
					    <option disabled selected>Month</option>
					    <?php
						$month= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($month);$j++)
						{
							echo "<option>$month[$j]</option>";
						}
					    ?>
				        </select>
						<select name="year">
						<option disabled selected>Year</option>
						<?php
						     for($k=1985;$k<=2002;$k++){
								 echo "<option>$k</option>";
							 }
						?>
						</select>
						</td>
					</tr>
					<tr>
					    <td><span>Gender</span></td>
						<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
						<input type="radio" name="gender" value="Female">Female<br>
						<span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
					    <td><span>Where did you hear about us?</span></td>
						<td>
						    :<select name="Where did you hear about us?">
							     <option disabled selected>Chose One</option>
						         <option>A Friend or Colleague</option>
								 <option>Google</option>
								 <option>Blog Post</option>
								 <option>News Article</option>
							</select>
							<span><?php echo $err_wdyhau;?></span></td>
						</td>
					</tr>
					<tr>
					    <td><span>Bio</span></td>
						<td>:<textarea name="bio"><?php echo $bio;?></textarea>
						<span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="register"></td>
					</tr>
			  </table>
		</form>
	</fieldset>