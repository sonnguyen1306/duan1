    <?php
    if(is_array($dm)){
        extract($dm);
    }
      
    ?>
    <div class="row">
            <div class="row fromtitle"><h1>Cập nhật loại hàng</h1></div>
            <div class="row fromcontent">
               <form action="index.php?act=updatedm" method="post">
                <div class="row mb10">
                   Mã loại
                   <input type="text" name="maloai" disabled>
                </div>
                 <div class="row mb10">
                    Tên loại
                    <input type="text" name="tenloai" value="<?php if(isset($tendanhmuc)&&($tendanhmuc!="")) echo $tendanhmuc; ?>" >
                 </div>
                 <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                   <input type="submit" name="capnhat" value="Cập nhật">
                   <input type="reset" value="Nhập lại">
                   <a href="index.php?act=dshh"><input type="button" value="Danh sách"></a>
                 </div>
                 <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                 ?>
                 
               </form>
            </div>
        </div>
    </div>