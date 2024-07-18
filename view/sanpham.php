<div class="row mb ">
      <div class="boxtrai">
      <div class="row mb">
        
<div class="boxtieude">Sản phẩm <strong><?=$tendm?></strong></div>
<div class=" row boxcontent">
<?php
$i=0;
foreach ($dssp as $ds_sp) {
  extract($ds_sp);
  $hinh= $img_path.$image;
  if(($i==2)||($i==5)||($i==8)||($i==11)){
    $mr="";  
  }else{
    $mr="mr";
  }
  $linksp="index.php?act=sanphamct&idsp=".$id;

  echo '<div class="boxsp '.$mr.'">';
  echo '  <img src="'. $hinh.'" alt="" width="140px" height="140px">';
  echo '  <p>'.$gia.'</p>';
  echo '  <a href="'.$linksp.'">'.$tensp.'</a>';
  echo '  <div class="kk">';

  // Kiểm tra xem session đã được khởi động chưa
  

  // Kiểm tra xem người dùng đã đăng nhập chưa
  if (isset($_SESSION['tentk'])) {
    echo '    <form action="index.php?act=addtocart" method="post">';
    echo '      <input type="hidden" name="id" value="'.$id.'">';
    echo '      <input type="hidden" name="tensp" value="'.$tensp.'">';
    echo '      <input type="hidden" name="image" value="'.$image.'">';
    echo '      <input type="hidden" name="gia" value="'.$gia.'">';
    echo '      <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">';
    echo '    </form>';
  }

  echo '  </div>';
  echo '</div>';
  $i+=1;
}
?>
</div>
</div>
     </div>
      <div class="boxphai">
      <?php include "boxright.php"; ?>
      </div>
    </div>

