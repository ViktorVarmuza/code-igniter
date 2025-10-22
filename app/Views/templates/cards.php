<?php
$folder = "images/players";
$files = array_filter(scandir($folder), fn($file) => $file !== "." && $file !== "..");


$names = [];
$descriptions = [
    "Je to fotbalista, který rád hraje v útoku.",
    "Obránce, který se nikdy nevzdává.",
    "Brankář s rychlými reflexy.",
    "Záložník, co má dobrou přihrávku.",
    "Útočník, který umí dávat góly.",
    "Fotbalista s velkou energií.",
    "Týmový hráč, co podporuje spoluhráče.",
    "Sportovec, který se stále zlepšuje.",
    "Hráč s chutí vyhrávat a bojovat."
];
foreach ($files as $file) {
    $names[] = ucwords(str_replace("-", " ", pathinfo($file, PATHINFO_FILENAME)));
}
$nationalities = [
    "Breite Radim" => "cz",
    "Dele Ola" => "ng",
    "Digana Tomas" => "sk",
    "Dohnalek Adam" => "cz",
    "Hadas Matej" => "cz",
    "Kliment Jan" => "cz",
    "Muritala Yunusa" => "ng",
    "Slama Jiri" => "cz",
    "Stoppen Tadeas" => "cz",
];


?>


<?php foreach ($files as $index => $file): ?>
    <div class="flex rounded-2xl shadow hover:shadow-lg overflow-hidden ring-1 ring-gray-200">
        <div class="relative w-50 h-100 flex-shrink-0">
            <span class="fi fi-<?= $nationalities[$names[$index - 2]] ?? '' ?> absolute top-2 left-2 rounded shadow"></span>
            <img src="images/players/<?= $file ?>" alt="Ukázkový obrázek" class="w-full h-full object-cover" />
        </div>
        <div class="p-5 flex flex-col justify-between flex-1">
            <div>
                <h2 class="text-lg font-semibold text-gray-900"><?= $names[$index - 2] ?></h2>
                <p class="text-sm text-gray-600 mt-2">
                    <?= $descriptions[$index - 2] ?>
                </p>
            </div>
        </div>
    </div>
<?php endforeach; ?>