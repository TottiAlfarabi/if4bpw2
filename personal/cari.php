<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="setir.php">
    <label for="npm">masukkan npm</label>
    <input type="text" id="npm" name="npm">
    <label>Kota Lahir</label>
                        <select name="kota" class="form-control">
                        <option value="1">ktp</option>
                        <option value="2">kk</option>
                        <option value="3">akte</option>
                        <option value="4">ijazah</option>
                        </select>

    <button type="submit">search</button>
    </form>
</body>
</html>
