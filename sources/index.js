"use strict"

import Lottie from "lottie-web";

if (oc.useTurbo && oc.useTurbo()) {
    oc.registerControl('lottie', class extends oc.ControlBase {
        init() {
            // Establish the control before running logic
            this.lottieAnimation = loadAnimation(this.element);
        }
        connect() {
            // Element has appeared in DOM
            this.lottieAnimation.play()
        }

        disconnect() {
            // Element was removed from DOM
            this.lottieAnimation.destroy()
        }
    })
} else {
    document.addEventListener("DOMContentLoaded", () => {
        Array.prototype.forEach.call(document.querySelectorAll(".lottie"), (element) => {
            const id = element.id,
            lottieAnimation = loadAnimation(element);
            lottieAnimation.play();
        });
    });
}


function loadAnimation(container){
    return Lottie.loadAnimation({
        container: container,
        path: container.getAttribute("data-path"),
        autoplay: false,
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
