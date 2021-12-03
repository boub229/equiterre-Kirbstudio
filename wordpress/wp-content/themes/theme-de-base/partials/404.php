


    <div class="error">
        <div class="err_style">
            ERROR 404
          </div>
             
<a class='arbret1'><img src="https://i.imgur.com/MzV5UQl.png" title="source: imgur.com" /></a>
      <a class='arbret2'><img src="https://i.imgur.com/7MRLzsD.png" title="source: imgur.com" /></a>



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

.arbret1{
  overflow:h idden;
  position:absolute;
  width: 100%;
  z-index: 2;

}

.arbret2{
  width: 100%;
  z-index: 3;
}

.arbret1 img{
  width: 50%;
}

.arbret2 img{
  width: 50%;
}

</style>

<script>

  
const animation = gsap.timeline({
  defaults: { 
    y: '400%',
    ease: 'back'
  }
})
  .from('.arbret1', { y: '400%', ease: 'back'})
.from('.arbret2', { y: '400%', ease: 'back'})
 ;

  </script>


		

