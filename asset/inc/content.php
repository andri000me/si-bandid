<?php

$page = $_GET["page"];
$action = $_GET["action"];

if ($page == "rpjmdes") {
  if ($action == '') {
    include "page/perencanaan/rpjmdes/rpjmdes.php";
  } elseif ($action == "delete") {
    include "page/perencanaan/rpjmdes/delete.php";
  }
} elseif ($page == "rkpdes") {
  if ($action == '') {
    include "page/perencanaan/rkpdes/rkpdes.php";
  } elseif ($action == "delete") {
    include "page/perencanaan/rkpdes/delete.php";
  }
 } elseif ($page == "apbdes") {
  if ($action == '') {
    include "page/perencanaan/apbdes/apbdes.php";
  } elseif ($action == "delete") {
    include "page/perencanaan/apbdes/delete.php";
  }
 } elseif ($page == "apbdes_perub") {
  if ($action == '') {
    include "page/perencanaan/apbdes_perub/apbdes_perub.php";
  } elseif ($action == "delete") {
    include "page/perencanaan/apbdes_perub/delete.php";
  }
 } elseif ($page == "rpd") {
  if ($action == '') {
    include "page/pelaksanaan/rpd/rpd.php";
  } elseif ($action == "delete") {
    include "page/pelaksanaan/rpd/delete.php";
  }
 } elseif ($page == "p_apbdes") {
  if ($action == '') {
    include "page/pelaksanaan/apbdes/p_apbdes.php";
  } elseif ($action == "delete") {
    include "page/pelaksanaan/apbdes/delete.php";
  }
 } elseif ($page == "p_dd") {
  if ($action == '') {
    include "page/pelaksanaan/dd/p_dd.php";
  } elseif ($action == "delete") {
    include "page/pelaksanaan/dd/delete.php";
  }
 } elseif ($page == "p_add") {
  if ($action == '') {
    include "page/pelaksanaan/add/p_add.php";
  } elseif ($action == "delete") {
    include "page/pelaksanaan/add/delete.php";
  }
 } elseif ($page == "p_pad") {
  if ($action == '') {
    include "page/pelaksanaan/pad/p_pad.php";
  } elseif ($action == "delete") {
    include "page/pelaksanaan/pad/delete.php";
  }
 } elseif ($page == "profile") {
  if ($action == '') {
    include "page/setting/profile.php";
  }
 } elseif ($page == "ganti_pass") {
  if ($action == '') {
    include "page/setting/ganti_pass.php";
  }
 } elseif ($page == "user") {
  if ($action == '') {
    include "page/setting/user.php";
  }
 } elseif ($page == "") {
  include "dashboard.php";
}
