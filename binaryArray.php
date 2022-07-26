<?php

function binarySearch($arr, $l, $r, $x)
{
if ($r >= $l)
{
        $mid = ceil($l + ($r - $l) / 2);

        if ($arr[$mid] == $x || $arr[$mid+1]==0) && ($arr[$mid]==1)
            return floor($mid+2);

        if ($arr[$mid] == 1) 
            return binarySearch($arr, $l, 
                                $mid + 1, $x);

        return binarySearch($arr, $mid - 1, 
                            $r, $x);
}

return 0;
}

$arr = array(2, 3, 4, 10, 40);

if(($result == -1))
echo "Element is not present in array";
else
echo "Element is present at index ",
                            $result;

?>

?>