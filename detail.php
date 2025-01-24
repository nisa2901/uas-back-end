<div class="row">
    <div class="col-md-3 sidebar">
        <!-- Sidebar -->
        <div class="text-center mt-3">
            <svg ...></svg>
            <strong>USERNAME</strong>
        </div>
        <hr>
        <a href="#">Dashboard</a>
        <a href="#">Input Data</a>
        <a href="#">Rekap Nilai</a>
    </div>
    <main class="col-md-9 ms-sm-auto px-md-4">
        <h1 class="text-center">REKAP NILAI</h1>
        <div class="card">
            <div class="card-body">
                <h3>Mahasiswa Mata Kuliah: <?= $matakuliah->nama_matakuliah ?></h3>
                <div class="table-responsive">
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
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
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
                </div>
            </div>
        </div>
    </main>
</div>
<footer class="footer">
    &copy; 2024 Instansi Anda. Semua Hak Dilindungi.
</footer>
