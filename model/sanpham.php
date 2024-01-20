<?php
function insert_sp($tensp, $giasp, $anhspName, $mota, $iddm,$sdt)
{
    $sql = "INSERT INTO sanpham(tensp, gia, img, mota, iddm,sdt) values ('$tensp','$giasp','$anhspName','$mota','$iddm','$sdt')";
    pdo_execute($sql);
}

function delete_sp($id)
{
    $sql = "DELETE FROM sanpham WHERE id=" . $id;
    pdo_execute($sql);
}
// phần show sản phẩm trang home
function loadall_sp_home()
{
    $sql = "SELECT * FROM sanpham WHERE trangthai = 1 ORDER BY id DESC LIMIT 0,6";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadall_sp_home_4()
{
    $sql = "SELECT * FROM sanpham WHERE trangthai = 1 ORDER BY id DESC LIMIT 0,4";
    $listsp = pdo_query($sql);
    return $listsp;
}
// phần show top 10 sản phẩm trang home
function loadall_sp_top10()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY luotxemsp desc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sp($kyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1 AND trangthai = 1";
    if ($kyw != '') {
        $sql .= " AND tensp LIKE'%" . $kyw . "%' ";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = '" . $iddm . "' ";
    }
    $sql .= " ORDER BY id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadall_sp_d($kyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1 AND trangthai = 0";
    if ($kyw != '') {
        $sql .= " AND tensp LIKE'%" . $kyw . "%' ";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = '" . $iddm . "' ";
    }
    $sql .= " ORDER BY id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sp($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadall_sp_same($id, $iddm)
{
    $sql = "SELECT * FROM san_pham WHERE iddm =" . $iddm ." AND id <> ".$id ;
    $listsp = pdo_query($sql);
    return $listsp;
}
function update_sp($id, $tensp, $giasp, $anhsp, $mota, $iddm,$sdt)
{
    if ($anhsp != '')
        $sql = "UPDATE sanpham SET
            iddm = '$iddm',
            tensp='$tensp',
            gia='$giasp', 
            img='$anhsp', 
            mota='$mota',
            sdt='$sdt'
            WHERE id='$id'";
    else
        $sql = "UPDATE sanpham SET
            iddm = '$iddm',
            tensp='$tensp',
            gia='$giasp', 
            mota='$mota',
            sdt='$sdt'
            WHERE id= '$id'";

    pdo_execute($sql);
}
function updatetrangthai($trangthai){
    $sql = "UPDATE sanpham SET trangthai = '1' WHERE id = '$trangthai'";
    pdo_execute($sql);
}

function loadall_sp_nd($iduser)
{
    $sql="select *from sanpham where iduser=".$iduser;
    $listls = pdo_query($sql);
    return $listls;
}
