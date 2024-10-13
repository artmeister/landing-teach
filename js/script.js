$(document).ready(function () {
  $('.header-wrapper').hover(
    function () { }, //on
    function () { //out
      new bootstrap.Dropdown('#navDropdown').hide();
    }
  );
});