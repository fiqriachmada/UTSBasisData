<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Modul</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">

            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Create Modul</h2>
                    <a href="index.php?page=author&aksi=view" class="btn btn-info float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="index.php?page=author&aksi=store&idAuthor=<?=$_SESSION['author']['id'];?>" method="POST">
                        <div class="col">
                                <div class="row mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Judul Catatan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Isi Catatan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="catatan"></textarea>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-3">Tambah</button>
                    </form>


                </div>
            </div>
        </div>
    </center>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>