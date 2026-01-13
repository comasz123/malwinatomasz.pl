document.addEventListener("scroll", function () {
    const header = document.getElementById("site-header");
    if (window.scrollY > 50) {
    header.classList.add("scrolled");
} else {
    header.classList.remove("scrolled");
}
});
document.addEventListener("DOMContentLoaded", () => {
        const section = document.body.dataset.section;
        if (!section) return;

        document
            .querySelectorAll("#site-header .nav-link")
            .forEach(link => {
                if (link.dataset.menu === section) {
                    link.classList.add("active");
                }
            });
});

