<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['submit']))
{
    $p_add = $_FILES['p_add']['name'];
    $foto1 = $_FILES['foto1']['name'];
    $foto2 = $_FILES['foto2']['name'];
    $foto3 = $_FILES['foto3']['name'];
    $foto4 = $_FILES['foto4']['name'];
    $valid = $_POST['valid'];
    $id_user = $_POST['id_user'];
    $tahun = $_POST['tahun'];

// include database connection file
include_once("../../../asset/inc/config.php");

  //cek dulu jika ada gambar produk jalankan coding ini
  if($p_add != "") {
    $ekstensi_diperbolehkan = array('xlsx','xls','doc','docx','pdf'); //ekstensi file yang bisa diupload 
    $x = explode('.', $p_add); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_p_add_tmp = $_FILES['p_add']['tmp_name']; 
    $acak = rand(00000000, 99999999);
    $p_addExt = substr($p_add, strrpos($p_add, '.')); 
    $p_addExt = str_replace('.','',$p_addExt); // Extension
    $p_add = preg_replace("/\.[^.\s]{3,4}$/", "", $p_add); 
    $nama_p_add_baru = "ADD_".$acak.'.'.$p_addExt;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
      move_uploaded_file($file_p_add_tmp, 'file/add/'.$nama_p_add_baru); //memindah file ke folder file/p_dd
    }
  }

  //cek dulu jika ada gambar produk jalankan coding ini
  if($foto1 != "") {
    $ekstensi_diperbolehkan = array('jpg','jpeg','png'); //ekstensi file yang bisa diupload 
    $x = explode('.', $foto1); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_foto1_tmp = $_FILES['foto1']['tmp_name'];
    $acak = rand(00000000, 99999999);
    $foto1Ext = substr($foto1, strrpos($foto1, '.')); 
    $foto1Ext = str_replace('.','',$foto1Ext); // Extension
    $foto1 = preg_replace("/\.[^.\s]{3,4}$/", "", $foto1);  
    $nama_foto1_baru = "foto1_".$acak.'.'.$foto1Ext; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
      move_uploaded_file($file_foto1_tmp, 'file/foto/foto1/'.$nama_foto1_baru); //memindah file ke folder file/foto1
    }
  }

  //cek dulu jika ada gambar produk jalankan coding ini
  if($foto2 != "") {
    $ekstensi_diperbolehkan = array('jpg','jpeg','png'); //ekstensi file yang bisa diupload 
    $x = explode('.', $foto2); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_foto2_tmp = $_FILES['foto2']['tmp_name'];
    $acak = rand(00000000, 99999999);
    $foto2Ext = substr($foto2, strrpos($foto2, '.')); 
    $foto2Ext = str_replace('.','',$foto2Ext); // Extension
    $foto2 = preg_replace("/\.[^.\s]{3,4}$/", "", $foto2);  
    $nama_foto2_baru = "foto2_".$acak.'.'.$foto2Ext; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
      move_uploaded_file($file_foto2_tmp, 'file/foto/foto2/'.$nama_foto2_baru); //memindah file ke folder file/foto1
    }
  }

  //cek dulu jika ada gambar produk jalankan coding ini
  if($foto3 != "") {
    $ekstensi_diperbolehkan = array('jpg','jpeg','png'); //ekstensi file yang bisa diupload 
    $x = explode('.', $foto3); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_foto3_tmp = $_FILES['foto3']['tmp_name'];
    $acak = rand(00000000, 99999999);
    $foto3Ext = substr($foto3, strrpos($foto3, '.')); 
    $foto3Ext = str_replace('.','',$foto3Ext); // Extension
    $foto3 = preg_replace("/\.[^.\s]{3,4}$/", "", $foto3);  
    $nama_foto3_baru = "foto3_".$acak.'.'.$foto3Ext; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
      move_uploaded_file($file_foto3_tmp, 'file/foto/foto3/'.$nama_foto3_baru); //memindah file ke folder file/foto1
    }
  }

  //cek dulu jika ada gambar produk jalankan coding ini
  if($foto4 != "") {
    $ekstensi_diperbolehkan = array('jpg','jpeg','png'); //ekstensi file yang bisa diupload 
    $x = explode('.', $foto4); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_foto4_tmp = $_FILES['foto4']['tmp_name'];
    $acak = rand(00000000, 99999999);
    $foto4Ext = substr($foto4, strrpos($foto4, '.')); 
    $foto4Ext = str_replace('.','',$foto4Ext); // Extension
    $foto4 = preg_replace("/\.[^.\s]{3,4}$/", "", $foto4);  
    $nama_foto4_baru = "foto4_".$acak.'.'.$foto4Ext; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
      move_uploaded_file($file_foto4_tmp, 'file/foto/foto4/'.$nama_foto4_baru); //memindah file ke folder file/foto1
    }
  }

        // Insert file into table
        $result = mysqli_query($koneksi, "INSERT INTO tb_realisasi_add(realisasi_add,foto_add_1,foto_add_2,foto_add_3,foto_add_4,id_user,validasi,tahun) VALUES('$nama_p_add_baru','$nama_foto1_baru','$nama_foto2_baru','$nama_foto3_baru','$nama_foto4_baru','$id_user','$valid','$tahun')");

        // Show message when user added
        header("Location:../../../index.php?page=p_add");

}
?>