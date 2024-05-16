<?php

function membersList() {
    global $members;
    echo "<ul>";
    foreach ($members as $member) {
        $first = $member['name']['first'];
        $last = $member['name']['last'];

        echo "<li>$first $last</li>";
    }
    echo "</ul>";
}

function albumsList() {
    global $albums;
    echo "<ul>";
    foreach ($albums as $album) {
        echo "<li>$album</li>";
    }
    echo "</ul>";
}

?>

<section class="about">
    <div class="inner-column">
        <picture>
            <img src="https://i.redd.it/ola2rfo3ify11.jpg" >
        </picture>

        <div class="text-content">
            <h2>About</h2>
            
            <p><?= $bandName ?> are a band from <?= $location ?>.</p>
    
            <p>The members consist of:</p>
            <?= membersList() ?>
    
            <p>The albums they've released are:</p>
            <?= albumsList() ?>
        </div>

    </div>
</section>