
<div class="row mb ">
      <div class="boxtrai">
        <div class="row">
            <div class="boxbanner">
               <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/image/banner1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/image/banner2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/image/banner3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
            </div>
        </div>
        <div class="row">
        <?php
$i=0;
foreach ($spnew as  $sp) {
  extract($sp);
  $linksp="index.php?act=sanphamct&idsp=".$id;
  $hinh= $img_path.$image;
  if(($i==2)||($i==5)||($i==8)||($i==11)){
      $mr="";  
  }else{
      $mr="mr";
  }


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
      <div class="boxphai">
          <?php include "boxright.php"; ?>
      </div>
    </div>