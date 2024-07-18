<?php
function insert_taikhoan($email,$pass,$tentk){
    $sql= "insert into taikhoan(tentk,pass,email)
     values('$email','$pass','$tentk')";
    pdo_execute($sql)   ;
 }
 function check_tentk($tentk,$pass){
    $sql="select *from taikhoan where tentk='".$tentk."' AND pass='".$pass."'" ;
    $sp=pdo_query_one($sql);
    return $sp;
 }
 function check_email($email){
   $sql="select *from taikhoan where email='".$email."'" ;
   $sp=pdo_query_one($sql);
   return $sp;
}
 function update_taikhoan($id,$tentk,$pass,$email,$diachi,$sdt){
     $sql= "update taikhoan set tentk='".$tentk."',pass='".$pass."', email='".$email."', diachi='".$diachi."',sdt='".$sdt."' where id=".$id;
     pdo_execute($sql)   ;
  }
  function loadall_taikhoan(){
   $sql="select *from taikhoan order by id desc";
   $listtaikhoan= pdo_query($sql);
   return $listtaikhoan;
}
// function loadall_thongke(){
//    $sql="select danhmuc.id as madm, danhmuc.tendanhmuc as tendm, count(sanpham.id) as countsp, min(sanpham.gia) as mingia, max(sanpham.gia) as maxgia, avg(sanpham.gia) as avggia";
//    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddanhmuc";
//    $sql.=" group by danhmuc.id order by danhmuc.id desc";
//    $listthongke=pdo_query($sql);
//    return $listthongke;
// }
function loadall_thongke(){
   $sql="select danhmuc.id as madm, danhmuc.tendanhmuc as tendm, sum(sanpham.soluong) as countsp, min(sanpham.gia) as mingia, max(sanpham.gia) as maxgia, avg(sanpham.gia) as avggia";
   $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddanhmuc";
   $sql.=" group by danhmuc.id order by danhmuc.id desc";
   $listthongke=pdo_query($sql);
   return $listthongke;
}
?>