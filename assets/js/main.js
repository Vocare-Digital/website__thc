$(function() {
console.log("ready");

$('.ui.dropdown')
    .dropdown();

$('#hamburger').click(function () {
    $('.ui.sidebar')
        .sidebar('show')
});

$('.close.item').click(function () {
    $('.ui.sidebar')
        .sidebar('hide')
});

//
// Menu Transitions
//

//home page
$('.hero .mini-container')
    .visibility({
        continuous: true,
        onPassed: {
            '10%': function() {
                $('.ui.top.fixed.borderless.menu').addClass('menu-background');
            }
        },
        onTopPassedReverse: function() {
                $('.ui.top.fixed.borderless.menu').removeClass('menu-background').addClass('transparent');
        }
    })
;

//all this menu stuff needs to be unified but this is for all the pages except the homepage and why choose us
$('.ui.container.menu-trigger')
    .visibility({
        continuous: true,
        onBottomPassed: function() {
            $('.ui.top.fixed.borderless.menu').removeClass('transparent').addClass('menu-background');
        },
        onBottomPassedReverse: function() {
            $('.ui.top.fixed.borderless.menu').removeClass('menu-background').addClass('transparent');
        }
    })
;

//why choose us page
$('.ui.mini-container.menu-trigger')
    .visibility({
        continuous: true,
        onBottomPassed: function() {
            console.log('bottom passed');
            $('.ui.top.fixed.borderless.menu').removeClass('transparent').addClass('menu-background');
        },
        onBottomPassedReverse: function() {
            $('.ui.top.fixed.borderless.menu').removeClass('menu-background').addClass('transparent');
        }
    })
;

$('#mobile-hamburger').click(function () {
    $('.ui.sidebar')
        .sidebar('toggle')
})


});