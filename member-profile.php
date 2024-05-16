<?php
    $first = $member['name']['first'];
    $last = $member['name']['last'];
    $name = "$first $last";
    
    $roles = implode(", ", array_slice($member['roles'], 0, -1));
    $lastRole = end($member['roles']);
    
    $birth = $member['birth'];

    if(isset($member['image'])) {
        $image = $member['image'];
    }
    
    if( isset($member['death']) ) {
        $death = $member['death'];  
        $age = "He died in $death at " . ($death - $birth) . " years old.";
    } else {
        $age = "This year he'll be " . (date("Y") - $birth) . " years old.";
    }
?>

<section class="member-profile">
    <div class="inner-column">
        <picture>
            <img src="<?=$image?>">
        </picture>
        <div class="text-content">
            <h2><?= $name ?></h2>
    
            <p><?= $name ?> was the <?= "$roles and $lastRole" ?> of <?= $bandName ?>. </p>
    
            <p>He was born in <?= $birth ?>. <?=$age?></p>
        </div>
    </div>
</section>