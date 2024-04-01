<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--My CSS-->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
        }

        section#projects {
            padding: 60px 0;
        }

        h2 {
            font-size: 36px;
            font-weight: 700;
            color: #1a73e8;
            margin-bottom: 40px;
        }

        .card {
            border: none;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img-top {
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            text-align: center;
            padding: 20px;
        }

        .card-text {
            font-size: 18px;
            color: #555;
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
    <!-- Gallery Toko Beras -->
    <section id="projects">
        <div class="container">
            <div class="row text-center text-dark">
                <div class="col">
                    <h2>Gallery Produk Beras</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="https://media.istockphoto.com/id/157476197/id/foto/beras-thailand-dijual-di-pasar.jpg?s=612x612&w=0&k=20&c=wVnB2VyQMtNST2h102NBVwCaiBfjNZgbeQhyXKYs2aA=" class="card-img-top" alt="Produk Beras 1" />
                        <div class="card-body">
                            <p class="card-text">Beras Putih</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="https://media.istockphoto.com/id/1259721487/id/foto/komposisi-dengan-semangkuk-beras-merah-di-atas-meja-kayu.jpg?s=612x612&w=0&k=20&c=l_JKfsBU01ZSGjqXCIEe0LtkludG3KOX_hOKcgxYD7Q=" class="card-img-top" alt="Produk Beras 2" />
                        <div class="card-body">
                            <p class="card-text">Beras Merah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="https://media.istockphoto.com/id/624355714/id/foto/jasmine-nasi-beery-dalam-keranjang-bambu-di-latar-belakang-kayu-gelap.jpg?s=612x612&w=0&k=20&c=F8LhwOIPfDfF7SGoZXWPWXdlVuvMGIecxQoMoaO5a7k=" alt="Produk Beras 3" class="card-img-top" />
                        <div class="card-body">
                            <p class="card-text">Beras Hitam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkBn8yNYXWG6vV0d1Y_H5z-cF2MC8dvmxCgw&s" class="card-img-top" alt="Produk Beras 4" />
                        <div class="card-body">
                            <p class="card-text">Beras Organik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>