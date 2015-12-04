(function( $ ) {
  'use strict';

  $(function() {
      $(".fancybox").fancybox();
  });

})( jQuery );

$(function($) {
      // Split Browse Archive checkboxes into vertically alphabetized Omega columns.
      var num_cols = 3,
      container = $('.tax__list'),
      listItem = 'li',
      listClass = 'map__info--one-third';
      // For each exposed filter that has checkboxes.
      container.each(function() {
          // Figure out how many elements should be in each column.
          var items_per_col = new Array(),
          items = $(this).find(listItem),
          min_items_per_col = Math.floor(items.length / num_cols),
          difference = items.length - (min_items_per_col * num_cols);
          for (var i = 0; i < num_cols; i++) {
              if (i < difference) {
                  items_per_col[i] = min_items_per_col + 1;
              } else {
                  items_per_col[i] = min_items_per_col;
              }
          }
          // Assign the elements to the appropriate column.
          for (var i = 0; i < num_cols; i++) {
              $(this).append($('<ul ></ul>').addClass(listClass));
              for (var j = 0; j < items_per_col[i]; j++) {
                  var pointer = 0;
                  for (var k = 0; k < i; k++) {
                      pointer += items_per_col[k];
                  }
                  $(this).find('.' + listClass).last().append(items[j + pointer]);
              }
          }
      });
  });