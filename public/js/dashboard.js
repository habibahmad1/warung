const burgerMenu = document.querySelector(".burger-navbar");
const sidebarPhone = document.querySelector("#sidebar-phone");

if (burgerMenu) {
    burgerMenu.addEventListener("click", () => {
        if (sidebarPhone.style.display === "block") {
            sidebarPhone.style.display = "none";
        } else if (sidebarPhone.style.width === "600px") {
            sidebarPhone.style.display = "none";
        } else {
            sidebarPhone.style.display = "none";
        }
    });
}
