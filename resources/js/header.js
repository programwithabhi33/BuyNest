// Mobile Menu Toggle Function
function toggleMobileMenu() {
  const menu = document.getElementById("mobileMenu");
  const menuIcon = document.getElementById("menuIcon");
  const menuButton = document.getElementById("mobileMenuButton");

  if (!menu || !menuIcon || !menuButton) return;

  // Toggle menu visibility
  menu.classList.toggle("hidden");

  // Toggle icon between bars and times (cross)
  if (menu.classList.contains("hidden")) {
    menuIcon.classList.remove("fa-times");
    menuIcon.classList.add("fa-bars");
    menuButton.classList.remove("rotate-90");
  } else {
    menuIcon.classList.remove("fa-bars");
    menuIcon.classList.add("fa-times");
    menuButton.classList.add("rotate-90");
  }
}

// Make toggleMobileMenu available globally for onclick handler
window.toggleMobileMenu = toggleMobileMenu;

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
  const menu = document.getElementById("mobileMenu");
  const menuButton = document.getElementById("mobileMenuButton");

  if (!menu || !menuButton) return;

  // Close mobile menu when clicking outside
  document.addEventListener("click", function (event) {
    if (!menu.contains(event.target) && !menuButton.contains(event.target)) {
      if (!menu.classList.contains("hidden")) {
        toggleMobileMenu();
      }
    }
  });

  // Close mobile menu on window resize to desktop size
  window.addEventListener("resize", function () {
    if (window.innerWidth >= 768 && !menu.classList.contains("hidden")) {
      toggleMobileMenu();
    }
  });
});
