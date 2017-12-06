
// setup footer
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  // You are in mobile browser
  $(document).ready(function() {
    var maxHeight = $(window).height();
    var goodHeight = maxHeight - 432;
    $(".colWrapper").css('height',goodHeight);
  });
} else {
  $(document).ready(function() {
    var maxHeight = $(window).height();
    var goodHeight = maxHeight - 232;
    $(".colWrapper").css('height',goodHeight);
  });
}
