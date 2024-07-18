<div class="row mb10 fromdanhsachloai">
    <h2>Danh sách sản phẩm</h2>
    <form action="index.php?act=dssp" method="post">
        <input type="text" name="kyw">
        <select name="iddanhmuc">
            <option value="0" selected>Tất cả</option>
                   <?php
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           echo '<option value="'.$id.'">'.$tendanhmuc.'</option>';
                        }
                        ?>
                   </select> 
                <input type="submit" name="listok" value="GO">   
        </form>
        <br>
            <table>
                <tr>
                    <th></th>
                    <th>ID sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php
                   
                 foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp= "index.php?act=suasp&id=".$id;
                    $xoasp= "index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$image;
                    if(is_file( $hinhpath)){
                        $hinh="<img src='".$hinhpath."'height='80' >";
                    }else{
                        $hinh="no photo";
                    }
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$tensp.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$gia.'</td>
                    <td>'.$soluong.'</td>
                    <td>'.$luotxem.'</td>
                   <td>
  <a href="'.$suasp.'">
    <button>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
      </svg>
    </button>
  </a>
  <a href="'.$xoasp.'">
    <button>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 6h18"></path>
        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
      </svg>
    </button>
  </a>
</td>
                </tr>';
                 }
                ?>
               
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>

          </div>