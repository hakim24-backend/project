function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin === -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }

    return decodeURI(dc.substring(begin + prefix.length, end));
}


$( document ).ready(function() {
    $_is_set_cookie = getCookie('cookieconsent_status');
        

    if($_is_set_cookie !== null) {
        if($_is_set_cookie === 'allow') {
            // do allowed stuff for cookie
        } else if ($_is_set_cookie === 'dismiss') {
            
        }
    } else {
        $('.cc-container').fadeIn(1700);
    }

    $('.cc-accept a, .cc-decline a').click(function(e) {
        e.preventDefault();
        $_allowed = ["yes", "no"];
        $_cookie_permit = $(this).attr('data-cookie').toLowerCase();

        var d = new Date();
        d.setTime(d.getTime() + (30*24*60*60*1000));
        var expires = "expires="+ d.toLocaleString();

        if($_cookie_permit === 'yes') {

            document.cookie = "cookieconsent_status" + "=allow;" + expires + ";path=/";
            $('.cc-container').hide();

        } else if ($_cookie_permit === 'no') {

            document.cookie = "cookieconsent_status" + "=dismiss;0;path=/";
            document.cookie = "CMSubscribeForm" + "=subscribe_decline;0;path=/";
            
            $('.cc-container').hide();

        } else {
            return false;
        }
    });

    $(document).on('click', '#cookie-consent', function(e) {
       e.preventDefault();
       document.cookie = "exp_cookieconsent_status" + "=allow;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/"; // remove cookie on show
       $('.cc-container').show();
       $('html').animate({ scrollTop: 0 }, 'slow'); return true; 

    });

}); // End on ready