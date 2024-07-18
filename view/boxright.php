
<div class="row mb">
            <div class="boxtieude"><strong>Tài Khoản</strong></div>
            <div class="boxcontent formtaikhoan">
            <?php
              if(isset($_SESSION['tentk'])){
                extract($_SESSION['tentk']);
            ?>
                  <div class="row mb10">
                    Xin chào<br>
                    <?=$tentk?>
                </div>
            <div class="row mb10">
            <li>
                   <a href="index.php?act=mybill">Đơn hàng của tôi</a>
              </li>  
              <li>
                   <a href="index.php?act=quenmk">Quên mật khẩu</a>
              </li>
              <li>
                   <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
              </li>
                <?php if($role==1) {?>
              <li>
                   <a href="admin/index.php">Đăng nhập Admin</a>
              </li>
                    <?php }?>
              <li>
                   <a href="index.php?act=thoat">Thoát</a>
              </li>
            </div>

            <?php
              }else{
            ?>
              <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập<br>
                    <input type="text" name="tentk" >
                </div>
                <div class="row mb10">
                    Mat khau<br>
                <input type="password" name="pass" > 
                </div>
                <div class="row mb10">
                   Yêu cầu bạn đăng nhập để mua hàng!  
                   </div> 
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap" >
                </div>
              </form>
              <li>
                <a href="#">Quen mat khau</a>
             </li>
             <li>
                 <a href="index.php?act=dangki">Dang ki thanh vien</a>
              </li>
            <?php } ?>
            </div>
           </div>
           <div class="row mb">
            <div class="boxtieude"><strong>Danh Mục</strong></div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddanhmuc=".$id;
                        echo '<li>
                        <a href="'.$linkdm.'">'.$tendanhmuc.'</a>
                    </li>';
                    }
                    ?>
                    <!-- <li>
                        <a href="#">Ốp hình in</a>
                    </li>
                    <li>
                        <a href="#">Ốp thiết kế</a>
                    </li>
                    <li>
                        <a href="#">Ốp da</a>
                    </li>
                    <li>
                        <a href="#">Ốp trong suốt</a>
                    </li>
                    <li>
                        <a href="#">Ốp phủ đá</a>
                    </li>
                    <li>
                        <a href="#">Ốp dẻo</a>
                    </li>
                    <li>
                        <a href="#">Ốp meme</a>
                    </li>
                    <li>
                        <a href="#">Loại khác</a>
                    </li> -->
                </ul>
            </div>
            <div class="boxfooter timbox">
                <form action="index.php?act=sanpham" method="post">
                    <div class="kp"><input type="text" name="kyw" ></div>
                    <div class="kl"><input type="submit" name="timkiem" value="Tìm kiếm"></div>
                </form>
            </div>
           </div>
           <div class="row mb">
            <div class="boxtieude"><strong>Các sản phẩm được mua nhiều nhất</strong></div>
            <div class=" row boxcontent">
                <?php
                foreach ($dstop10 as $sp) {
                   extract($sp);
    
                    $image= $img_path.$image;
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                   echo '<div class="row mb10 top10">
                   <img src="'.$image.'" alt="" >
                   <a href="'.$linksp.'">'.$tensp.'</a>
                   </div>';
                }
                ?>

                <!-- <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="" >
                    <a href="#">Op tinh yeu</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="">
                    <a href="#">Op tinh yeu</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="">
                    <a href="#">Op tinh yeu</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="">
                    <a href="#">Op tinh yeu</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="">
                    <a href="#">Op tinh yeu</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="">
                    <a href="#">Op tinh yeu</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/3.jpg" alt="">
                    <a href="#">Op tinh yeu</a>
                </div>
                 -->
            </div>
           </div>