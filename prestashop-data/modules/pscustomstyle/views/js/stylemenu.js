function toggleStyleMenu() {
  const menu = document.getElementById('style-dropdown');
  if (menu) {
    menu.classList.toggle('visible');
  }
}

function setColorTheme(color) {
  document.body.classList.remove('theme-blue', 'theme-green');
  if (color === 'blue') {
    document.body.classList.add('theme-blue');
  } else if (color === 'green') {
    document.body.classList.add('theme-green');
  }

  localStorage.setItem('customThemeColor', color);
}

document.addEventListener('DOMContentLoaded', () => {
  const savedColor = localStorage.getItem('customThemeColor');
  if (savedColor) {
    setColorTheme(savedColor);
  }
});
