(function( $ ) {

  $('.icon-search').on('click', function(event){
    event.preventDefault();
    $('.header-search .search-field').animate({width: 200}).focus();
  });

  $('.header-search .search-field').on('focusout', function(){
    $(this).animate({width: 0});
  });