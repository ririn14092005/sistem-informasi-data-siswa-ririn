<h1 class="h3 mb-3"><strong>Kelas</strong></h1>

<div class="row">
    <div class="col-12">
        <div class="card flex-fill">
            <div class="card-header">
                <a href="?page=tambahkelas" class="btn btn-success btn-sm">+ Tambah Kelas</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-lower">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <body>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM kelas INNER JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nama_kelas'] ?></td>
                            <td><?php echo $data['nama_jurusan'] ?></td>
                            <td>
                                <a href="?page=edit-kelas&id=<?php echo $data['id_kelas'] ?>" class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                                <a href="?page=hapus-kelas&id=<?php echo $data['id_kelas'] ?>" class="btn btn-danger btn-sm"><i data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </body>
                </table>
            </div>

        </div>
    </div>