<div class="row mb ">
      <div class="boxtrai">
      <?php
      if(isset($bill) && (is_array($bill))){
        extract($bill);
      }
      ?>
      <div class="row mb">
   <div class="boxtieude">Cảm ơn quý khách đã đặt hàng</div>
   <div class=" row boxcontent"> 
         <h2>Thông tin đơn hàng</h2><br>
         <li>Mã đơn hàng : SP-<?=$bill['id'];?></li> 
         <li>Ngày đặt hàng : <?=$bill['ngaydathang'];?></li>
         <li>Phương thức thanh toán : <?=$bill['billpttt'];?></li> 
         <li>Tổng đơn hàng : <?=$bill['total'];?></li>
   </div>
   
</div>
<div class="row mb">
     <div class="boxtieude">THÔNG TIN ĐẶT HÀNG</div>
      <div class=" row boxcontent">      
        <table>
           <tr>
            <td>Người đặt hàng:</td>
            <td><?=$bill['billname'];?></td>
           </tr>
           <tr>
            <td>Địa chỉ:</td>
            <td><?=$bill['billdiachi'];?></td>
           </tr>
           <tr>
            <td>Email:</td>
            <td><?=$bill['billemail'];?></td>
           </tr>
           <tr>
            <td>Điện thoại:</td>
            <td><?=$bill['billsdt'];?></td>
           </tr>
        </table>  

       </div>
</div>
<!-- <div class="row mb10 fromdanhsachloai">
     <div class="boxtieude">CHI TIẾT GIỎ HÀNG</div>
       <div class=" row boxcontent"> 
        <table>
           <?php
              bill_chitiet($billct);
           ?>
        </table>             
     </div>
</div> -->
<div class="row mb10 fromdanhsachloai">
     <div class="boxtieude">THÔNG TIN GIỎ HÀNG</div>
       <div class=" row boxcontent"> 
        <table>
        <?php
              bill_chitiet($billct);
           ?>
          
        </table>             
     </div>
</div>
<div>
<!-- <div class="row kp">
    <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
</div> -->
</div>
      </div>
      <div class="boxphai">
      <?php include "view/boxright.php"; ?>
      </div>
    </div>
