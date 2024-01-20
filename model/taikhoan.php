<?php   
     function insert_tk($email,$taikhoan,$matkhau,$sdt){
        $sql="insert into taikhoannguoidung(taikhoan,matkhau,email,sdt) values('$taikhoan','$matkhau','$email','$sdt')";
        pdo_execute($sql);
    }
    function insert_tk_nv($email,$taikhoan,$matkhau,$sdt,$quyen){
        $sql="insert into taikhoannguoidung(taikhoan,matkhau,email,sdt,quyen) values('$taikhoan','$matkhau','$email','$sdt','$quyen')";
        pdo_execute($sql);
    }
    function check_uere($taikhoan,$matkhau){
        $sql="select * from taikhoannguoidung where taikhoan='".$taikhoan."' AND matkhau='".$matkhau."' ";
        $sp= pdo_query_one($sql);
        return $sp;
    }
    function check_email($email){
        $sql="select * from taikhoannguoidung where email='".$email."'";
        $sp= pdo_query_one($sql);
        return $sp;
    }

    function  update_tk($id,$taikhoan,$email,$matkhau,$address,$sdt){
      
        $sql="update taikhoannguoidung set taikhoan ='".$taikhoan."',email='".$email."',matkhau ='".$matkhau."',diachi ='".$address."',sdt ='".$sdt."' where id =".$id;
        pdo_execute($sql);
    }

    function loadall_tk(){
        $sql="SELECT * FROM taikhoannguoidung WHERE quyen = 0";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function loadall_tk_nv(){
        $sql = "SELECT * FROM taikhoannguoidung WHERE quyen = 2";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_tk($id){
        $sql="delete from taikhoannguoidung where id=".$id;
        pdo_execute($sql);
    }

    function loadone_tk($id) { 
        $sql = "SELECT * FROM taikhoannguoidung WHERE id=" .$id;
        $nb = pdo_query_one($sql);
        return $nb;
    }

?>