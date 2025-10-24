<script src="<?= base_url("scripts/carousel.js")?>"></script>
<script>
  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("mobile-menu");

  btn.addEventListener("click", () => {
    menu.classList.toggle("mobil-open");

  });
</script>