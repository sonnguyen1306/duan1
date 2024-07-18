<?php
    if(is_array($sanpham)){
        extract($sanpham);
        echo "ID sản phẩm: " . $id;
    }
    $hinhpath="../upload/".$image;
    if(is_file( $hinhpath)){
      $hinh="<img src='".$hinhpath."'height='80' >";
  }else{
      $hinh="no photo";
  }
      
?>
    <div class="row">
            <div class="row fromtitle"><h1>Cập nhật loại hàng</h1></div>
            <div class="row fromcontent">
            <form action="index.php?act=updatesp&id=<?=$id?>" method="post" enctype="multipart/form-data" >
                <div class="row mb10">
                <select name="iddanhmuc">
                   <option value="0" selected>Tất cả</option>
                   <?php
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           if($iddanhmuc==$id) $s="selected" ; else $s="";
                           echo '<option value="'.$id.'" '.$s.'>'.$tendanhmuc.'</option>';
                        }
                        ?>
               </select> 
                </div>
                 <div class="row mb10">
                    Tên sản phẩm
                    <input type="text" name="tensp" value="<?=$tensp?>">
                 </div>
                 <div class="row mb10">
                    Giá
                    <input type="text" name="giasp" value="<?=$gia?>" >
                 </div>
                 <div class="row mb10">
                    Hình ảnh
                   <input type="file" name="hinh">
                   <?=$hinh?>
                 </div>
                 <div class="row mb10">
                    Số lượng
                    <input type="text" name="soluong" value="<?=$soluong?>">
                 </div>
                 <br>
                 <div class="row mb10">
                    Mô tả
                    <textarea name="mota" cols="30" rows="10"> <?=$mota?>
                    </textarea>
                 </div>
                 <div class="row mb10">
                  <input type="hidden" name="id" value="<?=$id?>">
                   <input type="submit" name="capnhat" value="Cập nhật">
                   <input type="reset" value="Nhập lại">
                   <a href="index.php?act=dssp"><input type="button" value="Danh sách"></a>

                 </div>
                 <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                 ?>
                 
               </form>
            </div>
        </div>
    </div>