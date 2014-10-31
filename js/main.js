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
  });
})(jQuery);
