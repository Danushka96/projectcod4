function toggle(){var t=$(".toggle-button").map(function(){return $(this).attr("data-toggle")});for(i=0;i<t.length;i++)$.cookie.raw=!0,$.cookie&&$("."+t[i]).toggle(!$.cookie("toggle_state_"+t[i])||"true"===$.cookie("toggle_state_"+t[i]));$(".toggle-button").on("click",function(){var t=$(this).attr("data-toggle");$("."+t).toggle(),$.cookie("toggle_state_"+t,$("."+t).is(":visible"),{expires:365,path:"/"})})}function isEmpty(t){return!$.trim(t.html())}function ajaxLoad(t,e,i){i||(html='<div class="center-align"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>',$(t).stop(!0,!0).append(html));var a=$(t).attr("data-url");if($(t).load(a),e){var o=function(){$(t).load(a,function(){r=window.setTimeout(o,e)})},r=window.setTimeout(o,e);$(t).hover(function(){window.clearTimeout(r)},function(){window.setTimeout(o,e)})}}function drawLineChart(t,e,i,a,o,r){$.ajax({url:t,dataType:"json",async:!1,success:function(t){chartData=new google.visualization.DataTable(t)}});var n={title:i,is3D:"true",legend:{position:"top"},width:a,curveType:"function",height:o,chartArea:{width:"85%"},backgroundColor:{fill:"transparent"},hAxis:{maxAlternation:1,showTextEvery:r},vAxis:{viewWindow:{min:0}},tooltip:{isHtml:!0}},s=new google.visualization.LineChart(document.getElementById(e));s.draw(chartData,n)}function triggerDrawLineCharts(){drawLineChart(window.domain+"?page=serverhistory&ajax=true&id="+window.server_id+"&method=getServerHistory&period=day","chart_day",'Server history "Day"',"auto","280",3),drawLineChart(window.domain+"?page=serverhistory&ajax=true&id="+window.server_id+"&method=getServerHistory&period=week","chart_week",'Server history "Week"',"auto","280",24),drawLineChart(window.domain+"?page=serverhistory&ajax=true&id="+window.server_id+"&method=getServerHistory&period=month","chart_month",'Server history "Month"',"auto","280",100)}function toggleCharts(){$(".card-panel-serverhistory .btn").on("click",function(t){var e=$(this).data("id");$(".card-panel-serverhistory .active").removeClass("active"),$(".chart#chart_"+e).addClass("active"),$(this).addClass("active")})}function toggleWeapons(){$(".show-on-click").on("click",function(t){$(this).addClass("active-weapon"),$(this).siblings().removeClass("active-weapon");var e=$(this).attr("data-count");$(".weapon-toggle").addClass("hide"),$(".weapon-"+e).removeClass("hide")}),$(".player-stats").on("mousedown",function(t){$(this).text($(this).attr("data-wait-text"))})}$(document).ready(function(){$(".button-collapse").sideNav(),$(".parallax").parallax(),$(".modal-trigger").leanModal(),$("select").material_select(),$("table .sort").append(' <i class="mdi-navigation-unfold-more"></i>'),$("ul.tabs").tabs(),toggle(),toggleCharts(),toggleWeapons()});