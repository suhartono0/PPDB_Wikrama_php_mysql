<?php

        $no = mysqli_query($con, "SELECT no_daftar FROM tb_daftar ORDER BY no_daftar ASC");
        $kodeid = mysqli_fetch_array($no);
        $kode = $kodeid['no_daftar'];

        $urut = substr($kode, 6, 3);
        $tambah = (int) $urut +1;
        $bln = date("m");
        $thn = date("y");
        $tgl = date("d");

        if (strlen($tambah) == 1) {
            $format = "ND"."-".$tgl."-".$bln."-"."00".$tambah;
        }else if(strlen($tambah) == 2) {
            $format = "ND"."-".$tgl."-".$bln."-"."0".$tambah;
        }else{
            $format = "ND"."-".$tgl."-".$bln."-".$tambah;
        } 
    ?>

    <?php
        $no = mysqli_query($con, "SELECT no_tes FROM tb_daftar ORDER BY no_tes ASC");
        $kodeid = mysqli_fetch_array($no);
        $kode = $kodeid['no_tes'];

        $urut = substr($kode, 6, 3);
        $tambah = (int) $urut +1;
        $bln = date("m");
        $thn = date("y");
        $tgl = date("d");

        if (strlen($tambah) == 1) {
            $formattes = "NT"."-".$tgl."-".$bln."-"."00".$tambah;
        }else if(strlen($tambah) == 2) {
            $formattes = "NT"."-".$tgl."-".$bln."-"."0".$tambah;
        }else{
            $formattes = "NT"."-".$tgl."-".$bln."-".$tambah;
        } 
    ?>