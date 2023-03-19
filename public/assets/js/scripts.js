// LANDING //

// landing cd animation //
const windowWidthPercentage = window.innerWidth * 0.2;

gsap.to(".landing_slider-cd", {
    x: windowWidthPercentage, duration: 2});

gsap.to(".landing_slider-cd", {
    rotation: -360,
    repeat: 3,
    ease: Linear.easeNone,
    transformOrigin:"50% 50%"
});