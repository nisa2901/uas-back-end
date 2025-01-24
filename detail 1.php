<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
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

        .btn-warning {
            background: linear-gradient(135deg, #feb692, #ea5455);
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
            transition: all 0.3s;
        }

        .btn-warning:hover {
            background: linear-gradient(135deg, #ea5455, #feb692);
            transform: scale(1.05);
        }

        .btn-danger {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
            color: #fff;
            transition: all 0.3s;
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, #c0392b, #e74c3c);
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #95a5a6;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            color: #fff;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background-color: #7f8c8d;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3>Mahasiswa Mata Kuliah: <?= $matakuliah->nama_matakuliah ?></h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($mahasiswa)): ?>
            <?php foreach ($mahasiswa as $index => $mhs): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $mhs->nama_mahasiswa ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nilai ?></td>
                    <td>
                        <?php if (property_exists($mhs, 'id')): ?>
                            <a href="<?= site_url('rekapitulasi/edit/' . $mhs->id_mahasiswa . '/' . $matakuliah->id_matakuliah) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('rekapitulasi/delete/' . $mhs->id_mahasiswa . '/' . $matakuliah->id_matakuliah) ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Yakin ingin menghapus nilai mahasiswa ini?')">Hapus</a>
                        <?php else: ?>
                            <span>Data tidak lengkap</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Data tidak tersedia.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <div class="text-center mt-4">
        <a href="<?= site_url('rekapitulasi') ?>" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
