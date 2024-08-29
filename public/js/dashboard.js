const burgerMenu = document.querySelector(".burger-navbar");
const sidebarPhone = document.querySelector("#sidebar-phone");

if (burgerMenu) {
    burgerMenu.addEventListener("click", () => {
        if (sidebarPhone.style.display === "block") {
            sidebarPhone.style.display = "none";
        } else {
            sidebarPhone.style.display = "block";
        }
    });
}
