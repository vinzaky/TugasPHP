<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Toko Beras</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa; /* Warna latar belakang */
            color: black; /* Warna teks */
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
        }
        .banner {
        
            color: black;
            padding:  0;
            text-align: center;
        }

        .banner h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .banner h2 {
            font-size: 24px;
        }

        .layanan {
            
            color: black;
            padding: 0;
            text-align: center;
        }

        .layanan h4 {
            font-size: 32px;
            margin-bottom: 30px;
        }

        .layanan .btn {
            font-size: 18px;
            padding: 15px 40px;
            border-radius: 30px;
        }

        .layanan .btn:hover {
            background-color: #c82333;
        }

        li {
            margin-bottom: 10px;
            color: #333; /* Warna teks */
            font-weight: bold;
            background-color: #f8f9fa; /* Warna latar belakang */
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        li:last-child {
            margin-bottom: 0;
        }

        li:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Banner -->
    <div class="container-fluid banner">
        <div class="container">
            <h1>Selamat datang di Toko Beras kami <span style="font-size: 48px;">&#x1F35A;</span></h1>
            <h2>Nikmati berbagai macam beras berkualitas!</h2>
        </div>
    </div>

    <!-- Content -->
    <div class="container-fluid layanan">
        <div class="container">
            <h4>Kunjungi akun Instagram kami untuk informasi lebih lanjut:</h4>
            <a href="https://www.instagram.com/tokoberaskita/?hl=id" class="btn btn-lg btn-light mt-4">Kunjungi Instagram</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
