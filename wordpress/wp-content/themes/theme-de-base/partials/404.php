<?php


get_header(); // Affiche header.php

get_template_part( 'partials/404' ); // Affiche partials/404.php ?>
<html>

<head>


  <title>Error 404</title>
</head>
<body>
    <div class="error">
        <div class="err_style">
            ERROR 404
          </div>
             
<a class='arbret1' href="https://imgur.com/MzV5UQl"><img src="https://i.imgur.com/MzV5UQl.png" title="source: imgur.com" /></a>
      <a class='arbret2'href="https://imgur.com/7MRLzsD"><img src="https://i.imgur.com/7MRLzsD.png" title="source: imgur.com" /></a>


</body>

</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
html, body{
  height: 100%;
}
.err_style{
  color: white;
  padding-top:12vw;
  z-index: 3;
  position:absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Montserrat;
  font-size:6vw;


}

.error{
  text-align:center;
  height:100%;
  
  display: flex;
  justify-content: center;
  align-items: center;
  
}

img{

  width: 50%;
}
.arbret1{
  overflow: hidden;
  position:absolute;
 
  width: 100%;
  z-index: 2;
 
}

.arbret2{
  
  width: 100%;
  z-index: 3;
 
}
</style>

<script>
const animation = gsap.timeline({
    defaults: { 
      y: '400%',
      ease: 'back'
    }
  })
    .from('.arbret1', {})
  .from('.arbret2', {})
   ;
    </script>
		
<?php get_footer(); // Affiche footer.php 
?>
