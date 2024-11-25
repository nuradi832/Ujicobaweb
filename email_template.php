<html>

<head>
    <title>Informasi Pemesanan Tiket Anda</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 30px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #007bff;
            font-size: 24px;
            margin-bottom: 40px;
        }

        .info {
            margin: 20px 0;
        }

        .info p {
            font-size: 16px;
            line-height: 1.2;
            color: #555;
        }

        .info p strong {
            color: #333;
        }

        .price {
            font-size: 18px;
            color: #007bff;
            font-weight: bold;
            margin-top: 10px;
        }

        .ticket-code {
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            background-color: #007bff;
            padding: 8px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 10px;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive styling for smaller screens */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            .price {
                font-size: 16px;
            }

            .ticket-code {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Terima Kasih Telah Memesan Tiket</h1>
        <div class="info">
            <p><strong>Nama:</strong> <?php echo $name; ?></p>
            <p><strong>Alamat:</strong> <?php echo $address; ?></p>
            <p><strong>Tanggal Kunjungan:</strong> <?php echo $visit_date; ?></p>
            <p><strong>Jumlah Tiket:</strong> <?php echo $quantity; ?></p>
            <p class="price"><strong>Total Harga:</strong> Rp. <?php echo number_format($total_price, 0, ',', '.'); ?></p>
            <p><strong>Kode Tiket:</strong> <span class="ticket-code"><?php echo $ticket_code; ?></span></p>
        </div>
        <div class="footer">
            <p>Terima kasih atas pemesanan Anda.</p>
            <p>Kami menantikan kedatangan Anda dan berharap pengalaman Anda bersama kami akan menyenankan.</p>
            <p>Untuk informasi lebih lanjut, kunjungi <a href="#">Website Kami</a> atau hubungi kami di <a href="mailto:info@tirtoasriwalik.com">info@tirtoasriwalik.com</a>.</p>
        </div>
    </div>
</body>

</html>