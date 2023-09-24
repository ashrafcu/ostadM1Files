<?php
function getTotalArea (int| float $widthArea=0, int| float $lengthArea=0){
    $totalArea=ceil($widthArea*$lengthArea);
    echo "সম্পূর্ণ সিলিং হবে " .$totalArea. " স্কয়ার ফিট";
}


?>