$(document).ready(function(){
  //當誰被click
  $('#aboutList h2').click(function(){
    //讓所有的內容收合
    $('#aboutList>div').slideUp();
    //判斷目前click的next, 如果hidden=>展開
    if( $(this).next().is(':hidden') ){
      $(this).next().slideDown();
    }
    
  });
  
});