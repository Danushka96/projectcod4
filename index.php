<?php
include_once('inc/connection.php');

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
        <script>window.domain = "index.html";</script>

        <noscript><meta http-equiv='refresh' content='0; url=indexaa98.html?page=error&amp;error=Please%20enable%20JavaScript%20to%20use%20this%20page.'/></noscript>    </head>
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
            <h2 class='grey-text text-lighten-3 light'>Our database contains 361,773 players with 790,624 aliases.</h2>
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
        <li>
        <div class='collapsible-header'>
            <span class='playerName'><img alt="Uzbekistan" class="tooltipped flag" data-position="top" data-delay="0" data-tooltip="Uzbekistan" src="additional/img/flags/Uzbekistan.png"/> Ubiysa</span>
            <div class='hide-on-small-only secondary-content grey-text text-darken-4'>11:54 am</div>
        </div>
        <div class='collapsible-body' style='padding:1rem;'>
            <h5>Player information <i class='center-align mdi-social-person'></i></h5>
            <ul>
                <li><strong>IP:</strong> <span class='playerIP'>213.230.xxx.xxx</span></li>
                <li><strong>Country:</strong> <span class='country'>Uzbekistan</span></li>
                <li><strong>GUID:</strong>
                    <span class='playerGUID'>26efef65</span>
                                            <i class="mdi-content-remove grey-text"></i>
                                            <span class="chip">1.8</span>
                </li>
            </ul>
            <a class='btn-flat transparent blue-text' href='indexd6b6.html?page=profile&amp;identify=c4103c2b351eb2456269c27eae358ced18d4a1c4ce1896989071109a4186ecc697e42ff6eecd833d'>See profile<i class='mdi-content-send right'></i></a>
                    </div>
    </li>
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
        <li>
        <div class='collapsible-header'>
            <span class='playerName'><img alt="Russian Federation" class="tooltipped flag" data-position="top" data-delay="0" data-tooltip="Russian Federation" src="additional/img/flags/Russian%20Federation.png"/> 2nd T 100</span>
            <div class='hide-on-small-only secondary-content grey-text text-darken-4'>12:01 pm</div>
        </div>
        <div class='collapsible-body' style='padding:1rem;'>
            <h5>Player information <i class='center-align mdi-social-person'></i></h5>
            <ul>
                <li><strong>IP:</strong> <span class='playerIP'>188.233.xxx.xx</span></li>
                <li><strong>Country:</strong> <span class='country'>Russian Federation</span></li>
                <li><strong>GUID:</strong>
                    <span class='playerGUID'>2e6d0163</span>
                                            <i class="mdi-content-remove grey-text"></i>
                                            <span class="chip">1.8</span>
                </li>
            </ul>
            <a class='btn-flat transparent blue-text' href='indexda4b.html?page=profile&amp;identify=5b0f56a3f476b34351754c8cf3bb93c8c6ac0af32e134b262985fa9a1b2c597e96d8f5d19dbb3ce5'>See profile<i class='mdi-content-send right'></i></a>
                    </div>
    </li>
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
        <span class='card-title activator'><a class='blue-text' href='indexcb12.html?page=profile&amp;identify=09386366513ee0d51526f53532e0c39bc56eba4b488c704abbcc2c39ee0c09cfb327301f36e7a3a1'>name</a> <i class='mdi-navigation-more-vert right grey-text text-darken-4 hide-on-small-only'></i></span>
        <p>with a K/D of 6.14.</p>
    </div>
    <div class='card-reveal hide-on-small-only'>
        <span class='card-title'><a class='blue-text' href='indexcb12.html?page=profile&amp;identify=09386366513ee0d51526f53532e0c39bc56eba4b488c704abbcc2c39ee0c09cfb327301f36e7a3a1'>name</a> <i class='mdi-navigation-close right grey-text text-darken-4'></i></span>
        <p></p>
        <ul class='collection'>
            <li class='collection-item'><strong>Onlinetime</strong><span class='secondary-content grey-text text-darken-4'>1,005 mins</span><div class='clearfix'></div></li>
            <li class='collection-item'><strong>Kills</strong><span class='secondary-content grey-text text-darken-4'>4,639</span></li>
            <li class='collection-item'><strong>Deaths</strong><span class='secondary-content grey-text text-darken-4'>756</span></li>
            <li class='collection-item'><strong>K/D</strong><span class='secondary-content grey-text text-darken-4'>6.14</span></li>
        </ul>
    </div>
</div>

            </div>
            <div class='col l4 s12'>
                <div class='card'>
        <div class='card-content'>
        <h4>Longest playtime</h4>
        <span class='card-title activator'><a class='blue-text' href='index14b5.html?page=profile&amp;identify=5b6cb2840f0547aa315d7ca7b607606573bfa805985238e79f9fbd031c030bbc837e7054de274d5e'>Robbie</a> <i class='mdi-navigation-more-vert right grey-text text-darken-4 hide-on-small-only'></i></span>
        <p>with a playtime of 381,589 mins.</p>
    </div>
    <div class='card-reveal hide-on-small-only'>
        <span class='card-title'><a class='blue-text' href='index14b5.html?page=profile&amp;identify=5b6cb2840f0547aa315d7ca7b607606573bfa805985238e79f9fbd031c030bbc837e7054de274d5e'>Robbie</a> <i class='mdi-navigation-close right grey-text text-darken-4'></i></span>
        <p></p>
        <ul class='collection'>
            <li class='collection-item'><strong>Onlinetime</strong><span class='secondary-content grey-text text-darken-4'>381,589 mins</span><div class='clearfix'></div></li>
            <li class='collection-item'><strong>Kills</strong><span class='secondary-content grey-text text-darken-4'>30,270</span></li>
            <li class='collection-item'><strong>Deaths</strong><span class='secondary-content grey-text text-darken-4'>21,091</span></li>
            <li class='collection-item'><strong>K/D</strong><span class='secondary-content grey-text text-darken-4'>1.44</span></li>
        </ul>
    </div>
</div>

            </div>
            <div class='col l4 s12'>
                <div class='card'>
        <div class='card-content'>
        <h4>Most kills</h4>
        <span class='card-title activator'><a class='blue-text' href='indexe8cc.html?page=profile&amp;identify=a5b045623e7e2a9d754c0fc4f4e7462859d47cf9ce37160c5112bca00c9211d5c86100619b8c1d13'>53cent</a> <i class='mdi-navigation-more-vert right grey-text text-darken-4 hide-on-small-only'></i></span>
        <p>with 200,858 kills.</p>
    </div>
    <div class='card-reveal hide-on-small-only'>
        <span class='card-title'><a class='blue-text' href='indexe8cc.html?page=profile&amp;identify=a5b045623e7e2a9d754c0fc4f4e7462859d47cf9ce37160c5112bca00c9211d5c86100619b8c1d13'>53cent</a> <i class='mdi-navigation-close right grey-text text-darken-4'></i></span>
        <p></p>
        <ul class='collection'>
            <li class='collection-item'><strong>Onlinetime</strong><span class='secondary-content grey-text text-darken-4'>53,621 mins</span><div class='clearfix'></div></li>
            <li class='collection-item'><strong>Kills</strong><span class='secondary-content grey-text text-darken-4'>200,858</span></li>
            <li class='collection-item'><strong>Deaths</strong><span class='secondary-content grey-text text-darken-4'>143,527</span></li>
            <li class='collection-item'><strong>K/D</strong><span class='secondary-content grey-text text-darken-4'>1.40</span></li>
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
