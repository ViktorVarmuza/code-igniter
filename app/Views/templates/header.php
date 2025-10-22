<?php
$current_page = basename($_SERVER['PHP_SELF']);
$pages = [
  base_url("index.php") => "Domů",
  base_url("hraci.php") => "Hráči",
  base_url("zapasy.php") => "Zápasy",
  base_url("tabulka.php") => "Novinky"
];
?>


<nav class="bg-blue shadow-md px-6 py-4 ">
  <div class="px-auto pe-7 mx-auto flex justify-between items-center">
    <!-- Logo -->
    <a href="index.php" class="text-2xl font-extrabold text-blue-600 tracking-tight">
      <img src="<?= base_url('images/logo.png')?>" alt="Logo" class="h-12 w-auto" />
    </a>

    <!-- Menu (desktop) -->
    <ul class="hidden md:flex space-x-8 font-medium">

      <?php foreach ($pages as $file => $title): ?>
        <li>
          <a href="<?= $file ?>"
            class="<?= $current_page == $file ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' ?>">
            <?= $title ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <!-- Button (mobile) -->
    <button id="menu-btn" class="md:hidden hover:text-blue-600 focus:outline-none text-gray-700 text-2xl">
      ☰
    </button>
  </div>

  <!-- Mobile menu -->
  <!-- Mobile menu -->
  <div id="mobile-menu"
    class="mobil-hidden mt-3  md:hidden space-y-2 bg-white shadow-lg rounded-lg">

    <?php foreach ($pages as $file => $title): ?>
      <a href="<?= $file ?>"
        class="block <?= $current_page == $file ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' ?> transition">
        <?= $title ?>
      </a>
    <?php endforeach; ?>
  </div>




</nav>

<script>
  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("mobile-menu");

  btn.addEventListener("click", () => {
    menu.classList.toggle("mobil-open");

  });
</script>