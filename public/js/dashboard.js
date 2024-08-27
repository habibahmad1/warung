const burgerMenu = document.querySelector(".burger-navbar");
const sidebarPhone = document.querySelector("#sidebar-phone");

if (burgerMenu) {
    burgerMenu.addEventListener("click", () => {
        sidebarPhone.classList.toggle("visible");
    });
}
