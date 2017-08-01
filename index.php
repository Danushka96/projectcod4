<?php
include_once('inc/config.php');

$allquery="SELECT * FROM clients";
$allresult=mysqli_query($connection,$allquery);
$numberofplayers=mysqli_num_rows($allresult);

$alisequery="SELECT * FROM aliases";
$aliseresult=mysqli_query($connection,$alisequery);
$numberofalises=mysqli_num_rows($aliseresult);

 ?>

<!DOCTYPE html>
<html lang='en'>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'/>
        <link rel='icon' href='favicon.ico'/>

        <title>Esports Gaming - Home</title>

        <link rel='stylesheet' href='additional/css/main.css'/>
        <link rel='stylesheet' href='additional/css/avocadoe3d3.css?v=v0.5.5'/>

        <script src='additional/js/jquery.js'></script>
        <script src='additional/js/main.js'></script>
        <script src='additional/js/cookie.js'></script>
        <script src='additional/js/list.js'></script>
        <script src='additional/js/plugin_e.js'></script>
        <script src='additional/js/avocadoe3d3.js?v=v0.5.5'></script>

        <base />
        <script>window.domain = "index.php";</script>

        <noscript><meta http-equiv='refresh' content='0; url=index.php'/></noscript>    </head>
    <body>
<?php
include_once('opt/menu.php');
echo $menu;
 ?>
<main>
    <div class='page-title blue white-text'>
        <div class='container center-align'>
            <h1 class='truncate'>Home</h1>
        </div>
    </div>
      <button class='btn blue white-text toggle-button waves-effect waves-light tooltipped' data-position='right' data-delay='0' data-tooltip='Toggle' data-toggle='parallax-container' style='position:absolute;z-index:1;margin:0.5rem;padding:0 0.5rem;'><i class='mdi-navigation-arrow-drop-down'></i></button>
<div class='parallax-container'>
    <div class='container center-align'>
        <div class='section'>
            <i class='medium white-text mdi-action-home'></i>
            <h2 class='grey-text text-lighten-3 light'>Our database contains <?php echo $numberofplayers ?> players with <?php echo $numberofalises ?> aliases.</h2>
        </div>
        <div class='section'>
            <a class='waves-effect waves-light btn-large blue' href='index5f2b.html?page=clients'><i class='mdi-social-group left'></i>See more</a>
        </div>
    </div>
    <div class='parallax'><img src='additional/img/home.jpg' alt='Home parallax'/></div>
</div>

<div class='container'>
    <h2 class='blue-text center-align toggle-button' data-toggle='welcome-toggle'><i class='mdi-maps-local-attraction'></i> Welcome</h2>
    <div class='row welcome-toggle'>
          <div class='col l6 s12 center-align'>
            <i class='blue-text medium mdi-av-recent-actors'></i>
            <h3>Newest players</h3>
            <div id='newest-players-datalist'>
                <div class='input-field'>
                    <i class='mdi-action-search prefix'></i>
                    <input id='newest-players-search' class='search' type='text'/>
                    <label class='hide-on-small-only' for='newest-players-search'>Please enter name, IP, GUID or country.</label>
                    <label class='hide-on-med-and-up' for='newest-players-search'>Search</label>
                </div>
                <div class='scroll' style='overflow-y:auto;max-height:17.5rem;'>
    <ul class='collapsible popout left-align list' data-collapsible='accordion'>

        <?php
        include_once('opt/new.php');
        if(isset($strnew)) {echo $strnew;} ?>



    </ul>

                </div>
            </div>
            <script>
                var options = {valueNames: ['playerName', 'playerIP', 'country', 'playerGUID']};
                new List('newest-players-datalist', options);
            </script>
        </div>

        <div class='col l6 s12 center-align'>
            <i class='blue-text medium mdi-av-recent-actors'></i>
            <h3>Last online</h3>
            <div id='last-online-datalist'>
                <div class='input-field'>
                    <i class='mdi-action-search prefix'></i>
                    <input id='last-online-search' class='search' type='text'/>
                    <label class='hide-on-small-only' for='last-online-search'>Please enter name, IP, GUID or country.</label>
                    <label class='hide-on-med-and-up' for='last-online-search'>Search</label>
                </div>
                <div class='scroll' style='overflow-y:auto;max-height:17.5rem;'>
      <ul class='collapsible popout left-align list' data-collapsible='accordion'>

          <?php
          include_once('opt/online.php');
          if(isset($str)) {echo $str;} ?>

  </ul>

                </div>
            </div>
            <script>
                var options = {valueNames: ['playerName', 'playerIP', 'country', 'playerGUID']};
                new List('last-online-datalist', options);
            </script>
        </div>
    </div>
</div>

<div class='section grey lighten-5'>
    <div class='container'>
        <h2 class='blue-text center-align toggle-button' data-toggle='highscore-toggle'><i class='mdi-social-public'></i> Highscores</h2>
        <div class='row highscore-toggle'>
            <div class='col l4 s12'>
                <div class='card'>
        <div class='card-content'>
        <h4>Best K/D</h4>
        <?php include_once('opt/hight.php'); ?>
        <span class='card-title activator'><a class='blue-text' href=''><?php echo $namehigh; ?></a> <i class='mdi-navigation-more-vert right grey-text text-darken-4 hide-on-small-only'></i></span>
        <p>with a K/D of <?php echo $ratios; ?>.</p>
    </div>
    <div class='card-reveal hide-on-small-only'>
        <span class='card-title'><a class='blue-text' href=''><?php echo $namehigh; ?></a> <i class='mdi-navigation-close right grey-text text-darken-4'></i></span>
        <p></p>
        <ul class='collection'>

            <li class='collection-item'><strong>connections</strong><span class='secondary-content grey-text text-darken-4'><?php echo $connections; ?></span><div class='clearfix'></div></li>
            <li class='collection-item'><strong>Kills</strong><span class='secondary-content grey-text text-darken-4'><?php echo $kills; ?></span></li>
            <li class='collection-item'><strong>Deaths</strong><span class='secondary-content grey-text text-darken-4'><?php echo $deaths; ?></span></li>
            <li class='collection-item'><strong>K/D</strong><span class='secondary-content grey-text text-darken-4'><?php echo $ratios; ?></span></li>
        </ul>
    </div>
</div>

            </div>
            <div class='col l4 s12'>
                <div class='card'>
        <div class='card-content'>
        <h4>Longest play</h4>
        <span class='card-title activator'><a class='blue-text' href=''><?php echo $lname; ?></a> <i class='mdi-navigation-more-vert right grey-text text-darken-4 hide-on-small-only'></i></span>
        <p>with a <?php echo $lconnections; ?> connections.</p>
    </div>
    <div class='card-reveal hide-on-small-only'>
        <span class='card-title'><a class='blue-text' href=''><?php echo $lname; ?></a> <i class='mdi-navigation-close right grey-text text-darken-4'></i></span>
        <p></p>
        <ul class='collection'>
            <li class='collection-item'><strong>connections</strong><span class='secondary-content grey-text text-darken-4'><?php echo $lconnections; ?></span><div class='clearfix'></div></li>
            <li class='collection-item'><strong>Kills</strong><span class='secondary-content grey-text text-darken-4'><?php echo $lkills; ?></span></li>
            <li class='collection-item'><strong>Deaths</strong><span class='secondary-content grey-text text-darken-4'><?php echo $ldeaths; ?></span></li>
            <li class='collection-item'><strong>K/D</strong><span class='secondary-content grey-text text-darken-4'><?php echo $lratio; ?></span></li>
        </ul>
    </div>
</div>

            </div>
            <div class='col l4 s12'>
                <div class='card'>
        <div class='card-content'>
        <h4>Most kills</h4>
        <span class='card-title activator'><a class='blue-text' href=''><?php echo $kname; ?></a> <i class='mdi-navigation-more-vert right grey-text text-darken-4 hide-on-small-only'></i></span>
        <p>with <?php echo $kkills; ?> kills.</p>
    </div>
    <div class='card-reveal hide-on-small-only'>
        <span class='card-title'><a class='blue-text' href=''><?php echo $kname; ?></a> <i class='mdi-navigation-close right grey-text text-darken-4'></i></span>
        <p></p>
        <ul class='collection'>
            <li class='collection-item'><strong>Connections</strong><span class='secondary-content grey-text text-darken-4'><?php echo $kconnections; ?></span><div class='clearfix'></div></li>
            <li class='collection-item'><strong>Kills</strong><span class='secondary-content grey-text text-darken-4'><?php echo $kkills; ?></span></li>
            <li class='collection-item'><strong>Deaths</strong><span class='secondary-content grey-text text-darken-4'><?php echo $kdeaths; ?></span></li>
            <li class='collection-item'><strong>K/D</strong><span class='secondary-content grey-text text-darken-4'><?php echo $kratio; ?></span></li>
        </ul>
    </div>
</div>

            </div>
        </div>
    </div>
</div>

        </main>
<?php
include_once('opt/footer.php');
echo $footer;
 ?>
    </body>
</html>
