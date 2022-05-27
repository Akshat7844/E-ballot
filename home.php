<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="homestyle.css">
  </head>
  <body>
    <div class="loader">
      <img src="icons/load.gif" alt="">
    </div>
    <div class="disappear">
      <a href="mainpage.php"></a>
    </div>
     <script charset="utf-8">
     var loader = document.querySelector(".loader")
     window.addEventListener("load", vanish);
     function vanish() {
          loader.classList.add("disppear");
     }
     setTimeout("redirect()",4150);
     function redirect(){
    window.location.replace("mainpage.php");
     }
     </script>
  </body>
</html>