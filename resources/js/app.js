require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import AOS from "aos";

AOS.init({
    duration: 1000,
    easing: "ease-in-out",
});
