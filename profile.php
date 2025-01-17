<? include "_lib/scripts/profile.php"; ?>
<!DOCTYPE HTML>
<html>
<title>Display Case</title>

<head>

  <link rel="apple-touch-icon" sizes="57x57" href="_lib/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="_lib/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="_lib/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="_lib/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="_lib/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="_lib/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="_lib/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="_lib/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="_lib/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="_lib/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="_lib/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="_lib/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="_lib/favicon/favicon-16x16.png">
  <link rel="manifest" href="/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <script src="_lib/js/foundation.min.js"></script>
  <link rel="stylesheet" type="text/css" href="_lib/css/foundation.min.css"/>
  <link rel="stylesheet" type="text/css" href="_lib/css/normalize.css"/>
  <link rel="stylesheet" type="text/css" href="_lib/css/css.css"/>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
  <script src="_lib/js/app.js"></script>


</head>
<body>


  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.html"><mg src="_lib/favicon/apple-icon-120x120.png" width="25" height="25">Display Case</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="has-dropdown">
        <a href="#">Morgan</a>
        <ul class="dropdown">
          <li><a href="#">My Account</a></li>
          <li><a href="#">My Options</a></li>
          <li class="active"><a href="#">Log Out</a></li>
        </ul>
      </li>
    </ul>
  </section>
</nav>
  <div class="sidebar">
    <ul>
      <li><a href="#"><img src="_lib/images/icons/color/an_clr.svg"/><p>Animation</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/art_clr.svg"/><p>Fine Art</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/cul_clr.svg"/><p>Culinary</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/fash_clr.svg"/><p>Fashion</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/gd_clr.svg"/><p>Grahpic Design</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/id_clr.svg"/><p>Interior Design</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/pht_clr.svg"/><p>Photography</p></a></li>
      <li><a href="#"><img src="_lib/images/icons/color/web_clr.svg"/><p>Web Design</p></a></li>
    <ul>
  
  </div>

  <div class="wrapper">
  <!---container for hero image-->

  <div class="row profileHead">
     <div class="profileAvatar small-3 columns">

      </div>
    <div class="profileDesc small-9 columns">

      <h1><? echo $FirstName, $LastName;?></h1>
      <h3><? echo $MajorName;?></h3>

    </div>

  </div>
  
    <div class="row  thumbnails">
      <div class="bio medium-3 columns">
        <h5>CONTACT</h5>
        <p><? echo $Email;?></p>
        <p><? echo $City;?></p>
        <h5>EDUCATION</h5>
        <p><? echo $CollegeName;?></p>
        <h5>DETAILS</h5>
        <p>Skills</p>
        <p>Bio</p>
        <h5>RESUME</h5>
        <p><a href="#">resume</a></p>
      </div>
      <div class="profileProjects medium-9 columns">
            <h3>MOST RECENT</h3>
        
            <ul class="small-block-grid-2 medium-block-grid-4">
              <li><a class="box" href="project.html"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a> <h5>Book Tower</h5></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
              <li><a class="box" href="#"><img src="_lib/images/projects/booktower.jpg"/> <span></span></a></li>
            </ul>
      </div>
    </div>


    <
 
  </div>

  
</div>

<footer><a href="#">Term &amp Conditons</footer>
</body>


</html>