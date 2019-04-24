$(document).ready(function () {
    $('h2').css({
        'font-size': '24px',
        'font-weight': '300',
        'color': 'white',
        'text-align': 'center',
        'padding-top': '30px',
        'padding-bottom': '30px',
        'margin-bottom': '10px'
    });


    $('.textbox').css({
        'margin': '20px auto',
        'width': '443px',
        'height': '443px',
        'border-radius': '8px/7px',
        'background-color': '#24323d',
        'box-shadow': '1px 2px 5px rgba(0,0,0,.31)',
        'border': 'solid 1px #cbc9c9'
    });

    $('.tab-group').css({
        'position': 'relative',
        'width' : '380px',
        'list-style': 'none',
        'padding': '30px',
        'margin': '0 0 30px 0'
    });

    $('.tab-group li a').css({
        'display': 'block',
        'text-decoration': 'none',
        'padding': '15px',
        'background': 'rgba(160, 179, 176, 0.25)',
        'color': '#a0b3b0',
        'font-size': '20px',
        'float': 'left',
        'width': '160px',
        'text-align': 'center',
        'cursor': 'pointer',
        '-webkit-transition': '.5s ease',
        'transition': '.5s ease'
    });

    $('label').css({
        'position': 'absolute',
        'left': '13px',
        'color': 'rgba(255, 255, 255, 0.5)',
        'font-size': '22px'
    });

    $('input, textarea').css({
        'font-size': '22px',
        'display': 'block',
        'margin-left': '26px',
        'margin-right': '30px',
        'width': '367px',
        'height': '20px',
        'padding': '5px 10px',
        'background': 'none',
        'border': '1px solid #a0b3b0',
        'color': '#ffffff',
       'overflow-x': 'hidden'

     });

    $('.top left ::-webkit-input-placeholder').css({
        'color': 'red'
    });


    $('textarea').css({
        'border': '2px solid #a0b3b0'
    });

    $('.field-wrap').css({
        'position': 'relative',
        'margin-bottom': '20px'
    });

    $('.top').css({
        'display': 'inline-block',
        'width': '40%',
        'z-index': '1',
        'position': 'relative'
    });

    $('.right').css({
        'float': 'right',
        'margin-top': '-25px'
    });

    $('.left').css({
        'float':'left'
    });

    $('.button').css({
        'padding': '15px 0',
    'font-size': '2rem',
    'font-weight': '600',
    'text-transform': 'uppercase',
    'letter-spacing': '.1em',
    'background': '#1ab188',
    'color': '#ffffff',
    '-webkit-appearance': 'none',
    'width': '390px',
    'position': 'relative',
    'margin-left': '27px',
    'margin-right': '27px'
    });

    $('.button:hover, .button:focus').css({
        'background': '#179b77'
    });

    $('.button-block').css({
        'display': 'block',
        'width': '388px'
    });

    $('.button#p1next').css({
        'width':'388px'
    });



    $(".tab-group li a").hover(function(){
        $(this).css({'background': '#179b77',
            'color': '#ffffff'});
    }, function(){
        $(this).css({'background': 'rgba(160, 179, 176, 0.25)',
                     'color': '#ffffff'});
    });

})