<div class="row mb ">
<div class="boxtrai">
    <div class="row mb"> 
      <div class="boxtieude">Quên mật khẩu</div>
           <div class=" row boxcontent  ">
                  <form action="index.php?act=quenmk" method="post">
                    <div class="kp">Email<br><input type="email" name="email" ></div>
                   
                   <div class="kl">
                     <input type="submit" value="Gửi" name="guiemail">
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