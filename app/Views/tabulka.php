<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php include 'pages/header.php'; ?>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 m-7">
        <!-- Velký článek vlevo -->
        <div class="relative aspect-square rounded-2xl overflow-hidden border-gray-400 border-4 shadow-md">
            <img
                src="images/olo-mbl/sigma-boleslav-2425-2-1.jpg"
                alt="Béčko prohrálo v Polsku se Zagłębií Sosnowiec"
                class="w-full h-full object-cover" />
            <div class="absolute bottom-4 left-4 text-white">
                <h2 class="text-xl font-bold drop-shadow-lg">
                    Béčko prohrálo v Polsku se Zagłębií Sosnowiec
                </h2>
                <p class="text-sm opacity-80">9.7.2025</p>
            </div>
        </div>

        <!-- Pravý blok 2x2 menších článků -->
        <div class="grid grid-cols-2 grid-rows-2 gap-4 aspect-square">
            <div class="relative rounded-2xl overflow-hidden shadow-md border-gray-400 border-4 shadow-md">
                <img
                    src="images/olo-mbl/sigma-boleslav-2425-3-7.jpg"
                    alt="David Tkáč: Opouštím svou bublinu, ale tenhle krok byl potřeba"
                    class="w-full h-full object-cover" />
                <div class="absolute bottom-2 left-2 text-black">
                    <h3 class="text-sm font-semibold drop-shadow-md">
                        David Tkáč: Opouštím svou bublinu, ale tenhle krok byl potřeba
                    </h3>
                    <p class="text-xs opacity-80">7.7.2025</p>
                </div>
            </div>

            <div class="relative rounded-2xl overflow-hidden shadow-md border-gray-400 border-4 shadow-md">
                <img
                    src="images/olo-mbl/sigma-boleslav-2425-4-5.jpg"
                    alt="Janotka: Spokojenost s výsledkem i hrou. Byli jsme dominantní"
                    class="w-full h-full object-cover" />
                <div class="absolute bottom-2 left-2 text-black">
                    <h3 class="text-sm font-semibold drop-shadow-md">
                        Janotka: Spokojenost s výsledkem i hrou. Byli jsme dominantní
                    </h3>
                    <p class="text-xs opacity-80">4.7.2025</p>
                </div>
            </div>

            <div class="relative rounded-2xl overflow-hidden shadow-md border-gray-400 border-4 shadow-md">
                <img
                    src="images/olo-mbl/sigma-boleslav-2425-4-8.jpg"
                    alt="Janošek zapsal při debutu 1+1. Byl jsem natěšený, hlásil"
                    class="w-full h-full object-cover" />
                <div class="absolute bottom-2 left-2 text-black">
                    <h3 class="text-sm font-semibold drop-shadow-md">
                        Janošek zapsal při debutu 1+1. Byl jsem natěšený, hlásil
                    </h3>
                    <p class="text-xs opacity-80">4.7.2025</p>
                </div>
            </div>

            <div class="relative rounded-2xl overflow-hidden shadow-md border-gray-400 border-4 shadow-md">
                <img
                    src="images/olo-mbl/sigma-boleslav-2425-53.jpg"
                    alt="Permanentky na sezonu 2025/26 jsou v prodeji"
                    class="w-full h-full object-cover" />
                <div class="absolute bottom-2 left-2 text-black">
                    <h3 class="text-sm font-semibold drop-shadow-md">
                        Permanentky na sezonu 2025/26 jsou v prodeji
                    </h3>
                    <p class="text-xs opacity-80">16.6.2025</p>
                </div>
            </div>
        </div>
    </div>



</body>

</html>