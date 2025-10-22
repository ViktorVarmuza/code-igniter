<?= $this->extend('templates/templeta') ?>
<?= $this->section('content') ?>


<?php

$folder = ROOTPATH . 'images/olo-mbl/';
$files = array_filter(scandir($folder), fn($file) => $file !== "." && $file !== "..");
$slides = [
    "Barvy klubu — modrá a bílá: Ikonické klubové barvy viditelné v dresech i celé identitě Sigmy.",
    "Mistr českého poháru 2025: Sigma triumfovala, když ve finále porazila Spartu Praha 3:1.",
    "Zpět ve vyšší soutěži: Po sestupech se Sigma vrátila mezi elitu v sezóně 2017/18 a drží se dodnes.",
    "Cesta českými soutěžemi: Mezi úspěchy patří vítězství v českém Superpoháru a dvakrát v Českém poháru.",
    "Moderní kapitola klubu: Trenér Tomáš Janotka přivedl Sigmu k triumfu a postupu do Evropy.",
    "Výjimečné momenty sezóny: Hvězdou byl Jan Kliment se 22 góly, klíčové trefy ve finále dali Zorvan a Mikulenka.",
    "Mládežnická akademie — líheň talentů: Sigma je známá výchovou mladých hráčů, kteří se prosadili i v reprezentaci.",
    "Evropská vystoupení: Klub se pravidelně objevuje v kvalifikacích evropských pohárů a reprezentuje český fotbal na mezinárodní scéně."
];


?>

<div class="carousel-container relative overflow-hidden ">
    <div class="carousel-wrapper flex transition-transform duration-500">
        <?php foreach ($files as $index => $file): ?>
            <div class="carousel-slide min-w-full flex flex-col md:flex-row">
                <!-- Obrázek -->
                <div class="slide-part w-full md:w-1/2">
                    <img src="<?= base_url('images/olo-mbl/' . $file) ?>"
                        class="w-full h-full object-cover"
                        alt="">

                </div>

                <!-- Text -->
                <div class="slide-part w-full md:w-1/2 bg-black text-white flex items-center justify-center" style="min-height: 30vw;">
                    <h1 class="font-bold text-center carousel-text p-6 text-lg md:text-[1.5vw] leading-snug">
                        <?= $slides[$index - 2] ?>
                    </h1>
                </div>
            </div>

        <?php endforeach; ?>

    </div>




    <!-- Šipky -->
    <button class="prev absolute top-1/2 sm:left-3 md:left-5 -translate-y-1/2 bg-white p-2 sm:p-2 md:p-3 rounded-full shadow z-10">
        <i class="fas fa-chevron-left text-sm sm:text-md md:text-lg text-black"></i>
    </button>
    <button class="next absolute top-1/2 sm:right-3 md:right-5 -translate-y-1/2 bg-white p-2 sm:p-2 md:p-3 rounded-full shadow z-10">
        <i class="fas fa-chevron-right text-sm sm:text-md md:text-lg text-black"></i>
    </button>


    <div class="absolute carousel-dots-div hidden md:flex" style="bottom: 1%; left: 45%;">
        <?php for ($i = 0; $i < count($files); $i++): ?>
            <button class="carousel-dots">
                <i class="fa-solid fa-circle"></i>
            </button>
        <?php endfor; ?>
    </div>


</div>


<?= $this->endSection() ?>