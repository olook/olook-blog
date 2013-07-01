function menuLine(){
  var list = $("#menu-principal li ul.sub-menu");
  if(list.length > 0){
    list.each(function(){
       $(this).mouseover(function(){
         $(this).prev().css({'border-left': 'solid 1px #000','border-right': 'solid 1px #000'});  
       }).mouseout(function(){
         $(this).prev().removeAttr("style");
       })
    })
  }
}

function slideMenuBar(){
  var $el, leftPos, newWidth; 
  var $magicLine = $("ul.default_new li#bar"), w = $("ul.default_new li a.selected").outerWidth(), l = $("ul.default_new li a.selected").position().left ;
  $magicLine
  .width(w - 40)
  .css("left", l + 19)
  .data("origLeft", l + 19)
  .data("origWidth", w - 40);
  
  if($("ul.default_new li a").hasClass("selected")){
    $magicLine.fadeIn();
  }      
  $("ul.default_new li").find("a").hover(function() {
      $el = $(this);
      leftPos = $el.position().left + 19;
      newWidth = $el.parent().width() - 40;
      
      if(!$magicLine.is(":visible")){
        $magicLine.fadeIn();
      }  
      $magicLine.stop().animate({
          left: leftPos,
          width: newWidth
      });
  }, function() {
      $magicLine.stop().animate({
          left: $magicLine.data("origLeft"),
          width: $magicLine.data("origWidth")
      });    
  });

  $(".default_new li").eq(-2).css("background", "none");
}

function slideExcerpt(){
  $("#widget-posts-tiles .wide-slide").each(function(){
    $(this).hover(function(e){
        $(".excerpt", this).slideDown("fast");
      },
        function(){
          $(".excerpt", this).slideUp("fast");
      })
  })
}

function removeSpaces(){
  $(".widget_popular_posts h4 a span, div.slider-text div.wrap p a").each(function() {
      var $this = $(this);
      $this.html($this.html().replace(/&nbsp;/g, '')).delay(100).show();
  });
}

function addBanner(){
  if($("h3.comment-title").length > 0){
    $('<div class="banner"><a href="http://www.olook.com.br/roupas?utf8=✓&id=1&category_id=4&sort_filter=2&cloth_colors%5B%5D=listras"><img src="http://stylist-news.olook.com.br/wp-content/themes/wt_metro/images/gifs/listras_650X269.gif" /></a>').insertBefore('.comment-title');
  }
}

$(function() {  
  setTimeout(function(){slideMenuBar()},1000);
  menuLine();
  removeSpaces();
  slideExcerpt();
  addBanner();
});

