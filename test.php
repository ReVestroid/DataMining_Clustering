<?php
include 'koneksi.php';
$sql_edit = mysqli_query($kon, "SELECT * FROM centroid WHERE id_centroid='1'");
$row =  mysqli_fetch_array($sql_edit);
$px1 = 4;
$py1 = 1;

$px2 = 1;
$py2 = 2;

$px3 = 5;
$py3 = 3;

$it = 1;
$v = 0;
while (true) {

    $ac1 = 0;
    $ac2 = 0;
    $ac3 = 0;

    unset($agtc1x);
    unset($agtc1y);
    unset($agtc2x);
    unset($agtc2y);
    unset($agtc3x);
    unset($agtc3y);

    $tmp_px1 = $px1;
    $tmp_px2 = $px2;
    $tmp_px3 = $px3;
    
    echo "<h2>&nbsp;Iterasi $it</h2>";
    echo '<p>&nbsp;Pusat Cluster ke-1 : {' . $px1 . ', ' . $py1 . '}</p>';
    echo '<p>&nbsp;Pusat Cluster ke-2 : {' . $px2 . ', ' . $py2 . '}</p>';
    echo '<p>&nbsp;Pusat Cluster ke-3 : {' . $px3 . ', ' . $py3 . '}</p>';
    $no = 1;
    $q = mysqli_query($kon, "select * from data order by id asc");
    while ($r = mysqli_fetch_array($q)) {
        $min = 0;
        $c1 = sqrt((pow(($r['stok'] - $px1), 2)) + (pow(($r['pin'] - $py1), 2)));
        $c2 = sqrt((pow(($r['stok'] - $px2), 2)) + (pow(($r['pin'] - $py2), 2)));
        $c3 = sqrt((pow(($r['stok'] - $px3), 2)) + (pow(($r['pin'] - $py3), 2)));
        $min = 0;
        $min = min($c1, $c2, $c3);

        if ($c1 == $min) {
            $ketmin = "C1";
            $ac1++;
            print($r['stok'] . "(1) ");
            
            $agtc1x[] = $r['stok'];
            $agtc1y[] = $r['pin'];
            // var_dump($agtc1x);
            // var_dump($agtc1x ." agtc1x<br>");
            // var_dump($agtc1y ." agtc1y<br>");
            
        } elseif ($c2 == $min) {
            $ketmin = "C2";
            $ac2++;
            //print($r['stok']  . "(2) ");

            $agtc2x[] = $r['stok'];
            $agtc2y[] = $r['pin'];

            // var_dump($agtc2x  ." agtc2x<br>");
            // var_dump($agtc2y  ." agtc2x<br>");
        }elseif ($c3 == $min){
            $ketmin = "C3";
            $ac3++;
            //print($r['stok'] . "(3) ");

            $agtc3x[] = $r['stok'];
            $agtc3y[] = $r['pin'];

            // var_dump($agtc3x  ." agtc3x<br>");
            // var_dump($agtc3y  ." agtc3x<br>");
        }
    }
    
    foreach ($agtc1x as $key) {
        $tcx1 = $tcx1 + $key;
        print($tcx1 . "\n");
    }
    foreach ($agtc1y as $key) {
        $tcy1 = $tcy1 + $key;
    }
    foreach ($agtc2x as $key) {
        $tcx2 = $tcx2 + $key;
    }
    foreach ($agtc2y as $key) {
        $tcy2 = $tcy2 + $key;
    }
    foreach ($agtc3x as $key) {
        $tcx3 = $tcx3 + $key;
    }
    foreach ($agtc3y as $key) {
        $tcy3 = $tcy3 + $key;
    }
    print("<br>");
    print($tcx1 . "/ $ac1<br>");
    print($tcy1 . "/ $ac1 <br><br>");

    print($tcx2 . "/ $ac2<br>");
    print($tcy2 . "/ $ac2 <br><br>");

    print($tcx3 . "/ $ac3<br>");
    print($tcy3 . "/ $ac3 <br><br>");

    if($ac1 > 0){
        $px1 = $tcx1 / $ac1;
        $py1 = $tcy1 / $ac1;
    }

    if($ac2 > 0){
        $px2 = $tcx2 / $ac2;
        $py2 = $tcy2 / $ac2;
    }
    
    if($ac3 > 0){
        $px3 = $tcx3 / $ac3;
        $py3 = $tcy3 / $ac3;
    }
    if($tmp_px1 === $px1 && $tmp_px2 === $px2 && $tmp_px3 === $px3){
        $v++;
    }

    $tcx1 = 0;
    $tcy1 = 0;

    $tcx2 = 0;
    $tcy2 = 0;

    $tcx3 = 0;
    $tcy3 = 0;

    $it++;
    if($v == 2){
        die();
    }
}