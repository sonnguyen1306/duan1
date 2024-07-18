<div class="row mb ">
<div class="boxtrai">
    <div class="row mb"> 
      <div class="boxtieude">Đăng kí thành viên</div>
           <div class=" row boxcontent  ">
                  <form action="index.php?act=dangki" method="post">
                    <div class="kp">Email<br><input type="email" name="email" ></div>
                    <div class="kp">Tên đăng nhập<br><input type="text" name="tentk" ></div>
                    <div class="kp">Mật khẩu<br><input type="password" name="pass" ></div>
                   
                   <div class="kl">
                     <input type="submit" value="Đăng kí" name="dangki">
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