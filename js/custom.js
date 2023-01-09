document.addEventListener('DOMContentLoaded', function() {
  bubbly({
    colorStart: "#faf4ed",
    colorStop: "#f7f1f0",
    blur: 1,
    compose: 'source-over',
    bubbleFunc:() => `hsla(${Math.random() * 50}, 100%, 50%, .2)`
  });
});
