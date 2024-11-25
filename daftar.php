<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Kolam Renang Tirto Asri Walik</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Tirto Asri Walik</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#tickets">Pesan Tiket</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Selamat Datang di Tirto Asri Walik</h2>
        <p>Tempat terbaik untuk bersantai dan bermain air!</p>
    </section>

    <section id="about">
        <h2>Tentang Kami</h2>
        <p>Kami menawarkan kolam renang yang bersih dan aman untuk semua usia.</p>
    </section>

    <section id="tickets">
        <h2>Pemesanan Tiket</h2>
        <form action="process_ticket.php" method="POST">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Contoh: adi.ganteng@gmail.com" required>

            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Contoh: Adi Ganteng" required>

            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" placeholder="Contoh: Purwokerto" required>

            <label for="visit_date">Tanggal Kunjungan</label>
            <input type="date" id="visit_date" name="visit_date" required>

            <label for="quantity">Jumlah Tiket:</label>
            <input type="number" id="quantity" name="quantity" placeholder="Contoh: 1" required>

            <div style="margin-top: 1rem;">
                <button type="submit">Pesan Tiket</button>
            </div>
        </form>
    </section>

    <section id="contact">
        <h2>Kontak Kami</h2>
        <p>Email: info@tirtoasriwalik.com</p>
        <p>Telepon: 0812-3456-7890</p>
    </section>

    <footer>
        <p>&copy; 2024 Tirto Asri Walik. Semua hak dilindungi.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>

</html>