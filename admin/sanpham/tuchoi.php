<?php  
    session_start(); 
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $id_sp=$_REQUEST['id_sp'];
    // $id_user=$_SESSION['taikhoan_user']['id'];;
    $dstc= loadall_tc($id_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
         font-family: Arial, sans-serif;
}

.article-comment-box {
    max-width: 600px;
    margin: 20px auto;
}

.comment-title {
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}

.single-comment-box {
    margin-top: 20px;
}

.comment-desc {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.comment-content {
    color: #333;
}

.comment-form {
    margin-top: 20px;
}

.comment-form-box {
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
}

.comment-form-box input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

.submit-form input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.submit-form input[type="submit"]:hover {
    background-color: #45a049;}
    </style>
</head>
<body>
    

<div class="article-comment-box">
            <div class="comment-title">
            <h5>Lí do từ chối</h5>
            </div>
            <div class="single-comment-box fix">
                    <?php 
                            foreach ($dstc as $tc){
                                extract($tc);
                                echo'<div class="comment-desc">
                                
                                
                                <div class="comment-content">
                                    <p>'.$noidung.' </p>
                                </div>
                                
                            </div> ';                               
                            }
                        ?>
                
            
            
 </div>
        <div class="comment-form">
            <div class="comment-title">
            </div>
            <div class="comment-form-box">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    
                    <div class="form-bottom">
                        <input type="text" name="noidung">
                        <input type="hidden" name="id_sp" value="<?=$id_sp?>">

                    </div>
                    <div class="submit-form">
                    
                        <input type="submit" name="guituchoi" value="Gửi lý do" >

                        
                        <!-- <input type="submit" name="guibinhluan" value="Gửi bình luận"> -->
                    </div>
                </form>
            </div>
        </div>
        <?php 
              if(isset($_POST['guituchoi'])&&($_POST['guituchoi'])){
                $noidung=$_POST['noidung'];
                $id_sp=$_POST['id_sp'];
                // $taikhoan_user=$_SESSION['taikhoan_user']['id'];
                // $taikhoan_user=$_SESSION['taikhoan_user']['taikhoan_user'];
                insert_tc($noidung,$id_sp);
                header("location:" .$_SERVER['HTTP_REFERER']);
                // echo '<script>window.location.href = "index.php";</script>';

                }             
        ?>
</div>
</body>
</html>