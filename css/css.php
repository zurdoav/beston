<?php  
    header('Content-Type: text/css; charset:UTF8');
?>
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/*diseño de formulario*/
body{
    background-color: #fef6e4;
    display: flex;
    justify-content: center;
    /*fonde de imagen en espera*/   
}
#concentrado{
    min-width: 350px;
    max-width: 650px;
    width: 90%;
    background-color: #fef6e4;
    padding: 10px;
    margin-top: 1%;
    height: inherit;  
    color: #020826;  
    border-radius: 20px;
    background: #e0e0e0;
    border-radius: 20px;
background: #e0e0e0;
box-shadow:  7px 7px 18px #848484,
            -7px -7px 18px #ffffff;
}
.responsibe{
    /* background-color: green;  */
    /* border-bottom: 1px solid rgb(255, 0, 0); */
    width: 50%;
    float: left;
    padding: 3px;
}
.col-25{
    /* background-color: #5299D3; */
    border-left: 1px solid red;
    margin-top: 20px;
    font-family: 'M PLUS Rounded 1c', sans-serif;
    padding-left: 4px;
}
.col-75{
    margin-top: 5px;
}
.linki{
    text-decoration: none;
    text-align: center;
    padding: 5px;
    float: right;
    padding: 5px 40px;
}
.responsibe input{
    height: 33px;
    border: none;
    border-radius: 5px;
    padding: 0 0 0 10px;
    width: 60%;
    outline: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}
.responsibe input::placeholder{
    font-family : 'M PLUS Rounded 1c', sans-serif;
    font-size: .8em;
}
#abajo{
    margin-top: 45px;
}
#botonsito{
    margin-top: 45px;
    float: right;
    padding: 0 5px 5px 0;
}
#botonsito button{
    float: right;
    width: 45%;
    border:none;
    border-radius: 6px;
    cursor: pointer;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    -ms-border-radius: 6px;
    -o-border-radius: 6px;
}
select{
    width: 60%;
    border-radius: 3px;
    border: none;
    outline: none;
}
/* .ico{

} */
/*++++++++++++++++++*/
.responsibe:after {
    content: "";
    display: table;
    clear: both;
}
@media screen and (max-width: 600px) {
    #concentrado .responsibe .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
    }
}


/*diseño del login*/
#contenedor{
    width: 100%;
    height: 100%;
    background-color: aqua;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 100vw;
    min-height: 100vh;
    background-image: url(mohammad-rahmani-_Fx34KeqIEw-unsplash.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    overflow: hidden;

}
#childcontenedor{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction:row;
    min-width: 100px;
    max-width: 290px;
    width: 90%;
    padding: 30px;
    /* box-shadow: 0 2px 10px grey; */
    border-radius: 15px;
}
.filtro{
    backdrop-filter:blur(35px);
    -webkit-backdrop-filter:blur(50px);
    background-color: rgba(243, 243, 243, 0.2);
}
#loginer{
    width: 100%;
    max-width: 280px;
    min-width: 280px;
    padding: 35px 35px 45px 35px;
    /* background-color: #e29162; */
    border-radius: 5px;
    box-sizing: border-box;
    opacity: 1;
    filter: alpha(opacity=1);
}
.label{
    display: block;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-top: 10px;
    margin-bottom: 3px;
}
.input{
    display: block;
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    padding: 3px 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 2px;
    outline: none;
    background-color: transparent;
    border: 1px solid rgb(255, 255, 255);
    font-family: 'Source Sans Pro', sans-serif;
    color: #E4E4E4;
    font-size: 1em;
}
.input::placeholder{
    font-family: 'Source Sans Pro', sans-serif;
    color: #E4E4E4;
}
#boton{
    width: 100%;
    height: 40px;
    font-family:'Source Sans Pro', sans-serif;
    border: none;
    margin-top: 15px;
    border-radius: 10px;
    transition: all 0.3s;
    background: #5299D3;
    color:white;
    font-size: 120%;
}
#boton:hover{
    background-color: #3c4245;
    color: aliceblue;
}
.inicio{
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    font-size: .9em;
    padding: 0 15px 0px 15px 0;
    margin-top: 25px;
    width: 45%;
    text-align: center;
    text-decoration: none;
}
.inicio:hover{
    color: rgb(219, 100, 136);
}
.inicio:visited{
    color: rgb(255, 255, 255);
}
.inicio:active{
    color: grey;
}
.titles{
    margin-top: 20px;
    width: 100%;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    letter-spacing: 9px;
}
.mensaje{
    position:absolute;
    background-color: red;
    color:white;
    width: 20%;
    height: 20%;
    left: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.resultado{
    width: 100%;
    background-color: transparent;
    position: absolute;
    margin-top:30%;
    padding: 10px;
}
.marca{
    text-align: center;
}
.marca h1{
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
    font-size: 20px;
    padding: 5px 10px;
    text-align: center;
    text-transform: uppercase;
    text-rendering: optimizeLegibility;
    letter-spacing: 10px;
}
