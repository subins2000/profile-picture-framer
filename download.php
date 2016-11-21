<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Download Profile Picture | Support Kerala Blasters !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" async="async" />
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
        <h1><a href="http://demos.sim/isl-profile-pic/">Support Kerala Blasters!</a></h1>
        <p>Make this as your profile picture to support Blasters !</p>
        <?php
        $url = htmlspecialchars($_GET["i"]);
        if(isset($_GET["i"]))
          echo "<a href='". $url ."' download='kerala-blasters-profile'><img src='". $url ."' /></a>";
        else
          header("Redirect: index.php");
        ?>
        <p>
        Click the above image to download.<br/>Or right click (in mobile, hold down) and choose "Save Image"
        </p>
        <p>
          <a href="index.php"><button id="download">Create Another Profile Picture!</button></a>
        </p>
        <?php
        require_once __DIR__ . "/footer.php";
        ?>
      </div>
    </div>
  </body>
</html>
