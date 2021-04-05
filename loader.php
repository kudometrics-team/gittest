<style>
body {
    margin: 0;
    padding: 0;
    background:#3700b3;
    /*background: -moz-linear-gradient(left, #6c8f3a 0%, #fcbf00 99%);*/
    /*background: -webkit-linear-gradient(left, #6c8f3a 0%,#fcbf00 99%);*/
    /*background: linear-gradient(to right, #6c8f3a 0%,#fcbf00 99%);*/
    /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6c8f3a', endColorstr='#fcbf00',GradientType=1 );*/
}

.loading {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 50px;
  display: flex;
  align-items: center;
}

.obj {
  width: 6px;
  height: 0px;
  background: white;
  margin: 0 3px;
  border-radius: 10px;
  animation: loading 0.8s infinite;
}

.obj:nth-child(2){
  animation-delay: 0.1s;
}
.obj:nth-child(3){
  animation-delay: 0.2s;
}
.obj:nth-child(4){
  animation-delay: 0.3s;
}
.obj:nth-child(5){
  animation-delay: 0.4s;
}
.obj:nth-child(6){
  animation-delay: 0.5s;
}
.obj:nth-child(7){
  animation-delay: 0.6s;
}
.obj:nth-child(8){
  animation-delay: 0.7s;
}

@keyframes loading {
  0% {
    height: 0;
  }
  50% {
    height: 50px;
  }
  100% {
    height: 0;
  }
}

</style>
<div class="loading">
  <div class="obj"></div>
  <div class="obj"></div>
  <div class="obj"></div>
  <div class="obj"></div>
  <div class="obj"></div>
  <div class="obj"></div>
  <div class="obj"></div>
  <div class="obj"></div>
</div>
