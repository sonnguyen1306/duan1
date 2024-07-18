<div class="row mb10 fromdanhsachloai">
    <h2>Thống kê danh mục theo sản phẩm</h2>
            <table>
                <tr>
                    
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                    
                </tr>
                <?php
                 foreach ($listthongke as $thongke) {
                    extract($thongke);
                    
                    echo '<tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxgia.'</td>
                    <td>'.$mingia.'</td>
                    <td>'.$avggia.'</td>
                </tr>';
                 }
                ?>
               
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
          </div>

<div class="row mb10 fromdanhsachloai">
                <h2>Thống kê đơn hàng</h2>
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng </th>
                    <th>Giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
               <?php
               foreach ($listbill as $bill) {
                extract($bill);
                $kh=$bill["billname"].'
                <br> '.$bill["billemail"].'
                <br> '.$bill["billdiachi"].'
                <br> '.$bill["billsdt"];
                $ttdh=get_ttdh($bill["billstatus"]);
                $countsp=loadall_cart_count($bill['id']);
                echo '<tr>
                        <td>SP-'.$bill['id'].'</td> 
                        <td>'.$kh.'</td> 
                        <td>'.$countsp.'</td>   
                        <td><strong>'.$bill['total'].'</strong>VND</td> 
                        <td>'. $ttdh.'</td> 
                        <td>'.$bill['ngaydathang'].'</td> 
                        <td> <input type="button" value="Sua"> <input type="button" value="xoa"></td> 
                </tr>';
               }
               ?>
            </table>
</div>         