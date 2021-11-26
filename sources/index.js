"use strict"

import Lottie from "lottie-web";

document.addEventListener("DOMContentLoaded", () => {
    Array.prototype.forEach.call(document.querySelectorAll("figure.lottie"), (element) => {
        console.log(element);
        const 
            path = element.getAttribute("data-path"),
            look = element.getAttribute("data-look")
        ;
        element.classList.add(look);
    });
});

function loadAnimation(container, animation){
    return Lottie.loadAnimation({
        container: container,
        path: animation,
        rendererSettings: {
            rendererSettings: {
                preserveAspectRatio: 'xMidYMid slice'
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