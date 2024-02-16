 // Function to toggle between dark and light themes
 function toggleTheme() {
    const body = document.body;
    body.classList.toggle('dark');
  }

  // Event listener for the theme toggle button
  document.getElementById('theme-toggle-btn').addEventListener('click', toggleTheme);