<!DOCTYPE html>
<html>
<head>
    <title>rotate</title>
  
  <style>
      body{
          background:linear-gradient(90deg,white,skyblue) ;
      }
      .imagebox{
          width:320px;
          height:200 ;
          position: absolute; 
      }
      .container{
          width: 350px;
          height:200px ;
          position: relative; 
          margin-top: 15%;
          margin-left: 40%;
          perspective:1000px ;
          transform-style:preserve-3d ;
          transform:rotateX(-10deg)rotateZ(-10deg);
          animation:ror 20s linear infinite;

      }
      @keyframes ror{
          50%{
              transform:rotateX(30deg) ;
          }
          80%{
            transform:rotateX(-30deg) ;
          }
      }

      .images{
          width:100%;
          position: absolute;
          transform-style:preserve-3d ;
          animation:rotate 20s linear infinite ;

      } 
@keyframes rotate{
    from{

    }
    to{
        transform:rotateZ(360deg) ;
    }
}
      .imagebox:nth-child(1){
          transform:rotateY(60deg)translateZ(300px) ;
      }
      .imagebox:nth-child(2){
          transform:rotateY(120deg)translateZ(300px) ;
      }
      .imagebox:nth-child(3){
          transform:rotateY(180deg)translateZ(300px) ;
      }
      .imagebox:nth-child(4){
          transform:rotateY(240deg)translateZ(300px) ;
      }
      .imagebox:nth-child(5){
          transform:rotateY(300deg)translateZ(300px) ;
      }
      .imagebox:nth-child(6){
          transform:rotateY(360deg)translateZ(300px) ;
      }
      .imagebox:hover{
          width:340px ;
          height:220px ;
          cursor: pointer;
      }
  </style> 
<body>
<?php 
    include "./header.php"
    ?>
    <div class="container">
        <div class="images">
                <img src="./images/s.jpg" class="imagebox">
                <img src="./images/r.jpg" class="imagebox">
                <img src="./images/a.jpg" class="imagebox">
                <img src="./images/f.jpg" class="imagebox">
                <img src="./images/s.jpg" class="imagebox">
                <img src="./images/m.jpg" class="imagebox">
        </div>
    </div>
</body>
</head>
