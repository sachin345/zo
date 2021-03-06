 <?php
include ("error.php");
include 'conn.php';
session_start();
$sid= $_SESSION['sid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="//fonts.googleapis.com/css?family=Raleway:100normal,100italic,200normal,200italic,300normal,300italic,400normal,400italic,500normal,500italic,600normal,600italic,700normal,700italic,800normal,800italic,900normal,900italic|Open+Sans:400normal|Lato:400normal|Roboto:400normal|Oswald:400normal|Droid+Sans:400normal|Droid+Serif:400normal|Lobster:400normal|PT+Sans:400normal|Ubuntu:400normal|Playfair+Display:400normal&amp;subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="browse-mf-css-jk786.css" />
<link rel="stylesheet" href="footer.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<title>Browse - Musicfreaks</title>
</head>

<body>
<?php
include ("main_nav.php");
?>
<div class="main-player">
</div>
<?php
include("category-container.php");
?>
<div class="globalcontainer">
    <div class="body-container">
    
    <section id="browse-page">
<div class="top-layer"></div>
<!--
<div class="search-home">
<input type="text" class="search2" id="search2" placeholder="What would you like to listen to?"/>
</div> -->
				<div class="browse shad">
                <h1 class="browse-headline">Browse</h1>
                	<div class="browse-playlists">
                    	<ul class="browse-playlist-ul">
                        	<h1 class="bp_ul-head">playlists for today</h1>
                                <li>
                                    <div class="browse-playlist-card browse-playlist">
                                        <img class="browse-pl-card-art" src="images/album/i.jpg" />
                                            <div class="browse-playlist-card-info">
                                                <a href="playlist?plist='.$row["plist_name"].'">
                                                    <h4 class="browse-playlist-name">Hello</h4>
                                                </a>
                                            </div>
                                    </div>
                                </li>
                        </ul>
                    </div>
                    		<div class="browse-genre">
                            	<ul class="browse-genre-ul">
                                	<h1 class="bg_ul-head">genres</h1>
                                		<li>
                                        	<div class="browse-genre-card">
                                                <div class="bGenre-img">
                                                    <img class="bGenre-inner-img" src="images/album/9.png" />
                                                </div>
                                                    <div class="bGenre-overlay">
                                                        <i class="genre_icon filmi_genre"></i>
                                                        	<span class="genre_title">filmi</span>
                                                    </div>
                                            </div>        
                                        </li>
                                        	<li>
                                                <div class="browse-genre-card">
                                                    <div class="bGenre-img">
                                                        <img class="bGenre-inner-img" src="assets/genre/jagjit_singh-pic.jpg"/>
                                                    </div>
                                                        <div class="bGenre-overlay">
                                                            <i class="genre_icon ghazal_genre"></i>
                                                                <span class="genre_title">ghazal</span>
                                                        </div>
                                                </div>        
                                            </li>
                                            	<li>
                                                    <div class="browse-genre-card">
                                                        <div class="bGenre-img">
                                                            <img class="bGenre-inner-img" src="assets/genre/indianpop_stars-pic.jpg"/>
                                                        </div>
                                                            <div class="bGenre-overlay">
                                                                <i class="genre_icon indianpop_genre"></i>
                                                                    <span class="genre_title">indian pop</span>
                                                            </div>
                                                    </div>        
                                                </li>
                                                	<li>
                                                        <div class="browse-genre-card">
                                                            <div class="bGenre-img">
                                                                <img class="bGenre-inner-img" src="assets/genre/bhajan_-pic.jpg"/>
                                                            </div>
                                                                <div class="bGenre-overlay">
                                                                    <i class="genre_icon bhajan_genre"></i>
                                                                        <span class="genre_title">bhajan</span>
                                                                </div>
                                                        </div>        
                                                   </li>
                                                   		<li>
                                                            <div class="browse-genre-card">
                                                                <div class="bGenre-img">
                                                                    <img class="bGenre-inner-img" src="assets/genre/rockstar_rock-pic.jpg"/>
                                                                </div>
                                                                    <div class="bGenre-overlay">
                                                                        <i class="genre_icon indianrock_genre"></i>
                                                                            <span class="genre_title">indian rock</span>
                                                                    </div>
                                                            </div>        
                                                       </li>
                                                            <li>
                                                                <div class="browse-genre-card">
                                                                    <div class="bGenre-img">
                                                                        <img class="bGenre-inner-img" src="assets/genre/hiphop_dancers-pic.jpg"/>
                                                                    </div>
                                                                        <div class="bGenre-overlay">
                                                                            <i class="genre_icon indhiphop_genre"></i>
                                                                                <span class="genre_title">hip-hop</span>
                                                                        </div>
                                                                </div>        
                                                           </li>
                                                                <li>
                                                                    <div class="browse-genre-card">
                                                                        <div class="bGenre-img">
                                                                            <img class="bGenre-inner-img" src="assets/genre/bhangra_dancer-pic.jpg"/>
                                                                        </div>
                                                                            <div class="bGenre-overlay">
                                                                                <i class="genre_icon bhangra_genre"></i>
                                                                                    <span class="genre_title">bhangra</span>
                                                                            </div>
                                                                    </div>        
                                                               </li>
                                                                   <li>
                                                                        <div class="browse-genre-card">
                                                                            <div class="bGenre-img">
                                                                                <img class="bGenre-inner-img" src="assets/genre/classical_indian-pic.jpg"/>
                                                                            </div>
                                                                                <div class="bGenre-overlay">
                                                                                    <i class="genre_icon indianclass_genre"></i>
                                                                                        <span class="genre_title">indian classical</span>
                                                                                </div>
                                                                        </div>        
                                                                   </li>
                                                                        <li>
                                                                            <div class="browse-genre-card">
                                                                                <div class="bGenre-img">
                                                                                    <img class="bGenre-inner-img" src="assets/genre/indian_folk-pic.jpg"/>
                                                                                </div>
                                                                                    <div class="bGenre-overlay">
                                                                                        <i class="genre_icon indianfolk_genre"></i>
                                                                                            <span class="genre_title">indian folk</span>
                                                                                    </div>
                                                                            </div>        
                                                                       </li>
                                </ul>
                            </div>
                </div>
</section>
    
    </div>
</div>
<?php 
include ("artists-div.php");
?>
<?php
include ("footer.php");
?>
</body>
</html>