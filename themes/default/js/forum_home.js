function showPosts(cat_id){
  var html_id = "#category_posts" + cat_id;
  if($(html_id).css("display") == 'block'){
    $(html_id).css("display", "none");
  }
  else{
    $(html_id).css("display", "block");
  }
}
