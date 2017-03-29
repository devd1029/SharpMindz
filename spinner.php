<style type="text/css">
	section {
  position: relative;
}

.spinner {
  position: absolute;

  }
  .spinner-1 {
  height: 100px;
}
.spinner-1 .spinner {
  width: 100px;
  height: 100px;
  background-color: #28aadc;
  border-radius: 100%;
}
.spinner-1 .spinner:before {
  display: block;
  position: absolute;
  z-index: 2;
  left: 0;
  right: 0;
  top: 10px;
  margin: 0 auto;
  width: 20px;
  height: 20px;
  background-color: #fff;
  content: "";
  border-radius: 20px;
  transform-origin: 10px 40px;
  animation: spinner-1 1s infinite linear;
}

@keyframes spinner-1 {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}
.spinner-2 {
  height: 100px;
}
.spinner-2 .spinner {
  width: 100px;
  height: 100px;
}
.spinner-2 .spinner:before {
  display: block;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  border-top: solid 20px #ff3c50;
  border-bottom: solid 20px #ff3c50;
  border-left: solid 20px transparent;
  border-right: solid 20px transparent;
  content: "";
  border-radius: 50px;
  animation: spinner-2 1s infinite ease;
}
.spinner-2 .spinner:after {
  display: block;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  width: 40px;
  height: 40px;
  background-image:url('image/logo1.png');
  content: "";
  border-radius: 20px;
}

@keyframes spinner-2 {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}
.img{
	
	width:50px;
	height:50px;
	
}
.spinner-3 {
  height: 100px;
}
.spinner-3 .spinner {
  width: 100px;
  height: 100px;
}
.spinner-3 .spinner:before, .spinner-3 .spinner:after {
  display: block;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto 0;
  width: 40px;
  height: 40px;
  content: "";
  border-radius: 20px;
}
.spinner-3 .spinner:before {
  left: 0;
  background-color: #28aadc;
  animation: spinner-3-left 1s infinite linear;
}
.spinner-3 .spinner:after {
  right: 0;
  background-color: #ff3c50;
  animation: spinner-3-right 1s infinite linear;
}
/* left ball */
@keyframes spinner-3-left {
  0% {
    transform: translate(0, 0);
  }

  25% {
    transform: translate(30px, 0);
  }

  50% {
    transform: translate(30px, -30px);
  }

  75% {
    transform: translate(30px, 0);
  }

  100% {
    transform: translate(0, 0);
  }
}

/* right ball */
@keyframes spinner-3-right {
  0% {
    transform: translate(0, 0);
  }

  25% {
    transform: translate(-30px, 0);
  }

  50% {
    transform: translate(-30px, 30px);
  }

  75% {
    transform: translate(-30px, 0);
  }

  100% {
    transform: translate(0, 0);
  }
}
</style>
<section class="spinner-1">
  <div class="spinner"></div>
</section>

<section class="spinner-2">
  <div class="spinner"><img class="img" src="image/logo1.png"></div>
</section>

<section class="spinner-3">
  <div class="spinner"></div>
</section>

<section class="spinner-4">
  <div class="spinner"></div>
</section>