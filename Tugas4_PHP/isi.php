<style>#content-wrapper {
            min-height: 100vh; /* Set minimum height to full viewport height */
            display: flex;
            flex-direction: column;
        }</style>


<div id="content-wrapper">
        <!-- Halaman Depan -->

    <?php
    //inde.php?hal=produk
        $hal=$_GET['hal'];
        if(!empty($hal)){
            include_once $menu_bawah[$hal];
        }
        else{
            include_once "home.php";
        }
    ?>
</div>