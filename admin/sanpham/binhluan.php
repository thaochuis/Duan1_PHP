<?php  
    session_start(); 
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $id_sp=$_REQUEST['id_sp'];
    $dsbl= loadall_bl($id_sp);
?>
<head>
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .row2 {
        margin: 20px 0;
    }

    .font_title {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f5f5f5;
    }

    input[type="button"] {
        padding: 10px 15px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="button"]:hover {
        background-color: #45a049;
    }
</style>



</head>
<div class="row2">
         <div class="row2 font_title">
          <h1>Danh sách bình luận</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table border="1">
            <tr>
                <th>ID</th>
                <th>Nội dung bình luận</th>
                <th>người dùng</th>
                <th>id sản phẩm</th>
                <th>ngày bình luận</th>
                <th></th>
            </tr>
            <?php   
                foreach ($dsbl as $bl) {
                    extract($bl);
                    $xoabl="index.php?act=xoabl&id=".$id;


                    echo ' <tr>
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$taikhoan_user.'</td>
                    <td>'.$id_sp.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td> <a href="'.$xoabl.'"> <input type="button" value="Xóa"></a></td>
                </tr>';
                }                   
            ?>

           </table>
           </div>
           
          </form>
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