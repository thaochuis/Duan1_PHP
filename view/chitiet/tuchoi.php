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
</head>
<body>
    

<div class="article-comment-box">
            <div class="comment-title">
                <h5>LÍ DO BỊ TỪ CHỐI</h5>
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
        
</div>
</body>
</html>