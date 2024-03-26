<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Company Profile</title>
    <link rel="stylesheet" href="styles.css"> 
<body>
    <?php
        // Data informasi tentang saya
        $nama = "Vino Zaky Edria";
        $tanggal_lahir = "20 Juni 2002";
        $umur = 21;
        $alamat = "Bogor Asri Blok G2 NO.6 RT 02 RW 11";
        $kuliah = "Universitas Pakuan";
        $semester = 6;
        $jurusan = "Ilmu Komputer";
        $hobi = "Menonton Film (Avengers, Transformers), Travelling";
        $menu_favorit = "Makanan (Pasta, Baso Aci, Pizza, Mie), Minuman (Kopi, Jus alpukat, Soda)";
        
        // Data informasi perusahaan
        $nama_perusahaan = "Vin'O Connor";
        $deskripsi_perusahaan = "Selamat datang di profil perusahaan kami. Kami berdedikasi untuk menyediakan layanan dan produk berkualitas kepada pelanggan kami. Dengan tim ahli kami, kami berusaha melebihi harapan pelanggan dengan solusi-solusi inovatif.";
        $misi_perusahaan = "Misinya adalah untuk memberikan nilai tambah kepada pelanggan dengan kreativitas dan keunggulan.";
        $email_perusahaan = "vzaky31@gmail.com";
        $telepon_perusahaan = "+62-813-9979-6993";
    ?>

    <div class="container">
        <header>
            <h1>Welcome To My HomePage</h1>
            <nav>
                <ul>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#company">Company Profile</a></li>
                </ul>
            </nav>
        </header>
        
        <section id="about">
            <h2>About Me</h2>
            <hr>
            <div class="profile">
                <img src="https://cdn.idntimes.com/content-images/post/20230515/1cd8757e763d0f74dbd86ff30a9a0b65.jpg" alt="Vino Zaky Edria">
                <p>
                    Assalamualaikum Wr. Wb. Haloo Semuanya!^^ Perkenalkan nama saya <?php echo $nama; ?>. Saya lahir tanggal <?php echo $tanggal_lahir; ?>. 
                    Umur saya sekarang <?php echo $umur; ?> tahun. Alamat saya di <?php echo $alamat; ?>. Saat ini saya berkuliah di <?php echo $kuliah; ?> sebagai mahasiswa semester <?php echo $semester; ?> 
                    jurusan <?php echo $jurusan; ?>. Alasan saya memilih jurusan tersebut karena saya memiliki minat yang tinggi kepada teknologi. Seiring berjalannya waktu setelah 5 semester 
                    aku mempelajari tentang Ilmu Komputer, saya menemukan kesukaan yang lebih spesifik lagi yaitu pemrograman website. Saya benar benar nyaman dan menikmati 
                    mata kuliah dan materi yang berkaitan dengan website, seperti design web. Maka dari itu saya sangat senang ketika bisa mendapat kesempatan untuk menjadi salah 
                    satu peserta MSIB di NF COMPUTER Akademi Fullstack Web Developer.
                </p>
                <p>
                    Selain kuliah, Saya juga aktif berorganisasi dan mengikuti banyak kegiatan. <?php echo $hobi; ?>. 
                    Saya adalah pribadi yang riang dan mudah bergaul. Saya dapat dengan mudah beradaptasi pada lingkungan baru. Saya sangat senang menghabiskan
                    waktu bersama orang orang yang saya sayang.
                </p>
                <p>
                    Tujuan hidup saya saat ini adalah mendapat pekerjaan sesuai jurusan, travelling bersama teman teman, bisa berbelanja tanpa melihat harga, menikah dengan wanita yang baik,
                    Untuk lebih seriusnya, saya ingin menjadi orang kaya. Saat dewasa nanti aku ingin bisa banyak membantu orang
                    yang kesulitan dengan uangku. Saya ingin membangun masjid, pergi haji, menyenangkan kedua orang tua, dan lain lain. Semoga semua yang saya inginkan dapat terwujud diwaktu
                    yang tepat.
                </p>
                <h3>Tentang Saya</h3>
                <ul>
                    <li>
                        Pendidikan
                        <ul>
                            <li>SDN Pajeleran 01</li>
                            <li>SMPN 4 Cibinong</li>
                            <li>SMAN 3 Cibinong</li>
                            <li><?php echo $kuliah; ?>
                                <ul>
                                    <li>Semester 1</li>
                                    <li>Semester 2</li>
                                    <li>Semester 3</li>
                                    <li>Semester 4</li>
                                    <li>Semester 5</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Hobi
                        <ul>
                            <li>Menonton Film
                                <ul>
                                    <li>Avengers</li>
                                    <li>Transformers</li>
                                </ul>
                            </li>
                            <li>Travelling</li>
                        </ul>
                    </li>
                    <li>
                        Menu Favorit
                        <ul>
                            <li>Makanan
                                <ul>
                                    <li>Pasta</li>
                                    <li>Baso Aci</li>
                                    <li>Pizza</li>
                                    <li>Mie</li>
                                </ul>
                            </li>
                            <li>Minuman
                                <ul>
                                    <li>Kopi</li>
                                    <li>Jus alpukat</li>
                                    <li>Soda</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        
        <section id="company">
            <h2>Company Profile</h2>
            <hr>
            <div class="company-profile">
                <p>
                    Selamat datang di profil perusahaan <?php echo $nama_perusahaan; ?>. <?php echo $deskripsi_perusahaan; ?>
                </p>
                <p>
                    <?php echo $misi_perusahaan; ?>
                </p>
                <p>
                    Untuk informasi lebih lanjut tentang perusahaan dan layanan kami, silakan hubungi kami di <a href="mailto:<?php echo $email_perusahaan; ?>"><?php echo $email_perusahaan; ?></a> 
                    atau telepon kami di <a href="tel:<?php echo $telepon_perusahaan; ?>"><?php echo $telepon_perusahaan; ?></a>.
                </p>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 <?php echo $nama; ?>. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script> 
</body>
</html>
