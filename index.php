<?php
function mult($m){
    $res='';
    for( $i=0; $i<=10; $i++){
        $res .= '<div class="line text-center">'. $m.'*'.$i.'='.$i*$m.'</div>';
    }
    return $res;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
    <div class="row">
    <?php
    for($i=2 ; $i<200 ; $i++){
        echo '<div class="col-md-2">';
        echo '<div class="mult"><div class="m_title text-center">Table '.$i.'</div>';
        echo mult($i);
        echo '</div></div>';
    }
    ?>
    </div>
    </div>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
