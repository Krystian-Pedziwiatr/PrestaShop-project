function toggleStyleMenu(context = 'desktop') {
  const id = context === 'mobile' ? 'style-dropdown-mobile' : 'style-dropdown';
  const menu = document.getElementById(id);
  if (menu) {
    menu.classList.toggle('visible');
    menu.classList.toggle('hidden');
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const mobileSettingsContainer = document.getElementById('_settings_mobile');

  if (mobileSettingsContainer) {
    mobileSettingsContainer.innerHTML = `
      <div id="custom-style-menu-mobile" class="custom-style-container">
        <button class="btn-style-toggle" onclick="toggleStyleMenu('mobile')" aria-label="Ustawienia wyglądu">
          <img src="modules/pscustomstyle/views/img/settings-black-logo.svg" id="settings-icon-mobile" alt="Style" width="24" height="24">
        </button>

        <div id="style-dropdown-mobile" class="style-dropdown hidden">
          <div class="style-header">
            <h2>🎨 Panel personalizacji</h2>
          </div>

          <section class="style-section">
            <h3>Dostosuj wygląd sklepu</h3>
            <p>W tej sekcji możesz zmienić kolorystykę interfejsu, wybierając kolory, które idealnie pasują do Ciebie.</p>
            <label for="primary-color-mobile">Wybierz kolor główny:</label>
            <input type="color" id="primary-color-mobile" name="primary-color-mobile" value="#3366cc">
            <br>
            <label for="secondary-color-mobile">Wybierz kolor dodatkowy:</label>
            <input type="color" id="secondary-color-mobile" name="secondary-color-mobile" value="#ff6600">
            <br><br>
            <button onclick="saveColorSettings(true)">Zapisz</button>
          </section>

          <hr>

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

          <section class="style-section">
            <h3>Zarządzanie układem menu głównego</h3>
            <p>(Wkrótce dostępne)</p>
          </section>

          <hr>

          <section class="style-section">
            <h3>Centrum stylizacji</h3>
            <p>Przywróć domyślny wygląd sklepu.</p>
            <button onclick="resetStyleSettings()">Usuń wszystkie zmiany</button>
          </section>
        </div>
      </div>
    `;
  }
});

function setColorTheme(colorName, fromInput = false) {
  // Usunięcie ewentualnych klas stylizacyjnych (np. tekstowych)
  document.body.classList.remove('large-text', 'bold-text');

  if (colorName === 'custom') {
    // Kolory odczytane z inputów (desktop lub mobile)
    const primary =
      getColorInputValue('primary-color') ||
      getColorInputValue('primary-color-mobile') ||
      '#FFFFFF';

    const secondary =
      getColorInputValue('secondary-color') ||
      getColorInputValue('secondary-color-mobile') ||
      '#F6F6F6';

    saveCustomColors(primary, secondary);
  } else {
    // Reset do stylu domyślnego sklepu
    resetCssVariables();
  }

  if (!fromInput) {
    localStorage.setItem('customThemeColor', colorName);
  }
}

function saveColorSettings(isMobile = false) {
  const primaryId = isMobile ? 'primary-color-mobile' : 'primary-color';
  const secondaryId = isMobile ? 'secondary-color-mobile' : 'secondary-color';

  const primaryColor = getColorInputValue(primaryId);
  const secondaryColor = getColorInputValue(secondaryId);

  if (primaryColor && secondaryColor) {
    saveCustomColors(primaryColor, secondaryColor);
    localStorage.setItem('customThemeColor', 'custom');
  }
}

function saveCustomColors(primary, secondary) {
  document.documentElement.style.setProperty('--primary-color', primary);
  document.documentElement.style.setProperty('--secondary-color', secondary);

  localStorage.setItem('customPrimaryColor', primary);
  localStorage.setItem('customSecondaryColor', secondary);
}

function resetCssVariables() {
  document.documentElement.style.removeProperty('--primary-color');
  document.documentElement.style.removeProperty('--secondary-color');

  localStorage.removeItem('customPrimaryColor');
  localStorage.removeItem('customSecondaryColor');
}

function getColorInputValue(id) {
  const input = document.getElementById(id);
  return input ? input.value : null;
}

function loadCustomColors() {
  const savedColor = localStorage.getItem('customThemeColor');
  const primary = localStorage.getItem('customPrimaryColor');
  const secondary = localStorage.getItem('customSecondaryColor');

  if (savedColor === 'custom' && primary && secondary) {
    document.documentElement.style.setProperty('--primary-color', primary);
    document.documentElement.style.setProperty('--secondary-color', secondary);
  } else {
    resetCssVariables();
  }

  // Ustaw inputy kolorów, jeśli istnieją w DOM
  const inputs = [
    'primary-color',
    'secondary-color',
    'primary-color-mobile',
    'secondary-color-mobile',
  ];

  inputs.forEach((id) => {
    const el = document.getElementById(id);
    if (el) {
      if (id.includes('primary') && primary) el.value = primary;
      if (id.includes('secondary') && secondary) el.value = secondary;
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  // Załaduj styl tekstu
  if (localStorage.getItem('largeTextEnabled') === 'true') {
    document.body.classList.add('large-text');
  }

  if (localStorage.getItem('boldTextEnabled') === 'true') {
    document.body.classList.add('bold-text');
  }

  // Załaduj czcionkę
  const savedFont = localStorage.getItem('selectedFont');
  if (savedFont) {
    document.body.style.fontFamily = savedFont;

    // Ustaw font w select (desktop i mobile)
    const fontSelects = document.querySelectorAll('#font-select, #font-select-mobile');
    fontSelects.forEach(select => {
      if (select) {
        select.value = savedFont;
      }
    });
  }
});

// Przełączanie stylów tekstu
function toggleLargeText() {
  const isActive = document.body.classList.toggle('large-text');
  localStorage.setItem('largeTextEnabled', isActive);
}

function toggleBoldText() {
  const isActive = document.body.classList.toggle('bold-text');
  localStorage.setItem('boldTextEnabled', isActive);
}

// Zmiana czcionki
function changeFont(font) {
  document.body.style.fontFamily = font;
  localStorage.setItem('selectedFont', font);
}

// Reset wszystkich stylów i preferencji
function resetStyleSettings() {
  // Usuń dane z localStorage
  localStorage.removeItem('customThemeColor');
  localStorage.removeItem('customPrimaryColor');
  localStorage.removeItem('customSecondaryColor');
  localStorage.removeItem('largeTextEnabled');
  localStorage.removeItem('boldTextEnabled');
  localStorage.removeItem('selectedFont');

  // Usuń zmienne CSS
  document.documentElement.style.removeProperty('--primary-color');
  document.documentElement.style.removeProperty('--secondary-color');

  // Reset klas
  document.body.classList.remove('large-text', 'bold-text');

  // Reset czcionki
  document.body.style.fontFamily = '';

  // Reset dropdownów fontu (jeśli są)
  const fontSelects = document.querySelectorAll('#font-select, #font-select-mobile');
  fontSelects.forEach(select => {
    if (select) {
      select.value = '';
    }
  });

  // (Opcjonalnie) przywróć domyślny motyw (jeśli masz jakąś wersję startową)
  // setColorTheme('default');
}
