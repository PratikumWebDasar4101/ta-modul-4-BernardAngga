<?php
session_start();

$user = $_SESSION["user"];
$pengiriman = $_POST["pengiriman"];
$barang = $_POST["barang"];
$alamat = $_POST["alamat"];
$tglbeli = $_POST["tanggal"];
$harga = 0;
$harga_ngirim = 0;

for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "Beras")
        $harga += 130000;
    else if ($barang[$i] == "Gula") 
        $harga += 5000;
    else if ($barang[$i] == "Detergen")
        $harga += 20000;
    else if ($barang[$i] == "Minyak")
        $harga += 30000;
}

if($pengiriman == "JNE")
    $harga_ngirim = 20000;
if($pengiriman == "Tiki")
    $harga_ngirim = 18000;
if($pengiriman == "J&T")
    $harga_ngirim = 22000;
if($pengiriman == "PosIndonesia")
    $harga_ngirim = 25000;

function total($a, $b) {
    return $a + $b;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan</title>
</head>
<body>
    <table>
        <tr>
            <td>Tanggal Submit</td>
            <td>:</td>
            <td><?php echo $tglbeli; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>
        <tr>
            <td>No.Telp</td>
            <td>:</td>
            <td><?php echo $user["notelp"]; ?></td>
        </tr>
        <tr valign="top">
            <td>Barang pembelian</td>
            <td>:</td>
            <td>
                <?php
                foreach ($barang as $barang_b) {
                    echo $barang_b . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman . " " . $harga_ngirim; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $harga_ngirim); ?></td>
        </tr>
    </table>
</body>
</html>