<!-- ARTICLE -->
<div class="leave-message">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-12">
      <div class="contact-form-inner">
        <div class="contact-form-title">
<div class ="content-wrapper">
<article>
  <div class="mt-4">
    <h5 class="alert alert-success mt-4">Danh sách bài đăng của bạn</h5>
  </div>
  <div class="filter">
    <form action="./index.php?act=lichsu" method="post">
    </form>
  </div>
  <table class="table mt-4 mb-4">
    <thead class="table-success">
      <tr>
        <th></th>
        <th>Mã bài đăng</th>
        <th>Tên bài đăng</th>
        <th>Giá</th>
        <th>Hình ảnh</th>
        <th>Tên người bán</th>
        <th>Trạng thái</th>
        

        <th>Thao tác</th>
      
      </tr>
    </thead>
    <tbody>
    <?php 
if (is_array($listls)) {
    foreach ($listls as $sp) {
        extract($sp);
        $ct_sp = "index.php?act=ct_sp2&id=" . $id;
        $xoad = "index.php?act=xoad&id=" . $id;
        $suasp = "index.php?act=suasp&id=" . $id;
        $anhurl = './uploads/' . $img;

        if (is_file($anhurl)) {
            $img = "<img src='".$anhurl."' alt= 'Ảnh sản phẩm' style='width: 80px; height: 80px; border: 1px solid #3b8dc4 '/>";
        } else {
            $img = "Không có ảnh !";
        }

        $trangThaiText = ($trangthai == 0) ? 'Chưa duyệt' : 'đã duyệt';

        echo '
        <form action="index.php?act=addcart" method="post">
            <tr>
                <td class="pb-3 pt-3"></td>
                <td class="pb-3 pt-3">' . $id . '</td>
                <td class="pb-3 pt-3">' . $tensp . '</td>
                <td class="pb-3 pt-3">' . $gia . '</td>
                <td class="pb-3 pt-3">' . $img . '</td>
                <td class="pb-3 pt-3">' . $ten_nb . '</td>
                <td class="pb-3 pt-3">' . $trangThaiText . '</td>
                <td class="td-opt pb-3 pt-3 col-sm-2">';
                
        if ($trangthai == 0) {
            echo '
                    <a href="' . $suasp . '" class="btn btn-warning">Sửa</a>';
        }
        
        echo '
                    <a href="' . $ct_sp . '" class="btn btn-success">Chi tiết </a>
                    <a href="javascript:void(0);" onclick="confirmDelete(' . $id . ')" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        </form>';
    }
}
?>

    </tbody>
  </table>
</article>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
function confirmDelete(id) {
    var result = confirm("Bạn có muốn xóa sản phẩm này không?");
    if (result) {
        // Nếu người dùng nhấn "OK", chuyển hướng đến trang xóa sản phẩm
        window.location.href = 'index.php?act=xoasp&id=' + id;
    } else {
        // Nếu người dùng nhấn "Cancel", không thực hiện hành động gì cả
        // Bạn có thể thêm bất kỳ hành động bổ sung nào ở đây nếu cần
    }
}
</script>
