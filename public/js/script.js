$(document).ready(function(){
    $("#hamburger").click(function(){
        $(".box").animate({
            width: "toggle"
        });
    });
});


// CODE TRAIN VERSION
// var circles = [];


// var overlapping = false;
//
// while (circles.length < 10) {
//     var circle = {
//         x: random(viewportWidth),
//         y: random(viewportHeight),
//         r: random(12, 36)
//     }
//
//     var overlapping = false;
//
//     for (var j = 0; j < circles.length; j++) {
//         var other = circles[j];
//         var d = dist(circle.x, circle.y, other.x, other.y);
//         if (d < circle.r + other.r) {
//             overlapping = true;
//         }
//     }
//
//     if (!overlapping) {
//         circles.push(circle);
//     }
//
//     for (var i = 0; i < circles.length; i++) {
//         fill(255, 0, 150, 100);
//         noStroke();
//         ellipse(circles[i].x, circles[i].y, circles[i].r*2, circles[i].r*2);
//     }
// }


// SIMPLE OVERLAPPING VERSION
// $(function () {
//     $(".rellax p").each(function (i, elt) {
//         $(elt).css({
//             left: Math.random() * (viewportWidth - 250),
//             top: Math.random() * (viewportHeight - 400),
//             margin: 25
//         });
//     });
// });


//NEW FIDDLE VERSION
var viewportWidth = $('#parallax-quotes').width() - 350;
var viewportHeight = $('#parallax-quotes').height();
var min_x = 0;
var max_x = viewportWidth;
var min_y = 0;
var max_y = viewportHeight;
var filled_areas = new Array();

$('.word').each(function() {
    var rand_x=0;
    var rand_y=0;
    var area;
    do {
        rand_x = Math.round(min_x + ((max_x - min_x)*(Math.random() % 1)));
        rand_y = Math.round(min_y + ((max_y - min_y)*(Math.random() % 1)));
        area = {x: rand_x, y: rand_y, width: $(this).width(), height: $(this).height()};
    } while(check_overlap(area));

    filled_areas.push(area);

    $(this).css({left:rand_x, top: rand_y});
});

function check_overlap(area) {
    for (var i = 0; i < filled_areas.length; i++) {

        var check_area = filled_areas[i];

        var bottom1 = area.y + area.height;
        var bottom2 = check_area.y + check_area.height;
        var top1 = area.y;
        var top2 = check_area.y;
        var left1 = area.x;
        var left2 = check_area.x;
        var right1 = area.x + area.width;
        var right2 = check_area.x + check_area.width;
        if (bottom1 < top2 || top1 > bottom2 || right1 < left2 || left1 > right2) {
            continue;
        }
        return true;
    }
    return false;
}




$('.green-light').click(function () {
    $('.stoplight-info').toggleClass('show-info')
})

// $('.yellow-light').click(function () {
//     $('.stoplight-info-yellow').toggleClass('show-info')
// })
//
// $('.green-light').click(function () {
//     $('.stoplight-info-green').toggleClass('show-info')
// })

var openings = document.querySelectorAll("[data-title='Openings']");
$(openings).hide()
