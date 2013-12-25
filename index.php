<?php
	include_once("config.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<script type="text/javascript"> 
  FB.init({
    appId  : '<?php echo $app_id;?>',
    oauth  : true,
  });

  FB.Canvas.setAutoGrow();

  function growSize() {
    var height = Number(
      document.getElementById('myContent').style.height.split('px')[0])
      + 100;
    document.getElementById('myContent').style.height = height + 'px';
  }
</script>


	<?php
    	if($like_status == "0")
		{
	?>
    		<!-- All HTML content for the BEFORE LIKE view goes here. -->
    <?	
		
		}
		else
		{
			
	?>
    		<!-- All HTML content for the AFTER LIKE view goes here. -->
    <?php
		}
	?>
	
<script>
	growSize();
</script>

</body>
</html>