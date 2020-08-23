<?php
include('include/header.php');
include('include/config.php');
include('include/checklogin.php');
check_login();

$qry_news="SELECT COUNT(*) as num FROM agrifarm_news";
$total_news= mysqli_fetch_array(mysqli_query($mysqli,$qry_news));
$total_news = $total_news['num'];


$qry_consultants="SELECT COUNT(*) as num FROM agrifarm_consultant";
$total_consultants = mysqli_fetch_array(mysqli_query($mysqli,$qry_consultants));
$total_consultants = $total_consultants['num'];

$qry_users="SELECT COUNT(*) as num FROM agrifarm_users";
$total_users = mysqli_fetch_array(mysqli_query($mysqli,$qry_consultants));
$total_users = $total_users['num'];

?>

<div class="container-fluid">
<h2 class="page-title">Dashboard</h2>
	<div class="row">
		<div class="col-md-3 col-sm-6 col-12">
			<div class="info-box">
				<span class="info-box-icon bg-info"><i class="fas fa-info"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">News Feeds</span>
					<span class="info-box-number"><?php echo $total_news;?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-12">
			<div class="info-box">
				<span class="info-box-icon bg-success"><i class="fas fa-seedling"></i></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Specialists </span>
					<span class="info-box-number"><?php echo $total_consultants;?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-12">
			<div class="info-box">
				<span class="info-box-icon bg-warning"><i class="fa fa-users"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Users</span>
					<span class="info-box-number"><?php echo $total_users;?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-12">
			<div class="info-box">
				<span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Reviews</span>
					<span class="info-box-number">56</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>
</div>



<?php
include('include/footer.php');
?>