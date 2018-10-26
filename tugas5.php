<?php
    $nilai=[["PWL"=>["Toni"=>"80","Dewi"=>"90","Nina"=>"75","Reza"=>"60"]],
    ["AI"=>["Toni"=>"60","Dewi"=>"70","Nina"=>"95","Reza"=>"50"]],
    ["SBD"=>["Toni"=>"75","Dewi"=>"75","Nina"=>"80","Reza"=>"70"]]];

    $nPWL=["Toni"=>"80","Dewi"=>"90","Nina"=>"75","Reza"=>"60"];
    $nAI=["Toni"=>"60","Dewi"=>"70","Nina"=>"95","Reza"=>"50"];
    $NSBD=["Toni"=>"75","Dewi"=>"75","Nina"=>"80","Reza"=>"70"];

    $sump=array_sum($nilai[0]["PWL"])/count($nilai[0]["PWL"]);
    $suma=array_sum($nilai[1]["AI"])/count($nilai[1]["AI"]);
    $sums=array_sum($nilai[2]["SBD"])/count($nilai[2]["SBD"]);

    echo "Nilai rata-rata PWL : ".$sump."<br>";
    echo"Nilai rata-rata AI :".$suma."<br>";
    echo "Niali rata-rata SBD : ".$sums."<br>";
?>