<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


?>
body{
    background-color:rgb(113, 113, 201);
    color: aliceblue;
}
.h1{
    background-color: beige;
    color: black;
    font-size: 72px;
    font-family: 'Times New Roman', Times, serif;
}
input:valid {
    background-color: powderblue;
  }
/*.name{
    background-color: beige;
    color: black;
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;
}
.address{

}
.question1{

}
.radio{

}*/
#help_form{display:none;}
#feedback_form{display:none;}
#help_button{
    display:inline;
}
#feedback_button{
    display:inline;
}
#redirect_button{
    display:none;
}

/*This is not working for some reason*/
.full_form{
    background-color: beige;
    color: black;
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;   
}