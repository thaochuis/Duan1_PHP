 <!-- ARTICLE -->
 <div class="leave-message">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="contact-form-inner">
                <div class="contact-form-title">
 <div class ="content-wrapper">
 <article class="mt-4">
 <h5 class="alert alert-success">Thêm mới sản phẩm</h5>
   <form class="form-insert" action="./index.php?act=addsp" method="post" enctype="multipart/form-data" id="form-insert">
       <!-- form1 -->
       <div class="form1 mt-4">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Danh mục</label>
           <select name="iddm" class="form-select" aria-label="Default select example">
            <option value="0">Chọn danh mục</option>
        <?php 
        foreach($listdm as $dm ) { 
          extract($dm);
          echo '<option value='.$id.'>'.$tendanhmuc_sp.'</option>';
        }
        ?>
       </select>
         </div>
       <!-- form-2 -->
       <div class="form1 ">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Tên sản phẩm</label>
           <input type="text" class="form-control" name="tensp"/>
         </div>
         <div class="form1 ">
      <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Giá</label>
           <input type="text" class="form-control" name="giasp"/>
         </div>
       </div>
       </div>
       <!-- form-3-->
       <div>
    <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Hình ảnh</label>
    <div class="border" style="border-radius: 8px; padding: 6px">
        <div class="form-group">
            <!-- Thêm thuộc tính multiple vào input để hỗ trợ chọn nhiều file -->
            <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anhsp[]" multiple accept="image/*" />
        </div>
    </div>
</div>

   <div class="mb-3 mt-3">
     <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Mô tả</label>
     <textarea name="mota" id="noidung" cols="30" rows="10" placeholder="nhập ở đây"></textarea>
   </div>
   <div class="mb-3 mt-3">
     <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Tên người bán</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ten_nb"></textarea>
   </div>
   <div class="mb-3 mt-3">
     <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">số điện thoại</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sdt"></textarea>
   </div>
   <div class="form-group mb-2">
   <input type="submit" name="btn_add" class="btn btn-success" value="Thêm mới" onclick="return kiemTraDuLieu()">
            <input type="reset" name="btn_retype"  class="btn btn-danger" value="Nhập lại">
          </div>
          </form>
   <?php 
         if(isset($notice) && $notice > 0) { 
          echo $notice;
         }
         ?>
 </article>
 </div>
 <script>
function kiemTraDuLieu() {
    var tenspValue = document.forms["form-insert"]["tensp"].value;
    var giaspValue = document.forms["form-insert"]["giasp"].value;
    var ten_nbValue = document.forms["form-insert"]["ten_nb"].value;
    var sdtValue = document.forms["form-insert"]["sdt"].value;

    if (tenspValue == "" || ten_nbValue == "" || sdtValue == "" || giaspValue == "") {
        alert("Vui lòng điền đầy đủ thông tin cho Mô tả, Tên người bán và Số điện thoại trước khi thêm mới!");
        return false;
    }else{
          var xacNhan = confirm("Bạn có muốn thêm mới không?");
        if (xacNhan) {
           
            document.forms["form-insert"].submit();
        } else {
            
            return false;
        }
    }

  
}
</script>
</div>
</div>

</div>
</div>
</div>
