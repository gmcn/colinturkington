( function($) {

  $('.bxslider').bxSlider({
    controls: false,
    pager: true,
  });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.featureheight').matchHeight();
    $('.img__wrapper').matchHeight();
  }
  window.onload = startMatchHeight;

  $(document).ready(function() {
  		$(".fancybox").fancybox({

        helpers : {
        title: {
            type: 'inside',
            position: 'top',
        }
    }


      });
  	});

  $(".modal").on('hidden.bs.modal', function (e) {
    $(".modal iframe").attr("src", $(".modal iframe").attr("src"));
});

$("#DateCountdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 1.2,
    "fg_width": 0.1,
    "circle_bg_color": "#4EB5ED",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#fff",
            "show": true
        },
        "Hours": {
            "text": "Hours",
            "color": "#fff",
            "show": true
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#fff",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#fff",
            "show": true
        }
    }
});



} ) (jQuery);

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

/* Open when someone clicks on the span element */
function openSearch() {
    document.getElementById("mySearch").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeSearch() {
    document.getElementById("mySearch").style.height = "0%";
}
