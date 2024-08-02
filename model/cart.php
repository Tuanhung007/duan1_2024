<?php

// Thêm sản phẩm vào giỏ hàng
function insert_giohang($id_nguoidung, $id_sp, $ten_sp, $anh_sp, $gia_sp, $so_luong)
{
    $sql = "INSERT INTO tb_gio_hang (id_nguoidung, id_sp, ten_sp, anh_sp, gia_sp, so_luong) VALUES ('$id_nguoidung', '$id_sp', '$ten_sp', '$anh_sp', '$gia_sp', '$so_luong')";
    pdo_execute($sql);
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
function update_giohang($id_sp, $so_luong)
{
    $sql = "UPDATE tb_gio_hang SET so_luong = '$so_luong' WHERE id_sp = '$id_sp'";
    pdo_execute($sql);
}

// Kiểm tra sản phẩm có trong giỏ hàng hay không
function check_giohang($id_sp)
{
    $sql = "SELECT * FROM tb_gio_hang WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql);
}

// Xóa sản phẩm khỏi giỏ hàng
function delete_giohang($id)
{
    $sql = "DELETE FROM tb_gio_hang WHERE id = '$id'";
    pdo_execute($sql);
}

// Tải tất cả sản phẩm trong giỏ hàng
function loadall_giohang()
{
    $sql = "SELECT * FROM tb_gio_hang";
    return pdo_query($sql);
}
function loadone_bill_user($id_nguoidung)
{
    $sql = "SELECT * FROM tb_hoa_don WHERE id_nguoidung='" . $id_nguoidung . "' order by id_hoa_don desc";
    $listBill = pdo_query($sql);
    return $listBill;
}
function update_bill_status($id_hd, $status)
{
    $sql = "UPDATE `tb_hoa_don` SET  `trang_thai` = '$status' WHERE id_hoa_don =" . $id_hd;
    pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM tb_hoa_don WHERE id_nguoidung=" . $id;
    $listBill = pdo_query_one($sql);
    return $listBill;
}
function loadone_hoa_don($id_hoa_don)
{
    $sql = "select * from tb_ct_hoadon where $id_hoa_don=" . $id_hoa_don;
    $listhd = pdo_query_one($sql);
    return $listhd;
}
function load_bill_detail($id_hoa_don)
{
    $sql = "SELECT * FROM tb_ct_hoadon WHERE id_hoa_don='" . $id_hoa_don . "' order by id desc";
    $listCart = pdo_query($sql);
    return $listCart;
}
function load_bill_total($id_hoa_don)
{
    $sql = "select * from tb_hoa_don where id_hoa_don=" . $id_hoa_don;
    $listgiohang = pdo_query($sql);
    return $listgiohang;
}
function loadall_hoa_don()
{
    $sql = "select * from tb_hoa_don order by id_hoa_don desc";
    $listhd = pdo_query($sql);
    return $listhd;
}
function update_trangthai($id_hoa_don, $ten_sp, $anh_sp, $so_luong_mua, $gia_sp, $trang_thai)
{

    $sql = "UPDATE `tb_hoa_don` SET `ten_sp` = '$ten_sp', `anh_sp` = '$anh_sp' , `so_luong_mua` = '$so_luong_mua' , `gia_Sp` = '$gia_sp' WHERE id_hoa_don =" . $id_hoa_don;


    pdo_execute($sql);
}
