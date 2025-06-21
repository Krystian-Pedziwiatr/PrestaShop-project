<div id="custom-style-menu" class="custom-style-container">
  <button class="btn-style-toggle" onclick="toggleStyleMenu()" aria-label="Ustawienia wyglądu">
    <img src="{$module_dir}views/img/style.svg" alt="Style" width="24" height="24">
  </button>
  <div id="style-dropdown" class="style-dropdown hidden">
    <p><strong>Styl tekstu:</strong></p>
    <button onclick="document.body.classList.toggle('large-text')">Większy tekst</button>
    <button onclick="document.body.classList.toggle('bold-text')">Pogrubienie</button>
    <hr>
    <p><strong>Motyw kolorystyczny:</strong></p>
    <button onclick="setColorTheme('blue')">Niebieski</button>
    <button onclick="setColorTheme('green')">Zielony</button>
  </div>
</div>
