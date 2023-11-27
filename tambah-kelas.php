<?php
if (isset($_POST['nama-kelas'])) {
    $nama_kelas = $_POST['nama-kelas'];
    $id_jurusan = $_POST['id_jurusan'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas,id_jurusan) VALUES('$nama_kelas','$id_jurusan')");

    if ($query) {
        echo '<script>alert("Data Berhasil Ditambah");location.href="?page=kelas";</script>';
    }
}
?>

<h1 class="h3 mb-3"><strong>Tambah Kelas</strong></h1>                

                <div class="row">
                    <div class="col-12">
                    	<div class="card flex-fill">
                    		<div class="card-body">
                    			<form action="" method="post">
                    				<div class="mb-3">
	                                	<label class="form-label">Nama Kelas</label>
	                                	<div class="col-sm-12">
	                                		<input type="text" name="nama-kelas" class="form-control">
	                                	</div>
                    		        </div>
                                    <div class="mb-3">
	                                	<label class="form-label">Jurusan</label>
	                                	<select name="id_jurusan" class="form-select">
                                            <?php
                                            $query = mysqli_query($koneksi, "SELECT * FROM jurusan");
                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                <option value="<?php echo $data['id_jurusan'] ?>"><?php echo $data['nama_jurusan'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                    		        </div>
                                	<div class="mb-3" style="float: right;">
	                    		        <button class="btn btn-primary">Simpan</button>
	                    		        <button type="reset" class="btn btn-danger">Reset</button>
										<a href="kelas.html" class="btn btn-warning">Kembali</a>
									</div>
                    	        	</div>
                    	    	</form>
                    	    </div>
                    	</div>
                    </div>