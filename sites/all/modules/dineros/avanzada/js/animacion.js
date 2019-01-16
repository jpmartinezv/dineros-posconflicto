jQuery(document).ready(function ($) {
    var ilustracion1 = $("#layer1");
    var ilustracion2 = $("#layer2");
    var timeline = new TimelineMax({ repeat: -1 });

    timeline
        .to(ilustracion2, 2, { autoAlpha: 0, ease: Linear.ease }, "+=1")
        .to(ilustracion2, 2, { autoAlpha: 1, ease: Linear.ease }, "+=1")
        ;
});