
<div id="slider">
    <div class="allCAP" >
        <a href="#" class="control_next">></a>
        <a href="#" class="control_prev"><</a>
        <div class="captionN">
            <p class="CreattionDemo">Thank you for visiting my website, looking forward to seeing you even more and of course you seeing me more ! You should subscribe to my Newsletter</p>
      
            <form action="" class="mt-24" method="post">
                @csrf
                <div>
                    <label class="LemonJelly" for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div>
                    <label class="LemonJelly" for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="text-center">
                    <button class="CreattionDemo text-center mt-6" style="font-size:35px;" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
  <ul>
    <li style="background: #aaa;  background-image: url('{{ asset('https://res.cloudinary.com/nieleche/image/upload/v1702502258/Screenshot_2023-12-13_at_21.31.22_bg5xsg.png') }}'); background-size: cover;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);"></div>
    </li>
    <li style="background: #aaa;  background-image: url('{{ asset('https://res.cloudinary.com/nieleche/image/upload/v1702502281/Screenshot_2023-12-13_at_21.29.37_hzh38u.png') }}'); background-size: cover;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);"></div>
    </li>
    <li style="background: #aaa;  background-image: url('{{ asset('https://res.cloudinary.com/nieleche/image/upload/v1702502256/Screenshot_2023-12-13_at_21.29.05_jnlrnq.png') }}'); background-size: cover;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);"></div>
    </li>
    <li style="background: #aaa;  background-image: url('{{ asset('https://res.cloudinary.com/nieleche/image/upload/v1702502215/Screenshot_2023-12-13_at_21.29.22_qhkpif.png') }}'); background-size: cover;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);"></div>
    </li>
  </ul>  
</div>

<!--<div class="slider_option">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">Autoplay Slider</label>
</div> -->



<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);	
    #slider {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    }

    #slider ul {
    position: relative;
    margin: 0;
    padding: 0;
    height: 500px;
    list-style: none;
    }

    #slider ul li {
    position: relative;
    display: block;
    float: left;
    margin: 0;
    padding: 0;
    width: 370px;
    height: 100%;
    background: #ccc;
    text-align: center;
    }

   .captionN{
        position: absolute;
        top: 0%;
        display: block;
        padding: 4% 15%;
        width: auto;
        height: auto;
        color: #fedb0d;
        text-decoration: none;
        text-align: left;
        font-weight: 700;
    }

    #slider div p{
        font-size: 30px;
    }

    a.control_prev, a.control_next {
    position: absolute;
    top: 40%;
    display: block;
    padding: 4% 3%;
    width: auto;
    height: auto;
    z-index: 999;
    background: #2a2a2a;
    color: #fedb0d;
    text-decoration: none;
    font-weight: 600;
    font-size: 12px;
    opacity: 0.7;
    cursor: pointer;
    }

    a.control_prev:hover, a.control_next:hover {
    opacity: 0.5;
    -webkit-transition: all 0.2s ease;
    }

    a.control_prev {
    border-radius: 0 2px 2px 0;
    }

    a.control_next {
    right: 0;
    border-radius: 2px 0 0 2px;
    }

    .slider_option {
    position: relative;
    margin: 10px auto;
    width: 160px;
    font-size: 18px;
    }


    .allCAP{
        display: block;
        z-index: 999;
        width: 370px;
        height: 500px;
        position: absolute;
    }

    .captionN input{
        border:none;
        background:transparent;
        text-decoration:none;
        outline:none !important;
        border-bottom: 2px solid #fedb0d;
        padding:0px;
    }

    .captionN label {
        font-size: 25px;
        font-weight: 900;
    }

    .captionN input:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0);
    border-bottom: 2px solid #fedb0d;
}


</style>


<script>
    jQuery(document).ready(function ($) {

$('#checkbox').change(function(){
  setInterval(function () {
      moveRight();
  }, 3000);
});

  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#slider').css({ width: slideWidth, height: slideHeight });
  
  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
      $('#slider ul').animate({
          left: + slideWidth
      }, 200, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  function moveRight() {
      $('#slider ul').animate({
          left: - slideWidth
      }, 200, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  $('a.control_prev').click(function () {
      moveLeft();
  });

  $('a.control_next').click(function () {
      moveRight();
  });

});    

</script>