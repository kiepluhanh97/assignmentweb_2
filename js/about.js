var isSegmentOneHeaderInView = false;
var isSegmentTwoHeaderInView = false;

$('.segment-header .letters').each(function () {
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    $(this).css('opacity', '1');
});

function isInView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).outerHeight();

    return ((elemTop <= docViewBottom) && (elemTop >= docViewTop)) || ((elemBottom <= docViewBottom) && (elemBottom >= docViewTop));
}

function addAnime(elem) {
    anime.timeline({ loop: false })
        .add({
            targets: elem + ' .segment-header .line',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: 'easeOutExpo',
            duration: 700
        })
        .add({
            targets: elem + ' .segment-header .line',
            translateX: [0, $(elem + ' .segment-header .letters').width()],
            easing: 'easeOutExpo',
            duration: 700,
            delay: 100
        }).add({
            targets: elem + ' .segment-header .letter',
            opacity: [0, 1],
            easing: 'easeOutExpo',
            duration: 600,
            offset: '-=700',
            delay: function (el, i) {
                return 35 * (i + 1)
            }
        }).add({
            targets: elem + ' .segment-header .line',
            opacity: 0,
            duration: 1000,
            easing: 'easeOutExpo'
        });
}

$('.pusher').scroll(function () {
    if (isInView('#segment-one .segment-header') && !isSegmentOneHeaderInView) {
        isSegmentOneHeaderInView = true;
        addAnime('#segment-one');
    } else {
        isSegmentOneHeaderInView = isInView('#segment-one .segment-header');
    }

    if (isInView('#segment-two .segment-header') && !isSegmentTwoHeaderInView) {
        isSegmentTwoHeaderInView = true;
        addAnime('#segment-two');
    } else {
        isSegmentTwoHeaderInView = isInView('#segment-two .segment-header');
    }
})

$(window).on('load resize', function () {
    var win = $(this);
    var winHeight = $(this).height();
    var winWidth = $(this).width();

    var segmentOneHeight = 0;
    $('#segment-one .column.right').children().each(function () {
        segmentOneHeight = segmentOneHeight + $(this).outerHeight(true);
    });
    if (segmentOneHeight + 50 > $('#segment-one').innerHeight()) {
        $('#segment-one').innerHeight(segmentOneHeight + 50);
    } else $('#segment-one').innerHeight(winHeight);

    var segmentTwoHeight = 0;
    $('#segment-two .column.left').children().each(function () {
        segmentTwoHeight = segmentTwoHeight + $(this).outerHeight(true);
    });
    if (segmentTwoHeight + 50 > $('#segment-two').innerHeight()) {
        $('#segment-two').innerHeight(segmentTwoHeight + 50);
    } else $('#segment-two').innerHeight(winHeight);

    if (isInView('#segment-one .segment-header') && !isSegmentOneHeaderInView) {
        isSegmentOneHeaderInView = true;
        addAnime('#segment-one');
    } else {
        isSegmentOneHeaderInView = isInView('#segment-one .segment-header');
    }

    if (isInView('#segment-two .segment-header') && !isSegmentTwoHeaderInView) {
        isSegmentTwoHeaderInView = true;
        addAnime('#segment-two');
    } else {
        isSegmentTwoHeaderInView = isInView('#segment-two .segment-header');
    }
});

$('.back-to-top').hover(function () {
    anime({
        loop: false,
        targets: '.back-to-top',
        rotate: 360,
        duration: 300
    });
    $(this).popup('show');
}, function () {
    anime({
        loop: false,
        targets: '.back-to-top',
        rotate: -360,
        duration: 300
    });
});

$('.back-to-top').click(function () {
    $('.pusher').animate({
        scrollTop: $('.pusher').offset().top
    }, 500);
});