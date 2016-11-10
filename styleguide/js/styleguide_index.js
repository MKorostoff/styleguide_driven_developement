
// Styleguide left menu
  $(function() {
    // Populate href with data from rel. This way we can open html page in
    // new tab easilly.
    $('#sg-sidebar').find('a').each(function(){
      var rel = $(this).attr('rel');
      $(this).attr('href', rel);
    });

    $('#sg-sidebar a').on('click', function(e) {
      e.preventDefault();
      // Toggle also on whole sidebar
      //  $('#sg-toggle').trigger('click');
      var relat = $(this).attr('rel');
      //console.log(relat);
      $('#sg-iframe').attr('src', relat);
    });
    $('#sg-toggle').on('touchstart click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      var $all;
      $all = $('#sg-all');
      if ($all.hasClass('sg-sidebar-open')) {
        $(document).off('click');
        $('#sg-all').removeClass('sg-sidebar-open');
      } else {
        $('#sg-all').addClass('sg-sidebar-open');
        $(document).on('click', function(e) {
          var $el = $(e.target),
                  id = $el.attr('id');
          if (id === 'sg-content' || id === 'sg-sidebar' || $el.closest('#sg-content').length) {
            $(document).off('click');
            $('#sg-all').removeClass('sg-sidebar-open');
          }
        });
      }
    });
  });

// Styleguide select dropdown
  $(function() {
    $("body").click(function(e) {
      if(e.target.className != "search-field") {
        $("[id^='dropdown']").removeClass("active");
      }
    });

    $("[id^='dropdown']").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $(this).toggleClass("active");
    });
  });