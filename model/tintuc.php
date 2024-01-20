<?php
function insert_tt($tentt, $ngaydang, $anhtt,$demo, $noidung,$iddm_tt)
{
    $sql = "INSERT INTO tintuc(	tieude, ngaydang, img,demo, noidung, iddm_tt) values ('$tentt','$ngaydang','$anhtt','$demo','$noidung','$iddm_tt')";
    pdo_execute($sql);
}
function delete_tt($id)
{
    $sql = "DELETE FROM tintuc WHERE id=" . $id;
    pdo_execute($sql);
}
// phần show sản phẩm trang home
function loadall_tt_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id desc limit 0,12";
    $listsp = pdo_query($sql);
    return $listsp;
}
// phần show top 10 sản phẩm trang home
function loadall_tt_top10()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY luotxemsp desc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_tt($kyw = "", $iddm_tt = 0)
{
    $sql = "SELECT * FROM tintuc WHERE 1";
    if ($kyw != '') {
        $sql .= " AND tieude LIKE'%" . $kyw . "%' ";
    }
    if ($iddm_tt > 0) {
        $sql .= " AND iddm_tt = '" . $iddm_tt . "' ";
    }
    $sql .= " ORDER BY id desc";
    $listtt = pdo_query($sql);
    return $listtt;
}

function loadall_home()
{
    $sql = "SELECT * FROM tintuc WHERE trangthai = 1 ORDER BY id DESC LIMIT 0,3";
    $listtt = pdo_query($sql);
    return $listtt;
}

function loadall_home_tt()
{
    $sql = "SELECT * FROM tintuc  WHERE trangthai = 1 ORDER BY id DESC LIMIT 0,9";
    $listtt = pdo_query($sql);
    return $listtt;
}
function loadone_tt($id)
{
    $sql = "SELECT * FROM tintuc WHERE id=" . $id;
    $tt = pdo_query_one($sql);
    return $tt;
}

function loadall_tt_same($id, $iddm)
{
    $sql = "SELECT * FROM san_pham WHERE iddm =" . $iddm ." AND id <> ".$id ;
    $listsp = pdo_query($sql);
    return $listsp;
}
function  update_tt($id, $tentt, $ngaydang, $anhtt,$demo, $noidung, $iddm_tt)
{
    if ($anhtt != '')
        $sql = "UPDATE tintuc SET
            tieude='$tentt',
            ngaydang='$ngaydang', 
            img='$anhtt',
            demo='$demo', 
            noidung='$noidung',
            iddm_tt = '$iddm_tt'
            WHERE id='$id'";
    else
        $sql = "UPDATE tintuc SET
            tieude='$tentt',
            ngaydang='$ngaydang', 
            demo='$demo', 
            noidung='$noidung',
            iddm_tt = '$iddm_tt'
            WHERE id='$id'";

    pdo_execute($sql);
}
function updatetrangthaitt($trangthai){
    $sql = "UPDATE tintuc SET trangthai = '1' WHERE id = '$trangthai'";
    pdo_execute($sql);
}