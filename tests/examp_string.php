    <?php
    $animals = [
        'Ga', 'Cho', 'Meo'
    ];
    $str1 = 'Me em di cho mua ';
    foreach($animals as $animal){
        $str1 .= ' '. $animal . ',';
    }
    $str1 = substr($str1,0,-1) . '.';
    
    echo"$str1<br>"; 
    // output Me em di cho mua ga, cho, meo
    //
    //
    $students = [
        'An', 'Dat', 'Hanh'
    ];
    $relaxs = [
        'bong cuoi', 'bong ban', 'bong da'
    ];
    $newws =[
        'rat thich choi' 
    ];
    $str = 'Cac ban';
    foreach($students as $student){
    $str .= ' '. $student.' '.',';
    }
    $str = substr($str, 0,-1);
    // $str = substr($str,0,-1) . ' ';
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
    //out put str= "Cac ban An, Dat, Hanh rat thich choi bong cuoi, bong ban, bong da."
