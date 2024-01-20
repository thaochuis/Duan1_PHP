<!-- ARTICLE -->
<div class ="content-wrapper">
<article>
<h5 class="alert alert-success mt-4">Danh sách tin tức</h5>
    <table class="table mt-4 mb-4">
        <thead class="table-success">
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listdm as $dm) {
                extract($dm);
                $editdm = "./index.php?act=editdm_tt&id=" . $id;
                $deletedm = "./index.php?act=deletedm_tt&id=" . $id;
                $anhurl = '../uploads/' . $img;
                if(is_file($anhurl)) {
                    $img = "<img src='".$anhurl."' alt= 'Ảnh sản phẩm' style='width: 80px; height: 80px; border: 1px solid #3b8dc4 '/>";
                    } else {
                      $img = "Không có ảnh !";
                    }
                echo '<tr>
        <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
        <td class="pb-3 pt-3">' . $id . '</td>
        <td class="pb-3 pt-3">' . $tendanhmuc_tt . '</td>
        <td class="pb-3 pt-3">' . $img . '</td>
        <td class="td-opt pb-3 pt-3">
        <a href="' . $editdm . '" class="btn btn-success">Sửa</a>
        <a href="javascript:void(0);" onclick="confirmDelete(' . $id . ')" class="btn btn-danger">Xóa</a>
</td>
</tr>';
            }

            ?>
        </tbody>
    </table>
    <div class="wrap-btn" style="display: flex; justify-content: space-between">
        <div class="form-group pb-4">
        <input type="submit" class="btn btn-success" value="Chọn tất cả">
            <input type="submit" class="btn btn-warning" name="btn_clear" value="Bỏ chọn tất cả">
            <input type="submit" class="btn btn-danger" name="btn_delete" value="Xóa các mục đã chọn">
            <a href="./index.php?act=adddm_tt" name="btn_add" class="btn btn-primary">Nhập thêm</a>
        </div>
    </div>
</article>
</div>
<script>
function confirmDelete(id) {
    var result = confirm("Bạn có muốn xóa danh mục này không này không?");
    if (result) {
        // Nếu người dùng nhấn "OK", chuyển hướng đến trang xóa sản phẩm
        window.location.href = './index.php?act=deletedm_tt&id=' + id;
        alert("Xóa thành công");
    } else {
        // Nếu người dùng nhấn "Cancel", không thực hiện hành động gì cả
        // Bạn có thể thêm bất kỳ hành động bổ sung nào ở đây nếu cần
    }
}
</script>