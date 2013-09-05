<img src="img/<?= $_POST['direction'] ?><?= ($_POST['x']+$_POST['y'])%2 + 1 ?>.png" style="position:absolute; top: <?= $_POST['y']*10 ?>px; left:<?= $_POST['x']*10 ?>px;" />


<?php

	if($_POST['x'] > 10 AND $_POST['y'] > 10)
	{
		echo '<img src="http://4pawsgrooming.vzwebsites.com/1270547729_470x353_i-m-a-pretty-cat.jpg" style="position:absolute; top:200px; left:300px; width:200px;" />';
	}

?>