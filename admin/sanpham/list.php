<!-- ARTICLE -->
<div class ="content-wrapper">

<article>
  <div class="mt-4">
    <h5 class="alert alert-success mt-4">Danh sách bài đăng</h5>
  </div>
  <div class="filter">
    <form action="./index.php?act=listsp" method="post">
      <input type="text" name="kyw" style="border: 1px solid #999; border-radius: 3px; outline: none; padding: 2px 0px 2px 10px;">
      <select name="iddm" style="border: 1px solid #999; border-radius: 3px; padding: 3px 0px; font-size: 15px; color: #333;">
        <option value="0" selected>Tất cả</option>
        <?php 
        foreach($listdm as $dm ) { 
          extract($dm);
          if($iddm == $id) {
            echo '<option value= "'.$id.'" selected>'.$tendanhmuc_sp.'</option>';
          } else { 
            echo '<option value= "'.$id.'">'.$tendanhmuc_sp.'</option>';
          }
        }
        ?>
       </select>
       <input type="submit" value="Tìm kiếm" name="btn_search" style="background-color: #36854f; border: none; font-size: 15px; color: #ffff; width: 70px; height: 30px; border-radius: 3px;">
    </form>
  </div>
  <table class="table mt-4 mb-4">
    <thead class="table-success">
      <tr>
        <th></th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Hình ảnh</th>
        <th>Thao tác</th>
      
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listsp as $sp) {
        extract($sp);
        $suasp = "index.php?act=suasp&id=" . $id;
        $xoasp = "index.php?act=xoasp&id=" . $id;
        $ct_sp = "index.php?act=ct_sp&id=" . $id;
        

        $anhurl = '../uploads/' . $img;
        if (is_file($anhurl)) {
        $img = "<img src='".$anhurl."' alt= 'Ảnh sản phẩm' style='width: 80px; height: 80px; border: 1px solid #3b8dc4 '/>";
        } else {
          $img = "Không có ảnh !";
        }
        echo
        ' <tr>
                <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
                    <td class="pb-3 pt-3">' . $id . '</td>
                    <td class="pb-3 pt-3">' . $tensp . '</td>
                    <td class="pb-3 pt-3">' . $gia . '</td>
                    <td class="pb-3 pt-3">' . $img . '</td>
                    <td class="td-opt pb-3 pt-3 col-sm-2">
                        <a href="' . $ct_sp . '" class="btn btn-success">Chi tiết </a>
                        <a href="' . $suasp . '" class="btn btn-warning">Sửa</a>
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
      <input type="submit" class="btn btn-warning" value="Bỏ chọn tất cả">
      <input type="submit" class="btn btn-danger" value="Xóa các mục đã chọn">
      <a href="./index.php?act=addsp" class="btn btn-primary">Nhập thêm</a>
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
