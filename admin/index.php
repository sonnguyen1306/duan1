<?php
   include "../model/pdo.php";
   include "../model/danhmuc.php";
   include "../model/sanpham.php";
   include "../model/taikhoan.php";
   include "../model/binhluan.php";
   include "../model/cart.php";
   include "header.php";
   if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
     //danhmuc   
        case 'adddm':
            // kiem tra xem ng dung co an nut hay k
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                 $tenloai=$_POST['tenloai'] ;
                 insert_danhmuc($tenloai);
                 $thongbao= "Them thanh cong" ;
            }
            include "danhmuc/add.php";
            break;
        case 'dsdm':
            $sql="select *from danhmuc order by id desc";
            $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm'  :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
            break;  
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'] ;
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao= "Cap nhat thanh cong" ;
           }
           $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
            break;
                
        // san pham//
        
        case 'addsp':
            // kiem tra xem ng dung co an nut hay k
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                 $iddanhmuc=$_POST['iddanhmuc'] ;
                 $tensp=$_POST['tensp'] ;
                 $giasp=$_POST['giasp'] ;
                
                 $mota=$_POST['mota'] ;
                 $soluong=$_POST['soluong'];
                 $hinh=$_FILES['hinh']['name'];
                 $target_dir="../upload/";
                 $target_file=$target_dir . basename($_FILES['hinh']['name']);
                 if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                        // echo "the file";
                 }else{
                    //   echo "sory";
                 }
                 insert_sanpham($tensp,$giasp,$hinh,$mota,$soluong,$iddanhmuc);
                 $thongbao= "Them thanh cong" ;
            }
            $listdanhmuc= loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'dssp':
            // $sql="select *from sanpham order by id desc";
            if(isset($_POST['listok'])&&($_POST['listok'])){
               $kyw=$_POST['kyw'];
               $iddanhmuc=$_POST['iddanhmuc'];
            }else{
                $kyw="";
               $iddanhmuc=0;
            }
            $listdanhmuc= loadall_danhmuc();
            $listsanpham= loadall_sanpham($kyw,$iddanhmuc);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham= loadall_sanpham();
            include "sanpham/list.php";
            break;  
        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            $listdanhmuc= loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_GET['id'] ;
                $iddanhmuc=$_POST['iddanhmuc'] ;
                $tensp=$_POST['tensp'] ;
                $giasp=$_POST['giasp'] ;
                $mota=$_POST['mota'] ;
                $soluong=$_POST['soluong'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir="../upload/";
                $target_file=$target_dir . basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                       // echo "the file";
                }else{
                   //   echo "sory";
                }
                update_sanpham($id,$iddanhmuc,$tensp,$giasp,$mota,$soluong,$hinh);
                $thongbao= "Cap nhat thanh cong" ;
           }
           $listdanhmuc= loadall_danhmuc();
           $listsanpham= loadall_sanpham();
            include "sanpham/list.php";
            break;  
        
        case 'dskh'  :
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break;   
        case 'dsbl'  :
                $listbinhluan= loadall_binhluan(0);
                include "binhluan/list.php";
                break; 
        case 'thongke'  :
                $listthongke= loadall_thongke();
                $listbill= loadall_bill(0);
                include "thongke/list.php";
                break; 
        case 'bieudo'  :
                $listthongke= loadall_thongke();
                include "thongke/bieudo.php";
                break;                               
        default:
            include "home.php";
            break;    
    }
   }else{
    include "home.php";
}


   include "footer.php";
?>