// Function untuk mengaktifkan Dark Mode
function enableDarkMode() {
  document.body.classList.add("dark");
  document.querySelector(".navbar").classList.add("dark-mode");
  document.querySelector(".footer").classList.add("dark-mode");
  document.querySelector(".about").classList.add("dark-mode");
}

// Function untuk menonaktifkan Dark Mode
function disableDarkMode() {
  document.body.classList.remove("dark");
  document.querySelector(".navbar").classList.remove("dark-mode");
  document.querySelector(".footer").classList.remove("dark-mode");
  document.querySelector(".about").classList.remove("dark-mode");
}

// Toggle Dark Mode
function toggleDarkMode() {
  if (document.body.classList.contains("dark")) {
    disableDarkMode();
    localStorage.setItem("dark-mode", "false");
  } else {
    enableDarkMode();
    localStorage.setItem("dark-mode", "true");
  }
}

// Memeriksa status Dark Mode pada saat memuat halaman
window.addEventListener("load", function () {
  const darkMode = localStorage.getItem("dark-mode");
  if (darkMode === "true") {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
});

// Event listener untuk tombol Dark Mode
document
  .getElementById("dark-mode-button")
  .addEventListener("click", toggleDarkMode);
