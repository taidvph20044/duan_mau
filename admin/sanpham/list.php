<div class="row">
    <div class="row header frmtitle mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>

    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>TẤT CẢ</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>

        </select>
        <input type="submit" name="listok" value="GO">
    </form>

    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo
                    '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $price . '</td>
                    <td>' . $luotxem . '</td>
                    <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> <a href="' . $xoasp . '"> <input type="button" value="xóa"></a></td>
                    </tr>
                    ';
                }

                ?>

            </table>
        </div>

        <div class="row mb-10">
            <input type="button" value="chọn tất cả">
            <input type="button" value="bỏ chọn tất cả">
            <input type="button" value="xóa các mục đã chọn">
            <a href="http://localhost/PHP1/ky4/duan/admin/index.php?act=adddm"><input type="button" value="nhập thêm"></a>
        </div>

    </div>
</div>