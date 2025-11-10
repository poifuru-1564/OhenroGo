document.addEventListener("DOMContentLoaded", () => {
    const categoryItems = document.querySelectorAll(".category-item");

    categoryItems.forEach((item) => {
        const button = item.querySelector(".category-toggle-button");
        const menu = item.querySelector(".category-menu");
        const options = menu.querySelectorAll("p");

        //When button is clicked, toggle down the menu
        button.addEventListener("click", (e) => {
            e.stopPropagation();
            closeAllMenus(); // close other menus
            menu.classList.toggle("open");
        });

        // When an option is clicked, update the category name
        options.forEach((option) => {
            option.addEventListener("click", (e) => {
                e.stopPropagation();
                button.textContent = option.textContent; // Update button text
                menu.classList.remove("open"); // Close menu
            });
        });
    });

    // When anywhere on the screen is clicked, close all menus
    document.addEventListener("click", () => {
        closeAllMenus();
    });

    function closeAllMenus() {
        document
            .querySelectorAll(".category-menu.open")
            .forEach((menu) => menu.classList.remove("open"));
    }
});

// When a category is selected, add the active class
document.querySelectorAll(".category-menu li").forEach((item) => {
    item.addEventListener("click", () => {
        // Remove all other active classes
        document.querySelectorAll(".category-menu li").forEach((i) => {
            i.classList.remove("active");
        });

        // Only the clicked one is active
        item.classList.add("active");

        // If you want to change the button display name
        const button = item
            .closest(".category-box")
            .querySelector(".category-toggle-button");
        button.textContent = item.textContent;
    });
});
