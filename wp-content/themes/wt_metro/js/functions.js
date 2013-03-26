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

$(function() {  
  setTimeout(function(){slideMenuBar();},1000);
  
  removeSpaces();
  slideExcerpt();
});

