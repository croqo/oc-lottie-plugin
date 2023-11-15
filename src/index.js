"use strict"

import Lottie from "lottie-web";

if (oc.useTurbo && oc.useTurbo()) {
    // console.log('turbo is ON');
    oc.registerControl('lottie', class extends oc.ControlBase {
        init() {
            // Establish the control before running logic
            this.animationItem = this.load();
        }

        connect() {
            // Element has appeared in DOM
            this.animationItem.play()
        }

        disconnect() {
            // Element was removed from DOM
            this.animationItem.destroy()
        }

        load() {
            return loadAnimation(this.element)
        }
    })
} else {
    // console.log('turbo is OFF');
    document.addEventListener("DOMContentLoaded", () => {
        Array.prototype.forEach.call(document.querySelectorAll('[data-control="lottie"]'), (element) => {
            const id = element.id,
            animationItem = loadAnimation(element);
            animationItem.play();
        });
    });
}

function loadAnimation(el){
    const data = el.dataset;
    return Lottie.loadAnimation({
        container: el,
        path: data.path,
        autoplay: data.autoplay,
        loop: data.loop,
        name: el.id,
        rendererSettings: {
            preserveAspectRatio: data.ratio ?? "xMidYMid meet",
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
