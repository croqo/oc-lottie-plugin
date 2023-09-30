"use strict"

import lottie from "lottie-web";

oc.registerControl("lottie", class extends oc.ControlBase {
    init() {
        this.animation
            = this.loadAnimation(this.animationConfig());
        console.log(this);
    }
    connect() {
        this.listen('DOMLoaded', this.animation.play());
    }
    disconnect() {
        this.animation.destroy();
    }
    animationConfig() {
        const result = {
            container: this.element,
            name: this.element.id,
            path: this.config.path,
            autoplay: false,
            rendererSettings: {
                preserveAspectRatio: this.config.ratio,
                className: 'lottie',
                filterSize: {
                    width: "200%",
                    height: "200%",
                    x: "-50%",
                    y: "-50%"
                }
            }
        };
        return result;
    }
    loadAnimation(config) {
        return lottie.loadAnimation(config)
    }
});
