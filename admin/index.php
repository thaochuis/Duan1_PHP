<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/lienhe.php";
include "../model/sanpham.php";
include "../model/tintuc.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php";


//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // CONTROLLER DANH MỤC SẢN PHẨM
        case "adddm":
            if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                $tenloai = $_POST['tenloai'];
                $anh = $_FILES['anh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                insert_dm($tenloai,$anh);
                $notice = "Thêm thành công!";
            }
            include "danhmuc/add.php";
            break;
        case "listdm":
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
        case "deletedm":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                delete_dm($_GET['id']);
            }
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
        case "editdm":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $dm = loadone_dm($id);
            }
            include "danhmuc/update.php";
            break;
        case "updatedm":
            if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $anh=$_FILES['anh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                
                update_dm($id,$tenloai,$anh);
                $notice = "Thêm thành công!";
            }
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
            // CONTROLLER SẢN PHẨM
            case "addsp":
                if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $sdt = $_POST['sdt'];
                    if (!empty($_FILES['anhsp']['name'][0])) {
                        foreach ($_FILES['anhsp']['name'] as $key => $anhspName) {
                            $target_dir = "../uploads/";
                            $target_file = $target_dir . basename($anhspName);                     
                            move_uploaded_file($_FILES['anhsp']['tmp_name'][$key], $target_file);
                        }
                    }
            
                 
                    insert_sp($tensp, $giasp, $anhspName, $mota, $iddm,$sdt);
            
                    $notice = "Thêm thành công!";
                }
            
                
                $listdm = loadall_dm();
            
                
                include "sanpham/add.php";
                break;
            
        case "listsp":
            if (isset($_POST['btn_search']) && ($_POST['btn_search'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdm = loadall_dm();
            $listsp = loadall_sp($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case "xoasp":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                delete_sp($_GET['id']);
            }
            $listdm = loadall_dm();
            $listsp = loadall_sp();
            include "sanpham/list.php";
            break;


        case "xoad":
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    delete_sp($_GET['id']);
                }
                $listdm = loadall_dm();
                $listsp = loadall_sp_d();
                include "sanpham/list_td.php";
                break;
        case "suasp":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $sp = loadone_sp($_GET["id"]);
            }
            $listdm = loadall_dm();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $sdt = $_POST['sdt'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);

                update_sp($id, $tensp, $giasp, $anhsp, $mota, $iddm,$sdt);
            }
            $listdm = loadall_dm();
            $listsp = loadall_sp();
            include "sanpham/list.php";
            break;
        case 'ct_sp':
                
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id=$_GET['id'];
                 $onesp=loadone_sp($id);
                 include "sanpham/ct_sp.php";
                }else{
                 include "sanpham/list.php";
                }
                 break;


        // case 'updatetrangthai':
        //     if(isset($_POST['btn_update']) && ($_POST['btn_update'])){
        //         // $id=$_POST['id'];
        //         $trangthai=$_POST['updatetrangthai'];
        //         // var_dump($trangthai);die();
        //         updatetrangthai($trangthai);
        //         }
        //         echo '<script>window.location.href = "sanpham/ct_sp.php";</script>';    
        //     break;

            case "updatetrangthai":
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                   
                    $trangthai=$_POST['updatetrangthai'];
                    updatetrangthai($trangthai);
                    $notice = "Duyệt thành công!";
                }
                $onesp=loadone_sp($trangthai);
                include "sanpham/ct_sp.php";
                break;
    


            // tin tức

           

            // CONTROLLER TÀI KHOẢN





        case "dskh":
            $listtk = loadall_tk();
            include "taikhoan/list.php";
            break;

         case "dsnv":
            $listtk = loadall_tk_nv();
            include "taikhoan/listnv.php";
            break;
        case "xoatk":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                delete_tk($id);
            }
            $listtk = loadall_tk();
            include "taikhoan/list.php";
            break;
        case "suatk":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $tk =  loadall_tk();
            }
            include "taikhoan/update.php";
            break;
        case 'capnhattk':
            if (isset($_POST['btn_capnhat']) && $_POST['btn_capnhat']) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $matkhau = $_POST['matkhau'];
                update_tk($id, $user, $email, $diachi, $sdt, $matkhau);
            }
            $listtk = loadall_tk();
            include "taikhoan/list.php";
            break;



        case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $email=$_POST['email'];
                $taikhoan=$_POST['taikhoan'];
                $matkhau=$_POST['matkhau'];
                $sdt= $_POST['sdt'];
                insert_tk($email,$taikhoan,$matkhau,$sdt);
                $thongbao="đăng ký thành công";
                }
                include "view/taikhoan/dangky.php";
                break;
        case 'dangkynv':  
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                 $email=$_POST['email'];
                $taikhoan=$_POST['taikhoan'];
                $matkhau=$_POST['matkhau'];
                $sdt= $_POST['sdt'];
                $quyen= $_POST['quyen'];
                insert_tk_nv($email,$taikhoan,$matkhau,$sdt,$quyen);
                $thongbao="đăng ký thành công";
                }
                include "view/taikhoan/dangkynv.php";
                break;
    
            // CONTROLLER BÌNH LUẬN
        case "dsbl":
            $listbl = loadall_bl(0);
            $listsp = loadall_sp();
            include "binhluan/list.php";
            break;
        case "xoabl":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                xoa_bl($id);

            }
            $listbl = loadall_bl($id_sp);
            include "sanpham/ct_sp.php";
            break;



        //Liên hệ
        case "listlh":
            $listlh = loadall_lh();
            include "lienhe/list.php";
            break;


            case "ct_lh":
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $id = $_GET["id"];
                    $dm = loadone_lh($id);
                }
                include "lienhe/update.php";
                break;


                case "xoalh":
                    if (isset($_GET["id"]) && $_GET["id"] > 0) {
                        delete_lh($_GET['id']);
                    }
                    $listlh = loadall_lh();
                    include "lienhe/list.php";
                    break;


         case "updatelh":
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $trangthai = $_POST['trangthai'];
                    $id = $_POST['id'];
                    update_lh($id,$trangthai);
                    $notice = "Thêm thành công!";
                }
                $listlh = loadall_lh();
                include "lienhe/list.php";
                break;


            
        default:
            include "content.php";
            break;
    }
} else {
    include "content.php";
}


include "footer.php";
