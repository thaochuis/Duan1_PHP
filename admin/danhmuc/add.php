<!-- ARTICLE -->
<div class ="content-wrapper">
<article class="mt-4 mb-5" style="padding-bottom: 200px;">
<h5 class="alert alert-success">Thêm mới danh mục</h5>
       <form action="./index.php?act=adddm" method="post" enctype="multipart/form-data" id="form-insert">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label " style="font-weight: bold;">Mã loại</label>
            <input type="text" class="form-control w-50 bg-light" name="maloai" id="formGroupExampleInput" placeholder="auto number" disabled>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Tên loại</label>
            <input type="text" name="tenloai" class="form-control w-50" required >
          </div>

          <div>
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;" required>Hình ảnh</label>
           <div class="border" style="border-radius: 8px; padding: 6px">
             <div class="form-group">
               <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anh"/>
             </div>
           </div>
         </div>
        </div>
        <div class ="content-wrapper">
          <div class="form-group">
            <input type="submit" name="btn_add" class="btn btn-success" value="Thêm mới" onclick="return kiemTraDuLieu()">
            <input type="reset" name="btn_retype"  class="btn btn-danger" value="Nhập lại">
            <a href="./index.php?act=listdm" class="btn btn-primary">Danh sách</a>
          </div>
        </div>
          <br>
         <?php 
         if(isset($notice) && $notice > 0) { 
          echo $notice;
         }
         ?>
       
       </form>
      </article>
  </div>
  <script>
function kiemTraDuLieu() {
    var tenloaiValue = document.forms["form-insert"]["tenloai"].value;
    var anhValue = document.forms["form-insert"]["anh"].value;

    if (tenloaiValue == "" || anhValue == "") {
        alert("Vui lòng điền đầy đủ thông tin cho Mô tả, Tên người bán và Số điện thoại trước khi thêm mới!");
        return false;
    }else{
          var xacNhan = confirm("Bạn có muốn thêm mới không?");
        if (xacNhan) {
            // Nếu người dùng nhấn OK, tiếp tục submit form
            document.forms["form-insert"].submit();
            alert("thêm thành công");
        } else {
            // Nếu người dùng nhấn Cancel, hủy bỏ việc submit form
            return false;
        }
    }

  
}
</script>
