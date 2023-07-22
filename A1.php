<?php
function tinhTongSoNguyen($arr) {
    $tong = 0;
    $phantuStr = "";

    foreach ($arr as $phantu) {
        if (is_int($phantu)) {
            $tong += $phantu;
            $phantuStr .= " + " . $phantu;
        }
    }

    // Loại bỏ ký tự "+" đầu tiên và cuối cùng trong chuỗi phần tử
    $phantuStr = ltrim($phantuStr, " + ");
    $phantuStr = rtrim($phantuStr, " + ");

    echo "Tổng các phần tử là = " . $phantuStr . " = " . $tong;
}

function tinhTichSoNguyen($arr) {
    $tich = 1;
    $phantuStr = "";

    foreach ($arr as $phantu) {
        if (is_int($phantu)) {
            $tich *= $phantu;
            $phantuStr .= " * " . $phantu;
        }
    }

    // Loại bỏ ký tự "*" đầu tiên và cuối cùng trong chuỗi phần tử
    $phantuStr = ltrim($phantuStr, " * ");
    $phantuStr = rtrim($phantuStr, " * ");

    echo "Tích các phần tử là = " . $phantuStr . " = " . $tich;
}

function tinhHieuSoNguyen($arr) {
    $hieu = 0;
    $phantuStr = "";

    foreach ($arr as $phantu) {
        if (is_int($phantu)) {
            $hieu -= $phantu;
            $phantuStr .= " - " . $phantu;
        }
    }

    // Loại bỏ ký tự "-" đầu tiên trong chuỗi phần tử
    $phantuStr = ltrim($phantuStr, " - ");

    echo "Hiệu các phần tử là = " . $phantuStr . " = " . $hieu;
}

function tinhThuongSoNguyen($arr) {
    $thuong = null;
    $phantuStr = "";

    foreach ($arr as $phantu) {
        if (is_int($phantu)) {
            if ($thuong === null) {
                $thuong = $phantu;
            } else {
                if ($phantu !== 0) {
                    $thuong /= $phantu;
                } else {
                    echo "Không thể thực hiện phép chia cho 0.";
                    return;
                }
            }
            $phantuStr .= " / " . $phantu;
        }
    }

    // Loại bỏ ký tự "/" đầu tiên trong chuỗi phần tử
    $phantuStr = ltrim($phantuStr, " / ");

    echo "Thương các phần tử là = " . $phantuStr . " = " . $thuong;
}

// Ví dụ sử dụng các hàm:
$array = [2, 5, 6, 9, 2, 5, 6, 12, 5];
tinhTongSoNguyen($array);
echo "<br>";
tinhTichSoNguyen($array);
echo "<br>";
tinhHieuSoNguyen($array);
echo "<br>";
tinhThuongSoNguyen($array);
?>
