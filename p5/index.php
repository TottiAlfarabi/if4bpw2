<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Form Registrasi</h2>
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" class="form-control" name="nis">
                    <!-- </div> -->
                         <label>Nama</label>
                        <input type="text" class="form-control" name="nama"><br>

                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="radio" name="JK" value="Lanang">
                        <label for="Lanang">Lanang</label><br>
                        <input type="radio" class="radio" name="JK" value="betina">
                        <label for="betina">Betina</label><br><br>

                        <label>Kota Lahir</label>
                        <select name="kota" class="form-control">
                        <option value="plg">Palembang</option>
                        <option value="lahat">Lahat</option>
                        <option value="linggau">Linggau</option>
                        <option value="pali">Pali</option>
                        </select><br><br>

                         <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl"><br>

                        <label>FOTO</label>
                         <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg "><br>


<!-- 
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" value="lanang">
                                    </div>
                                </div>
                            </div>
                        </fieldset> -->

                    </div>
                    <button type="submit" class="btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>