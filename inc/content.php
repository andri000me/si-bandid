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
 }  elseif ($page == "apbdes_perub") {
  if ($action == '') {
    include "page/perencanaan/apbdes_perub/apbdes_perub.php";
  } elseif ($action == "delete") {
    include "page/perencanaan/apbdes_perub/delete.php";
  }
 } elseif ($page == "") {
  include "dashboard.php";
}
