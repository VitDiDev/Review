<?php
require_once('../../api/connection.php');
if (isset($_REQUEST["id"]) && $_REQUEST["id"]){
    $id = $_REQUEST["id"];
    $sql = "SELECT * FROM category where status = 1 and id = ".$id;
    $result = $dbCon->query($sql);
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
			$sql1 = "SELECT * FROM category_type where id =". $row["category_type"];
			$result1 = $dbCon->query($sql1);
			if ($result1 && $result1->num_rows > 0) {
				$row1 = $result1->fetch_assoc();
				$category_name = $row1["name"];
			} else {
				$category_name = '';
			}
			$image = $row["image"];
        }
    }
} else {
    $dbCon-> close();
    header("Location: ./index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>MUXI Administrator</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="./assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="./assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['./assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="./assets/css/demo.css">
    <!-- css chính -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/atlantis.min.css">

</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="../admin/" class="logo">
                    <div class="sidebar__logo"></div>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user h3">
						<div class="info">
								<span>
                                Administrator
								</span>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active submenu">
							<a href="./index.php">
								<p>Quản lý tài khoản</p>
							</a>
						</li>
						<li class="nav-item submenu">
							<a href="./quanlykhonhac.php">
								<p>Quản lý kho nhạc</p>
							</a>
						</li>
						<li class="nav-item submenu">
							<a href="./quanlytheloai.php">
								<p>Quản lý thể loại</p>
							</a>
						</li>
						<li class="nav-item submenu">
							<a href="../login/logout.php">
								<p>Đăng xuất</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
                    <div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
								Sửa thông tin người dùng
								</span>
							</h5>
						</div>
						<form action="./edit_category.php" method="POST">
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group form-group-default">
											<label>Name</label>
											<input name="name" type="text" class="form-control" value="<?php echo $name;?>" required>
										</div>
									</div>
									<div class="col-md-6 pr-0">
										<div class="form-group form-group-default">
											<label>Category Group</label>
											<span>
												<?php echo $category_name;?>
											</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-default">
											<label>Srouce Image</label>
											<input name="image" type="text" class="form-control" value="<?php echo $image;?>" required>
										</div>
									</div>
                                    <input name="id" type="hidden" value="<?php echo $id;?>" required>
								</div>
							</div>
							<div class="modal-footer no-bd">
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</body>