<?php
$default_name_list = ["李思怡","沈洁","王懿琦","王含泽","钱苗军","斯宏翔","黄迅","晏欧","徐丽君","刘庆","罗壮华","徐锋","郑慧霖","陈明辉","权观宇","蒋宗强","刘云博","洪采颂","吴健明","蒋经纬","沈丹杰","万芳","祁俊舟","黄志","张晓旦","严剑桥","董亦婧","陈靖森","许承瑶","石俊","武塬皓","陆紫涵","詹潘峰","陈岳","金天航","张文","陈雨露","周金盛","赵艺聪","邓高峰","傅金燕","蒋燕娜","沈莹佳","程宇畅","杨若瑾","施奇豪","王珊","卓佐祥","方柯","刘福东","张林锋","吕东雨"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GroupArranger</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/group-arranger.css">
</head>
<body>
	<div class="container">
		<form action="show.php" method="post" accept-charset="utf-8">
			<div class="row">
				<div class="col-md-6">
					<h1>名单列表</h1>
					<div style="font-size: small; color: grey; margin-bottom: 5px;">除了内定组以外的人的名单</div>
					<textarea id="name_list" name="name_list" class="form-control" rows="30"><?php foreach ($default_name_list as $key => $value): ?><?php echo $value."\n"; ?><?php endforeach ?></textarea>
				</div>
				<div class="col-md-6">
					<h1>内定组</h1>
					<div style="font-size: small; color: grey; margin-bottom: 5px;">此名单内的人不应再出现在左边的名单内，请从左边将其删除。<br/>一行一组，以<b>英文</b>逗号隔开。<br/>内定组数请务必合法！<br/>即组数<=总人数/每组人数，内定组每组的人数<=每组人数，否则会引发未知错误！！！</div>
					<textarea id="bind_name_list" name="bind_name_list" class="form-control" rows="15">
王玲
李英倩,张小燕,刘菊</textarea>
					<h1>每组人数</h1>
					<div style="font-size: small; color: grey; margin-bottom: 5px;">尽量多一点，以免组数太多免屏幕排不下</div>
					<input class="form-control" name="groupSize" value="7">
<!-- 					<h1>统计</h1>
					<div>
						总人数:<span id="total_num"></span>
					</div>
					<div>
						组数:<span id="group_num"></span>
					</div> -->
				</div>
			</div>
			<div class="row" style="text-align: center; margin-top: 20px;">
					<button type="submit" class="btn btn-success btn-lg">开始分组</button>
			</div>
		</form>
	</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>