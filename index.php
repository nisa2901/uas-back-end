<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rekapitulasi Nilai</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<style>
		.bgs {
			background-color: #5335b8;
			color: white;
		}

		.bgu {
			background-color: #4b70f5;
		}

		.sidebar a {
			color: rgb(0, 0, 0);
			display: block;
			padding: 15px;
			/* Adjust the padding as needed */
			text-decoration: none;
			font-size: 14px;
			margin-bottom: 10px;
			/* Add space between the links */
		}

		.sidebar {
			background-color: #4b70f5;
			position: fixed;
			/* Make the sidebar fixed on the left */
			top: 0;
			left: 0;
			bottom: 0;
			/* Cover the entire height of the viewport */
			width: 400px;
			/* Adjust the width of the sidebar as needed */
			padding-top: 20px;
		}

		.table th {
			text-align: center;
		}

		.footer {
			background-color: #5335b8;
			color: white;
			padding: 10px 0;
			position: fixed;
			bottom: 0;
			width: 100%;
			text-align: center;
		}
	</style>
</head>

<body>

	<nav class="navbar sticky-top bgs shadow">
		<div class="container-fluid"> <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas"
				data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand bi-rocket-takeoff-fill">
				Logo Instansi</a>
			<div class="offcanvas offcanvas-start offcanvas-md bgu" tabindex="-1" id="offcanvasNavbar"
				aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
					</ul>
					<a href="hallogin.html"><button class="btn btn-danger shadow position-sticky-bottom"
							type="submit">Logout</button></a>
				</div>
			</div>
			<div class="d-none d-md-inline-block" role="">
				<a href="<?= site_url('login/logout'); ?>" class="btn btn-danger">Logout</a>
			</div>
		</div>
	</nav>

	<div class="row">
		<div class="col-md-2 sidebar d-none d-md-inline-block bgu">
			<div class="text-center mt-3">
				<div class="profile-pic mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
						class="bi bi-person-circle" viewBox="0 0 16 16">
						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
						<path fill-rule="evenodd"
							d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
					</svg>
				</div>
				<a>
					<strong>USERNAME</strong></a>
			</div>
			<hr>
			<a href="#" class="bi-house-fill">Dashboard</a>
			<hr>
			<a href="#" class="bi-file-earmark-plus-fill">Input Data</a>
			<hr>
			<a href="#" class="bi-clipboard2-check">Rekap Nilai</a>
			<hr>
		</div>

		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div
				class="text-center justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">

				<h1>REKAP NILAI</h1>

				<div class="card mb-4">
					<div class="card-body">
						<div class="container mt-5">
							<h3>Daftar Mata Kuliah</h3>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Mata Kuliah</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($matakuliah)): ?>
										<?php foreach ($matakuliah as $index => $mk): ?>
											<tr>
												<td><?= $index + 1 ?></td>
												<td><?= $mk->nama_matakuliah ?></td>
												<td>
													<a href="<?= site_url('rekapitulasi/detail/' . $mk->id_matakuliah) ?>" class="btn btn-primary btn-sm">Lihat Mahasiswa</a>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php else: ?>
										<tr>
											<td colspan="3" class="text-center">Data tidak tersedia.</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>


						</div>
					</div>

				</div>
			</div>
	</div>
	</div>
	</main>

	<footer class="footer">
		<ul class="nav justify-content-center border-bottom pb-3 mb-3 mt-8">
			<li class="nav-item"><a href="#" class="nav-link px-2">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2">Features</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2">Pricing</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2">FAQs</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2">About</a></li>
		</ul>
		<p class="text-center">&copy; 2024 Company, Inc</p>
	</footer>
</body>

</html>
