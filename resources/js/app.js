// Theme toggler: light | dark | system
(function () {
  const STORAGE_KEY = 'theme-mode'; // 'light' | 'dark' | 'system'
  const docEl = document.documentElement;
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');

  function getStoredMode() {
    const v = localStorage.getItem(STORAGE_KEY);
    return v === 'light' || v === 'dark' || v === 'system' ? v : 'system';
  }

  function setStoredMode(mode) {
    localStorage.setItem(STORAGE_KEY, mode);
  }

  function isDarkActive(mode) {
    if (mode === 'dark') return true;
    if (mode === 'light') return false;
    return prefersDark.matches; // system
  }

  function applyMode(mode) {
    const dark = isDarkActive(mode);
    docEl.classList.toggle('dark', dark);
    updateButtonIcon(dark);
  }

  function updateButtonIcon(dark) {
    const btn = document.getElementById('theme-toggle');
    if (!btn) return;
    const sun = btn.querySelector('[data-icon="sun"]');
    const moon = btn.querySelector('[data-icon="moon"]');
    if (sun) sun.classList.toggle('hidden', dark);
    if (moon) moon.classList.toggle('hidden', !dark);
  }

  function cycleMode(mode) {
    // system -> light -> dark -> system
    if (mode === 'system') return 'light';
    if (mode === 'light') return 'dark';
    return 'system';
  }

  // Init
  let mode = getStoredMode();
  applyMode(mode);

  // React to system changes only when in system mode
  prefersDark.addEventListener('change', () => {
    if (getStoredMode() === 'system') applyMode('system');
  });

  // Button handler
  document.addEventListener('click', (e) => {
    const btn = e.target.closest('#theme-toggle');
    if (!btn) return;
    mode = cycleMode(getStoredMode());
    setStoredMode(mode);
    applyMode(mode);
    // Optional: update title to reflect current mode
    const mapTitle = { system: 'Tema: Sistem', light: 'Tema: Terang', dark: 'Tema: Gelap' };
    btn.title = mapTitle[mode];
  });
})();

