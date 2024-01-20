 <!-- ARTICLE -->
 <script>
function kiemTraDuLieu() {
    var tenttValue = document.forms["form-insert"]["tentt"].value;
    var ngaydangValue = document.forms["form-insert"]["ngaydang"].value;
    var anhttValue = document.forms["form-insert"]["anhtt"].value;
    var demoValue = document.forms["form-insert"]["demo"].value;

    // Kiểm tra xem các trường có bị trống không
    if (tenttValue == "" || ngaydangValue == "" || anhttValue == "" || demoValue == "") {
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
  if (is_array($tt)) {
      extract($tt);
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
   <h5 class="alert alert-success">Cập nhật tin tức</h5>
   <form class="form-insert" action="./index.php?act=updatett" method="post" enctype="multipart/form-data" id="form-insert">
     <!-- form1 -->
     <div class="form1 mt-3">
       <div class="mb-3">
         <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Danh mục</label> <br>
         <select name="iddm_tt" class="form-select" aria-label="Default select example">
           <option value="0" selected>Tất cả</option>
           <?php
            foreach ($listdm as $dm) {
              extract($dm);
              if ($iddm_tt == $id) {
                echo '<option value= "' . $id . '" selected>' . $tendanhmuc_tt . '</option>';
              } else {
                echo '<option value= "' . $id . '">' . $tendanhmuc_tt . '</option>';
              }
            }
            ?>
         </select>
       </div>
       <!-- form-2 -->

       <div class="form1 ">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Tên sản phẩm</label>
           <input type="text" class="form-control" name="tentt" value="<?= $tieude ?>" />
         </div>
         <div class="form1 ">
           <div class="mb-3">
             <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Ngày đăng</label>
             <input type="date" class="form-control" name="ngaydang" value="<?= $ngaydang ?>" />
           </div>
         </div>
       </div>
       <!-- form-3-->
       <div>
         <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Hình ảnh</label>
         <div class="border" style="border-radius: 8px; padding: 6px">
           <div class="form-group">
             <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anhtt" />
             <?= $img ?>
           </div>
         </div>
       </div>

     </div>
     <div class="mb-3 mt-3">
       <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">nội dung ngắn</label>
       <textarea name="demo" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $demo?></textarea>
     </div>
     <div class="mb-3 mt-3">
       <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">nội dung</label>
       <!-- <textarea name="noidung" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $noidung?></textarea> -->
       <textarea name="noidung" id="noidung" cols="30" rows="10"><?= $noidung?></textarea>  

     </div>

     <div class="form-group pb-4">
       <input type="hidden" name="id" value="<?= $tt['id'] ?>">
       <input type="submit" name="btn_update" class="btn btn-success" value="Cập nhật" onclick="return kiemTraDuLieu()">
       <input type="reset" name="btn_retype" class="btn btn-danger" value="Nhập lại">
       <a href="./index.php?act=listtt" name="btn_list" class="btn btn-primary">Danh sách</a>

     </div>
     <?php
      if (isset($notice) && $notice > 0) {
        echo $notice;
      }
      ?>
   </form>
 </article>

</div>