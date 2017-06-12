<?php
$menu="<header>
          <div class='navbar-fixed '>
              <nav>
                  <div class='nav-wrapper blue'>
                      <a href='index9ba3.html?page=home' class='hide-on-small-only brand-logo'><span class='blue-text text-darken-4'>C</span><span class='red-text text-darken-3'>4</span><span class='blue-text text-darken-4'>S</span> <span class='amber-text text-lighten-1'>Statistics</span> <small class='blue-text text-lighten-4'>beta</small></a>
                      <a href='index9ba3.html?page=home' class='hide-on-med-and-up mobile-brand-logo'><span class='blue-text text-darken-4'>C</span><span class='red-text text-darken-3'>4</span><span class='blue-text text-darken-4'>S</span> <span class='amber-text text-lighten-1'>Statistics</span> <small class='blue-text text-lighten-4'>beta</small></a>
                      <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='mdi-navigation-menu'></i></a>
                      <ul class='right hide-on-med-and-down'>

                          <li><a id='search-modal-trigger' href='#search-modal'><i class='mdi-action-search'></i></a></li>
                          <li><a href='index8b43.html?page=banlist&amp;reset_cache=true' class='tooltipped' data-position='bottom' data-delay='0' data-tooltip='Delete cache and reload'><i class='mdi-navigation-refresh'></i></a></li>
                          <li><a href='#' class='tooltipped dropdown-button' data-activates='language-dropdown' data-position='right' data-delay='0' data-tooltip='Language'><i class='mdi-social-public'></i></a></li>
                                                          <li><a href='#login_modal' class='modal-trigger' data-target='login_modal'><i class='mdi-action-lock'></i></a>
                              </li>
                                                          <li style='margin-left:1rem;'><a href='index95e4.html?page=banlist'><i class='mdi-editor-format-list-numbered left'></i>Banlist</a></li>
                          <li ><a href='index5f2b.html?page=clients'><i class='mdi-social-person left'></i>Clients</a></li>
                          <li ><a href='index2227.html?page=servers'><i class='mdi-device-storage left'></i>Servers</a></li>
                          <li ><a href='index9157.html?page=reports'><i class='mdi-notification-sms-failed left'></i>Reports</a></li>
                          <li ><a href='indexe77b.html?page=chatlog'><i class='mdi-communication-chat left'></i>Chatlog</a></li>
                      </ul>
                      <ul class='side-nav' id='mobile-demo'>
                          <li ><a href='index9ba3.html?page=home'><i class='mdi-action-home left'></i>Home</a></li>
                          <li class='active '><a href='index95e4.html?page=banlist'><i class='mdi-editor-format-list-numbered left'></i>Banlist</a></li>
                          <li ><a href='index5f2b.html?page=clients'><i class='mdi-social-person left'></i>Clients</a></li>
                          <li ><a href='index2227.html?page=servers'><i class='mdi-device-storage left'></i>Servers</a></li>
                          <li ><a href='index9157.html?page=reports'><i class='mdi-notification-sms-failed left'></i>Reports</a></li>
                          <li ><a href='indexe77b.html?page=chatlog'><i class='mdi-communication-chat left'></i>Chatlog</a></li>
                          <li class='divider'></li>
                          <li><a href='#' class='dropdown-button' data-activates='language-mobile-dropdown'><i class='mdi-social-public left'></i>Language<i class='mdi-navigation-arrow-drop-down right'></i></a></li>
                      </ul>
                  </div>

                  <ul id='language-dropdown' class='dropdown-content'>
                                              <li><a class='blue-text' href='indexb788.html?page=banlist&amp;language=en_GB'>EN</a></li>
                                              <li><a class='blue-text' href='index5e29.html?page=banlist&amp;language=de_DE'>DE</a></li>
                                          </ul>
                  <ul id='language-mobile-dropdown' class='dropdown-content mobile-dropdown'>
                                              <li><a class='blue-text' href='indexb788.html?page=banlist&amp;language=en_GB'>EN</a></li>
                                              <li><a class='blue-text' href='index5e29.html?page=banlist&amp;language=de_DE'>DE</a></li>
                                          </ul>
               </nav>
                          </div>

          <div class='pinned blue white-text z-depth-1 sidebar hide-on-small-only'>
              <ul>
                  <li><a class='grey-text text-lighten-3 tooltipped mdi-communication-forum' href='http://cod4-server.com/' data-position='right' data-delay='0' data-tooltip='Back to forums'></a></li>
                  <li><a class='grey-text text-lighten-3 tooltipped mdi-notification-event-note' href='index357c.html?page=league' data-position='right' data-delay='0' data-tooltip='C4S League Table'></a></li>
                  <li><a class='grey-text text-lighten-3 tooltipped mdi-editor-vertical-align-top' data-position='right' data-delay='0' data-tooltip='Move on top' href='#' onclick='$('html, body').animate({scrollTop: 0}, 'fast');event.preventDefault();'></a></li>
                  <li><a class='grey-text text-lighten-3 orange tooltipped mdi-editor-attach-money' data-position='right' data-delay='0' data-tooltip='Help to support our servers' href='indexea4e.html?page=donations'></a></li>
                                  </ul>
          </div>


          <div id='search-modal' class='modal'>
              <div class='modal-content'>
                  <h3>Search</h3>
                  <div class='row'>
                      <div class='col s12'>
                          <ul class='tabs z-depth-1'>
                              <li class='tab col s6'><a href='#players-search-tab'>Players</a></li>
                              <li class='tab col s6'><a href='#bans-search-tab'>Bans</a></li>
                          </ul>
                      </div>
                      <div id='players-search-tab' class='col s12'>
                          <form action='http://www.cod4-server.info/#players-table' method='GET'>
  <div class='input-field'>
      <input type='hidden' name='page' value='clients'/>
      <i class='mdi-action-search prefix'></i>
      <input id='players-search' type='text' name='search' required/>
      <label for='players-search'>Please enter name, IP or GUID.</label>
  </div>
  <button class='btn-flat transparent blue-text' type='submit'>Submit<i class='mdi-content-send right'></i></button>
  <button class='btn-flat transparent amber-text hide-on-small-only' type='reset'>Reset<i class='mdi-content-undo right'></i></button>
</form>                        </div>
                      <div id='bans-search-tab' class='col s12'>
                          <form action='http://www.cod4-server.info/#bans-table' method='GET'>
  <div class='input-field'>
      <input type='hidden' name='page' value='banlist'/>
      <i class='mdi-action-search prefix'></i>
      <input id='bans-search' type='text' name='search' required/>
      <label for='bans-search'>Please enter player name, player GUID, kicker name or kicker GUID.</label>
  </div>
  <button class='btn-flat transparent blue-text' type='submit'>Submit<i class='mdi-content-send right'></i></button>
  <button class='btn-flat transparent amber-text hide-on-small-only' type='reset'>Reset<i class='mdi-content-undo right'></i></button>
</form>                        </div>
                  </div>
              </div>
              <div class='modal-footer'>
                  <button class='btn-flat transparent red-text modal-close'>Close<i class='mdi-navigation-close right'></i></button>
              </div>
          </div>
      </header>";

 ?>
