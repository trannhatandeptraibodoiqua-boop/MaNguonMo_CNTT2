<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Cau 1
    echo "<br>Cau 1: ";
    $N = rand(1, 100);
    echo "So tu nhien ngau nhien: N = $N";
    echo "<br>Cac so chan la: ";
    for ($i = 1; $i <= $N; $i++) {
        if ($i % 2 == 0)
            echo "$i ";
    }

    //Cau 2
    echo "<br>Cau 2: ";
    for ($i = 1; $i <= 10; $i++) {
        echo "<br>Bang cuu chuong $i: ";
        for ($j = 1; $j <= 10; $j++) {
            $ket_qua = $i * $j;
            echo "<br>$i x $j = $ket_qua ";
        }
    }

    //Cau 3
    echo "<br> Cau 3: ";
    $M = rand(-100, 100);
    echo "<br> Gia tri cua M: $M";
    if ($M > 0) {
        echo "<br> M la so duong";
        echo "<br> Cac uoc so cua M: ";
        for ($i = 1; $i <= $M; $i++) {
            if ($M % $i == 0)
                echo "$i ";
        }

        //Tim so nguyen to
        $dem = 0;
        for ($i == 1; $i <= $M; $i++) {
            if ($M % $i == 0) {
                $dem++;
            }
        }
        if ($dem == 2) {
            echo "<br>$M la so nguyen to";
        } else
            echo "<br>$M khong la so nguyen to";

        //Tinh tong cac so nguyen to < N
        $tong = 0;
        for ($k = 2; $k < $M; $k++) {
            $dem_k = 0;
            for ($j = 1; $j <= $k; $j++) {
                if ($k % $j == 0) {
                    $dem_k++;
                }
            }
            if ($dem_k == 2) {
                $tong += $k;
            }
        }
        echo "<br> Tổng các số nguyên tố nhỏ hơn $M là: $tong";
        //Tim so chinh phuong
        $E = (int) sqrt($M);
        if ($E * $E == $M)
            echo "<br> $M la so chinh phuong";
        else
            echo "<br> $M khong la so chinh phuong";
    } else {
        echo "<br> M khong la so duong";
    }
    ?>

</body>

</html>