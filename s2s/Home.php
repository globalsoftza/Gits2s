<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="mycss.css">
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
        
        <div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div>
		<div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div><div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien turpis. Integer sollicitudin, metus at vestibulum eleifend, velit tellus elementum sapien, vel cursus ex turpis eu ligula. Mauris elementum velit at lorem porttitor, eu elementum eros hendrerit. Nulla malesuada tortor ornare, euismod mi in, rhoncus leo. Cras mattis arcu in arcu semper, sit amet accumsan sem blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices sagittis velit nec dignissim. Nunc maximus commodo ultricies. Vestibulum placerat quam eget laoreet laoreet. Etiam at maximus lacus. In quis molestie mauris. In consectetur et lacus ut ullamcorper. Mauris porta luctus suscipit. Curabitur fermentum bibendum pellentesque. Mauris sit amet eleifend urna, vitae eleifend arcu.
        </div>
		<p>
Collins Imoyeh
		</p>
    </body>
</html>
