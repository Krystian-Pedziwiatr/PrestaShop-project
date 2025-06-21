function toggleLogo() {
  // Desktop logo
  const desktopLogo = document.querySelector('#_desktop_logo img.logo');
  if (desktopLogo) {
    if (document.body.classList.contains('dark-theme')) {
      desktopLogo.src = 'modules/psdarkmode/views/img/logo-white.png'; // białe logo desktop
    } else {
      desktopLogo.src = 'http://localhost:8080/img/logo-1750511426.jpg'; // oryginalne desktop
    }
  }

  // Mobile logo
  const mobileLogo = document.querySelector('#_mobile_logo img.logo');
  if (mobileLogo) {
    if (document.body.classList.contains('dark-theme')) {
      mobileLogo.src = 'modules/psdarkmode/views/img/logo-white.png'; // białe logo mobile
    } else {
      mobileLogo.src = 'http://localhost:8080/img/logo-1750511426.jpg'; // oryginalne mobile
    }
  }
}


function updateIcons() {
  // Obsługa obu ikon: desktop i mobile
  const icons = [
    document.getElementById('darkmode-icon'),
    document.getElementById('darkmode-icon-mobile')
  ];

  icons.forEach(icon => {
    if (!icon) return;
    if (document.body.classList.contains('dark-theme')) {
      icon.src = 'modules/psdarkmode/views/img/sun.svg';
      icon.alt = 'Tryb jasny';
    } else {
      icon.src = 'modules/psdarkmode/views/img/moon.svg';
      icon.alt = 'Tryb ciemny';
    }
  });
}

function toggleDarkMode() {
  document.body.classList.toggle('dark-theme');
  toggleLogo();
  updateIcons();

  // Zapisz preferencję w localStorage
  localStorage.setItem('theme', document.body.classList.contains('dark-theme') ? 'dark' : 'light');
}

function initDarkMode() {
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    document.body.classList.add('dark-theme');
  }
  toggleLogo();
  updateIcons();
}

document.addEventListener('DOMContentLoaded', () => {
  // Wstaw przycisk mobilny dynamicznie do diva #_darkmode_mobile
  const mobileContainer = document.getElementById('_darkmode_mobile');
  if (mobileContainer) {
    mobileContainer.innerHTML = `
      <button aria-label="Zmień motyw" class="btn btn-darkmode" onclick="toggleDarkMode()" style="background:none; border:none; margin-right: -25px; cursor:pointer;">
        <img src="modules/psdarkmode/views/img/moon.svg" id="darkmode-icon-mobile" alt="Tryb ciemny" width="20" height="20" />
      </button>
    `;
  }

  // Dopiero po wstawieniu przycisku inicjuj tryb i zaktualizuj ikony
  initDarkMode();
});
