<?php  
    session_start();
    include("model/pdo.php");
    include("model/sanpham.php");
    include("model/danhmuc.php");
    include("view/header.php");
    include("tongquan.php");
    include("model/taikhoan.php");
    include("model/lienhe.php");
    include("model/tintuc.php");
    $spnew= loadall_sp_home();
    $spnew1= loadall_sp_home_4();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {

            case 'lienhe':
                if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                    $ten = $_POST['ten'];
                    $noidung = $_POST['noidung'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    insert_lienhe($ten,$noidung,$email,$sdt);
            
                    $notice = "Cảm ơn bạn đã gửi tin nhắn cho chúng tôi, tin nhắn của bạn sẽ được phản hồi sau ít phút";
                }
            
                
                $lisdtm = loadall_dm();
                include("view/lienhe/lienhe.php");
                break;
            case "sp_dm":
                if((isset($_GET['iddm']))&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    $dssp=loadall_sp("", $iddm);
                    include("view/sp_dm.php");
                        
                }else{
                    include("view/home.php");
    
                }
                   
                    break;


            case "ct_sp":
                if((isset($_GET['id']))&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesp=loadone_sp($id);
                    include("view/ct_sp.php");
                    
                }else{
                    include("view/home.php");

                }
               
                break;



            case "sanpham":
                include("view/sanpham.php");
                break;


            case "lichsu":
                $listls=loadall_sp_nd($_SESSION['taikhoan']['id']);
                include "view\lichsu.php";
                break;


                case 'ct_sp2':
                
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $id=$_GET['id'];
                         $onesp=loadone_sp($id);
                         include "view/chitiet/ct_sp2.php";
                        }else{
                         include "view/lichsu.php";
                        }
                         break;

           
    

            case "trangchu":
                $dmnew= loadall_dm();
                include("view/home.php");
                break;

                case "addsp":
                    if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                        if(isset($_SESSION['taikhoan']))$iduser=$_SESSION['taikhoan']['id'];
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $ten_nb = $_POST['ten_nb'];
                        $sdt = $_POST['sdt'];
                
                        
                        if (!empty($_FILES['anhsp']['name'][0])) {
                            foreach ($_FILES['anhsp']['name'] as $key => $anhspName) {
                                $target_dir = "./uploads/";
                                $target_file = $target_dir . basename($anhspName);                     
                                move_uploaded_file($_FILES['anhsp']['tmp_name'][$key], $target_file);
                            }
                        }
                
                     
                        insert_sp_d($tensp, $giasp, $anhspName, $mota, $iddm,$ten_nb,$sdt,$iduser);
                
                        $notice = "Thêm bài viết thành công, vùi lòng chờ duyệt từ admin!";
                    }
                
                    
                    $lisdtm = loadall_dm();
                    include "view/dangbai/add.php";
                    break;



                    case "suasp":
                        if (isset($_GET["id"]) && $_GET["id"] > 0) {
                            $sp = loadone_sp($_GET["id"]);
                        }
                        $lisdtm = loadall_dm();
                        include "admin/sanpham/update.php";
                        break;
                    case "updatesp":
                        if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                            if(isset($_SESSION['taikhoan']))$iduser=$_SESSION['taikhoan']['id'];
                            $iddm = $_POST['iddm'];
                            $id = $_POST['id'];
                            $tensp = $_POST['tensp'];
                            $giasp = $_POST['giasp'];
                            $mota = $_POST['mota'];
                            $ten_nb = $_POST['ten_nb'];
                            $sdt = $_POST['sdt'];
                            $anhsp = $_FILES['anhsp']['name'];
                            $target_dir = "./uploads/";
                            $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                            move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);
            
                            update_sp($id, $tensp, $giasp, $anhsp, $mota, $iddm,$ten_nb,$sdt);
                        }
                        $lisdtm = loadall_dm();
                        $listls = loadall_sp_nd($iduser);
                        include "view/lichsu.php";
                        break;



                        case "xoasp":
                            
                            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                                if(isset($_SESSION['taikhoan']))$iduser=$_SESSION['taikhoan']['id'];
                                delete_sp($_GET['id']);
                            }
                            $lisdtm = loadall_dm();
                            $listls = loadall_sp_nd($iduser);
                            include "view/lichsu.php";
                            break;
                
                
                        case "xoad":
                                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                                    if(isset($_SESSION['taikhoan']))$iduser=$_SESSION['taikhoan']['id'];
                                    delete_sp($_GET['id']);
                                }
                                $lisdtm = loadall_dm();
                                $listls = loadall_sp_nd($iduser);
                                include "view/lichsu.php";
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

            case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $taikhoan=$_POST['taikhoan'];
                        $matkhau=$_POST['matkhau'];
                        $check_usre=check_uere($taikhoan,$matkhau);
                        if(is_array($check_usre)){
                            $_SESSION['taikhoan']=$check_usre;
                            echo '<script>window.location.href = "index.php";</script>';
                        }else{
                            $thongbao="không tồn tại tài khoản";
                        }
                    }
                    include "view/dangnhap.php";
                    break;



                    // case 'dangnhap_ad':
                    //     if(isset($_POST['dangnhap_ad']) && ($_POST['dangnhap_ad'])){
                    //         $taikhoan_nv = $_POST['taikhoan_nv'];
                    //         $matkhau = $_POST['matkhau'];
                    //         $check_ad = check_ad($taikhoan_nv, $matkhau);
                    
                    //         if(is_array($check_ad) && isset($check_ad['phanquyen'])){
                    //             if($check_ad['phanquyen'] == 1){
                    //                 $_SESSION['taikhoan_nv'] = $check_ad;
                    //                 echo '<script>window.location.href = "admin/index.php";</script>';
                    //             } else {
                    //                 $thongbao = "Bạn không phải là nhân viên";
                    //             }
                    //         } else {
                    //             $thongbao = "Không tồn tại tài khoản";
                    //         }
                    //     }
                    //     include "view/dangnhap_ad.php";
                    //     break;
                    
            case 'edit_tk':
                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $taikhoan=$_POST['taikhoan'];
                            $matkhau=$_POST['matkhau'];
                            $email=$_POST['email'];
                            $diachi=$_POST['diachi'];
                            $id=$_POST['id'];
                            update_tk($id,$taikhoan,$email,$matkhau,$diachi,$sdt);  
                            $_SESSION['taikhoan']=check_uere($taikhoan,$matkhau);      
                            echo '<script>window.location.href = "index.php?act=edit_tk";</script>';
                            // header('location:index.php?act=edit_tk');
        
                        }
                        include "view/taikhoan/edit_tk.php";
                        break;
        
            case "dangxuat":
                        session_unset();
                        echo '<script>window.location.href = "index.php";</script>';
                        break;

                        
            default:
                include("view/home.php");
                break;
        }
    }else{
        $dmnew= loadall_dm();
        // var_dump($dmnew);die();
        include("view/home.php");
        
    }
    include("view/footer.php");
?>