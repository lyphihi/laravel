<h1>Hôm nay là</h1>
<ul>
    <li>Tổng số sinh viên là:
    <span style="border: 1px solid red;">{{ $ketqua }}</span>
    </li>
    <li>Họ tên: {{ $hoten }}</li>
</ul>
<?php 
    $chuoingay = date('d-m-Y H:i:s');
?>
<h2><?= $chuoingay ?></h2>