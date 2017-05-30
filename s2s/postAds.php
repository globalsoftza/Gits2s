<!DOCTYPE html>
<html>
    <head>
        <title>Post adverts</title>
        <link rel="stylesheet" href="mycss.css">
        <link rel="stylesheet" href="postadverts.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
		<?php
			$Home="myTabs";
			$PostAds="myTabs";
			$Notices="myTabs";
			$Profile="myTabs";
			
			
			if($Home == "Home")
			{
				$Home = 'MyActiveTab';
			}
			else if($PostAds == 'PostAds')
			{
				$PostAds='MyActiveTab';
			}
			else if ($Notices == 'Notices')
			{
				$Notices = 'MyActiveTab';
			}
			else if($Profile == 'Profile')
			{
				$Profile = 'MyActiveTab';
			}
		?>
        <div>
            <div><img class="logo" src="Images/copy.png" alt="NMU LOGO"></div>
        </div>
        
       <div class="menu" id="navigation">
            <img class="logo" src="Images/home.png" alt="NMU LOGO">
            <a class="<?php echo $Home;?>" href="Home.php">Home</a>
            <a class="<?php echo $PostAds;?>" href="PostAds.php">Adverts</a>
            <a class="<?php echo $Notices;?>" href="Notices.php">Notices</a>
            <a class="<?php echo $Profile;?>" href="Profile.php">Profile</a>
        </div> 
        
        <div id="form1">
            <p><b>Post advert</b></p>
         <form> 
             <label>Title*</label><br><input type="text" placeholder ="title"><br>
            <label >Category*</label><br><select name="category">
                <option>Electronics</option>
                <option>Books</option>
            </select><br>
            <label>Description*</label><br><textarea name="desc" rows="10" cols="25" placeholder = "description">
            </textarea><br>
            <label>Contact*</label><br><input type="text" placeholder="contact"><br>
         <input type="submit" value="Post" name="Post" />
         </form>
        </div>
       
    </body>
  
</html>
