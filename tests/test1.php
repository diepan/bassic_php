<?php
 $students = [
    'An', 'Dat', 'Hanh'
];
$relaxs = [
     'bong cuoi', 'bong ban', 'bong da'
];
$newws =[
    'rat thich choi' 
];
$str = 'cac ban';
foreach($students as $student){
   $str .= ' '. $student.' ,'. ' ' ;
}
foreach($newws as $neww){
   $str .= $neww .' '; 
}
foreach($relaxs as $relax){
    $str .=' ' .$relax .',' ;
}
foreach($newws as $neww){

}
$str = substr($str,0,-1) . '.';
echo($str);