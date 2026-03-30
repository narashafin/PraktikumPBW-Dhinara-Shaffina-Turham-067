
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <form action="proses.php" method="post">
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Nama: </label>
            <input type="text" name="nama"><br>
        </div>
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Apakah mengikuti perkuliahan?</label>
            <input type="text" name="kuliah"><br>
        </div>
        <div style="display = flex; gap: 10px; margin-bottom: 10px;">
            <label for="">Nilai ujian: </label>
            <input type="number" name="nilai"><br>
        </div>
        <button type="submit" style="margin-top: 18px; padding: 8px; background-color: aqua; cursor: pointer; transition: 0.3s ease-in-out; border-radius: 20%;">Submit</button>
    </form>  
</body>
</html>