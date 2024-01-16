document.addEventListener("DOMContentLoaded", function () {
    const shrink_btn = document.querySelector(".shrink-btn");
    const sidebar_links = document.querySelectorAll(".sidebar-links a");
    const active_tab = document.querySelector(".active-tab");
    const shortcuts = document.querySelector(".sidebar-links h4");

    let activeIndex;

    // Mendapatkan status shrink dari local storage
    const isShrink = localStorage.getItem("isShrink") === "true";

    // Setel kelas 'shrink' pada body sesuai dengan status
    document.body.classList.toggle("shrink", isShrink);

    // Temukan elemen sidebar yang pertama kali aktif
    const initialActiveLink = document.querySelector(".sidebar-links a.active");
    activeIndex = initialActiveLink ? initialActiveLink.dataset.active : 0;

    // Pindahkan tab aktif saat halaman dimuat
    moveActiveTab();

    shrink_btn.addEventListener("click", () => {
        // Simpan status shrink ke local storage
        localStorage.setItem("isShrink", !document.body.classList.contains("shrink"));

        document.body.classList.toggle("shrink");
        setTimeout(moveActiveTab, 400);

        shrink_btn.classList.add("hovered");

        setTimeout(() => {
            shrink_btn.classList.remove("hovered");
        }, 500);
    });

    function moveActiveTab() {
        let topPosition = activeIndex * 58 + 2.5;

        if (activeIndex > 2) {
            topPosition += shortcuts.clientHeight;
        }

        active_tab.style.top = `${topPosition}px`;
    }

    function changeLink() {
        sidebar_links.forEach(sideLink => sideLink.classList.remove("active"));
        this.classList.add("active");

        activeIndex = this.dataset.active;

        moveActiveTab();
    }

    sidebar_links.forEach((link) => link.addEventListener("click", changeLink));
});
