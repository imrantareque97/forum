<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="themes/default/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Esports Forum</title>
</head>

<div class="headerFixedBar">
  <div class="row">
    <div class="col-lg-12">

      <div class="pullLeft" style="margin-top:5px;">
      <a class="headerLogoText" href="index.php" title="EsportsForum.com"><img class ="headerLogoImage" src="themes/default/images/logo.png">Forum</a>
      </div>

      <div class="pullRight">
      <a class="btn btn-primary themeButton" href="index.php?logout" title="EsportsForum.com">Logout</a>
      </div>

    </div>
  </div>
</div>

<body>


  <div class="container">
    <div class="row">
      <div class="col-lg-12 paginationBar forumModule forumMargin">
        <a href="#">Home</a> <!--i class ="fa fa-angle-right paginationArrow"></i> <a href="#">Category</a> <i class ="fa fa-angle-right paginationArrow"></i> <a href="#">Discussion</a -->
      </div>
    </div>




    <div id="category_1" class ="row forumModule forumMargin">
      <a href="#" onclick="showPosts(1);">
        <div class ="col-lg-12 columnPad">
          <div class="pullLeft">
            <h1>Category Name</h1>
          </div>
          <div class="pullRight">
            <a class="btn btn-primary themeButton" href="#">Create New Post</a>
          </div>
        </div>
      </a>
    </div>

    <div id="category_posts1"class="row forumPad" style="display:none;">
      <table class="forumTable">
        <thead>
          <th>
            Discussion
          </th>
          <th>
            Author
          </th>
          <th class="pullRight">
            Replies
          </th>
        </thead>

        <tr class="forumModule">
          <td>
          <a href="#">  Discussion name here </a>
          </td>
          <td>
            <a href="#">Imran</a>
          </td>
          <td class="pullRight">
            10
          </td>
        </tr>

        <tr class="forumModule">
          <td>
          <a href="#">  Discussion name here </a>
          </td>
          <td>
            <a href="#">Imran</a>
          </td>
          <td class="pullRight">
            10
          </td>
        </tr>

      </table>
    </div>

    <div id="category_2" class ="row forumModule forumMargin">
      <a href="#" onclick="showPosts(2);">
        <div class ="col-lg-12 columnPad">
          <div class="pullLeft">
            <h1>Category Name</h1>
          </div>
          <div class="pullRight">
            <a class="btn btn-primary themeButton" href="#">Create New Post</a>
          </div>
        </div>
      </a>
    </div>

    <div id="category_posts2"class="row forumPad" style="display:none;">
      <table class="forumTable">
        <thead>
          <th>
            Discussion
          </th>
          <th>
            Author
          </th>
          <th class="pullRight">
            Replies
          </th>
        </thead>

        <tr class="forumModule">
          <td>
          <a href="#">  Discussion name here </a>
          </td>
          <td>
            <a href="#">Imran</a>
          </td>
          <td class="pullRight">
            10
          </td>
        </tr>

        <tr class="forumModule">
          <td>
          <a href="#">  Discussion name here </a>
          </td>
          <td>
            <a href="#">Imran</a>
          </td>
          <td class="pullRight">
            10
          </td>
        </tr>

      </table>
    </div>

  </div>

</body>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="themes/default/js/forum_home.js" type="text/javascript"></script>
</html>
