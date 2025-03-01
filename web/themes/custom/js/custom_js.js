document.addEventListener("DOMContentLoaded", function () {
    console.log("Dropdown script loaded");

    document.querySelectorAll(".menu__item--has-children > a").forEach(function (menuLink) {
        menuLink.addEventListener("click", function (e) {
            e.preventDefault(); // Stop page refresh

            let parentItem = this.parentElement;

            console.log("Clicked on:", this.textContent);

            // Toggle submenu visibility
            let submenu = parentItem.querySelector(".menu--level-2");
            if (submenu) {
                submenu.style.display = submenu.style.display === "block" ? "none" : "block";
            }
        });
    });

    // Optional: Close submenu when clicking outside
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".menu__item--has-children")) {
            document.querySelectorAll(".menu--level-2").forEach(function (submenu) {
                submenu.style.display = "none";
            });
        }
    });
});
