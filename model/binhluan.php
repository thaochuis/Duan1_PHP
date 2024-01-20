<?php 
function insert_bl($noidung, $taikhoan_user, $id_sp, $ngaybinhluan) { 
    $sql = "INSERT INTO binhluanj(noidung, taikhoan_user, id_sp, ngaybinhluan) values ('$noidung', '$taikhoan_user', '$id_sp', '$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_bl($id_sp) { 
    $sql ="SELECT * FROM binhluanj where 1";
    if($id_sp > 0 )
    $sql .=" AND id_sp='".$id_sp."'";
    else
    $sql .=" ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function xoa_bl($id) { 
    $sql = "DELETE FROM binhluanj WHERE id=" .$id;
    pdo_execute($sql);
} 
function insert_tc($noidung,$id_sp) { 
    $sql = "INSERT INTO tuchoi(noidung,id_sp) values ('$noidung','$id_sp')";
    pdo_execute($sql);
}
function loadall_tc($id_sp) { 
    $sql ="SELECT * FROM tuchoi where 1";
    if($id_sp > 0 )
    $sql .=" AND id_sp='".$id_sp."'";
    else
    $sql .=" ORDER BY id DESC";
    $listtc = pdo_query($sql);
    return $listtc;
}
?>