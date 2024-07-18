

 <div class="row mb ">
      <div class="boxtrai">
        <form action="index.php?act=billconfirm" method="post">
      <div class="row mb">
   <div class="boxtieude">THÔNG TIN ĐẶT HÀNG</div>
   <div class=" row boxcontent"> 
          <table>

          <?php
           if(isset($_SESSION['tentk'])){
            $tentk=$_SESSION['tentk']['tentk'];
            $diachi=$_SESSION['tentk']['diachi'];
            $email=$_SESSION['tentk']['email'];
            $sdt=$_SESSION['tentk']['sdt'];
           }else{
            $tentk="";
            $diachi="";
            $email="";
            $sdt="";
           }
          ?>
            <tr>
                <td>Người đặt hàng</td>
                <td><input type="text" name="tentk" value="<?=$tentk?>" ></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" value="<?=$diachi?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"value="<?=$email?>" ></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" name="sdt" value="<?=$sdt?>"></td>
            </tr>
          </table>
   </div>
</div>
<div class="row mb">
     <div class="boxtieude">PHƯƠNG THỨC THANH TOÁN</div>
      <div class=" row boxcontent">      
        <table>

            <tr>
                <td><input type="radio" value="1" name="pttt" checked>Thanh toán khi nhận hàng</td>
                <td><input type="radio" value="2" name="pttt" >Chuyển khoản ngân hàng</td>
                <td><input type="radio" value="3" name="pttt">Thanh toán online</td>
            </tr>
        </table>  

       </div>
</div>

<div class="row mb10 fromdanhsachloai">
     <div class="boxtieude">THÔNG TIN GIỎ HÀNG</div>
       <div class=" row boxcontent"> 
        <table>
            
            <?php  viewcart(0) ; ?>
        </table>             
     </div>
</div>

<div>
<div class="row kp">
    <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
</div>
</div>
</form>
      </div>
      <div class="boxphai">
      <?php include "view/boxright.php"; ?>
      </div>
    </div>
