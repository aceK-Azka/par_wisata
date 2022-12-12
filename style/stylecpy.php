<?php 
  header("Content-type: text/css; charset: UTF-8"); 
  include "../php_db/connectiony.php";
?>
html
{ height: 100%;}

*
{ margin: 0;
  padding: 0;}

body
{ font: normal .80em 'trebuchet ms', arial, sans-serif;
  background: #F0EFE2 url(background.png) repeat;
  color: #777;}

p
{ padding: 0 0 10px 0;
  line-height: 1.7em;
  text-align: justify;}

img
{ border: 0;}

h1, h2, h3, h4, h5, h6 
{ font: normal 175% 'century gothic', arial, sans-serif;
  color: #43423F;
  margin: 0 0 15px 0;
  padding: 15px 0 5px 0;}

h2
{ font: normal 175% 'century gothic', arial, sans-serif;
  color: #1293EE;}

h3
{ font: normal 135% 'century gothic', arial, sans-serif;}

h4, h5, h6
{ margin: 0;
  padding: 0 0 5px 0;
  font: normal 120% arial, sans-serif;
  color: #1293EE;}

h5, h6
{ font: italic 95% arial, sans-serif;
  padding: 0 0 15px 0;
  color: #000;}

h6
{ color: #362C20;}

a, a:hover
{ outline: none;
  text-decoration: underline;
  color: #FD5BFF;}

a:hover
{ text-decoration: none;}

.left
{ float: left;
  width: auto;
  margin-right: 10px;}

.right
{ float: right; 
  width: auto;
  margin-left: 10px;}

.center
{ display: block;
  text-align: center;
  margin: 20px auto;}

blockquote
{ margin: 20px 0; 
  padding: 10px 20px 0 20px;
  border: 1px solid #E5E5DB;
  background: #FFF;}

ul
{ margin: 2px 0 22px 17px;}

ul li
{ list-style-type: circle;
  margin: 0 0 6px 0; 
  padding: 0 0 4px 5px;}

ol
{ margin: 8px 0 22px 20px;}

ol li
{ margin: 0 0 11px 0;}

#main, #logo, #menubar, #site_content, #footer
{ margin-left: auto; 
  margin-right: auto;}

#header
{ background: url(waterfalls2.jpg) no-repeat;
  background-size: cover;
  background-position: center top;
  height: 300px;}

#logo
{ width: 825px;
  position: relative;
  height: 168px;}

#logo #logo_text 
{ position: absolute; 
  top: 20px;
  left: 0;}

#logo h1, #logo h2
{ font: normal 300% 'century gothic', arial, sans-serif;
  border-bottom: 0;
  text-transform: none;
  margin: 0;}

#logo_text h1, #logo_text h1 a, #logo_text h1 a:hover 
{ padding: 22px 0 0 0;
  color: #FFF;
  letter-spacing: 0.1em;
  text-decoration: none;}

#logo_text h1 a .logo_colour
{ color: #1293EE;}

#logo_text h2
{ font-size: 100%;
  padding: 4px 0 0 0;
  color: #DDD;}

#menubar
{ width: 825px;
  height: 72px;
  padding: 0;
  background: #1293EE;
  background-color: rgba(0, 0, 0, .5);
  border-radius: 13px;} 

ul#menu, ul#menu li
{ float: left;
  margin: 0; 
  padding: 0;}

ul#menu li
{ list-style: none;}

ul#menu li a
{ letter-spacing: 0.1em;
  font: normal 100% arial, sans-serif;
  display: block; 
  float: left; 
  height: 37px;
  padding: 29px 26px 6px 26px;
  text-align: center;
  color: #FFF;
  text-transform: uppercase;
  text-decoration: none;
  background: transparent;} 

ul#menu li#edge a:hover, ul#menu li#edge a
{ color: #FFF;
  background: #0D66A5;
  border-radius: 13px 0 0 13px;}

ul#menu li#edge a
{ background: transparent;}

ul#menu li a:hover, ul#menu li.selected a, ul#menu li.selected a:hover
{ color: #FFF;
  background: #0D66A5;
  transition-duration: 0.3s;
  cursor: default;}

#site_content
{ width: 837px;
  overflow: hidden;
  margin: 0 auto 0 auto;
  padding: 20px 24px 20px 37px;
  background: #FFF;} 

.sidebar
{ float: right;
  width: 190px;
  padding: 0 15px 20px 15px;}

.sidebar p
{ line-height: 1.4em;}

.sidebar ul
{ width: 178px; 
  padding: 4px 0 0 0; 
  margin: 4px 0 30px 0;}

.sidebar li
{ list-style: none; 
  padding: 0 0 7px 0; }

.sidebar li a, .sidebar li a:hover
{ padding: 0 0 0 40px;
  display: block;
  background: transparent url(link.png) no-repeat left center;} 

.sidebar li a.selected
{ color: #444;
  text-decoration: none;} 

#content
{ text-align: left;
  width: 595px;
  padding: 0;}

#content div div
{ border: 2px solid rgba(24, 24, 24, 0.644);
  width: 260px; height: 220px;
  border-radius: 19px;}

#content div td
{ padding-right: 47px;
  padding-bottom: 13px;}

#content div div h2
{ position: relative;
  top: 143px;
  background-color: rgba(0, 0, 0, 0.596);
  padding-left: 10px;
  padding-bottom: 23px;}

#content a, a:hover div div h2
{ color: #1293EE;}

<?php
  $query = "SELECT link_img, pos_img FROM css_210025 ORDER BY id_css ASC";
  $wisata = mysqli_query($db_connection, $query);

  $i = 1;
  foreach ($wisata as $data) :
?>
#content div .sitebox<?php echo $i++ ?>
{ background: url(<?php echo $data['link_img'] ?>) no-repeat;
  background-size: cover;
  background-position: <?= $data['pos_img'] ?>; }
<?php endforeach; ?>

#content ul
{ margin: 2px 0 22px 0px;}

#content ul li
{ list-style-type: none;
  background: url(bullet.png) no-repeat;
  margin: 0 0 6px 0; 
  padding: 0 0 4px 25px;
  line-height: 1.5em;}

#footer
{ width: 900px;
  font: normal 100% 'lucida sans unicode', arial, sans-serif;
  height: 33px;
  padding: 24px 0 5px 0;
  text-align: center; 
  background: #1293EE;
  color: #FFF;
  text-transform: uppercase;
  letter-spacing: 0.1em;}

#footer a
{ color: #FFF;
  text-decoration: none;}

#footer a:hover
{ color: #FFF;
  text-decoration: underline;}

.search
{ color: #5D5D5D; 
  border: 1px solid #BBB; 
  width: 134px; 
  padding: 4px; 
  font: 100% arial, sans-serif;}

#colours
{ height: 0px;
  text-align: right;
  padding: 66px 16px 0px 300px;}
  
.form_settings
{ margin: 15px 0 0 0;}

.form_settings p
{ padding: 0 0 4px 0;}

.form_settings span
{ float: left; 
  width: 200px; 
  text-align: left;}
  
.form_settings input, .form_settings textarea
{ padding: 5px; 
  width: 299px; 
  font: 100% arial; 
  border: 1px solid #E5E5DB; 
  background: #FFF; 
  color: #47433F;}
  
.form_settings .submit, button
{ font: 100% arial; 
  border: 1px solid; 
  width: 99px; 
  margin: 0 0 0 212px; 
  height: 33px;
  padding: 2px 0 3px 0;
  cursor: pointer; 
  background: #1293EE; 
  color: #FFF;
  border-radius: 10px;}

button
{ margin: 0 0 0 0;
  float: right;}

button:hover
{ color: #FFF;
  background: #0D66A5;
  transition-duration: 0.3s;}

.form_settings textarea, .form_settings select
{ font: 100% arial; 
  width: 299px;}

.form_settings select
{ width: 310px;}

.form_settings .checkbox
{ margin: 4px 0; 
  padding: 0; 
  width: 14px;
  border: 0;
  background: none;}

.separator
{ width: 100%;
  height: 0;
  border-top: 1px solid #D9D5CF;
  border-bottom: 1px solid #FFF;
  margin: 0 0 20px 0;}
  
table
{ margin: 10px 0 30px 0;}

table tr th, table tr td
{ background: #3B3B3B;
  color: #FFF;
  text-align: left;}
  
table tr td
{ background: #fff;
  color: black;}

table tr#loc td
{ text-align: justify;
  margin: 10px 0 10px 0;
  line-height: 1.2em;
  padding: 0 4px;}