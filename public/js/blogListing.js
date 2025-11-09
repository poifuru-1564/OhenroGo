document.addEventListener("DOMContentLoaded", () => {
    const toggles = document.querySelectorAll(".category-toggle-button");

    toggles.forEach((btn) => {
        btn.addEventListener("click", () => {
            const menu = btn.nextElementSibling;
            menu.classList.toggle("open");
        });
    });
});
