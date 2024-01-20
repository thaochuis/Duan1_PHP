
<div class ="content-wrapper">

<article>
  <div class="mt-4">
    <h5 class="alert alert-success mt-4">Danh sách khách hành liên hệ</h5>
  </div>
  <div class="filter">
    <form action="index.php?act=listlh" method="post">
  <table class="table mt-4 mb-4">
    <thead class="table-success">
      <tr>
        <th></th>
        <th>Mã tin nhắn</th>
        <th>Tên người nhắn</th>
        <th>email</th>
        <th>Số điện thoại</th>
        <th>Nội dung</th>
        <th>trạng thái</th>
        <th>Thao tác</th>
      
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listlh as $lh) {
        extract($lh);
        $xoalh = "index.php?act=xoalh&id=" . $id;
        $ct_lh = "./index.php?act=ct_lh&id=" . $id;
        echo
        ' <tr>
                <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
                    <td class="pb-3 pt-3">' . $id . '</td>
                    <td class="pb-3 pt-3">' . $ten. '</td>
                    <td class="pb-3 pt-3">' . $email. '</td>
                    <td class="pb-3 pt-3">' . $sdt. '</td>
                    <td class="pb-3 pt-3">' . $noidung. '</td>
                    <td class="pb-3 pt-3">' .$trangthai. '</td>
                    <td class="td-opt pb-3 pt-3 col-sm-2">
                        <a href="' . $ct_lh . '" class="btn btn-success">Chọn trạng thái </a>
                        <a href="javascript:void(0);" onclick="confirmDelete(' . $id . ')" class="btn btn-danger">Xóa</a>
                    </td>
               </tr>';
      }

      ?>
    </tbody>
  </table>
</article>
</div>
<script>
function confirmDelete(id) {
    var result = confirm("Bạn có muốn xóa liên hệ này không này không?");
    if (result) {
        // Nếu người dùng nhấn "OK", chuyển hướng đến trang xóa sản phẩm
        window.location.href = 'index.php?act=xoalh&id=' + id;
        alert("Xóa thành công");
    } else {
        // Nếu người dùng nhấn "Cancel", không thực hiện hành động gì cả
        // Bạn có thể thêm bất kỳ hành động bổ sung nào ở đây nếu cần
    }
}
</script>
