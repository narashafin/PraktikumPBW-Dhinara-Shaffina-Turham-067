<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon UKT Mahasiswa</title>
</head>
<body>
    <form action="proses_diskon.php" method="post">
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">NPM: </label>
            <input style = "width: 50%; padding: 7px;" type="text" name="npm"><br>
        </div>
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Nama: </label>
            <input style = "width: 50%; padding: 7px;" type="text" name="nama"><br>
        </div>
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Prodi: </label>
            <input style = "width: 50%; padding: 7px;" type="text" name="prodi"><br>
        </div>
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Semester:  </label>
            <input style = "width: 50%; padding: 7px;" type="number" name="semester"><br>
        </div>
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Biaya UKT (input tanpa titik): Rp.  </label>
            <input style = "width: 50%; padding: 7px;" type="number" name="ukt"><br>
        </div>
        <button type="submit" style=" margin-top: 18px; padding: 8px; background-color: rgb(245, 229, 209); cursor: pointer; transition: 0.3s ease-in-out; border-radius: 20%;">Submit</button>
    </form>   
</body>
</html>