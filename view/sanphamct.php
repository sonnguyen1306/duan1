
<div class="row mb ">
      <div class="boxtrai">
      <div class="row mb">
                <?php
                   extract($onesp);
                  
                ?>
  <div class="boxtieude"><strong><?=$tensp?></strong></div>
<div class=" row boxcontent">
<?php 
$image = $img_path . $image;
echo '<div class="row mb spct"><img src="' . $image . '" width="180px" height="180px"></div> ';
echo $gia;
echo "<br>";
echo $mota;
echo "<br>";
echo '<div>
      <div class=" kk ">  
      ';

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['tentk'])) {
    echo '
        <form action="index.php?act=addtocart" method="post">
        <input type="hidden" name="id" value="' . $id . '">
        <input type="hidden" name="tensp" value="' . $tensp . '">
        <input type="hidden" name="image" value="' . $image . '">
        <input type="hidden" name="gia" value="' . $gia . '">
        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
        </form>
    ';
}

echo '
      </div>
      </div>
';
?>
</div>
</div>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
      $(document).ready(function(){
         $("#binhluan").load("view/binhluan/binhluan.php", {idpro: <?=$id?>});
      })
 </script>
<div class="row " id="binhluan">

</div>


<div class="row mb">
<div class="boxtieude">Sản phẩm cùng loại</div>
<div class=" row boxcontent"> 
          <?php
             foreach ($spcl as $sp_cl) {
              extract($sp_cl);
              $linksp="index.php?act=sanphamct&idsp=".$id;
              echo '<li> <a href="'.$linksp.'">'.$tensp.'</a></li> ';
             }
          ?>     
</div>
</div>
      </div>
      <div class="boxphai">
      <?php include "boxright.php"; ?>
      </div>
    </div>