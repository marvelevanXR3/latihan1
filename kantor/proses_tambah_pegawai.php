<?php
if($_POST){
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($nik)){
        echo "<script>alert('NIK pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($no_telp)){
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    }
     else {
        include "konek.php";
        $insert=mysqli_query($conn,"insert into pegawai (nik,nama_pegawai, jenis_kelamin, no_telp, alamat, username, password, id_jabatan) value
        ('".$nik."','".$nama_pegawai."','".$jenis_kelamin."','".$no_telp."','".$alamat."','".$username."','".md5($password)."','".$id_jabatan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
