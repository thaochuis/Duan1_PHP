<!-- ARTICLE -->
<div class ="content-wrapper">
<article >
<h5 class="alert alert-success mt-4">Danh sách nhân viên</h5>
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>
                <th>Mã nv</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>mật khẩu</th>
                <th>Điện thoại</th>
                <th>địa chỉ</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
            <?php
        foreach ($listtk as $tk) {
            extract($tk);
            $xoatk = "index.php?act=xoatk&id=" . $id;

         if ($quyen == 2) {
        echo '<tr>
                <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
                <td class="pb-3 pt-3">' . $id . '</td>
                <td class="pb-3 pt-3">' . $taikhoan . '</td>
                <td class="pb-3 pt-3">' . $email . '</td>
                <td class="pb-3 pt-3">' . $matkhau . '</td>
                <td class="pb-3 pt-3">' . $sdt . '</td>
                <td class="pb-3 pt-3">' . $diachi . '</td>
                <td class="td-opt pb-3 pt-3">
                <a href="javascript:void(0);" onclick="confirmDelete(' . $id . ')" class="btn btn-danger">Xóa</a>
                </td>
              </tr>';
    }
}
?>

            </tbody>
          </table>
          <div class="wrap-btn" style="display: flex; justify-content: space-between">
          <div class="form-group pb-4">
            <button class="btn btn-success" name="">Chọn tất cả</button>
            <button class="btn btn-warning" name="btn_clear">Bỏ chọn tất cả</button>
            <button class="btn btn-danger" name="btn_delete">Xóa các mục đã chọn</button>
            <a href="../index.php?act=dangkynv" name="btn_add" class="btn btn-primary">Nhập thêm</a>
          </div>
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item " aria-current="page">
                <span class="page-link">2</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        
      </article>
      </div>

      <script>
function confirmDelete(id) {
    var result = confirm("Bạn có muốn xóa tài khoản này không?");
    if (result) {
        // Nếu người dùng nhấn "OK", chuyển hướng đến trang xóa sản phẩm
        window.location.href = 'index.php?act=xoatk&id=' + id;
    } else {
        // Nếu người dùng nhấn "Cancel", không thực hiện hành động gì cả
        // Bạn có thể thêm bất kỳ hành động bổ sung nào ở đây nếu cần
    }
}
</script>