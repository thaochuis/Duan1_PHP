 <!-- ARTICLE -->

 <?php
  if (is_array($sp)) {
    extract($sp);
  }
  $anhurl = "../uploads/" . $img;
  if (is_file($anhurl)) {
    $img = "<img src='" . $anhurl . "' alt= 'Ảnh sản phẩm' style='width: 80px; height: 80px; border: 1px solid #3b8dc4 '/>";
  } else {
    $img = "Không có ảnh !";
  }
?>
 <article class="mt-4">
   <h5 class="alert alert-success">Cập nhật sản phẩm</h5>
   <form class="form-insert" action="./index.php?act=duyet" method="post" enctype="multipart/form-data">
     <!-- form1 -->
       <!-- form-2 -->
       <div class="form1 ">
         <div class="mb-3">
           <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Tên sản phẩm</label>
           <input type="text" class="form-control" name="tensp" value="<?= $tensp ?>" />
         </div>
       </div>
       <!-- form-3-->
       <div>
         <label class="form-label" style="font-weight: bold; text-transform: uppercase;">Hình ảnh</label>
         <div class="border" style="border-radius: 8px; padding: 6px">
           <div class="form-group">
             <input type="file" class="form-control-file" style="font-size: 13px; margin-left: 10px;" name="anhsp" />
             <?= $img ?>
           </div>
         </div>
       </div>

     </div>
     <div class="mb-3 mt-3">
       <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">duyệt</label>
       <textarea name="duyet" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $duyet ?></textarea>
     </div>

     <div class="form-group pb-4">
       <input type="hidden" name="id" value="<?= $sp['id'] ?>">
       <input type="submit" name="btn_update" class="btn btn-success" value="Cập nhật">
       <input type="reset" name="btn_retype" class="btn btn-danger" value="Nhập lại">
       <a href="./index.php?act=listsp" name="btn_list" class="btn btn-primary">Danh sách</a>

     </div>
     <?php
      if (isset($notice) && $notice > 0) {
        echo $notice;
      }
      ?>
   </form>
 </article>