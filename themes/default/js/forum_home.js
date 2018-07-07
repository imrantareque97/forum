function showPosts(cat_id){
  var html_id = "#category_posts" + cat_id;
  if($(html_id).css("display") == 'block'){
    $(html_id).css("display", "none");
  }
  else{
    $(html_id).css("display", "block");
  }
}

function createPost(post_id){
  var html_id = "#new_post" + post_id;
  var cancel_id ="#cancelButton_" + post_id;
  if($(html_id).css("display") == 'block'){
    $(html_id).css("display", "none");
    $(cancel_id).text("Create New Post");
  }
  else{
    $(html_id).css("display", "block");
    $(cancel_id).text("Cancel");
  }


}
