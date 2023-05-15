<?php
    if (!isset($_COOKIE["username"])) {
		header("Location: ../login/index.php");
    }
	require_once('../../api/connection.php');
	$sql = 'SELECT role FROM users where name = "'.$_COOKIE["username"].'"';
	$result = $dbCon->query($sql);
	if (!$result && !$result->num_rows > 0) {
		$dbCon-> close();
		header("Location: ../login/index.php");
	}
	$row = $result->fetch_assoc();
	if ($row["role"] != 2) {
		$dbCon-> close();
		header("Location: ../login/index.php");
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
						<li class="nav-item submenu">
							<a href="./index.php">
								<p>Quản lý tài khoản</p>
							</a>
						</li>
						<li class="nav-item submenu">
							<a href="./quanlykhonhac.php">
								<p>Quản lý kho nhạc</p>
							</a>
						</li>
						<li class="nav-item active submenu">
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
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Quản lý thể loại</h4>
										<!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button> -->
									</div>
								</div>
<?php
	session_start();
	if (isset($_SESSION["error"])) {
		echo "<p style='color:red;'>" . $_SESSION["error"] . "</p>";
		unset($_SESSION["error"]);
	}
	if (isset($_SESSION["success"])) {
		echo "<p style='color:white;'>" . $_SESSION["success"] . "</p>";
		unset($_SESSION["success"]);
	}
?>
								<div class="card-body">
									<!-- Modal -->
									<!-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="addName" type="text" class="form-control" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Position</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Office</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="fill office">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div> -->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Category Type</th>
													<th>Image URL</th>
													<th style="width: 5%;  opacity: 0; cursor: context-menu;">Action</th>
												</tr>
											</thead>
											<tbody>
<?php
  $html = '';
  $sql = "SELECT * FROM category where status =1";;
  $result = $dbCon->query($sql);
  if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>';
		$html .= '<td>'.$row["id"].'</td>';
		$html .= '<td>'.$row["name"].'</td>';
		$sql1 = "SELECT * FROM category_type where id =". $row["category_type"];
		$result1 = $dbCon->query($sql1);
		if ($result1 && $result1->num_rows > 0) {
			$row1 = $result1->fetch_assoc();
			$html .= '<td>'.$row1["name"].'</td>';
		} else {
			$html .= '<td></td>';
		}
		$html .= '<td>'.$row["image"].'</td>';
		$html .= '<td>';
		$html .= '<div class="form-button-action">';
		$html .= '<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">';
		$html .= '<a href="./edit_category_form.php?id='.$row["id"].'"><i class="fa fa-edit"></i></a>';
		$html .= '</button>';
		$html .= '<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">';
		$html .= '<a href="./delete_category.php?id='.$row["id"].'" onclick="return confirm("Bạn chắc chắn muốn xóa?")"><i class="fa fa-times"></i></a>';
		$html .= '</button>';
		$html .= '</div>';
		$html .= '</td>';
        $html .= '</tr>';
    }
  }
  $dbCon-> close();
  echo $html;
?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="./assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="./assets/js/core/popper.min.js"></script>
	<script src="./assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="./assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="./assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="./assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="./assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="./assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>