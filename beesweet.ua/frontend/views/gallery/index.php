<?php
use frontend\assets\GalleryAsset;

GalleryAsset::register($this);

?>

<h2>Gallery</h2>

<div class="portfolioFilter">

    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".people">People</a>
    <a href="#" data-filter=".places">Places</a>
    <a href="#" data-filter=".food">Food</a>
    <a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

    <div class="objects">
        <img src="/files/photos/1.png" alt="image">
    </div>

    <div class="people places">
        <img src="/files/photos/2.png" alt="image">
    </div>

    <div class="food">
        <img src="/files/photos/3.png" alt="image">
    </div>

    <div class="people places">
        <img src="/files/photos/4.png" alt="image">
    </div>

    <div class="places objects">
        <img src="/files/photos/5.png" alt="image">
    </div>

    <div class="people food objects">
        <img src="/files/photos/6.png" alt="image">
    </div>


</div>
