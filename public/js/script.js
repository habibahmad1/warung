const homeNavbar = document.querySelectorAll(".homeNavbar li");

if (homeNavbar) {
    homeNavbar.forEach((item) => {
        item.addEventListener("click", () => {
            homeNavbar.forEach((li) => {
                li.classList.remove("active-navbar");
            });

            item.classList.add("active-navbar");
        });
    });
}
