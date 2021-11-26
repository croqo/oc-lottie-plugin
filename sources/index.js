"use strict"

import Lottie from "lottie-web";
window.lottieAnimations = window.lottieAnimations ?? new Map();

document.addEventListener("DOMContentLoaded", () => {
    Array.prototype.forEach.call(document.querySelectorAll(".lottie"), (element) => {
        const 
            id = element.id,
            path = element.getAttribute("data-path"),
            look = element.getAttribute("data-look")
        ;
        element.classList.add(look);
        lottieAnimations.set(id, loadAnimation(element, path));
    });
});

function loadAnimation(container, animation){
    return Lottie.loadAnimation({
        container: container,
        path: animation,
        rendererSettings: {
            rendererSettings: {
                preserveAspectRatio: "xMidYMid slice"
            },
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