<?php
    $dta["NAMA"]="Xyn";
    $dta["TGL_LAHIR"]="2004-09-09";
    $dta["JKEL"]="P";
    $dta["JURUSAN"]="ti-kab";
    $dta["ALAMAT"]="Jepang";

    header("content-type:application/json; charset=utf-8");
    echo json_encode($dta);