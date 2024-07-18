<div class="row mb ">
<div class="boxtrai">
    <div class="row mb"> 
      <div class="boxtieude">Cập nhật tài khoản</div>
           <div class=" row boxcontent  ">
            <?php
            if(isset( $_SESSION['tentk'])&&(is_array($_SESSION['tentk']))){
                extract( $_SESSION['tentk']);
            }
            ?>
                  <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="kp">Email<br><input type="email" name="email" value="<?=$email?>"></div>
                    <div class="kp">Tên đăng nhập<br><input type="text" name="tentk"value="<?=$tentk?>" ></div>
                    <div class="kp">Mật khẩu<br><input type="password" name="pass" value="<?=$pass?>"></div>
                    <div class="kp">Địa chỉ<br><input type="text" name="diachi" value="<?=$diachi?>"></div>
                    <div class="kp">Số điện thoại<br><input type="text" name="sdt" value="<?=$sdt?>"></div>
                   <div class="kl">
                     <input type="hidden" name="id" value="<?=$id?>">
                     <input type="submit" value="Cập nhật" name="capnhat">
                     <input type="reset" value="Nhập lại">
                   </div>
                  </form>   
                  <h2 class="thongbao">
                  <?php
                  if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                   }   
                  ?>  
                  </h2>
           </div>
    </div>
    </div>
      <div class="boxphai">
      <?php include "view/boxright.php"; ?>
      </div>
    </div>