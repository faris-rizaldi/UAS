<?php
session_start();
//membuat koneksi database
$conn = mysqli_connect("localhost","root","","daftarteam");

//menambah barang baru
if(isset($_POST['addnewteam'])){
    $namateam = $_POST['namateam'];
    $deskripsi = $_POST['deskripsi'];
    $poin = $_POST['poin'];

    $addtotable = mysqli_query($conn,"insert into daftar(namateam,deskripsi,poin) values('$namateam','$deskripsi','$poin')");
    if($addtotable){
        header('location:index.php');
    }else{
        header('location:401.html');
    }
}

//menambah barang masuk
if(isset($_POST['addpoinmasuk'])){

    $teamnya = $_POST['teamnya'];
    $keterangan = $_POST['keterangan'];
    $poinmasuk = $_POST['poinmasuk'];

    $cekdaftarsekarang = mysqli_query($conn,"select * from daftar where idteam= '$teamnya'");
    $ambildatanya = mysqli_fetch_array($cekdaftarsekarang);

    $poinsekarang = $ambildatanya['poin'];
    $tambahkanpoinsekarang = $poinsekarang+$poinmasuk;

    $addtomasuk = mysqli_query($conn,"insert into masuk(idteam,keterangan,poinmasuk) values ('$teamnya','$keterangan','$poinmasuk')");
    $updatepoinnmasuk = mysqli_query($conn,"update daftar set daftar='$tambahkanpoinsekarang' where idteam='$teamnya'");

    if($addtomasuk && $updatepoinmasuk){
        header('location:masuk.php');
    }else{
        header('location:401.html');
    }
}

//menambah barang Keluar
if(isset($_POST['addbarangkeluar'])){

    $teamnya = $_POST['teamnya'];
    $keterangan = $_POST['keterangan'];
    $poinkeluar = $_POST['poinkeluar'];

    $cekpoinsekarang = mysqli_query($conn,"select * from poin where idteam= '$teamnya'");//stock di ganti menjadi poin
    $ambildatanya = mysqli_fetch_array($cekpoinsekarang);

    $poinsekarang = $ambildatanya['poin'];
    $tambahkanstocksekarangdenganquantity = $poinsekarang+$poinmasuk;

    $addtomasuk = mysqli_query($conn,"insert into masuk(idteam,keterangan,poinmasuk) values ('$teamnya','$keterangan','$poinmasuk')");
    $updatestockmasuk = mysqli_query($conn,"update poin  set poin='$tambahkanstocksekarangdenganquantity' where idteam='$teamnya'");

    if($addtomasuk && $updatestockmasuk){
        header('location:keluar.php');
    }else{
        header('location:401.html');
    }
}
?>