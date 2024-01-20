<?php   
        function insert_lienhe($ten,$noidung,$email,$sdt)
        {
            $sql = "INSERT INTO lienhe(ten,sdt,email,noidung) values ('$ten','$sdt','$email','$noidung')";
            pdo_execute($sql);
        }

        function loadall_lh() { 
            $sql = "SELECT * FROM lienhe order by id desc";
            $listlh = pdo_query($sql);
            // var_dump($listdm);die;
            return $listlh;
        }

        function loadone_lh($id) { 
            $sql = "SELECT * FROM lienhe WHERE id=" .$id;
            $dm = pdo_query_one($sql);
            return $dm;
        }


        function update_lh($id, $trangthai){ 
                $sql = "UPDATE lienhe SET trangthai = '$trangthai' WHERE id=" . $id;
            pdo_execute($sql);
        }
        function delete_lh($id) { 
            $sql = "DELETE FROM lienhe WHERE id=" .$id;
            pdo_execute($sql);
        } 


?>