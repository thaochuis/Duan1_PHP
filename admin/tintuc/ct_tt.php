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
 <h5 class="alert alert-success">Chi tiết tin tức  </h5>


          <div class=" mb">
            <?php  
                extract($onett);
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
                <h2><?=	$tieude?></h2>
                <p><strong>Mã Sản Phẩm:</strong><?=$id?></p>
                <p><strong>	ngay dang</strong> <?=$ngaydang?></p>
                <p><strong>Mô tả:</strong><?=$noidung?></p>
                <form action="./index.php?act=updatetrangthaitt" method="post" onsubmit="return confirm('Bạn có muốn duyệt sản phẩm không?');">
                <input type="hidden" value="<?=$id?>" name="updatetrangthaitt">
                <input type="submit" name="btn_update" class="btn btn-success" value="Duyet">
                </form>
            </div>
            <div class="form-group pb-4">
                <a href="./index.php?act=listtt" class="btn btn-primary">Quay lại</a>
    </div>  
        </div>



      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script>
          $(document).ready(function(){
              
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
          });
          
      </script>

      <div class="  mb" id="binhluan">
        
    </div>
</div>
