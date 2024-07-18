<?php
  session_start();

  include "../../model/pdo.php";
  include "../../model/binhluan.php";
     $idpro=$_REQUEST['idpro'];
     $dsbl=loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .binhluan table{
            width: 90%;
            margin-left: 5%;
        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>
<div class="row mb">
            <div class="boxtieude">Bình luận</div>
            <div class="boxcontent2  binhluan">
                <table>
                  <?php
                    
                      foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>'.$noidung.' </td>';
                        echo '<td>'.$idtk.' </td>';   
                        echo '<td>'.$ngaybinhluan.' </td></tr>'; 
                    }
                    ?> 
                </table>
                   
               
            </div>
            <div class="boxfooter timbox">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <div class="kk"><input type="text" name="noidung" ></div>
                    <div class="kk"><input type="submit" name="guibinhluan" value="Gửi bình luận"></div>
                </form>
            </div>
                 <?php
                     if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                        $noidung=$_POST['noidung'];
                        $idpro=$_POST['idpro'];
                        $idtk=$_SESSION['tentk']['id'];
                        $ngaybinhluan= date('h:i:sa  d/m/Y');
                        insert_binhluan($noidung,$idtk,$idpro,$ngaybinhluan);
                        header("Location:".$_SERVER['HTTP_REFERER']);

                     }   
                 ?>
           </div>
</body>
</html>