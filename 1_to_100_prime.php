<html>

	<head>
		<title> prime	</title>
	</head>
	<body>
		
			<?php
			
				for($i=2;$i<=100;$i++)
				{
				$n=$i;
				$m=0;
				
				for($i=2;$i<$n;$i++)
				{
					if($n%$i==0)
					{
						$m=1;
					}
				}
				if($m==0)
				{
					echo $n."  prime number"."<br>";
				}
				}
					
			?>
	</body>

</html>