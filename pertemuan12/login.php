<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $coba_email    = 'adminperpustakaan@gmail.com';
    $coba_password = 'password123';

    if ($email === $coba_email && $password === $coba_password) {
        $_SESSION['user'] = [
            'name'  => $name,
            'email' => $email,
        ];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Email atau password salah. Coba lagi ya!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login — Perpustakaan Mini</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>

    <div class="card">

        <div class="card-title">
            <h1>Perpustakaan Mini</h1>
            <p>Silahkan Login</p>
        </div>

        <div class="card-body">

            <?php if ($error): ?>
                <div class="alert-error">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="exp: Go Younjung"
                        value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                        class="input-pink" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="xxxxxxxx@email.com"
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        required class="input-purple" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••"
                        required class="input-blue" />
                </div>

                <button type="submit" class="btn-login">Masuk</button>

            </form>

        </div>

        <p class="footer">© 2026 Perpustakaan Mini. Made by Dhinara Shaffina Turham (067)</p>
    </div>

</body>
</html>
