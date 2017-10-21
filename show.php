<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GroupArranger</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/group-arranger.css?version=2">
</head>
<body>
	<div class="namearray">
		
	</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<?php
ini_set("dispaly_errors", "On");
$name_list = explode("\n",trim($_POST['name_list']));
$js_name_list="";
foreach ($name_list as $key => $name) {
	$js_name_list.="\"".trim($name)."\",";
}
$bind_name_list_teams = explode("\n",trim($_POST['bind_name_list']));
$bind_name_list = array();
foreach ($bind_name_list_teams as $key => $team) {
	$bind_name_list[$key]=explode(",",$team);
}
?>
<script type="text/javascript">
	var nameList=[<?php echo $js_name_list ?>];
	var groupSize = <?php echo $_POST['groupSize'] ?>;
	var bind_name_list = <?php echo json_encode($bind_name_list) ?>;
</script>
<script type="text/javascript" src="js/group_arranger.js?version=2"></script>