<?php include 'inc/header.php'; 
$galerie=glob("img/galerie/*.{jpg,png}", GLOB_BRACE);
$i=4;
?>

<main>
    <div class="titre"><h1>Galerie Photo</h1></div>
    <div class="container">

    <?php foreach($galerie as $image) :?>
        
            <img class="item" src="<?=$image?>">
        
    <?php endforeach;?>





        <!-- <div class="item item-1">
            <div class="img1"></div>
        </div>
        <div class="item item-2">
            <div class="img2"></div>
        </div>
        <div class="item item-3">
            <div class="img3"></div>
        </div>
        <div class="item item-4">
            <div class="img4"></div>
        </div> -->
    </div>
</main>

<?php include 'inc/footer.php' ?>