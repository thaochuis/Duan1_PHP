    <head>
        <style>
            .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        #product {
            display: flex;
            margin-top: 20px;
        }

        #product img {
            width: 400px;
            height: 300px;
            margin-right: 20px;
            margin-top: 30px;
        }

        #product-info {
            flex: 1;
            margin-top: 20px;
        }

        #product-info h2 {
            margin-bottom: 10px;
        }

        #product-info p {
            margin: 0 0 10px 0;
        }
        </style>
        
        
    </head>
<div class ="content-wrapper">

 <article class="mt-4">
 <h5 class="alert alert-success">Chi tiết sản phẩm </h5>
   <!-- <form class="form-insert" action="./index.php?act=ct_sp" method="post" enctype="multipart/form-data"> -->


          <div class=" mb">
            <?php
                extract($onesp);
            ?>
        <div class="container" id="product">
            
            <?php
                $anhurl = '../uploads/' . $img;
                if (is_file($anhurl)) {
                echo "<img src='" . $anhurl . "' alt='Ảnh sản phẩm'/>";
                } else {
                echo "Không có ảnh!";
                }
            ?>
            
            <div id="product-info">
                <h2><?=$tensp?></h2>
                <p><strong>Giá:</strong> <?=$gia?></p>
                <p><strong>Mã Sản Phẩm:</strong><?=$id?></p>
                <p><strong>Thông tin liên hệ</strong> <?=$sdt?></p>
                <p><strong>Mô tả:</strong><?=$mota?></p>
                <form action="./index.php?act=updatetrangthai" method="post" onsubmit="return confirm('Bạn có muốn duyệt sản phẩm không?');">
                    <input type="hidden" value="<?=$id?>" name="updatetrangthai">
                <?php if ($trangthai == 0) {  ?>
                <input type="submit" name="btn_update" class="btn btn-success" value="Duyet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#tuchoi").load("sanpham/tuchoi.php", {id_sp: <?=$id?>});

                    });
                </script>
                <div class="  mb" id="tuchoi">
                    <?php }?>

                </form>
            </div>

        </div>
        <?php 
         if(isset($notice) && $notice > 0) { 
          echo $notice;
         }
         ?>



      </div>
      <?php if ($trangthai == 1) {  ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("sanpham/binhluan.php", {id_sp: <?=$id?>});

            });
        </script>

      <div class="  mb" id="binhluan">
        
    </div>
    <?php   }?>
</div>