<div class="row">
            <div class="row fromtitle"><h1>Thêm mới loại hàng</h1></div>
            <div class="row fromcontent">
               <form action="index.php?act=adddm" method="post">
                <div class="row mb10">
                   Mã loại
                   <input type="text" name="maloai" disabled>
                </div>
                 <div class="row mb10">
                    Tên loại
                    <input type="text" name="tenloai" >
                 </div>
                 <div class="row mb10">
                   <input type="submit" name="themmoi" value="Thêm mới">
                   <input type="reset" value="Nhập lại">
                   <a href="index.php?act=dsdm"><input type="button" value="Danh sách"></a>

                 </div>
                 <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                 ?>
                 
               </form>
            </div>
        </div>
    </div>