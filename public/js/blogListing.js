// document.addEventListener("DOMContentLoaded", () => {
//     const categoryItems = document.querySelectorAll(".category-item");

//     categoryItems.forEach((item) => {
//         const button = item.querySelector(".category-toggle-button");
//         const menu = item.querySelector(".category-menu");
//         const options = menu.querySelectorAll("p");

//         //When button is clicked, toggle down the menu
//         button.addEventListener("click", (e) => {
//             e.stopPropagation();
//             closeAllMenus(); // close other menus
//             menu.classList.toggle("open");
//         });

//         // When an option is clicked, update the category name
//         options.forEach((option) => {
//             option.addEventListener("click", (e) => {
//                 e.stopPropagation();
//                 button.textContent = option.textContent; // Update button text
//                 menu.classList.remove("open"); // Close menu
//             });
//         });
//     });

//     // When anywhere on the screen is clicked, close all menus
//     document.addEventListener("click", () => {
//         closeAllMenus();
//     });

//     function closeAllMenus() {
//         document
//             .querySelectorAll(".category-menu.open")
//             .forEach((menu) => menu.classList.remove("open"));
//     }
// });

// // When a category is selected, add the active class
// document.querySelectorAll(".category-menu li").forEach((item) => {
//     item.addEventListener("click", () => {
//         // Remove all other active classes
//         document.querySelectorAll(".category-menu li").forEach((i) => {
//             i.classList.remove("active");
//         });

//         // Only the clicked one is active
//         item.classList.add("active");

//         // If you want to change the button display name
//         const button = item
//             .closest(".category-box")
//             .querySelector(".category-toggle-button");
//         button.textContent = item.textContent;
//     });
// });

var templeObject = {
    1: [
        "No. 1 Ryozenji",
        "No. 2 Gokurakuji",
        "No. 3 Konsenji",
        "No. 4 Dainichiji",
        "No. 5 Jizoji",
        "No. 6 Anrakuji",
        "No. 7 Jurakuji",
        "No. 8 Kumadanji",
        "No. 9 Horinji",
        "No. 10 Kirihataji",
        "No. 11 Fujiidera",
        "No. 12 Shosanji",
        "No. 13 Dainichiji",
        "No. 14 Jorakuji",
        "No. 15 Awa-Kokubunji",
        "No. 16 Kannonji",
        "No. 17 Idoji",
        "No. 18 Onzanji",
        "No. 19 Tatsueji",
        "No. 20 Kakurinji",
        "No. 21 Tairyuji",
        "No. 22 Byodoji",
        "No. 23 Yakuoji",
    ],
    2: [
        "Hotsumisakiji",
        "Shinshoji",
        "Kongochoji",
        "Konomineji",
        "Dainichiji",
        "Tosa Kokubunji",
        "Zenrakuji",
        "Chikurinji",
        "Zenjibuji",
        "Sekkeiji",
        "Tanemaji",
        "Kiyotakiji",
        "Shoryuji",
        "Iwamotoji",
        "Kongofukuji",
        "Enkoji",
    ],
    3: [
        "Kanjizaiji",
        "Ryuukouji",
        "Butsumuokuji",
        "Meisekiji",
        "Daihoji",
        "Iwayaji",
        "Joruriji",
        "Yasakaji",
        "Sairinji",
        "Jodoji",
        "Hantaji",
        "Ishiteji",
        "Taisanji",
        "Enmyoji",
        "Enmeiji",
        "Nankobo",
        "Taisanji",
        "Eifukuji",
        "Senyuji",
        "Iyo Kokubunji",
        "Yokomineji",
        "Koonji",
        "Hojuji",
        "Kichijoji",
        "Maegamiji",
        "Sankakuji",
    ],
    4: [
        "Unpenji",
        "Daikoji",
        "Jinnein",
        "Kannonji",
        "Motoyamaji",
        "Iyadaniji",
        "Mandaraji",
        "Shussakaji",
        "Koyamaji",
        "Zentsuji",
        "Konzoji",
        "Doryuji",
        "Goshoji",
        "Tennoji",
        "Sanuki Kokubunji",
        "Shiromineji",
        "Negoroji",
        "Ichinomiyaji",
        "Yashimaji",
        "Yakuriji",
        "Shidoji",
        "Nagaoji",
        "Okuboji",
    ],
};

var prefecture = document.getElementById("selected_prefecture");
var temple = document.getElementById("selected_temple");

prefecture.onchange = function () {
    temple.length = 1;
    for (var i in templeObject[this.value]) {
        value = templeObject[this.value][i];
        temple.options[temple.options.length] = new Option(value, value);
    }
};
