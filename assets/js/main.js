function setup() {
    var myCanvas = createCanvas(windowWidth, windowHeight);
    stroke(130);
    fill(200);
}

var t = 100;
var col_ = 1;
var col = 0;

function draw() {
    background(0);
    for (var i = 0; i < 40; i++) {
        strokeWeight(4);
        stroke(col - i, col * i, col);
        line(windowWidth / 2 + x(t + i), windowHeight / 2 + y(t * i), windowWidth / 2 + x(t + i) + 1, windowHeight / 2 + y(t * i) + 1);
    }
    strokeWeight(1);
    stroke(255);
    text("t = " + t.toFixed(2), 10, 20);

    t += 1 / 1000;
    col += col_;

    if (col > 255) {
        col_ = -1;
    } else if (col < 0) {
        col_ = 1;
    }
}

function x(t) {
    return cos(t / 8) * windowWidth / 2.5;
}

function y(t) {
    return cos(t / 5) * cos(t / 10) * 300;
}

$('.highscore').click(function () {
    $(this).css('visibility', 'hidden');
});
