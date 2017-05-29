<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
	<body>
		<?php
			$entery = string ldap_first_entery( resource $ds , resource $sr );
			
			$attributes = ldap_get_attributes($ds, $sr);
			
			echo $attributes["count"]."attributes held for thi entry: <p>";
			
			for ($i=0; $i < $attributes["count"];$i++)
				{
					echo $attributes[$i] . "<br />";
				}
				
			
		?>
	</body>
</html>
