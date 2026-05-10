<?php
session_start();
if (!isset($_SESSION['user'])) { header('Location: login.php'); exit; }
$user = $_SESSION['user'];

if (!isset($_SESSION['books'])) {
    $_SESSION['books'] = [
        ['id'=>1,'judul'=>'Laskar Pelangi','pengarang'=>'Andrea Hirata','stok'=>12],
        ['id'=>2,'judul'=>'Bumi Manusia','pengarang'=>'Pramoedya A.T.','stok'=>8],
        ['id'=>3,'judul'=>'Filosofi Teras','pengarang'=>'Henry Manampiring','stok'=>20],
        ['id'=>4,'judul'=>'Hujan','pengarang'=>'Tere Liye','stok'=>24],
    ];
}
$books = &$_SESSION['books'];

if (isset($_GET['logout'])) { session_destroy(); header('Location: login.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'tambah' && $_POST['judul'] && $_POST['pengarang']) {
        $id = count($books) ? max(array_column($books,'id'))+1 : 1;
        $books[] = ['id'=>$id,'judul'=>$_POST['judul'],'pengarang'=>$_POST['pengarang'],'stok'=>(int)$_POST['stok']];
    }
    if ($_POST['action'] === 'hapus') {
        $books = array_values(array_filter($books, fn($b) => $b['id'] != $_POST['id']));
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>Dashboard Perpustakaan</title>
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body>

<nav class="navbar">
    <span class="navbar-brand">Dashboard Perpustakaan Mini</span>
    <div class="navbar-right">
        <span><?= htmlspecialchars($user['name']) ?></span>
        <a href="?logout=1">Logout</a>
    </div>
</nav>

<div class="container">

    <div class="card">
        <h2>Tambah Buku</h2>
        <form method="POST" class="form-tambah">
            <input type="hidden" name="action" value="tambah"/>
            <input type="text" name="judul" placeholder="Judul" required />
            <input type="text" name="pengarang" placeholder="Pengarang" required />
            <input type="number" name="stok" placeholder="Stok" min="0" value="1" />
            <button type="submit" class="btn-simpan">Simpan</button>
        </form>
    </div>

    <div class="table-card">
        <div class="table-header">
            Daftar Buku <span>(<?= count($books) ?>)</span>
        </div>
        <?php if (empty($books)): ?>
            <p class="empty-state">Belum ada buku tersedia</p>
        <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Stok</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $b): ?>
                <tr>
                    <td><?= htmlspecialchars($b['judul']) ?></td>
                    <td><?= htmlspecialchars($b['pengarang']) ?></td>
                    <td><?= $b['stok'] ?></td>
                    <td style="text-align:right">
                        <form method="POST" onsubmit="return confirm('Hapus?')">
                            <input type="hidden" name="action" value="hapus"/>
                            <input type="hidden" name="id" value="<?= $b['id'] ?>"/>
                            <button class="btn-hapus">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>

</div>

</body>
</html>
