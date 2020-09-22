<!DOCTYPE html>
<html>
    <head>
        <title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
        <meta charset="utf-8">
        <style>
            *{
                font-family: Tahoma;
            }
            table{
                width: 400px;
                margin: 100px auto;
            }
            table th{
                background: #66CCFF;
                padding: 10px;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <?php
        $n = $_POST['so_phan_tu'];
        $mang = array($n);
        for ($index = 0; $index < $n; $index++) {
            $mang[$index] = mt_rand(0, 20);
        }

        function xuatmang($mang) {
            echo implode(" ", $mang);
        }

        function tim_max($mang) {
            if (isset($mang[0])) {
                $max = $mang[0];
                $n = count($mang);
                for ($i = 1; $i < $n; $i++) {
                    if ($mang[$i] > $max) {
                        $max = $mang[$i];
                    }
                }
                echo $max;
            }
        }

        function tim_min($mang) {
            if (isset($mang[0])) {
                $min = $mang[0];
                $n = count($mang);
                for ($i = 1; $i < $n; $i++) {
                    if ($min > $mang[$i]) {
                        $min = $mang[$i];
                    }
                }
                echo $min;
            }
        }

        function tong($mang) {
            $n = count($mang);
            $tong = 0;
            for ($i = 0; $i < $n; $i++) {
                $tong += $mang[$i];
            }
            echo $tong;
        }
        ?>
        <form action="mang2.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nhập số phần tử:</td>
                        <td><input type="text" name="so_phan_tu" width="100%" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Phát sinh và tính toán"></td>
                    </tr>
                    <tr>
                        <td>Mảng: </td>
                        <td><input type="text" name="mang_so" disabled="disabled" value="<?php echo xuatmang($mang); ?>"></td>
                    </tr>
                    <tr>
                        <td>GTLN ( MAX ) trong mảng: </td>
                        <td><input type="text" name="gtln" disabled="disabled" value="<?php echo tim_max($mang) ?>"></td>
                    </tr>
                    <tr>
                        <td>GTNN ( MIN ) trong mảng: </td>
                        <td><input type="text" name="ttnn" disabled="disabled" value="<?php echo tim_min($mang) ?>"></td>
                    </tr>
                    <tr>
                        <td>Tổng mảng: </td>
                        <td><input type="text" name="tong" disabled="disabled" value="<?php echo tong($mang) ?>"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
