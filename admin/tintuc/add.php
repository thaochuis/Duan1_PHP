 <!-- ARTICLE -->
 <div class ="content-wrapper">
 <article class="mt-4">
 <h5 class="alert alert-success">Thêm mới tin tức</h5>
   <form class="form-insert" action="./index.php?act=addtt" method="post" enctype="multipart/form-data" id="form-insert">
       <!-- form1 -->
       <div class="form1 mt-4">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;" required>Danh mục</label>
           <select name="iddm_tt" class="form-select" aria-label="Default select example">
            <option value="0">Chọn danh mục</option>
        <?php 
        foreach($listdm as $dm ) { 
          extract($dm);
          echo '<option value='.$id.'>'.$tendanhmuc_tt.'</option>';
        }
        ?>
       </select>
         </div>
       <!-- form-2 -->
       <div class="form1 ">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Nội dung tin tức</label>
           <input type="text" class="form-control" name="tentt" required/>
         </div>
         <div class="form1 ">
       </div>
       </div>
       <!-- form-3-->
       <div>
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;" required>Hình ảnh</label>
           <div class="border" style="border-radius: 8px; padding: 6px">
             <div class="form-group">
               <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anhtt"/>
             </div>
           </div>
         </div>
     </div>
     <div class="mb-3 mt-3">
     <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Nội dung ngắn</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="demo" required></textarea>
   </div>
  
   <div class="mb-3 mt-3">
     <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">nội dung</label>
     <textarea name="noidung" id="noidung" cols="30" rows="10" required>Nhập ở đây</textarea>  
     </div>
   <div class="form-group mb-2">
            <input type="submit" name="btn_add" class="btn btn-success" value="Thêm mới" onclick="return kiemTraDuLieu()">
            <input type="reset" name="btn_retype"  class="btn btn-danger" value="Nhập lại">
            <a href="./index.php?act=listtt" name="btn_list" class="btn btn-primary">Danh sách</a>
          </div>
          </form>
   <?php 
         if(isset($notice) && $notice > 0) { 
          echo $notice;
         }
         ?>
 </article>
 </div>
 <!-- ... -->
<script>
function kiemTraDuLieu() {
    var tenttValue = document.forms["form-insert"]["tentt"].value;
    var demoValue = document.forms["form-insert"]["demo"].value;
    var anhttValue = document.forms["form-insert"]["anhtt"].value;
    
    if (tenttValue == "" || demoValue == "" || anhttValue == "") {
        alert("Vui lòng điền đầy đủ thông tin cho Mô tả, Tên người bán và Số điện thoại trước khi thêm mới!");
        return false;
    } else {
        var xacNhan = confirm("Bạn có muốn thêm mới không?");
        if (xacNhan) {
            // Nếu người dùng nhấn OK, tiếp tục submit form
            document.forms["form-insert"].submit();
        } else {
            // Nếu người dùng nhấn Cancel, hủy bỏ việc submit form
            return false;
        }
    }
}
</script>

