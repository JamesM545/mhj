<?php
	header("Content-type: text/css; charset: UTF-8");

	$primary_color = "#008000";
?>	

html,body
{
	background-color: #E8E8E8 !important;
	font-family: 'Montserrat', sans-serif;
}

div.banner
{
	width: 100%;
	height: 500px;
	background-attachment: fixed;
	color: white;
}

div.overlay
{
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.5);
}

h1.section-title
{
	font-size: 43px;
}

div.overlay .wrap
{
	margin-top: 200px;
}

nav.navbar.navbar-default
{
	height: 80px;
	background-color: white;
	border-style: none;
	border-style-bottom: solid;
	border-color: <?php print $primary_color; ?>;
	border-width: 2px;
}

nav .contact-number
{
	color: <?php print $primary_color; ?>;
	font-size: 22px;
}

.nav.navbar-nav
{
	margin-top: 8px;
}

.navbar-brand
{
	line-height: 50px;
	font-size: 22px;
}

.navbar-brand:hover
{
	color: <?php print $primary_color; ?> !important;
}

.full {
    width: 100%;    
}
.gap {
	height: 30px;
	width: 100%;
	clear: both;
	display: block;
}
.footer {
	background: #EDEFF1;
	height: auto;
	padding-bottom: 30px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	margin: 0;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
.footer a {
	color: #78828D
}
.supportLi h4 {
	font-size: 20px;
	font-weight: lighter;
	line-height: normal;
	margin-bottom: 0 !important;
	padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
	background: #FFFFFF;
	display: inline-block;
	float: left;
	height: 30px;
	clear: both;
	width: 100%;
}
.newsletter-box .btn {
	border: medium none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	-ms-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	height: 40px;
	padding: 0;
	width: 100%;
	color: #fff;
}
.newsletter-box {
	overflow: hidden;
}
.bg-gray {
	background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
	box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #2c3e50;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}
.footer-bottom {
	background: #E3E3E3;
	border-top: 1px solid #DDDDDD;
	padding-top: 10px;
	padding-bottom: 10px;
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.payments {
	font-size: 1.5em;	
}