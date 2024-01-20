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

          <div class=" mb">
            <?php
                extract($onesp);
            ?>
        <div class="container" id="product">
            
            <?php
                $anhurl = './uploads/' . $img;
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
                <p><strong>Tên người bán</strong><?=$ten_nb?></p>
                <p><strong>Thông tin liên hệ</strong> <?=$sdt?></p>
                <p><strong>Mô tả:</strong><?=$mota?></p>
            </div>
            <?php if ($trangthai == 0) {  ?>
            <div class="mb" id="tuchoi"></div>
            <script defer>
                    // $(document).ready(function(){
                    //     $("#tuchoi").load("view/chitiet/tuchoi.php", {id_sp: <?=$id?>});

                    // });
                    document.addEventListener("DOMContentLoaded", function(){
                        $("#tuchoi").load("view/chitiet/tuchoi.php", {id_sp: <?=$id?>});
                    });
                </script>
            <?php    }?>
                      

        
        


      </div>
      
      
        
    </div>
</div>