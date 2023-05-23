<?php
    $dta[0]["NAMA"]="Xyn";
    $dta[0]["TGL_LAHIR"]="2004-09-09";
    $dta[0]["JKEL"]="L";
    $dta[0]["JURUSAN"]="TI-KAB";
    $dta[0]["ALAMAT"]="Jepang";
    
    $dta[1]["NAMA"]="Nana";
    $dta[1]["TGL_LAHIR"]="2004-09-09";
    $dta[1]["JKEL"]="P";
    $dta[1]["JURUSAN"]="TI-KAB";
    $dta[1]["ALAMAT"]="Jepang";

    $dta[2]["NAMA"]="Xavier";
    $dta[2]["TGL_LAHIR"]="2003-09-09";
    $dta[2]["JKEL"]="L";
    $dta[2]["JURUSAN"]="TI-KAB";
    $dta[2]["ALAMAT"]="Jepang";

    $dta[3]["NAMA"]="Angela";
    $dta[3]["TGL_LAHIR"]="2005-09-09";
    $dta[3]["JKEL"]="P";
    $dta[3]["JURUSAN"]="-";
    $dta[3]["ALAMAT"]="Jepang";

    header("content-type:application/json; charset=utf-8");
    echo json_encode($dta);