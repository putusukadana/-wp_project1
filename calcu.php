<?php
    include_once("konversisuhu.php");
    // include_once("form.php");
        if(isset($_POST["kirim"])){
            $suhu=$_POST['nilai'];
            $konversi=$_POST['inlineRadioOptions'];
        if($konversi=="C2F"){
            $hsl=(9/5*$suhu);
            $hsl2=$hsl+32;
            echo "Hasil konversi : <br> 
                F=(9/5*$suhu)+32<br>
                F=$hsl+32<br>
                F=$hsl2";
        }else if($konversi=="F2C"){
            $hsl=($suhu-32);
            $hsl2=$hsl*5/9;
            echo "Hasil konversi : <br>
                 C=($suhu-32)
                 C=$hsl*5/9
                 C=$hsl2";
        }
    }

    // echo "hasil konversi : 
    // C= (9/5*$suhu)+32 ==> $hsl1
    // C= $hsl1+32 ==> $hsl2
    // C= $hsl