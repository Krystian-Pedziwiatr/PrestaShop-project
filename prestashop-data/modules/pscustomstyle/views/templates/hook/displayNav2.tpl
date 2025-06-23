<div id="custom-style-menu" class="custom-style-container">
  <!-- Przycisk z ikoną -->
  <button class="btn-style-toggle" onclick="toggleStyleMenu()" aria-label="Ustawienia wyglądu">
    <img src="{$module_dir}views/img/style-black.svg" id="settings-icon" alt="Style" width="24" height="24">
  </button>

  <!-- Panel rozwijany -->
  <div id="style-dropdown" class="style-dropdown hidden">
    <!-- Nagłówek panelu -->
    <div class="style-header">
      <h2>🎨 Panel personalizacji</h2>
    </div>

    <hr>

    <!-- Sekcja: Dostosuj wygląd sklepu -->
    <section class="style-section">
      <h3>Dostosuj wygląd sklepu</h3>
      <p>W tej sekcji możesz zmienić kolorystykę interfejsu, wybierając kolory, które idealnie pasują do Ciebie.</p>
      <label for="primary-color">Wybierz kolor główny:</label>
      <input type="color" id="primary-color" name="primary-color" value="#3366cc">
      <br>
      <label for="secondary-color">Wybierz kolor dodatkowy:</label>
      <input type="color" id="secondary-color" name="secondary-color" value="#ff6600">
      <br><br>
      <button onclick="saveColorSettings()">Zapisz</button>
    </section>

    <hr>

    <!-- Sekcja: Styl tekstu -->
    <section class="style-section">
      <h3>Ustawienia stylu strony</h3>
      <p>Wybierz preferowany styl tekstu oraz czcionkę:</p>
      <button onclick="toggleLargeText()">Większy tekst</button>
      <button onclick="toggleBoldText()">Pogrubienie</button>
      <br><br>
      <label for="font-select">Czcionka:</label>
      <select id="font-select" onchange="changeFont(this.value)">
        <option value="Arial, sans-serif">Arial</option>
        <option value="Georgia, serif">Georgia</option>
        <option value="Verdana, sans-serif">Verdana</option>
        <option value="Tahoma, sans-serif">Tahoma</option>
        <option value="Courier New, monospace">Courier New</option>
      </select>
    </section>
    

    <hr>

    <!-- Sekcja: Układ menu głównego -->
    <section class="style-section">
      <h3>Zarządzanie układem menu głównego</h3>
      <p>(Wkrótce dostępne)</p>
    </section>

    <hr>

    <!-- Sekcja: Centrum stylizacji -->
    <section class="style-section">
      <h3>Centrum stylizacji</h3>
      <p>Przywróć domyślny wygląd sklepu.</p>
      <button onclick="resetStyleSettings()">Usuń wszystkie zmiany</button>
    </section>
  </div>
</div>
