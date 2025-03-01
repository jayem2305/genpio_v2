document.addEventListener("DOMContentLoaded", function () {
    console.log("Dropdown script loaded");

    document.querySelectorAll(".menu__item--has-children > a").forEach(function (menuLink) {
        menuLink.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent page jump

            let parentItem = this.parentElement;

            console.log("Clicked on:", this.textContent);

            // Close all other open submenus
            document.querySelectorAll(".menu__item--has-children").forEach(function (item) {
                if (item !== parentItem) {
                    item.classList.remove("active");
                }
            });

            // Toggle the clicked submenu
            parentItem.classList.toggle("active");
            console.log("Active state:", parentItem.classList.contains("active"));
        });
    });

    // Close menu if clicked outside
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".menu__item--has-children")) {
            document.querySelectorAll(".menu__item--has-children").forEach(function (item) {
                item.classList.remove("active");
            });
        }
    });
});
