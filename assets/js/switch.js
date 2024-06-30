function setLightMode() {
  document.documentElement.setAttribute('data-bs-theme', 'light');

  document.body.classList.remove('bg-dark');
  document.body.classList.add('bg-light');

  document.querySelectorAll('.bg-dark').forEach((element) => {
    element.classList.replace('bg-dark', 'bg-light');
  });

  document.querySelectorAll('.text-white-50').forEach((element) => {
    element.classList.replace('text-white-50', 'text-black-50');
  });

  document.querySelectorAll('.text-dark-emphasis').forEach((element) => {
    element.classList.replace('text-dark-emphasis', 'text-light-emphasis');
  });

  document.querySelectorAll('.text-white').forEach((element) => {
    element.classList.replace('text-white', 'text-black');
  });

  document.querySelectorAll('.text-light').forEach((element) => {
    element.classList.replace('text-light', 'text-dark');
  });

  document.querySelectorAll('.sidebar-item.active_dark').forEach((element) => {
    element.classList.replace('active_dark', 'active');
  });

  document.querySelectorAll('.sidebar-item-collapse.active_dark').forEach((element) => {
    element.classList.replace('active_dark', 'active');
  });

  document.querySelectorAll('.bg-navbar_dark').forEach((element) => {
    element.classList.replace('bg-navbar_dark', 'bg-navbar');
  });

  document.getElementById('darkmode_icon').textContent = 'light_mode';

  localStorage.setItem('theme', 'light');
  document.querySelectorAll('.lightSwitch').forEach((element) => {
    element.checked = false;
    element.title = 'Switch to Dark Mode';
  });
}

function setDarkMode() {
  document.documentElement.setAttribute('data-bs-theme', 'dark');

  document.body.classList.add('bg-dark');
  document.body.classList.remove('bg-light');

  document.querySelectorAll('.bg-light').forEach((element) => {

    element.classList.replace('bg-light', 'bg-dark');
  });

  document.querySelectorAll('.text-black-50').forEach((element) => {
    element.classList.replace('text-black-50', 'text-white-50');
  });

  document.querySelectorAll('.text-light-emphasis').forEach((element) => {
    element.classList.replace('text-light-emphasis', 'text-dark-emphasis');
  });

  document.querySelectorAll('.text-black').forEach((element) => {
    element.classList.replace('text-black', 'text-white');
  });

  document.querySelectorAll('.text-dark').forEach((element) => {
    element.classList.replace('text-dark', 'text-light');
  });

  document.querySelectorAll('.sidebar-item.active').forEach((element) => {
    element.classList.replace('active', 'active_dark');
  });

  document.querySelectorAll('.sidebar-item-collapse.active').forEach((element) => {
    element.classList.replace('active', 'active_dark');
  });

  document.querySelectorAll('.bg-navbar').forEach((element) => {
    element.classList.replace('bg-navbar', 'bg-navbar_dark');
  });

  document.getElementById('darkmode_icon').textContent = 'dark_mode';

  localStorage.setItem('theme', 'dark');
  document.querySelectorAll('.lightSwitch').forEach((element) => {
    element.checked = true;
    element.title = 'Switch to Light Mode';
  });
}

// Set theme to the user's preferred color scheme or the user's last preference from local storage
function updateTheme() {
  const storedTheme = localStorage.getItem('theme');
  const colorMode = storedTheme || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

  document.querySelector('html').setAttribute('data-bs-theme', colorMode);

  // Update the button state and set the appropriate mode
  if (colorMode === 'dark') {
    setDarkMode();
  } else {
    setLightMode();
  }
}

// Set theme on load
updateTheme();

// Update theme and button state when the preferred scheme changes
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateTheme);

// Handle button click
document.querySelectorAll('.lightSwitch').forEach((element) => {
  element.addEventListener('click', () => {
    if (element.checked) {
      setDarkMode();
    } else {
      setLightMode();
    }
  });
});

// Handle Ctrl + Shift + L key press
document.addEventListener('keydown', function (event) {
  if (event.ctrlKey && event.shiftKey && event.key === 'L') {
    const currentTheme = localStorage.getItem('theme') || 'light';
    if (currentTheme === 'dark') {
      setLightMode();
    } else {
      setDarkMode();
    }
    // Prevent the default browser behavior for Ctrl + Shift + L
    event.preventDefault();
  }
});
