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
        body {
            background: linear-gradient(135deg, #feb692, #ea5455);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background: linear-gradient(135deg, #5335b8, #4329a0);
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn-primary {
            background: linear-gradient(135deg, #feb692, #ea5455);
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #ea5455, #feb692);
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #e74c3c;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            color: #fff;
            transition: all 0.3s;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
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
    <div class="text-center mt-4">
        <a href="<?= site_url('login/logout'); ?>" class="btn btn-danger">Logout</a>
    </div>
</div>
</body>
</html>
