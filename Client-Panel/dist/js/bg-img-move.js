$('#bg-img').mousemove(function (e) {
    let moveX = (e.pageX * -1 /15);
    let moveY = (e.pageY * -1 /15);
    $(this).css('background-position',moveX +'px '+ moveY +'px');
});