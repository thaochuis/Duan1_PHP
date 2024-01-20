<!-- ARTICLE -->
<!-- <script>
function kiemTraDuLieu() {
    var tenloaiValue = document.forms["form-insert"]["tenloai"].value;
    var anhValue = document.forms["form-insert"]["anh"].value;

    // Kiểm tra xem các trường có bị trống không
    if (tenloaiValue == "" || anhValue == "") {
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
</script> -->
<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class ="content-wrapper">
<article class="mt-4 mb-5" style="padding-bottom: 200px;">
    <h5 class="alert alert-success">Cập nhật danh mục</h5>
    <form action="./index.php?act=updatelh" method="post" enctype="multipart/form-data" id="form-insert">
         <label for="trangthai">Chọn trạng thái:</label >
        <select id="trangthai" name="trangthai" value="<?= $trangthai?>">
            <option value="chưa liên hệ" selected>chưa liên hệ</option>
            <option value="đã liên hệ">đã liên hệ</option>
            <option value="không liên hệ được">không liên hệ được</option>
        </select>
        </div>
        <div class ="content-wrapper">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="btn_update" class="btn btn-success" value="Cập nhật"  onclick="return kiemTraDuLieu()">
            <input type="reset" name="btn_retype" class="btn btn-danger" value="Nhập lại">
            <a href="./index.php?act=listdm" name="btn_list" class="btn btn-primary">Danh sách</a>
        </div>
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