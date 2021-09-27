"use strict"

import $ from "jquery";
import Lottie from "lottie-web";

$(()=>{
    $("figure.lottie").each((index, element)=>{
        const 
            path = $(element).data("path"),
            anim = loadAnimation(element, path)
        ;
    });
});

function loadAnimation(container, animation){
    return Lottie.loadAnimation({
        container: container,
        path: animation,
        rendererSettings: {
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