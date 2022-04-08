"use strict"

import Lottie from "lottie-web";
window.lottieAnimations = window.lottieAnimations ?? new Map();

document.addEventListener("DOMContentLoaded", () => {
    Array.prototype.forEach.call(document.querySelectorAll(".lottie"), (element) => {
        const id = element.id;
        lottieAnimations.set(id, loadAnimation(element));
    });
});

function loadAnimation(container){
    return Lottie.loadAnimation({
        container: container,
        path: container.getAttribute("data-path"),
        name: container.id,
        rendererSettings: {
            preserveAspectRatio: container.getAttribute("data-ratio") ?? "xMidYMid meet",
            progressiveLoad: true,
            filterSize: {
              width: '200%',
              height: '200%',
              x: '-50%',
              y: '-50%',
            }
        }
    })
};