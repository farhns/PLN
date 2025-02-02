document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("accordionSidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("toggled");
    });
});

