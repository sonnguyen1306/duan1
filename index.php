<?php
 session_start();
 include "model/pdo.php";
 include "model/danhmuc.php";
 include "model/sanpham.php";
 include "model/taikhoan.php";
 include "model/cart.php";
 include "view/header.php";
 include "global.php";
 if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
 $spnew=loadall_sanpham_home();
 $dsdm=loadall_danhmuc();
 $dstop10=loadall_sanpham_top10();
//  $onesp=loadone_sanpham($id);

 if((isset($_GET['act']))&&($_GET['act']!="")){
   $act=$_GET['act'];
   switch ($act) {
    case 'sanpham':
      if((isset($_POST['kyw']))&&($_POST['kyw']!="")){
         $kyw=$_POST['kyw'];
       }else{
        $kyw="";
       }

      if((isset($_GET['iddanhmuc']))&&($_GET['iddanhmuc']>0)){
        $iddanhmuc=$_GET['iddanhmuc'];
       }else{
       $iddanhmuc=0;
       }

      $dssp=loadall_sanpham($kyw,$iddanhmuc);
      $tendm=load_tendm($iddanhmuc);
      include "view/sanpham.php";
       break;
    case 'sanphamct':
      if((isset($_GET['idsp']))&&($_GET['idsp']>0)){
        $id=$_GET['idsp'];
        $onesp=loadone_sanpham($id);
        extract($onesp);
        $spcl=load_sanpham_cungloai($id,$iddanhmuc);
        include "view/sanphamct.php";
      }else{
        include "view/home.php";
      }
       break;
    case 'dangki':
      if((isset($_POST['dangki']))&&($_POST['dangki'])){
        $email=$_POST['email'];
        $tentk=$_POST['tentk'];
        $pass=$_POST['pass'];
        
        insert_taikhoan($tentk,$pass,$email);
        $thongbao="Đăng kí thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận và đặt hàng";
      }
      include "view/taikhoan/dangki.php";
      break;
    case 'dangnhap':
        if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
          $tentk=$_POST['tentk'];
          $pass=$_POST['pass'];
          $checktk=check_tentk($tentk,$pass);
          if(is_array($checktk)){
            $_SESSION['tentk']=$checktk;
            // $thongbao="Đăng nhập thành công.";
            header('Location: index.php');
          }else{
            $thongbao="Tài khoản không tồn tại!";
          }
        }
    case 'edit_taikhoan':
          if((isset($_POST['capnhat']))&&($_POST['capnhat'])){
            $tentk=$_POST['tentk'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $diachi=$_POST['diachi'];
            $sdt=$_POST['sdt'];
            $id=$_POST['id'];
            update_taikhoan($id,$tentk,$pass,$email,$diachi,$sdt);
            $_SESSION['tentk']=check_tentk($tentk,$pass);
            header('Location: index.php?act=edit_taikhoan');
          }
        include "view/taikhoan/edit_taikhoan.php";
        break; 
    case 'quenmk':
          if((isset($_POST['guiemail']))&&($_POST['guiemail'])){
            $email=$_POST['email'];
            $checkemail= check_email($email);
           if(is_array( $checkemail)){
            $thongbao="Mật khẩu của bạn là:". $checkemail['pass'];
           }else{
            $thongbao="Email này không tồn tại!";
           } 
          }
        include "view/taikhoan/quenmk.php";
        break;  
    case 'thoat':
       session_unset();
       header('Location: index.php');
       include "view/gioithieu.php";
       break;             
    case 'gioithieu':
       include "view/gioithieu.php";
       break;
    case 'lienhe':
       include "view/lienhe.php";
       break;
    case 'addtocart'   :
      if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
          $id=$_POST['id'];
          $tensp=$_POST['tensp'];
          $image=$_POST['image'];
          $gia=$_POST['gia'];
          if(isset($_POST['soluong']) && $_POST['soluong']>0 ){
            $sl=$_POST['soluong'];
          }else{
            $sl=1;
          }
          $tt = $sl * (int)$gia;
          $fg=0;
          $i=0;
          foreach ($_SESSION['giohang'] as $item) {
            if($item[1]==$tensp){
              $slnew=$sl+$item[4];
              $_SESSION['giohang'][$i][4]= $slnew;
              $fg=1;
              break;
            }
            $i++;
          }
          if($fg==0){
            $item=[$id,$tensp,$image,$gia,$sl,$tt];
            array_push($_SESSION['giohang'],$item);
          }
        //  header('Location: index.php?act=viewcart');
      }
       include "view/cart/viewcart.php";
       break;
      
    case 'delcart':
      if(isset($_GET['idcart'])){
        array_splice($_SESSION['giohang'],$_GET['idcart'],1);
      }else{
        $_SESSION['giohang']=[];
      }
      header('Location: index.php?act=viewcart');
      // include "view/cart/viewcart.php";
      break; 
    case 'viewcart'  :
      include "view/cart/viewcart.php";
      break;
    case 'bill'  :
      include "view/cart/bill.php";
      break; 
    case 'billconfirm'  :
      if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
        if(isset($_SESSION['tentk'])) $idtk=$_SESSION['tentk']['id'];
        else $id=0;
        $tentk=$_POST['tentk'];
        $diachi=$_POST['diachi'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $pttt=$_POST['pttt'];
        $ngaydathang= date('h:i:sa  d/m/Y');
        $tongdonhang= tongdonhang();
        $idbill=insert_bill($idtk,$tentk,$diachi,$sdt,$email,$pttt,$ngaydathang,$tongdonhang);
        foreach ($_SESSION['giohang'] as $cart) {
          insert_cart($_SESSION['tentk']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
        }
        $_SESSION['cart']=[];
      }
      $bill=loadone_bill($idbill);
      $billct=loadall_cart($idbill);
      include "view/cart/billconfirm.php";
      break; 
    case 'mybill'  :
        $listbill=loadall_bill($_SESSION['tentk']['id']);
        include "view/cart/mybill.php";
        break; 
    default:
    include "view/home.php";
        break;
   }
}else{
    include "view/home.php";
   }

  include "view/footer.php";

?>