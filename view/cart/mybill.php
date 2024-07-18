
<div class="row mb10 fromdanhsachloai">
<div class="row mb">
   <div class="boxtieude">Đơn hàng của bạn</div>
      <div class=" row boxcontent">  
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Số lượng đặt hàng</th>
                <th>Tổng giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
            </tr>
            <?php
            if(is_array($listbill)){
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ttdh=get_ttdh($bill['billstatus']);
                    $countsp=loadall_cart_count($bill['id']);
                    echo '<tr>
                            <td>SP-'.$bill['id'].'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                    </tr>';
                }
            }
            ?>
        </table>
         
    
       </div>
</div>
</div>
