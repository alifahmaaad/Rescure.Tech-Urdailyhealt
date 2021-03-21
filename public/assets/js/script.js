
        var mq = window.matchMedia("(max-width: 40em)");
        $(document).ready(function() {
            if (!mq.matches) {
                $(window).scroll(function() { // check if scroll event happened
                    if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
                        $("nav").css("transition", "background-color 200ms linear");
                        $("nav").css("background-color", "#f1bbbc"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                    } else {
                        $("nav").css("background-color", "transparent"); // if not, change it back to transparent
                    }
                });
            } else {
                $("nav").css("background-color", "#f1bbbc");
            }
        });
