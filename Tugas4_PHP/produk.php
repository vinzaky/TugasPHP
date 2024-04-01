<!DOCTYPE html>
<html>
<head>
    <style>
    body {
        background-color: #f0f0f0;
        background-image: url('gambar/back.jpeg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        margin: 0;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }
    .product-card {
        background-color: white;
        border: 1px solid #ddd;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }
    .product-card img {
        width: 100%;
        max-width: 200px;
        margin-bottom: 10px;
    }
    .product-card h2 {
        margin-top: 0;
    }
    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }
    li {
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
        background-color: #f8f9fa;
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
    <main>
        <h1 class="produk-a">
            <marquee behavior="" direction="right" scrolldelay="100">
                Produk Yang Tersedia
            </marquee>
        </h1>
        <div class="container">
            <div class="product-card">
                <img src="https://media.istockphoto.com/id/157476197/id/foto/beras-thailand-dijual-di-pasar.jpg?s=612x612&w=0&k=20&c=wVnB2VyQMtNST2h102NBVwCaiBfjNZgbeQhyXKYs2aA=" alt="Beras 1">
                <h2>Beras Putih</h2>
                <p>Price: Rp 12.000/kg</p>
                <button class="button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="https://media.istockphoto.com/id/624355714/id/foto/jasmine-nasi-beery-dalam-keranjang-bambu-di-latar-belakang-kayu-gelap.jpg?s=612x612&w=0&k=20&c=F8LhwOIPfDfF7SGoZXWPWXdlVuvMGIecxQoMoaO5a7k=" alt="Beras 3">
                <h2>Beras Hitam</h2>
                <p>Price: Rp 20.000/kg</p>
                <button class="button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="https://media.istockphoto.com/id/1259721487/id/foto/komposisi-dengan-semangkuk-beras-merah-di-atas-meja-kayu.jpg?s=612x612&w=0&k=20&c=l_JKfsBU01ZSGjqXCIEe0LtkludG3KOX_hOKcgxYD7Q=" alt="Beras 2">
                <h2>Beras Merah</h2>
                <p>Price: Rp 15.000/kg</p>
                <button class="button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkBn8yNYXWG6vV0d1Y_H5z-cF2MC8dvmxCgw&s" alt="Beras 4">
                <h2>Beras Organik</h2>
                <p>Price: Rp 30.000/kg</p>
                <button class="button">Add to Cart</button>
            </div>
        </div>
    </main>
</body>
</html>
