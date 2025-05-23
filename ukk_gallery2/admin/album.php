            <?php
            session_start();
            include '../config/koneksi.php';
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Galeri Foto</title>
                <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
            </head>
            <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php">Galeri Foto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-2" id="navbarNav">
                <div class="navbarNav me-auto">
            <a href ="album.php" class="nav-link">Album</a>
                </div>
                <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">keluar</a>
            </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="card-mt-2">
                        <div class="card-header">Tambah Foto</div>
                        <div class="card-body">
                            <form action="../config/aksi_album.php" method="POST">
                            <label class="form-label">Nama Album</label>
                            <input type="text" name="NamaAlbum" class="form-control" required>
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="Deskripsi" required></textarea>
                            <button type="submit" class="btn btn-primary mt-2" name="add" value="Tambah">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-8">
                    <div class="card-mt-2">
                        <div class="card-header">Data Album</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Album</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $UserID = $_SESSION['UserID'];
                                            $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE UserID = '$UserID' ");
                                            while($Data = mysqli_fetch_array($sql)) {
                                                ?>
                                            
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $Data['NamaAlbum'] ?></td>
                                                <td><?php echo $Data['Deskripsi'] ?></td>
                                                <td><?php echo $Data['TanggalDibuat'] ?></td>
                                                <td>                                                                
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $Data['AlbumID']; ?>">
                Edit
            </button>

            <div class="modal fade" id="edit<?php echo $Data['AlbumID']; ?>" tabindex="-1" aria-labelledby="editlabel <?php echo $Data['AlbumID']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel<?php echo $data['albumid']; ?>">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="../config/aksi_album.php" method = "POST">
                    <input type="hidden" name="AlbumID" value="<?php echo $Data['AlbumID'] ?>">
                    <label class="form-label">Nama Album</label>
                            <input type="text" name="NamaAlbum" value="<?php echo $Data['NamaAlbum'] ?>" class="form-control" required>
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="Deskripsi" required>
                            <?php echo $Data['Deskripsi']; ?>
                            </textarea>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" name="edit" class="btn btn-primary">edit data</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $Data['AlbumID']; ?>">
        Hapus
        </button>

        <div class="modal fade" id="delete<?php echo $Data['AlbumID']; ?>" tabindex="-1" aria-labelledby="editLabel<?php echo $Data['AlbumID']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form action="../config/aksi_album.php" method="POST">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel<?php echo $Data['AlbumID']; ?>">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <input type="hidden" name="AlbumID" value="<?php echo $Data['AlbumID'] ?>">
                Apa kamu yakin menghapus data <strong> <?php echo $Data['NamaAlbum'] ?> </strong> ?
                </div>
                <div class="modal-footer">
                <button type="submit" name="delete" class="btn btn-danger">Hapus Data</button>
                </div>
        </form>
        </div>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    <?php } ?>
    </table>
            <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
                <p>&copy; UKK RPL 2025 | Ibnu Ubaidillah</p>
            </footer>



            <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
            </body>
            </html>