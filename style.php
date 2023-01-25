<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


?>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
h1{
	color:#f2f2f2;
	font-size:36;
	text-align:center;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a:active {
  background-color: #04AA6D;
  color: white;
}

/*Header completes here*/
/*-----------------------------------------------------------------*/
/*The design for links so that they look like buttons*/

/*Designing buttons ends here*/
/*-----------------------------------------------------------------*/
/*Footer begins here*/
.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
#view_inventory{
  display:none;
}
#perform_service{
  display:none;
}
#left_recieve_order{
    background-color:white;
    width:100%;
    float:left;
    display:none;
}
#right_recieve_order{
    background-color:white;
    width:50%;
    float:right;
    display:none;
}
#analytics{
    display:none;
}
#oq{
    height:27px;
    border=1;
}
#container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
#feedback_form{
    display:none;
}
#help_form{
    display:none;
}
input[type='number']{
    border:0;
}

input[type='submit']{
    width:100%;
    padding:5px;
    font-size:15px;
    font-weight:bold;
}
input[type='reset']{
    width:100%;
    padding:5px;
    font-size:15px;
    font-weight:bold;
}

