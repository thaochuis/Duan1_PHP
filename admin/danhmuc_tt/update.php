<!-- ARTICLE -->
<script>
function kiemTraDuLieu() {
    var tenloai_ttValue = document.forms["form-insert"]["tenloai_tt"].value;
    var anhttValue = document.forms["form-insert"]["anhtt"].value;

    // Kiểm tra xem các trường có bị trống không
    if (tenloai_ttValue == "" || anhttValue == "") {
        alert("Vui lòng điền đầy đủ thông tin trước khi cập nhật!");
        return false;
    } else {
       
        var xacNhan = confirm("Bạn có muốn cập nhật không?");
        if (xacNhan) {

           
            document.forms["form-insert"].submit();
            alert("Cập nhật thành công");
        } else {
          
            return false;
        }
    }
}
</script>
<?php
if (is_array($dm)) {
    extract($dm);

    $anhurl = "../uploads/" . $img;
  if (is_file($anhurl)) {
    $img = "<img src='" . $anhurl . "' alt= 'Ảnh sản danh mục' style='width: 80px; height: 80px; border: 1px solid #3b8dc4 '/>";
  } else {
    $img = "Không có ảnh !";
  }
}
?>
<div class ="content-wrapper">
<article class="mt-4 mb-5" style="padding-bottom: 200px;">
    <h5 class="alert alert-success">Cập nhật danh mục tin tức</h5>
    <form action="./index.php?act=updatedm_tt" method="post"enctype="multipart/form-data" id="form-insert">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label " style="font-weight: bold;">Mã loại </label>
            <input type="text" class="form-control w-50 bg-light" name="maloai_tt" id="formGroupExampleInput" placeholder="auto number" disabled>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Tên loại</label>
            <input type="text" name="tenloai_tt" class="form-control w-50" id="formGroupExampleInput2" value="<?= $tendanhmuc_tt ?>">
        </div>
        <div>
         <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Hình ảnh</label>
         <div class="border" style="border-radius: 8px; padding: 6px">
           <div class="form-group">
             <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anhtt" />
             <?= $img ?>
           </div>
         </div>
       </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="btn_update" class="btn btn-success" value="Cập nhật"  onclick="return kiemTraDuLieu()">
            <input type="reset" name="btn_retype" class="btn btn-danger" value="Nhập lại">
            <a href="./index.php?act=listdm_tt" name="btn_list" class="btn btn-primary">Danh sách</a>
        </div>
        <br>
        <?php
        if (isset($notice1) && ($notice1 != "")) {
            echo $notice1;
        }
        ?>
    </form>
</article>
</div>