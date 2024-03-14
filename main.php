<?php
$temp=0;
$humidity=0;
$rain=0;
$soilmoisture=0;
$sunlightintensity=0;
$count=0;
if($res=mysqli_query(msqli_connect('localhost','root','','arcs'),"SELECT * from dataset ORDER BY REFID DESC limit 10"))
{
    while($rw=mysqli_fetch_assoc($res))
    {
        $temp+=$rw['TEMP'];
        $humidity+=$rw['HUMIDITY'];
        $rain+=$rw['RAINMETER'];
        $soilmoisture+=$rw['SOILMOISTURE'];
        $sunlightintensity+=$rw['SUNLIGHTINTENSITY'];
        $count++;
    }
        $temp=$temp/$count;
        $humidity=$humidity/$count;
        $rain=$rain/$count;
        $soilmoisture=$soilmoisture/$count;
        $sunlightintensity=$sunlightintensity/$count;
    echo $temp;
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Agricultural Crop Recommendation System using IOT and Machine Learning</title>
    <meta name="viewport" content=""width=device width,initial-scale="1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-6n5384xoQ1aoWXA+058RXPXPg6fy4IWVTNh0E263XmFcD1SAW1GgFAW/dAiS6DXm" crossorigin="anonymous">
    <style type="text/css">
        p{
            text-align:justify;
        
        }

    </style>

</head>
<body style="background:url(https://thelens.news/wp-content/uploads/2019/03/32.jpg); background-size:cover;">
    <div style= "background:linear-gradient(0deg,#83ABD0,white)">
    <br><br><h2 align="center">Agricultural Crop Recommendation System using IOT and Machine Learning </h2><br><br>
</div>
<div class="container"><hr>
<center>
    <h4 align ="center"><b><u>Prediction</u></b></h4>
    <form method="POST" action ="http://127.0.0.1:5000/">
        <div class ="row">
            <table class="table table.bordered">
                <tbody>