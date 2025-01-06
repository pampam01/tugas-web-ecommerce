import "./bootstrap";
import "preline";

document.addEventListener("livewire:navigated", () => {
    window.HSStaticMethods.autoInit();
});

AOS.init();

var animation = lottie.loadAnimation({
    container: document.getElementById("lottie-animation"), // ID elemen tempat animasi akan dimuat
    renderer: "svg", // Menggunakan SVG untuk rendering
    loop: true, // Animasi akan berulang terus-menerus
    autoplay: true, // Animasi dimulai otomatis
    path: "/lottie/animation.json", // Path ke file JSON animasi Lottie
});
