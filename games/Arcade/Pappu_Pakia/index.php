<!doctype html>
<html>
<head>
  <base href="<?php echo plugins_url() . '/wp-game/games/Arcade/Pappu_Pakia/' ?>">
  <meta charset="utf-8">
  <title>Pappu Pakia | Khelein</title>

  <link rel="stylesheet" href="css/main.css">

</head>

<body>

  <div class="gads">
    <script type="text/javascript"><!--
google_ad_client = "ca-pub-5814774904969415";
/* khelein 728x90 */
google_ad_slot = "6060495608";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
  </div>

  <div class="container">

    <!-- Start Screen -->
    <div id="start_screen">
      <h1 id="title">pappu pakia</h1>
      <h3 id="credits">
        by
        <a href="http://twitter.com/SolitaryDesigns">Kushagra</a>
        and
        <a href="http://twitter.com/_rishabhp">Rishabh</a>
      </h3>
      <h3 id="last_score"></h3>
      <h3 id="high_score"></h3>

      <div class="controls"></div>

      <div class="options">
        <ul>
          <li><a href="javascript:void(0);" id="start_game">start</a></li>
          <li><a href="javascript:void(0);" target="_blank" id="tweet">tweet</a></li>
          <li><a href="javascript:void(0);" target="_blank" id="fb">fb like</a></li>
        </ul>
      </div>
    </div>
    <!-- /Start Screen -->
  
    <!-- Loading sounds -->
    <audio id="start" loop>
      <source src="sound/pappu-pakia2.3.ogg"  type="audio/ogg">
      <source src="sound/pappu-pakia2.3.mp3"  type="audio/mp3">
    </audio>
    
    <audio id="angry_jump">
      <source src="sound/jump1.ogg" type="audio/ogg">
      <source src="sound/jump1.mp3" type="audio/mp3">
    </audio>
    
    <audio id="sad_jump">
      <source src="sound/jump2.ogg" type="audio/ogg">
      <source src="sound/jump2.mp3" type="audio/mp3">
    </audio>
    
    <audio id="happy_jump">
      <source src="sound/jump3.ogg" type="audio/ogg">
      <source src="sound/jump3.mp3" type="audio/mp3">
    </audio>
    
    <audio id="flap">
      <source src="sound/flap.ogg" type="audio/ogg">
      <source src="sound/flap.mp3" type="audio/mp3">
    </audio>
    
    <audio id="ting">
      <source src="sound/ting.ogg" type="audio/ogg">
      <source src="sound/ting.mp3" type="audio/mp3">
    </audio>

    <canvas id="game_bg"></canvas>
    <canvas id="game_main"></canvas>

    <div id="score_board">0</div>

    <div id="invincible_timer">
      <div id="invincible_loader"></div>
    </div>

    <a href="javascript:void(0)" id="mute"></a>
    
    <!-- Loading Screen -->
    <div id="loading">
      <p id="loadText">Loading...</p>
      <div id="barCont">
        <div id="bar"></div>
      </div>
    </div>

  </div>

  <div id="fps_count"></div>

  <div id="share_btns">
    
          <!-- Share -->

            <div class="share-button">
    <a href="http://flattr.com/thing/1091453" target="_blank">
<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a>
  </div>
  
  <!-- google plus -->
  <div class="share-button">
    <!-- Place this tag where you want the share button to render. -->
    <div class="g-plus" data-action="share" data-annotation="bubble"></div>
    
    <!-- Place this tag after the last share tag. -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
     </div>
  
  
  <!-- Facebook --> 
  <div class="share-button"><div id="fb-root"></div>
  <fb:like send="false" layout="button_count" width="450" show_faces="false"></fb:like>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=190502394323833";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  
  </div>
    
  <!-- Twitter --> 
  <div class="share-button">
    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-via="_rishabhp">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>


<!-- /Share -->

  </div>
    <div class="chrome-button">
      <a href="https://chrome.google.com/webstore/detail/bblkaaapbdgakibgpbnidlnndgfjbdcd/">Add to chrome</a>
    </div>


  <footer class="os">
    <h3>About</h3>
    <p>
      This HTML5 Game (Pappu Pakia) has been happily made for
      the <a href="https://github.com/blog/1303-github-game-off">Github
      Game Off 2012</a>. Based on the compo's rules, the concepts
      that we tried to incorporate are fork, branch, push, pull, clone.
    </p>
    <p>
      You are pappu in the game, a little character. You need to
      click the mouse or tap (touch screen) to levitate else
      pappu will descend. If he hits the top or bottom boundaries
      that'll end the game.
    </p>
    <p>
      There will be some obstacles along the way like forks, branches
      and some enemies who are also known as "pakias". Hitting them
      will end the game. 3 types of pakias - sad (pull you),
      happy (push you), angry (kill you). Keep safe distance from
      them!
    </p>
    <p>
      There are some collectibles too! Coins for points (yellow for 50,
      pink for 100, red for 500). Stars for invincibility
      for a short period. Berries spawning clones that'll destroy
      anything that comes in their way!
    </p>
    <p>
      Collisions are not super strict
      to make the gameplay a little less harder.
    </p>
    <p>
      Hit Enter or Spacebar keys to (re)start the game.
    </p>


  <div class="gads">
    <script type="text/javascript"><!--
google_ad_client = "ca-pub-5814774904969415";
/* khelein 728x90 */
google_ad_slot = "6060495608";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
  </div>

    <h3>Credits</h3>
    <p>
      Handsomely coded by <a href="http://twitter.com/_rishabhp">Rishabh</a>.
      Beautiful graphics by <a href="http://twitter.com/solitarydesigns">Kushagra</a>. We're freelance web dudes.
    </p>

    <p>
      Thanks to <a href="http://rezoner.net/">Rezoner</a> for Music.
    </p>
    <p>
      All other sounds produced by personal thingies like mouths, hands and books.
      Some tricks and tips that we learnt while making this game
      has been shared on <a href="http://codetheory.in">CodeTheory</a>
      and <a href="http://cssdeck.com/codecasts">CSSDeck</a>.
    </p>

    <h3>Links</h3>
    <p>
      <a href="http://github.com/mindd-it/pappu-pakia">Code on Github</a> |
      <a href="http://dribbble.com/cssdeck">Dribbble</a> |
      <a href="http://codetheory.in/contact/">Contact Us</a>
    </p>
  </footer>

  <!-- Disqus -->
    <div id="disqus_thread"></div>
  <script type="text/javascript">
      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
      var disqus_shortname = 'khelein'; // required: replace example with your forum shortname

      /* * * DON'T EDIT BELOW THIS LINE * * */
      (function() {
          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
          dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
      })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
  <!-- /Disqus -->
        

  <script src="js/jquery-1.8.2.min.js"></script>
  <script>window.mit = window.mit || {};</script>
  <script src="js/utils.js"></script>
  <script src="js/backgrounds.js"></script>
  <script src="js/forks.js"></script>
  <script src="js/branches.js"></script>
  <script src="js/collectibles.js"></script>
  <script src="js/pappu.js"></script>
  <script src="js/pakia.js"></script>
  <script src="js/main.js"></script>
  <script src="js/loader.js"></script>

  <script>
  // if theres adblock hide gads container
  setTimeout(function() {

    if (typeof window.google_ad_block === 'undefined')
      $('.gads').remove();

  }, 1000);

  if (location.hostname.indexOf('localhost') === 0) {
    $('.gads, #disqus_thread').remove();
  }
  </script>

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36603798-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_footer(); ?>
</body>
</html>
