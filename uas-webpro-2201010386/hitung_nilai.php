<?php 

    $tugas  = $_POST['tugas'];
    $uts    = $_POST['uts'];
    $uas    = $_POST['uas'];

    $nilai_tugas    = $tugas * 20 / 100;
    $nilai_uts      = $uts * 30 / 100;
    $nilai_uas      = $uas * 50 / 100;

    $nilai_akhir = $nilai_tugas + $nilai_uts + $nilai_uas;

    if($nilai_akhir>=90)
        {
        $grade = "A";
        }
        elseif($nilai_akhir>=80)
            {
            $grade = "B";
            }
            elseif($nilai_akhir>= 60)
                {
                $grade = "C";
                }
                elseif($nilai_akhir>=50)
                    {
                    $grade = "D";
                    }
                    else
                        {
                        $grade = "E";
                    }
        echo "<h3>Nilai Akhir : $nilai_akhir</h3><br>";
        echo "<h3>Grade : $grade</h3>";

?>

