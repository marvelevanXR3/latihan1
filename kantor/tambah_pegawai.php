<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        NIK :
        <input type="text" name="nik" value="" class="form-control">
        nama Pegawai :
        <input type="text" name="nama_pegawai" value="" class="form-control">	
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Jenis kelamin : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Nomer telepon :
        <input type="text" name="no_telp" value="" class="form-control">
        jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php 
            include "konek.php";
            $qry_jabatan=mysqli_query($conn,"select * from jabatan");
            while($id_jabatan=mysqli_fetch_array($qry_jabatan)){
                echo '<option value="'.$id_jabatan['id_jabatan'].'">'.$id_jabatan['nama_jabatan'].'</option>';    
            }
            ?>
        </select>

        username : 
        <input type="text" name="username" value="" class="form-control">

        password : 
        <input type="password" name="password" value="" class="form-control">

        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>