/*global $, console*/
!(function($) {
  $(function() {
    // $("body").addClass("search-active");
    $(".search").on("click", function() {
        $("body").toggleClass("search-active");
        $(".search-bar input").focus();
    });

    $(".search-bar input").on("focusout", function() {
      $("body").removeClass("search-active");
    });

    var menu_pages_html = $("#menu-pages").html();
    var menu_social_html = $("#menu-social").html();

    $(".menu-pages").html(menu_pages_html);
    $(".menu-social").html(menu_social_html);

    $("#mobile-menu .close").on("click", function() {
      $("#mobile-menu").addClass("menu-hide");
    });

    $("#show-menu").on("click", function() {
      $("#mobile-menu").removeClass("menu-hide");
    });

  });
})(jQuery);
