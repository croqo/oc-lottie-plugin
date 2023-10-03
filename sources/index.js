"use strict"

import lottie from "lottie-web";

oc.registerControl("lottie", class extends oc.ControlBase {
    init() {
        this.animation
            = this.loadAnimation(this.animationConfig());
    }
    connect() {
        this.animation.play();
    }
    disconnect() {
        this.animation.destroy();
    }
    animationConfig() {
        const AnimationConfig = {
            container: this.element,
            name: this.element.id,
            path: this.config.path,
            autoplay: this.config.autoplay ? true : false,
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
        return AnimationConfig;
    }
    loadAnimation(config) {
        return lottie.loadAnimation(config)
    }
});
