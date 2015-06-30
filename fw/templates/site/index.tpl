<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Belec programiranje</title>
    
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '480357302120965',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<header>
    <span>Belec programiranje</span>
</header>

<nav>
    <ul>
        <li><a href="belecprogramiranje.matijabelec.com/"></a>Početna</li>
        <li><a href="#nav-link1">Nav1</a></li>
        <li><a href="#nav-link2">Nav2</a></li>
        <li><a href="#nav-link3">Nav3</a></li>
    </ul>
</nav>

<main>
    <div
      class="fb-like"
      data-share="true"
      data-width="450"
      data-show-faces="true">
    </div>
</main>

<footer>
    <p>&copy 2015 <a href="matijabelec.com">Matija Belec</a>. All Rights Reserved.</p>
</footer>

</body>
</html>