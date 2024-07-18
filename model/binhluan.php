<?php
function insert_binhluan($noidung,$idtk,$idpro,$ngaybinhluan){
    $sql= "insert into binhluan(noidung,idtk,idpro,ngaybinhluan) values('$noidung','$idtk','$idpro','$ngaybinhluan')";
    pdo_execute($sql)   ;
 }
 function loadall_binhluan($idpro){
    $sql="select *from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listdsbl= pdo_query($sql);
    return $listdsbl;
 }

?>