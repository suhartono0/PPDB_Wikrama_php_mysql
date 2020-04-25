<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ruangan</title>
    <style type="text/css">
        .tengah{
            text-align: center;
            font-size: 16px;
        }
    </style>
    <?php
    include "config/koneksi.php"; //ini buat koneksi ke database di config

        //ini buat button simpan sekaligus save ke database
        if(isset($_POST['simpan'])){
            //ini untuk konek database ketika di simpn
            $sql = mysqli_query($con,"INSERT INTO tb_daftar (no_daftar,no_tes,nama_lengkap,nama_panggilan,jk,ttl,agama,cita_cita,hoby,anak,kandung,tiri,angkat,bb,tb,gd,alamat,kelurahan,kecamatan,kota,prov,telp,email,tinggal_dengan,tbc,malaria,chotipa,lain,kelainan,nama_ayah,ttl_ayah,pekerjaan_ayah,pendidikan_ayah,kewarganegaraan_ayah,agama_ayah,hp_ayah,nama_ibu,ttl_ibu,pekerjaan_ibu,pendidikan_ibu,kewarganegaraan_ibu,agama_ibu,hp_ibu,nama_wali,ttl_wali,pekerjaan_wali,pendidikan_wali,hubungan,kewarganegaraan_wali,agama_wali,hp_wali,email_wali,pai_a,pai_b,pai_c,pai_d,pai_e,indo_a,indo_b,indo_c,indo_d,indo_e,ing_a,ing_b,ing_c,ing_d,ing_e,mtk_a,mtk_b,mtk_c,mtk_d,mtk_e,ipa_a,ipa_b,ipa_c,ipa_d,ipa_e,ips_a,ips_b,ips_c,ips_d,ips_e,prestasi) values ('$_POST[no_daftar]','$_POST[no_tes]','$_POST[nama_lengkap]','$_POST[nama_panggilan]','$_POST[jk]','$_POST[ttl]','$_POST[agama]','$_POST[cita_cita]','$_POST[hoby]','$_POST[anak]','$_POST[kandung]','$_POST[tiri]','$_POST[angkat]','$_POST[bb]','$_POST[tb]','$_POST[gd]','$_POST[alamat]','$_POST[kelurahan]','$_POST[kecamatan]','$_POST[kota]','$_POST[prov]','$_POST[telp]','$_POST[email]','$_POST[tinggal_dengan]','$_POST[tbc]','$_POST[malaria]','$_POST[chotipa]','$_POST[lain]','$_POST[kelainan]','$_POST[nama_ayah]','$_POST[ttl_ayah]','$_POST[pekerjaan_ayah]','$_POST[pendidikan_ayah]','$_POST[kewarganegaraan_ayah]','$_POST[agama_ayah]','$_POST[hp_ayah]','$_POST[nama_ibu]','$_POST[ttl_ibu]','$_POST[pekerjaan_ibu]','$_POST[pendidikan_ibu]','$_POST[kewarganegaraan_ibu]','$_POST[agama_ibu]','$_POST[hp_ibu]','$_POST[nama_wali]','$_POST[ttl_wali]','$_POST[pekerjaan_wali]','$_POST[pendidikan_wali]','$_POST[hubungan]','$_POST[kewarganegaraan_wali]','$_POST[agama_wali]','$_POST[hp_wali]','$_POST[email_wali]','$_POST[pai_a]','$_POST[pai_b]','$_POST[pai_c]','$_POST[pai_d]','$_POST[pai_e]','$_POST[indo_a]','$_POST[indo_b]','$_POST[indo_c]','$_POST[indo_d]','$_POST[indo_e]','$_POST[ing_a]','$_POST[ing_b]','$_POST[ing_c]','$_POST[ing_d]','$_POST[ing_e]','$_POST[mtk_a]','$_POST[mtk_b]','$_POST[mtk_c]','$_POST[mtk_d]','$_POST[mtk_e]','$_POST[ipa_a]','$_POST[ipa_b]','$_POST[ipa_c]','$_POST[ipa_d]','$_POST[ipa_e]','$_POST[ips_a]','$_POST[ips_b]','$_POST[ips_c]','$_POST[ips_d]','$_POST[ips_e]','$_POST[prestasi]')");
            if($sql){
                echo "<script>alert('Data Anda Berhasil Disimpan');</script>";
            }
            else{
                echo "<script>alert('Data Gagal Disimpan');</script>;";
            }
        }
        // ini untuk opsi delete hapus
        if(isset($_GET['delete'])){
            $sql = mysqli_query($con,"DELETE FROM tb_daftar WHERE no_daftar = '$_GET[no_daftar]'");
            if($sql){
                echo "<script>alert('data berhasil dihapus');document.location.href='http://localhost/php_pendaftaran/index.php'</script>";
            }
            else{
                echo "<script>alert('data berhasil dihapus');document.location.href='http://localhost/php_pendaftaran/index.php'</script>";
            }
        }
        if(isset($_GET['edit'])){
            $sql = mysqli_query($con,"SELECT * FROM tb_daftar where no_daftar ='$_GET[no_daftar]'");
            $row_edit = mysqli_fetch_array($sql);
        }else{
            $row_edit=null;
        }
         if(isset($_POST['update'])){
             $sql = mysqli_query($con,"UPDATE tb_daftar set no_daftar = '$_POST[no_daftar]', no_tes = '$_POST[no_tes]' WHERE no_daftar = '$_GET[no_daftar]'");
              if($sql){
                echo "<script>alert('data berhasil diupdate');
                document.location.href= http://localhost/php_pendaftaran/index.php'</script>";
            }
            else{
                echo "<script>alert('data gagal diupdate');
                document.location.href= http://localhost/php_pendaftaran/index.php'</script>";
            }
        }
    ?>
</head>
    <?php include "includes/header.php" ?>
    <?php include "includes/navbar_tamu.php" ?>
<br>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Pendaftaran</h6>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <?php include "kode.php" ?>
                <div class="form-group">
                    <td>
                        <th>
                            <h4 style="font-weight: bold;">I. Data Calon Murid</h4>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td>No. Daftar</td>
                            <td>
                                <input type="text" name="no_daftar" required="" value="<?php echo $format; ?> <?php echo $row_edit['no_daftar']?>" class="form-control" readonly="">
                            </td>
                        </div>
                        <div class="col">
                            <td>No. Test</td>
                            <input type="text" name="no_tes" required="" value="<?php echo $formattes; ?><?php echo $row_edit['no_tes']?>" class="form-control" readonly="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="nama_lengkap" required="" value="<?php echo $row_edit['nama_lengkap'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Nama Panggilan</td>
                            <td>
                                <input type="text" name="nama_panggilan" required="" value="<?php echo $row_edit['nama_panggilan']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="jk" required="" class="form-control">
                                    <option value="Laki-Laki" <?php if($row_edit['jk'] == "Laki-Laki"){echo "selected";} ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if($row_edit['jk'] == "Perempuan"){echo "selected";} ?>>Perempuan</option>
                                <select>
                            </td>
                        </div>
                        <div class="col">
                            <td>Tempat Tanggal Lahir</td>
                            <td>
                                <input type="text" name="ttl" required="" value="<?php echo $row_edit['ttl']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama" required="" value="<?php echo $row_edit['agama'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Cita Cita</td>
                            <td>
                                <input type="text" name="cita_cita" required="" value="<?php echo $row_edit['cita_cita']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Hobi</td>
                            <td>
                                <input type="text" name="hoby" required="" value="<?php echo $row_edit['hoby'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Anak Ke</td>
                            <td>
                                <input type="text" name="anak" required="" value="<?php echo $row_edit['anak']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Sodara Kandung</td>
                            <td>
                                <input type="text" name="kandung" required="" value="<?php echo $row_edit['kandung'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Sodara Tiri</td>
                            <td>
                                <input type="text" name="tiri" value="<?php echo $row_edit['tiri']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Sodara Angkat</td>
                            <td>
                                <input type="text" name="angkat" value="<?php echo $row_edit['angkat'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Berat Badan</td>
                            <td>
                                <input type="text" name="bb" required="" value="<?php echo $row_edit['bb']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Tinggi Badan</td>
                            <td>
                                <input type="text" name="tb" required="" value="<?php echo $row_edit['tb'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Golongan Darah</td>
                            <td>
                                <input type="text" name="gd" required="" value="<?php echo $row_edit['gd']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <td>
                        <th>
                            <h4 style="font-weight: bold;">II. Keterangan Tempat Tinggal</h4>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td>Alamat Rumah</td>
                            <td>
                                <input type="text" name="alamat" required="" value="<?php echo $row_edit['alamat'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Kelurahan</td>
                            <td>
                                <input type="text" name="kelurahan" required="" value="<?php echo $row_edit['kelurahan']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Kecamatan</td>
                            <td>
                                <input type="text" name="kecamatan" required="" value="<?php echo $row_edit['kecamatan'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Kabupaten/Kota</td>
                            <td>
                                <input type="text" name="kota" required="" value="<?php echo $row_edit['kota']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Provinsi</td>
                            <td>
                                <input type="text" name="prov" required="" value="<?php echo $row_edit['prov'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>No. Telpon</td>
                            <td>
                                <input type="text" name="telp" required="" value="<?php echo $row_edit['telp']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Alamat Email</td>
                            <td>
                                <input type="text" name="email" required="" value="<?php echo $row_edit['email'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Tinggal Dengan</td>
                            <td>
                                <input type="text" name="tinggal_dengan" required="" value="<?php echo $row_edit['tinggal_dengan']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <td>
                        <th>
                            <h4 style="font-weight: bold;">III. Keterangan Kesehatan</h4>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td>Tubercolosis</td>
                            <td>
                                <input type="text" name="tbc" value="<?php echo $row_edit['tbc'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Malaria</td>
                            <td>
                                <input type="text" name="malaria" value="<?php echo $row_edit['malaria']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Chotipa</td>
                            <td>
                                <input type="text" name="chotipa" value="<?php echo $row_edit['chotipa'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Lain-Lain</td>
                            <td>
                                <input type="text" name="lain" value="<?php echo $row_edit['lain']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>Kelainan</td>
                            <td>
                                <input type="text" name="kelainan" value="<?php echo $row_edit['kelainan'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <td>
                        <th>
                            <h4 style="font-weight: bold;">IV. Data Orang Tua / Wali</h4>
                            <p style="font-weight: bold;">1. Data Ayah</p>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama_ayah" required="" value="<?php echo $row_edit['nama_ayah'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Tempat Tanggal Lahir</td>
                            <td>
                                <input type="text" name="ttl_ayah" required="" value="<?php echo $row_edit['ttl_ayah']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Pekerjaan</td>
                            <td>
                                <input type="text" name="pekerjaan_ayah" required="" value="<?php echo $row_edit['pekerjaan_ayah'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Pendidikan</td>
                            <td>
                                <input type="text" name="pendidikan_ayah" required="" value="<?php echo $row_edit['pendidikan_ayah']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="kewarganegaraan_ayah" required="" value="<?php echo $row_edit['kewarganegaraan_ayah'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col-6">
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama_ayah" required="" value="<?php echo $row_edit['agama_ayah'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>No. Telpon</td>
                            <td>
                                <input type="text" name="hp_ayah" required="" value="<?php echo $row_edit['hp_ayah'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <br>
                    <td>
                        <th>
                            <p style="font-weight: bold;">2. Data Ibu</p>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama_ibu" required="" value="<?php echo $row_edit['nama_ibu'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Tempat Tanggal Lahir</td>
                            <td>
                                <input type="text" name="ttl_ibu" required="" value="<?php echo $row_edit['ttl_ibu']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Pekerjaan</td>
                            <td>
                                <input type="text" name="pekerjaan_ibu" required="" value="<?php echo $row_edit['pekerjaan_ibu'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Pendidikan</td>
                            <td>
                                <input type="text" name="pendidikan_ibu" required="" value="<?php echo $row_edit['pendidikan_ibu']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="kewarganegaraan_ibu" required="" value="<?php echo $row_edit['kewarganegaraan_ibu'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col-6">
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama_ibu" required="" value="<?php echo $row_edit['agama_ibu'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>No. Telpon</td>
                            <td>
                                <input type="text" name="hp_ibu" required="" value="<?php echo $row_edit['hp_ibu'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <br>
                    <td>
                        <th>
                            <p style="font-weight: bold;">3. Data Wali</p>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama_wali" value="<?php echo $row_edit['nama_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Tempat Tanggal Lahir</td>
                            <td>
                                <input type="text" name="ttl_wali" value="<?php echo $row_edit['ttl_wali']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Pekerjaan</td>
                            <td>
                                <input type="text" name="pekerjaan_wali" value="<?php echo $row_edit['pekerjaan_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td>Pendidikan</td>
                            <td>
                                <input type="text" name="pendidikan_wali" value="<?php echo $row_edit['pendidikan_wali']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>Hubungan Dengan Siswa</td>
                            <td>
                                <input type="text" name="hubungan" value="<?php echo $row_edit['hubungan'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col-6">
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="kewarganegaraan_wali" value="<?php echo $row_edit['kewarganegaraan_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama_wali" value="<?php echo $row_edit['agama_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col-6">
                            <td>No. Telpon</td>
                            <td>
                                <input type="text" name="hp_wali" value="<?php echo $row_edit['hp_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <td>Email</td>
                            <td>
                                <input type="text" name="email_wali" value="<?php echo $row_edit['email_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <td>
                        <th>
                            <h4 style="font-weight: bold;">VI. Data Nilai Rapor</h4>
                        </th>
                    </td>
                    <div class="row">
                        <div class="col">
                            <td><h4 class="tengah">Nilai PAI Kelas 7 SMT 1</h4></td>
                            <td>
                                <input type="text" name="pai_a" required="" value="<?php echo $row_edit['pai_a'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai PAI Kelas 7 SMT 2</h4></td>
                            <td>
                                <input type="text" name="pai_b" required="" value="<?php echo $row_edit['pai_b'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai PAI Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="pai_c" required="" value="<?php echo $row_edit['pai_c'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai PAI Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="pai_d" required="" value="<?php echo $row_edit['nama_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai PAI Kelas 9 SMT 1</h4></td>
                            <td>
                                <input type="text" name="pai_e" required="" value="<?php echo $row_edit['pai_e']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td ><h4 class="tengah">Nilai Bahasa Indonesia Kelas 7 SMT 1</h4></td>
                            <td>
                                <input type="text" name="indo_a" required="" value="<?php echo $row_edit['indo_a'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Indonesia Kelas 7 SMT 2</h4></td>
                            <td>
                                <input type="text" name="indo_b" required="" value="<?php echo $row_edit['indo_b'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Indonesia Kelas 8 SMT 1</h4></td>
                            <td>
                                <input type="text" name="indo_c" required="" value="<?php echo $row_edit['indo_c'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Indonesia Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="indo_d" required="" value="<?php echo $row_edit['indo_d'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Indonesia Kelas 9 SMT 1</h4></td>
                            <td>
                                <input type="text" name="indo_e" required="" value="<?php echo $row_edit['indo_e']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Inggris Kelas 7 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ing_a" required="" value="<?php echo $row_edit['ing_a'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Inggris Kelas 7 SMT 2</h4></td>
                            <td>
                                <input type="text" name="ing_b" required="" value="<?php echo $row_edit['ing_b'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Inggris Kelas 8 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ing_c" required="" value="<?php echo $row_edit['ing_c'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Inggris Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="ing_d" required="" value="<?php echo $row_edit['ing_d'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Inggris Kelas 9 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ing_e" required="" value="<?php echo $row_edit['ing_e']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Matematika Kelas 7 SMT 1</h4></td>
                            <td>
                                <input type="text" name="mtk_a" required="" value="<?php echo $row_edit['mtk_a'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Matematika Kelas 7 SMT 2</h4></td>
                            <td>
                                <input type="text" name="mtk_b" required="" value="<?php echo $row_edit['mtk_b'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Matematika Kelas 8 SMT 1</h4></td>
                            <td>
                                <input type="text" name="mtk_c" required="" value="<?php echo $row_edit['mtk_c'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Matematika Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="mtk_d" required="" value="<?php echo $row_edit['nama_wali'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa Matematika Kelas 9 SMT 1</h4></td>
                            <td>
                                <input type="text" name="mtk_e" required="" value="<?php echo $row_edit['mtk_e']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPA Kelas 7 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ipa_a" required="" value="<?php echo $row_edit['ipa_a'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPA Kelas 7 SMT 2</h4></td>
                            <td>
                                <input type="text" name="ipa_b" required="" value="<?php echo $row_edit['ipa_b'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPA Kelas 8 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ipa_c" required="" value="<?php echo $row_edit['ipa_c'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPA Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="ipa_d" required="" value="<?php echo $row_edit['ipa_d'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPA Kelas 9 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ipa_e" required="" value="<?php echo $row_edit['ipa_e']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPS Kelas 7 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ips_a" required="" value="<?php echo $row_edit['ips_a'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPS Kelas 7 SMT 2</h4></td>
                            <td>
                                <input type="text" name="ips_b" required="" value="<?php echo $row_edit['ips_b'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPS Kelas 8 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ips_c" required="" value="<?php echo $row_edit['ips_c'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                                                <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPS Kelas 8 SMT 2</h4></td>
                            <td>
                                <input type="text" name="ips_d" required="" value="<?php echo $row_edit['ips_d'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                        <div class="col">
                            <td><h4 class="tengah">Nilai Bahasa IPS Kelas 9 SMT 1</h4></td>
                            <td>
                                <input type="text" name="ips_e" required="" value="<?php echo $row_edit['ttl_wali']?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <td>Prestasi Yang Pernah Diraih</td>
                            <td>
                                <input type="text" name="prestasi" value="<?php echo $row_edit['prestasi'];?>" class="form-control" placeholder="">
                            </td>
                        </div>
                    </div>
                    


                    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Pemberitahuan : </h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p style="font-weight: bold">Berkas Yang Harus Dibawa Saat Mengikuti Test Seleksi:</p>
              <p>1. Foto Copy Raport SMP Kelas 7-9 Semester 1</p>
              <p>2. Foto Copy Akte Kelahiran</p>
              <p>3. Foto Copy Kartu Keluarga</p>
              <p>4. Pas Photo Berwarna (Berkameja) Ukuran 3x4 (6 Foto)</p>
            </div>
              <div class="modal-footer">
              <form action="daftar.php" method="POST">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>




                    <br>
                    <br>
                    <div class="">
                        <div align="center">
                                <ul class="navbar-nav ml-auto">
                                <div class="topbar-divider d-none d-sm-block"></div>
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <input type="submit" class="btn btn-primary" name="simpann" value="simpan">
                                        </a>
                                    </li>
                                </ul>
                            <?php
                                    include "config/koneksi.php";
                                    if(isset($_POST['simpann'])){
                                        include "aass.php";
                                    }
                                ?>
                                <?php
                                    include "config/koneksi.php";
                                    if(isset($_POST['simpan'])){
                                        echo "<script>document.location.href='http://localhost/php_pendaftaran/index.php'</script>";
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<body>       
<!-- ini untuk menampilkan database -->
</form>
</body>
<?php include "includes/scripts.php" ?>
</html>