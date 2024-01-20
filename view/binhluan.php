<?php  
    session_start(); 
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $id_sp=$_REQUEST['id_sp'];
    // $id_user=$_SESSION['taikhoan_user']['id'];;
    $dsbl= loadall_bl($id_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="article-comment-box">
            <div class="comment-title">
                <h5>BÌNH LUẬN</h5>
            </div>
            <div class="single-comment-box fix">
                    <?php 
                            // echo "binh luan o day" .$id_sp
                            foreach ($dsbl as $bl){
                                extract($bl);
                                echo'<div class="comment-desc">
                                <div class="comment-name">
                                    <h6>'.$taikhoan_user.'</h6> <p>'.$ngaybinhluan.'</p>

                                </div>
                                
                                <div class="comment-content">
                                    <p>'.$noidung.' </p>
                                </div>
                                
                            </div> ';                               
                            }
                        ?>
                
            
            
 </div>
        <div class="comment-form">
            <div class="comment-title">
                <h5>ĐỂ LẠI BÌNH LUẬN</h5>
            </div>
            <div class="comment-form-box">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    
                    <div class="form-bottom">
                        <input type="text" name="noidung">
                        <input type="hidden" name="id_sp" value="<?=$id_sp?>">

                    </div>
                    <div class="submit-form">
                    <?php 
                        if(isset($_SESSION['taikhoan_user'])){
                            extract($_SESSION['taikhoan_user'])                                       
                            ?>
                        <input type="submit" name="guibinhluan" value="Gửi bình luận" >

                        <?php 
                        }else{  
                        ?>   
                        ĐĂNG NHẬP ĐỂ BÌNH LUẬN
                                     
                        <?php } ?>
                        <!-- <input type="submit" name="guibinhluan" value="Gửi bình luận"> -->
                    </div>
                </form>
            </div>
        </div>
        <?php 
              if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $id_sp=$_POST['id_sp'];
                // $taikhoan_user=$_SESSION['taikhoan_user']['id'];
                $taikhoan_user=$_SESSION['taikhoan_user']['taikhoan_user'];
                $ngaybinhluan=date('d/m/Y');
                insert_bl($noidung,$taikhoan_user,$id_sp,$ngaybinhluan);
                header("location:" .$_SERVER['HTTP_REFERER']);
                // echo '<script>window.location.href = "index.php";</script>';

                }             
        ?>
</div>
</body>
</html>