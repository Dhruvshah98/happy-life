window.onload = () => {


    // const homeFunc = () => {

    var loadAnim =
        gsap.to(".head-1", {
            x: "-10%",
            duration: 1,
            opacity: 1,
            ease: "back.out(1.2)",
            // paused: true
        }, 0)
    gsap.to(".head-2", {
        x: "60%",
        duration: 1,
        opacity: 1,
        delay: 0.1,
        ease: "back.out(1.2)"
    }, 0)
    gsap.to(".head-3", {
        x: "-40%",
        duration: 1,
        opacity: 1,
        delay: 0.4,
        ease: "back.out(1.2)"
    }, 0)
    gsap.to(".head-4", {
        x: "80%",
        duration: 1,
        opacity: 1,
        delay: 0.5,
        ease: "back.out(1.2)"
    }, 0)

    var tl1 = gsap.timeline({
        scrollTrigger: {
            trigger: ".banner-trigger-1",
            start: "top 70%",
            end: "top 20%",
            // toggleActions: "play play reverse reverse",
            scrub: 0.8,
            // markers: true
        }
    })
    tl1.to(".head-1", {
        opacity: 0,
        x: "-100%",
    }, 0)
        .to(".head-2", {
            opacity: 0,
            x: "100%",
        }, 0)
        .to(".head-3", {
            opacity: 0,
            x: "-100%",
        }, 0)
        .to(".head-4", {
            opacity: 0,
            x: "100%",
        }, 0)

    var tl2 = gsap.timeline({
        scrollTrigger: {
            trigger: ".banner-trigger-2",
            start: "top 140%",
            end: "top 70%",
            // toggleActions: "play play reverse reverse",
            scrub: 0.8,
            // markers: true
        }
    })
    tl2.to(".banner-link-1", {
        autoAlpha: 1,
        left: "5%",
    }, 0)
        .to(".banner-link-2", {
            autoAlpha: 1,
            right: "4%",
        }, 0)
        .to(".banner-link-3", {
            autoAlpha: 1,
            left: "10%",
        }, 0)
        .to(".banner-img", {
            scale: 0.7
        }, 0)
};


$(".service").mouseenter(function () {
    $(this).children(".service-hidden").slideDown()
})
$(".service").mouseleave(function () {
    $(this).children(".service-hidden").slideUp()
})