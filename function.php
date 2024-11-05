<?php

session_start();

//Bikin koneksi
$c = mysqli_connect('localhost','root','','profile');

//Login
if(isset($_POST['login'])) {
    //initiate variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($c,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($check);

    if($hitung>0) {
        //jika datanya ditemukan
        //berhasil login

        $_SESSION['login'] = 'True';
        header('location:index.php');
    } else {
        //data tidak ditemukan
        //gagal login
        echo'
        <script>alert("Username atau Password salah");
        window.location.href="login.php"
        </script>
        ';
    }
}


if(isset($_POST['tambah_bf'])){
    $judul_bf = $_POST['judul_bf'];
    $genre_bf = $_POST['genre_bf'];
    $penulis_bf = $_POST['penulis_bf'];
    $penerbit_bf = $_POST['penerbit_bf'];
    $tahunterbit_bf = $_POST['tahunterbit_bf'];
    $kotaterbit_bf = $_POST['kotaterbit_bf'];

    $insert = mysqli_query($c,"insert into fiksi (judul_bf,genre_bf,penulis_bf,penerbit_bf,tahunterbit_bf,kotaterbit_bf) values ('$judul_bf','$genre_bf','$penulis_bf','$penerbit_bf','$tahunterbit_bf','$kotaterbit_bf')");

    if($insert) {
        header('location:fiction.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="fiction.php"
        </script>
        ';
    }
}

if(isset($_POST['tambah_bnf'])){
    $judul_bnf = $_POST['judul_bnf'];
    $genre_bnf = $_POST['genre_bnf'];
    $penulis_bnf = $_POST['penulis_bnf'];
    $penerbit_bnf = $_POST['penerbit_bnf'];
    $tahunterbit_bnf = $_POST['tahunterbit_bnf'];
    $kotaterbit_bnf = $_POST['kotaterbit_bnf'];

    $insert = mysqli_query($c,"insert into nonfiksi (judul_bnf,genre_bnf,penulis_bnf,penerbit_bnf,tahunterbit_bnf,kotaterbit_bnf) values ('$judul_bnf','$genre_bnf','$penulis_bnf','$penerbit_bnf','$tahunterbit_bnf','$kotaterbit_bnf')");

    if($insert) {
        header('location:nonfiction.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="nonfiction.php"
        </script>
        ';
    }
}   

if(isset($_POST['tambah_ma'])){
    $judul_ma = $_POST['judul_ma'];
    $sutradara_ma = $_POST['sutradara_ma'];
    $produser_ma = $_POST['produser_ma'];
    $rumahproduksi_ma = $_POST['rumahproduksi_ma'];
    $tahunrilis_ma = $_POST['tahunrilis_ma'];
    $durasi_ma = $_POST['durasi_ma'];
    $rating_ma = $_POST['rating_ma'];

    $insert = mysqli_query($c,"insert into anime (judul_ma,sutradara_ma,produser_ma,rumahproduksi_ma,tahunrilis_ma,durasi_ma,rating_ma) values ('$judul_ma','$sutradara_ma','$produser_ma','$rumahproduksi_ma','$tahunrilis_ma','$durasi_ma','$rating_ma')");

    if($insert) {
        header('location:anime.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="anime.php"
        </script>
        ';
    }
}   

if(isset($_POST['tambah_mh'])){
    $judul_mh = $_POST['judul_mh'];
    $sutradara_mh = $_POST['sutradara_mh'];
    $produser_mh = $_POST['produser_mh'];
    $rumahproduksi_mh = $_POST['rumahproduksi_mh'];
    $tahunrilis_mh = $_POST['tahunrilis_mh'];
    $durasi_mh = $_POST['durasi_mh'];
    $rating_mh = $_POST['rating_mh'];

    $insert = mysqli_query($c,"insert into horror (judul_mh,sutradara_mh,produser_mh,rumahproduksi_mh,tahunrilis_mh,durasi_mh,rating_mh) values ('$judul_mh','$sutradara_mh','$produser_mh','$rumahproduksi_mh','$tahunrilis_mh','$durasi_mh','$rating_mh')");

    if($insert) {
        header('location:horror.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="horror.php"
        </script>
        ';
    }
}   

if(isset($_POST['tambah_mac'])){
    $judul_mac = $_POST['judul_mac'];
    $sutradara_mac = $_POST['sutradara_mac'];
    $produser_mac = $_POST['produser_mac'];
    $rumahproduksi_mac = $_POST['rumahproduksi_mac'];
    $tahunrilis_mac = $_POST['tahunrilis_mac'];
    $durasi_mac = $_POST['durasi_mac'];
    $rating_mac = $_POST['rating_mac'];

    $insert = mysqli_query($c,"insert into action (judul_mac,sutradara_mac,produser_mac,rumahproduksi_mac,tahunrilis_mac,durasi_mac,rating_mac) values ('$judul_mac','$sutradara_mac','$produser_mac','$rumahproduksi_mac','$tahunrilis_mac','$durasi_mac','$rating_mac')");

    if($insert) {
        header('location:action.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="action.php"
        </script>
        ';
    }
} 

if(isset($_POST['tambah_mr'])){
    $judul_mr = $_POST['judul_mr'];
    $sutradara_mr = $_POST['sutradara_mr'];
    $produser_mr = $_POST['produser_mr'];
    $rumahproduksi_mr = $_POST['rumahproduksi_mr'];
    $tahunrilis_mr = $_POST['tahunrilis_mr'];
    $durasi_mr = $_POST['durasi_mr'];
    $rating_mr = $_POST['rating_mr'];

    $insert = mysqli_query($c,"insert into romance (judul_mr,sutradara_mr,produser_mr,rumahproduksi_mr,tahunrilis_mr,durasi_mr,
    rating_mr) values ('$judul_mr','$sutradara_mr','$produser_mr','$rumahproduksi_mr','$tahunrilis_mr','$durasi_mr','$rating_mr')");

    if($insert) {
        header('location:romance.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="romance.php"
        </script>
        ';
    }
} 

if(isset($_POST['tambah_mc'])){
    $judul_mc = $_POST['judul_mc'];
    $sutradara_mc = $_POST['sutradara_mc'];
    $produser_mc = $_POST['produser_mc'];
    $rumahproduksi_mc = $_POST['rumahproduksi_mc'];
    $tahunrilis_mc = $_POST['tahunrilis_mc'];
    $durasi_mc = $_POST['durasi_mc'];
    $rating_mc = $_POST['rating_mc'];

    $insert = mysqli_query($c,"insert into comedy (judul_mc,sutradara_mc,produser_mc,rumahproduksi_mc,tahunrilis_mc,durasi_mc,
    rating_mc) values ('$judul_mc','$sutradara_mc','$produser_mc','$rumahproduksi_mc','$tahunrilis_mc','$durasi_mc','$rating_mc')");

    if($insert) {
        header('location:comedy.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="comedy.php"
        </script>
        ';
    }
} 

if(isset($_POST['tambah_income'])){
    $sumber_income = $_POST['sumber_income'];
    $jumlah_income = $_POST['jumlah_income'];
    $keterangan_income = $_POST['keterangan_income'];

    $insert = mysqli_query($c,"insert into income (sumber_income,jumlah_income,keterangan_income) 
    values ('$sumber_income','$jumlah_income','$keterangan_income')");

    if($insert) {
        header('location:income.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="income.php"
        </script>
        ';
    }
} 

if(isset($_POST['tambah_spending'])){
    $deskripsi_spending = $_POST['deskripsi_spending'];
    $kategori_spending = $_POST['kategori_spending'];
    $jumlah_spending = $_POST['jumlah_spending'];
    $metode_spending = $_POST['metode_spending'];

    $insert = mysqli_query($c,"insert into spending (deskripsi_spending,kategori_spending,jumlah_spending,metode_spending) 
    values ('$deskripsi_spending','$kategori_spending','$jumlah_spending','$metode_spending')");

    if($insert) {
        header('location:spending.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="spending.php"
        </script>
        ';
    }
} 

if(isset($_POST['tambah_pelanggan'])){
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $notelp_pelanggan = $_POST['notelp_pelanggan'];
    $asal_pelanggan = $_POST['asal_pelanggan'];

    $insert = mysqli_query($c,"insert into pelanggan (nama_pelanggan,notelp_pelanggan,asal_pelanggan) 
    values ('$nama_pelanggan','$notelp_pelanggann','$asal_pelanggan')");

    if($insert) {
        header('location:pelanggan.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="pelanggan.php"
        </script>
        ';
    }
} 

if(isset($_POST['tambah_pesanan'])){
    $kode_pelanggan = $_POST['kode_pelanggan'];
    $notelp_pelanggan = $_POST['notelp_pelanggan'];
    $asal_pelanggan = $_POST['asal_pelanggan'];

    $insert = mysqli_query($c,"insert into pesanan (kode_pelanggan) 
    values ('$kode_pelanggan')");

    if($insert) {
        header('location:peminjaman.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="pesaanan.php"
        </script>
        ';
    }
}

if(isset($_POST['tambah_produk'])){
    $jenis_produk = $_POST['jenis_produk'];
    $judul_produk = $_POST['judul_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $stok_produk = $_POST['stok_produk'];
    $harga_produk = $_POST['harga_produk'];

    $insert = mysqli_query($c,"insert into produk (jenis_produk,
    judul_produk,kategori_produk,stok_produk,harga_produk) 
    values ('$jenis_produk','$judul_produk','$kategori_produk',
    '$stok_produk','$harga_produk')");

    if($insert) {
        header('location:produk.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="produk.php"
        </script>
        ';
    }
} 

//produk dipilih di pesanan
if(isset($_POST['addproduk'])){
    $kode_produk = $_POST['kode_produk'];
    $idp = $_POST['idp'];
    $qty = $_POST['qty'];
   
    //hitung stok sekarang ada berapa
    $hitung1 = mysqli_query($c,"select * from produk where kode_produk='$kode_produk'");
    $hitung2 = mysqli_fetch_array($hitung1);
    $stoksekarang = $hitung2['stok_produk']; //stok barang saat ini

    if($stoksekarang>=$qty) {

        //kurangi stoknya dengan jumlah yang akan dikeluarkan
        $selisih = $stoksekarang-$qty;

        //stoknya cukup
        $insert = mysqli_query($c,"insert into detailpesanan (kode_pesanan,kode_produk,qty) 
        values ('$idp','$kode_produk','$qty')");
        $update = mysqli_query($c,"update produk set stok_produk='$selisih' where kode_produk='$kode_produk'");

        if($insert&&$update){
            header('location:view.php?idp='.$idp);
        } else{
            echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="view.php?idp='.$idp.'"
        </script>
        ';
        }
    } else {
        //stoknya ga cukup
    } echo '
    <script>alert("Gagal menambah data baru");
    window.location.href="view.php?idp='.$idp.'"
    </script>
    ';
}
 
//Menambah barang masuk
if(isset($_POST['barang_masuk'])){
    $kode_produk = $_POST['kode_produk'];
    $qty = $_POST['qty'];

    //cari tahu stock sekarang berapa
    $caristock = mysqli_query($c,"select * from produk where kode_produk='$kode_produk'");
    $caristock2 = mysqli_fetch_array($caristock);
    $stoksekarang = $caristock2['stok_produk'];

    //hitung
    $newstock = $stoksekarang+$qty;

    $insertb = mysqli_query($c,"insert into masuk (kode_produk,qty) 
    values ('$kode_produk','$qty')");
    $updatetb = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$kode_produk'");

    if($insertb&&$updatetb) {
        header('location:masuk.php');
    } else {
        echo '
        <script>alert("Gagal menambah data baru");
        window.location.href="masuk.php"
        </script>
        ';
    }
} 

//Hapus produk pesanan
if(isset($_POST['hapusprodukpesanan'])) {
    $idp = $_POST['idp']; //kode_detailpesanan
    $idpr = $_POST['idpr'];
    $kode_pesanan = $_POST['kode_pesanan'];

    //cek qty sekarang
    $cek1 = mysqli_query($c,"select * from detailpesanan where kode_detailpesanan='$idp'");
    $cek2 = mysqli_fetch_array($cek1);
    $qtysekarang = $cek2['qty'];

    //cek stok sekarang
    $cek3 = mysqli_query($c,"select * from produk where kode_produk='$idpr'");
    $cek4 = mysqli_fetch_array($cek3);
    $stoksekarang = $cek4['stok_produk'];

    $hitung = $stoksekarang+$qtysekarang;

    $update = mysqli_query($c,"update produk set stok_produk='$hitung' where kode_produk='$idpr'"); //update stok
    $hapus = mysqli_query($c,"delete from detailpesanan where kode_produk='$idpr' and kode_detailpesanan='$idp'");

    if($update&&$hapus) {
        header('location:view.php?idp='.$kode_pesanan);
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="view.php?idp='.$kode_pesanan.'"
        </script>
        ';
    }
}

//edit barang
if(isset($_POST['editbarang'])) {
    $jenis_produk = $_POST['jenis_produk'];
    $judul_produk = $_POST['judul_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $harga_produk = $_POST['harga_produk'];
    $idp = $_POST['idp'];

    $query = mysqli_query($c,"update produk set jenis_produk='$jenis_produk', 
    judul_produk='$judul_produk', kategori_produk='$kategori_produk',
    harga_produk='$harga_produk' where kode_produk='$idp' ");

    if($query) {
        header('location:produk.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="stock.php"
        </script>
        ';
    }
}

//hapus barang
if(isset($_POST['hapusbarang'])) {
    $idp = $_POST['idp'];

    $query = mysqli_query($c,"delete from produk where kode_produk='$idp'");
    if($query) {
        header('location:produk.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="stock.php"
        </script>
        ';
    }
}

//edit pelanggan
if(isset($_POST['editpelanggan'])) {
    $np = $_POST['nama_pelanggan'];
    $nt = $_POST['notelp_pelanggan'];
    $a = $_POST['asal_pelanggan'];
    $id = $_POST['idpl'];

    $query = mysqli_query($c,"update pelanggan set nama_pelanggan='$np', notelp_pelanggan='$nt', asal_pelanggan='$a'
    where kode_pelanggan='$id' ");

    if($query) {
        header('location:pelanggan.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="pelanggan.php"
        </script>
        ';
    }
}

//hapus pelanggan
if(isset($_POST['hapuspelanggan'])) {
    $idpl = $_POST['idpl'];

    $query = mysqli_query($c,"delete from pelanggan where kode_pelanggan='$idpl'");
    if($query) {
        header('location:pelanggan.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="pelanggan.php"
        </script>
        ';
    }
}

//mengubah data barang masuk
if(isset($_POST['editbarangmasuk'])) {
    $qty = $_POST['qty'];
    $idm = $_POST['idm'];
    $idp = $_POST['idp'];
    
    //cari tau qty nya sekarang berapa
    $caritahu = mysqli_query($c,"select * from masuk where kode_masuk='$idm'");
    $caritahu2 = mysqli_fetch_array($caritahu);
    $qtysekarang = $caritahu2['qty'];

    //cari tahu stock sekarang berapa
    $caristock = mysqli_query($c,"select * from produk where kode_produk='$idp'");
    $caristock2 = mysqli_fetch_array($caristock);
    $stoksekarang = $caristock2['stok_produk'];

    if($qty >= $qtysekarang) {
        //kalau input user lebih besar daripada qty yg tercatat
        //hitung selisih
        $selisih = $qty-$qtysekarang;
        $newstock = $stoksekarang+$selisih;

        $query1 = mysqli_query($c,"update masuk set qty='$qty' where kode_masuk='$idm'");
        $query2 = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$idp'");

        if($query1&&$query2) {
            header('location:masuk.php');
        } else {
            echo '
            <script>alert("Gagal menghapus data");
            window.location.href="masuk.php"
            </script>
            ';
        }
    } else {
        //kalau lebih kecil
        //hitung selisih
        $selisih = $qtysekarang-$qty;
        $newstock = $stoksekarang-$selisih;

        $query1 = mysqli_query($c,"update masuk set qty='$qty' where kode_masuk='$idm' ");
        $query2 = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$idp' ");

        if($query1&&$query2) {
            header('location:masuk.php');
        } else {
            echo '
            <script>alert("Gagal menghapus data");
            window.location.href="masuk.php"
            </script>
            ';
        }
    }
}


//hapus data barang masuk
if(isset($_POST['hapusdatabarangmasuk'])) {
    $idm = $_POST['idm'];
    $idp = $_POST['idp'];

    //cari tau qty nya sekarang berapa
    $caritahu = mysqli_query($c,"select * from masuk where kode_masuk='$idm'");
    $caritahu2 = mysqli_fetch_array($caritahu);
    $qtysekarang = $caritahu2['qty'];

    //cari tahu stock sekarang berapa
    $caristock = mysqli_query($c,"select * from produk where kode_produk='$idp'");
    $caristock2 = mysqli_fetch_array($caristock);
    $stoksekarang = $caristock2['stok_produk'];

    //hitung selisih
    $newstock = $stoksekarang-$qtysekarang;

    $query1 = mysqli_query($c,"delete from masuk where kode_masuk='$idm' ");
    $query2 = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$idp' ");

    if($query1&&$query2) {
        header('location:masuk.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="masuk.php"
        </script>
        ';
    }
}

//hapus pesanan
if(isset($_POST['hapusorder'])) {
    $ido = $_POST['ido'];

    $cekdata = mysqli_query($c,"select * from detailpesanan dp where kode_pesanan='$ido'");

    while($ok=mysqli_fetch_array($cekdata)) {
        //balikin stock
        $qty = $ok['qty'];
        $kode_produk = $ok['kode_produk'];
        $iddp = $ok['kode_detailpesanan'];

         //cari tahu stock sekarang berapa
        $caristock = mysqli_query($c,"select * from produk where kode_produk='$kode_produk'");
        $caristock2 = mysqli_fetch_array($caristock);
        $stoksekarang = $caristock2['stok_produk'];

        $newstock = $stoksekarang+$qty;

        $queryupdate = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$kode_produk' ");


        //hapus data
        $querydelete = mysqli_query($c,"delete from detailpesanan where kode_detailpesanan='$iddp'");

    }

    $query = mysqli_query($c,"delete from pesanan where kode_pesanan='$ido'");

    if($queryupdate && $querydelete && $query) {
        header('location:peminjaman.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="peminjaman.php"
        </script>
        ';
    }
}

//mengubah data detail pesanan
if(isset($_POST['editdetailpesanan'])) {
    $qty = $_POST['qty'];
    $iddp = $_POST['iddp'];
    $idpr = $_POST['idpr'];
    $idp = $_POST['idp'];
    
    //cari tau qty nya sekarang berapa
    $caritahu = mysqli_query($c,"select * from detailpesanan where kode_detailpesanan='$iddp'");
    $caritahu2 = mysqli_fetch_array($caritahu);
    $qtysekarang = $caritahu2['qty'];

    //cari tahu stock sekarang berapa
    $caristock = mysqli_query($c,"select * from produk where kode_produk='$idpr'");
    $caristock2 = mysqli_fetch_array($caristock);
    $stoksekarang = $caristock2['stok_produk'];

    if($qty >= $qtysekarang) {
        //kalau input user lebih besar daripada qty yg tercatat
        //hitung selisih
        $selisih = $qty-$qtysekarang;
        $newstock = $stoksekarang-$selisih;

        $query1 = mysqli_query($c,"update detailpesanan set qty='$qty' where kode_detailpesanan='$iddp'");
        $query2 = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$idpr'");

        if($query1&&$query2) {
            header('location:view.php?idp='.$idp);
        } else {
            echo '
            <script>alert("Gagal menghapus data");
            window.location.href="view.php?idp='.$idp.'"
            </script>
            ';
        }
    } else {
        //kalau lebih kecil
        //hitung selisih
        $selisih = $qtysekarang-$qty;
        $newstock = $stoksekarang+$selisih;

        $query1 = mysqli_query($c,"update detailpesanan set qty='$qty' where kode_detailpesanan='$iddp'");
        $query2 = mysqli_query($c,"update produk set stok_produk='$newstock' where kode_produk='$idpr'");

        if($query1&&$query2) {
            header('location:view.php?idp='.$idp);
        } else {
            echo '
            <script>alert("Gagal menghapus data");
            window.location.href="view.php?idp='.$idp.'"
            </script>
            ';
        }
    }
}

//edit buku fiksi
if(isset($_POST['editfiksi'])) {
    $jbf = $_POST['judul_bf'];
    $gbf = $_POST['genre_bf'];
    $penulis_bf = $_POST['penulis_bf'];
    $penerbit_bf = $_POST['penerbit_bf'];
    $ttbf = $_POST['tahunterbit_bf'];
    $ktbf = $_POST['kotaterbit_bf'];
    $idf = $_POST['idf'];

    $query = mysqli_query($c,"update fiksi set judul_bf='$jbf', genre_bf='$gbf', penulis_bf='$penulis_bf', penerbit_bf='$penerbit_bf', tahunterbit_bf='$ttbf', kotaterbit_bf='$ktbf'
    where kode_bf='$idf' ");

    if($query) {
        header('location:fiction.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="fiction.php"
        </script>
        ';
    }
}

//hapus buku fiksi
if(isset($_POST['hapusfiksi'])) {
    $idf = $_POST['idf'];

    $query = mysqli_query($c,"delete from fiksi where kode_bf='$idf'");
    if($query) {
        header('location:fiction.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="fiction.php"
        </script>
        ';
    }
}

//edit buku nonfiksi
if(isset($_POST['editnonfiksi'])) {
    $jbnf = $_POST['judul_bnf'];
    $gbnf = $_POST['genre_bnf'];
    $penulis_bnf = $_POST['penulis_bnf'];
    $penerbit_bnf = $_POST['penerbit_bnf'];
    $ttbnf = $_POST['tahunterbit_bnf'];
    $ktbnf = $_POST['kotaterbit_bnf'];
    $idnf = $_POST['idnf'];

    $query = mysqli_query($c,"update nonfiksi set judul_bnf='$jbnf', genre_bnf='$gbnf', penulis_bnf='$penulis_bnf', penerbit_bnf='$penerbit_bnf', tahunterbit_bnf='$ttbnf', kotaterbit_bnf='$ktbnf'
    where kode_bnf='$idnf' ");

    if($query) {
        header('location:nonfiction.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="nonfiction.php"
        </script>
        ';
    }
}

//hapus buku nonfiksi
if(isset($_POST['hapusnonfiksi'])) {
    $idnf = $_POST['idnf'];

    $query = mysqli_query($c,"delete from nonfiksi where kode_bnf='$idnf'");
    if($query) {
        header('location:nonfiction.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="nonfiction.php"
        </script>
        ';
    }
}

//edit movies anime
if(isset($_POST['editanime'])) {
    $judul_ma = $_POST['judul_ma'];
    $sutradara_ma = $_POST['sutradara_ma'];
    $produser_ma = $_POST['produser_ma'];
    $rumahproduksi_ma = $_POST['rumahproduksi_ma'];
    $tahunrilis_ma = $_POST['tahunrilis_ma'];
    $durasi_ma = $_POST['durasi_ma'];
    $rating_ma = $_POST['rating_ma'];
    $idanime = $_POST['idanime'];

    $query = mysqli_query($c,"update anime set judul_ma='$judul_ma', sutradara_ma='$sutradara_ma', produser_ma='$produser_ma', rumahproduksi_ma='$rumahproduksi_ma', tahunrilis_ma='$tahunrilis_ma', durasi_ma='$durasi_ma',
    rating_ma='$rating_ma' where kode_ma='$idanime' ");

    if($query) {
        header('location:anime.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="anime.php"
        </script>
        ';
    }
}

//hapus movies anime
if(isset($_POST['hapusanime'])) {
    $idanime = $_POST['idanime'];

    $query = mysqli_query($c,"delete from anime where kode_ma='$idanime'");
    if($query) {
        header('location:anime.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="anime.php"
        </script>
        ';
    }
}

//edit movies horror
if(isset($_POST['edithorror'])) {
    $judul_mh = $_POST['judul_mh'];
    $sutradara_mh = $_POST['sutradara_mh'];
    $produser_mh = $_POST['produser_mh'];
    $rumahproduksi_mh = $_POST['rumahproduksi_mh'];
    $tahunrilis_mh = $_POST['tahunrilis_mh'];
    $durasi_mh = $_POST['durasi_mh'];
    $rating_mh = $_POST['rating_mh'];
    $idh = $_POST['idh'];

    $query = mysqli_query($c,"update horror set judul_mh='$judul_mh', sutradara_mh='$sutradara_mh', produser_mh='$produser_mh', rumahproduksi_mh='$rumahproduksi_mh', tahunrilis_mh='$tahunrilis_mh', durasi_mh='$durasi_mh',
    rating_mh='$rating_mh' where kode_mh='$idh' ");

    if($query) {
        header('location:horror.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="horror.php"
        </script>
        ';
    }
}

//hapus movies horror
if(isset($_POST['hapushorror'])) {
    $idh = $_POST['idh'];

    $query = mysqli_query($c,"delete from horror where kode_mh='$idh'");
    if($query) {
        header('location:horror.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="horror.php"
        </script>
        ';
    }
}

//edit movies action
if(isset($_POST['editaction'])) {
    $judul_mac = $_POST['judul_mac'];
    $sutradara_mac = $_POST['sutradara_mac'];
    $produser_mac = $_POST['produser_mac'];
    $rumahproduksi_mac = $_POST['rumahproduksi_mac'];
    $tahunrilis_mac = $_POST['tahunrilis_mac'];
    $durasi_mac = $_POST['durasi_mac'];
    $rating_mac = $_POST['rating_mac'];
    $idac = $_POST['idac'];

    $query = mysqli_query($c,"update action set judul_mac='$judul_mac', sutradara_mac='$sutradara_mac', produser_mac='$produser_mac', rumahproduksi_mac='$rumahproduksi_mac', tahunrilis_mac='$tahunrilis_mac', durasi_mac='$durasi_mac',
    rating_mac='$rating_mac' where kode_mac='$idac' ");

    if($query) {
        header('location:action.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="action.php"
        </script>
        ';
    }
}

//hapus movies action
if(isset($_POST['hapusaction'])) {
    $idac = $_POST['idac'];

    $query = mysqli_query($c,"delete from action where kode_mac='$idac'");
    if($query) {
        header('location:action.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="action.php"
        </script>
        ';
    }
}

//edit movies romance
if(isset($_POST['editromance'])) {
    $judul_mr = $_POST['judul_mr'];
    $sutradara_mr = $_POST['sutradara_mr'];
    $produser_mr = $_POST['produser_mr'];
    $rumahproduksi_mr = $_POST['rumahproduksi_mr'];
    $tahunrilis_mr = $_POST['tahunrilis_mr'];
    $durasi_mr = $_POST['durasi_mr'];
    $rating_mr = $_POST['rating_mr'];
    $idr = $_POST['idr'];

    $query = mysqli_query($c,"update romance set judul_mr='$judul_mr', sutradara_mr='$sutradara_mr', produser_mr='$produser_mr', rumahproduksi_mr='$rumahproduksi_mr', tahunrilis_mr='$tahunrilis_mr', durasi_mr='$durasi_mr',
    rating_mr='$rating_mr' where kode_mr='$idr' ");

    if($query) {
        header('location:romance.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="romance.php"
        </script>
        ';
    }
}

//hapus movies romance
if(isset($_POST['hapusromance'])) {
    $idr = $_POST['idr'];

    $query = mysqli_query($c,"delete from romance where kode_mr='$idr'");
    if($query) {
        header('location:romance.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="romaance.php"
        </script>
        ';
    }
}

//edit movies comedy
if(isset($_POST['editcomedy'])) {
    $judul_mc = $_POST['judul_mc'];
    $sutradara_mc = $_POST['sutradara_mc'];
    $produser_mc = $_POST['produser_mc'];
    $rumahproduksi_mc = $_POST['rumahproduksi_mc'];
    $tahunrilis_mc = $_POST['tahunrilis_mc'];
    $durasi_mc = $_POST['durasi_mc'];
    $rating_mc = $_POST['rating_mc'];
    $idc = $_POST['idc'];

    $query = mysqli_query($c,"update comedy set judul_mc='$judul_mc', sutradara_mc='$sutradara_mc', produser_mc='$produser_mc', rumahproduksi_mc='$rumahproduksi_mc', tahunrilis_mc='$tahunrilis_mc', durasi_mc='$durasi_mc',
    rating_mc='$rating_mc' where kode_mc='$idc' ");

    if($query) {
        header('location:comedy.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="comedy.php"
        </script>
        ';
    }
}

//hapus movies comedy
if(isset($_POST['hapuscomedy'])) {
    $idc = $_POST['idc'];

    $query = mysqli_query($c,"delete from comedy where kode_mc='$idc'");
    if($query) {
        header('location:comedy.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="comedy.php"
        </script>
        ';
    }
}

//edit income
if(isset($_POST['editincome'])) {
    $sumber_income = $_POST['sumber_income'];
    $jumlah_income = $_POST['jumlah_income'];
    $keterangan_income = $_POST['keterangan_income'];
    $idi = $_POST['idi'];

    $query = mysqli_query($c,"update income set sumber_income='$sumber_income', jumlah_income='$jumlah_income', keterangan_income='$keterangan_income'
    where kode_income='$idi' ");

    if($query) {
        header('location:income.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="income.php"
        </script>
        ';
    }
}

//hapus income
if(isset($_POST['hapusincome'])) {
    $idi = $_POST['idi'];

    $query = mysqli_query($c,"delete from income where kode_income='$idi'");
    if($query) {
        header('location:income.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="income.php"
        </script>
        ';
    }
}

//edit spending
if(isset($_POST['editspending'])) {
    $deskripsi_spending = $_POST['deskripsi_spending'];
    $kategori_spending = $_POST['kategori_spending'];
    $jumlah_spending = $_POST['jumlah_spending'];
    $metode_spending = $_POST['metode_spending'];
    $ids = $_POST['ids'];

    $query = mysqli_query($c,"update spending set deskripsi_spending='$deskripsi_spending', kategori_spending='$kategori_spending', jumlah_spending='$jumlah_spending',
    metode_spending='$metode_spending' where kode_spending='$ids' ");

    if($query) {
        header('location:spending.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="spending.php"
        </script>
        ';
    }
}

//hapus income
if(isset($_POST['hapusspending'])) {
    $ids = $_POST['ids'];

    $query = mysqli_query($c,"delete from spending where kode_spending='$ids'");
    if($query) {
        header('location:spending.php');
    } else {
        echo '
        <script>alert("Gagal menghapus data");
        window.location.href="spending.php"
        </script>
        ';
    }
}



?>