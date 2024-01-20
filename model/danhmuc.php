<?php 
function insert_dm($tenloai,$anh) { 
    $sql = "INSERT INTO danhmuc(tendanhmuc_sp,img) values ('$tenloai','$anh')";
    pdo_execute($sql);
}

function delete_dm($id) { 
    $sql = "DELETE FROM danhmuc WHERE id=" .$id;
    pdo_execute($sql);
} 


function loadall_dm() { 
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdm = pdo_query($sql);
    // var_dump($listdm);die;
    return $listdm;
}


function loadone_dm($id) { 
    $sql = "SELECT * FROM danhmuc WHERE id=" .$id;
    $dm = pdo_query_one($sql);
    return $dm;
}


// loadone danh mục để lấy tên danh mục
function load_namedm($iddm) {
if ($iddm > 0 ) { 
    $sql = "SELECT * FROM danhmuc WHERE id=" .$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $namedm;
}  else { 
    return " ";
}
}
function update_dm($id, $tenloai,$anh){ 
    if($anh!='')
        $sql = "UPDATE danhmuc SET tendanhmuc_sp = '$tenloai', img = '$anh' WHERE id=" . $id;
    else
        $sql = "UPDATE danhmuc SET tendanhmuc_sp = '$tenloai' WHERE id=" . $id;
    
    pdo_execute($sql);
}

?>
