<?php 
include "../../../asset/inc/config.php";

if (isset($_POST['validasi'])) {
	$idrealisasi_apbdes = $_POST['idrealisasi_apbdes'];
	$validasi = $_POST['debug'];
	$catat = $_POST['catat'];

	$query = "UPDATE tb_realisasi_apbdes SET  validasi='$validasi', catatan='$catat' WHERE id_realisasi_apbdes='$idrealisasi_apbdes'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
               " - ".mysqli_error($koneksi));
      } else {

        header("Location:../../../index.php?page=p_apbdes");
      }
}
 ?>