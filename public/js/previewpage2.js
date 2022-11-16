

function introAnimation() {

    const duration = 2;
    const easeOutElastic = Elastic.easeOut.config(1, 1);
    const section = this.$refs.header;
    const button = this.$el.querySelector('#header button');

    // Set the section opacity low, so that it doenst visully load with a hop/skip
    TweenMax.set([section, '#header', '.gui'], { autoAlpha: 0 });
  
    new TimelineMax({
      onComplete: () => document.body.classList.add('intro-anim-complete') }).
  
    delay(1).
    set('body', { opacity: 1 })
    // Turn the opacity back up
    .add(_ => TweenMax.set([section, '#header', '.gui'], { autoAlpha: 1 })).
    set('.gui .border-vert .dot', { autoAlpha: 0 }, 0).
  
    fromTo('.profileBorder', duration, {
      autoAlpha: 0,},
    {
      autoAlpha: 1,
      ease: easeOutElastic },
    0.03).
    fromTo('#box', 2, {
        autoAlpha: 0,
    },
    {
        autoAlpha: 1,
    },
    0).
    fromTo('#line', duration, {
        autoAlpha: 0,
    },
    {
        autoAlpha: 1,
        ease: easeOutElastic },
    0.03).
    fromTo('#textbot', duration, {
        autoAlpha:0,
    },{
        autoAlpha:1,
    },0.03).
    fromTo('#texttop', duration, {
        autoAlpha:0,
    },{
        autoAlpha:1,
    },0.03).
    fromTo('#name', duration, {
        autoAlpha:0,
    },{
        autoAlpha:1,
    },0.03).
    fromTo('#profile', duration, {
        autoAlpha:0,
    },{
        autoAlpha:1,
    },0.03)
}

new Vue({
    el: "#app",
    mounted() {
      introAnimation.call(this);
    } });