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

// Delayed Modal Display + Cookie On Click
$(document).ready(function() {

  // If no cookie with our chosen name (e.g. no_thanks)...
  if ($.cookie("no_thanks") == null) {

    // Show the modal, with delay func.
    $('#mcModal').appendTo("body");
    function show_modal(){
      $('#mcModal').modal();
    }

    // Set delay func. time in milliseconds
    window.setTimeout(show_modal, 3000);
    }

  // On click of specified class (e.g. 'nothanks'), trigger cookie, with expiration in year 9999
  $(".nothanks").click(function() {
    document.cookie = "no_thanks=true; expires=Fri, 31 Dec 9999 23:59:59 UTC";

  });
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

window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#15273b"
    },
    "button": {
      "background": "#da373e"
    }
  },
  "content": {
    "href": "/data-policy"
  }
})});

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
