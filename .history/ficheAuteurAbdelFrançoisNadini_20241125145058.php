<?php include("head.php"); ?>

 <title></title>
 <meta name="description" content="">
 <style>
  .container
  height: 100vh
  width: 100vw
  max-height: 800px
  max-width: 1280px
  min-height: 600px
  min-width: 1000px
  display: flex
  justify-content: space-around
  align-items: center
  margin: 0 auto

.border
  height: 369px
  width: 290px
  background: transparent
  border-radius: 10px
  transition: border 1s
  position: relative

  &:hover
    border: 1px solid white

.card
  height: 379px
  width: 300px
  background: grey
  border-radius: 10px
  transition: background 0.8s
  overflow: hidden
  background: black
  box-shadow: 0 70px 63px -60px #000000
  display: flex
  justify-content: center
  align-items: center
  position: relative

.card0
  background: url('https://i.pinimg.com/736x/8f/a0/51/8fa051251f5ac2d0b756027089fbffde--terry-o-neill-al-pacino.jpg') center center no-repeat
  background-size: 300px

  &:hover
    background: url('https://i.pinimg.com/736x/8f/a0/51/8fa051251f5ac2d0b756027089fbffde--terry-o-neill-al-pacino.jpg') left center no-repeat
    background-size: 600px

    h2
      opacity: 1

    .fa
      opacity: 1

.card1
  background: url('https://i.pinimg.com/originals/28/d2/e6/28d2e684e7859a0dd17fbd0cea00f8a9.jpg') center center no-repeat
  background-size: 300px

  &:hover
    background: url('https://i.pinimg.com/originals/28/d2/e6/28d2e684e7859a0dd17fbd0cea00f8a9.jpg') left center no-repeat
    background-size: 600px

    h2
      opacity: 1

    .fa
      opacity: 1

.card2
  background: url('https://i.pinimg.com/originals/ee/85/08/ee850842e68cfcf6e3943c048f45c6d1.jpg') center center no-repeat
  background-size: 300px

  &:hover
    background: url('https://i.pinimg.com/originals/ee/85/08/ee850842e68cfcf6e3943c048f45c6d1.jpg') left center no-repeat
    background-size: 600px

    h2
      opacity: 1

    .fa
      opacity: 1

h2
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif
  color: white
  margin: 20px
  opacity: 0
  transition: opacity 1s

.fa
  opacity: 0
  transition: opacity 1s

.icons
  position: absolute
  fill: #fff
  color: #fff
  height: 130px
  top: 226px
  width: 50px
  display: flex
  flex-direction: column
  align-items: center
  justify-content: space-around
 </style>
 </head>

 <?php include("header.php"); ?>
 
 <h1 class="text-white text-center m-4">Association des Auteurs d'Edi'Lybris <br></h1>

<div class="container">
  <div class="card card0">
    <div class="border">
      <h2>Al Pacino</h2>
      <div class="icons">
        <i class="fa fa-codepen" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <div class="card card1">
    <div class="border">
      <h2>Ben Stiller</h2>
      <div class="icons">
        <i class="fa fa-codepen" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <div class="card card2">
    <div class="border">
      <h2>Patrick Stewart</h2>
      <div class="icons">
        <i class="fa fa-codepen" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>

</body>

</html>