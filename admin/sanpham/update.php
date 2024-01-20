 <!-- ARTICLE -->
 <div class="leave-message">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-12">
      <div class="contact-form-inner">
        <div class="contact-form-title">
 <script>
function kiemTraDuLieu() {
    var tenspValue = document.forms["form-insert"]["tensp"].value;
    var giaspValue = document.forms["form-insert"]["giasp"].value;
    var ten_nbValue = document.forms["form-insert"]["ten_nb"].value;
    var sdtValue = document.forms["form-insert"]["sdt"].value;

    // Kiểm tra xem các trường có bị trống không
    if (tenspValue == "" || ten_nbValue == "" || sdtValue == "" || giaspValue == "") {
        alert("Vui lòng điền đầy đủ thông tin trước khi cập nhật!");
        return false;
    } else {
       
        var xacNhan = confirm("Bạn có muốn cập nhật không?");
        if (xacNhan) {
           
            document.forms["form-insert"].submit();
        } else {
          
            return false;
        }
    }
}
</script>
 <?php
  if (is_array($sp)) {
    extract($sp);
  }
  $anhurl = "../uploads/" . $img;
  if (is_file($anhurl)) {
    $img = "<img src='" . $anhurl . "' alt= 'Ảnh sản phẩm' style='width: 80px; height: 80px; border: 1px solid #3b8dc4 '/>";
  } else {
    $img = "Không có ảnh !";
  }
?>
<div class ="content-wrapper">
 <article class="mt-4">
   <h5 class="alert alert-success">Cập nhật sản phẩm</h5>
   <form class="form-insert" action="./index.php?act=updatesp" method="post" enctype="multipart/form-data" id="form-insert">
     <!-- form1 -->
     <div class="form1 mt-3">
       <div class="mb-3">
         <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Danh mục</label> <br>
         <select name="iddm" class="form-select" aria-label="Default select example">
           <option value="0" selected>Tất cả</option>
           <?php
            foreach ($listdm as $dm) {
              extract($dm);
              if ($iddm == $id) {
                echo '<option value= "' . $id . '" selected>' . $tendanhmuc_sp . '</option>';
              } else {
                echo '<option value= "' . $id . '">' . $tendanhmuc_sp . '</option>';
              }
            }
            ?>
         </select>
       </div>
       <!-- form-2 -->

       <div class="form1 ">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Tên sản phẩm</label>
           <input type="text" class="form-control" name="tensp" value="<?= $tensp ?>" />
         </div>
         <div class="form1 ">
           <div class="mb-3">
             <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Giá</label>
             <input type="text" class="form-control" name="giasp" value="<?= $gia ?>" />
           </div>
         </div>
       </div>
       <!-- form-3-->
       <div>
         <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Hình ảnh</label>
         <div class="border" style="border-radius: 8px; padding: 6px">
           <div class="form-group">
             <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anhsp" />
             <?= $img ?>
           </div>
         </div>
       </div>

     </div>
     <div class="mb-3 mt-3">
       <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Mô tả</label>
       <textarea name="mota" id="noidung" cols="30" rows="10"><?= $mota ?></textarea>

      </div>

     

     <div class="mb-3 mt-3">
       <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Số điện thoại</label>
       <textarea name="sdt" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $sdt ?></textarea>
     </div>

     <div class="form-group pb-4">
       <input type="hidden" name="id" value="<?= $sp['id'] ?>">
       <input type="submit" name="btn_update" class="btn btn-success" value="Cập nhật" onclick="return kiemTraDuLieu()">
       <input type="reset" name="btn_retype" class="btn btn-danger" value="Nhập lại">
       <a href="./index.php?act=listsp" name="btn_list" class="btn btn-primary">Danh sách</a>

     </div>
     <?php
      if (isset($notice) && $notice > 0) {
        echo $notice;
      }
      ?>
   </form>
 </article>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>