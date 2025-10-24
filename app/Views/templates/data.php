
<?php
$matches = [
    ["date" => "2025-09-01", "home" => "Sigma Olomouc", "home_country" => "cz", "away" => "Sparta Praha", "away_country" => "cz", "score" => "2:1"],
    ["date" => "2025-08-25", "home" => "Slavia Praha", "home_country" => "cz", "away" => "Sigma Olomouc", "away_country" => "cz", "score" => "1:3"],
    ["date" => "2025-08-18", "home" => "Sigma Olomouc", "home_country" => "cz", "away" => "Baník Ostrava", "away_country" => "cz", "score" => "0:0"],
    ["date" => "2025-08-11", "home" => "Bohemians 1905", "home_country" => "cz", "away" => "Sigma Olomouc", "away_country" => "cz", "score" => "1:2"],
    ["date" => "2025-08-04", "home" => "Sigma Olomouc", "home_country" => "cz", "away" => "Viktoria Plzeň", "away_country" => "cz", "score" => "1:1"],
    ["date" => "2025-07-28", "home" => "Slovan Liberec", "home_country" => "cz", "away" => "Sigma Olomouc", "away_country" => "cz", "score" => "2:2"],
];
?>
<div class="max-w-4xl mx-auto mt-10 overflow-x-auto">
    <table class="min-w-full border border-gray-300 rounded-lg table-auto text-sm md:text-base">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-2 py-1 md:px-4 md:py-2 text-left w-24">Datum</th>
                <th class="px-2 py-1 md:px-4 md:py-2 text-left w-48">Domácí</th>
                <th class="px-2 py-1 md:px-4 md:py-2 text-left w-48">Hosté</th>
                <th class="px-2 py-1 md:px-4 md:py-2 text-left w-24">Výsledek</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php foreach ($matches as $match): ?>
                <tr class="border-t border-gray-200 hover:bg-gray-50">
                    <td class="px-2 py-1 md:px-4 md:py-2 whitespace-nowrap"><?= $match['date'] ?></td>
                    <td class="px-2 py-1 md:px-4 md:py-2 whitespace-nowrap">
                        <span class="fi fi-<?= $match['home_country'] ?> inline-block mr-1 md:mr-2"></span>
                        <?= $match['home'] ?>
                    </td>
                    <td class="px-2 py-1 md:px-4 md:py-2 whitespace-nowrap">
                        <span class="fi fi-<?= $match['away_country'] ?> inline-block mr-1 md:mr-2"></span>
                        <?= $match['away'] ?>
                    </td>
                    <td class="px-2 py-1 md:px-4 md:py-2 whitespace-nowrap"><?= $match['score'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
