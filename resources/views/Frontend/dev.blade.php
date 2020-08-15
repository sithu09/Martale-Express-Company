<!DOCTYPE html>
<html lang="en">
<head>
  <title>မာတလိ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
    overflow-x: hidden !important;
    }
nav {
    background-color:   #c0392b;
    opacity: 0.9;
}

.navbar {
    text-transform: uppercase;
    opacity: 0.9;
}
.navbar-toggler:active{
    background-color:  #273746;
}

.img-fluid {
    max-width: 100%;
    height: auto;
    display: block;
}

/* Back to top button */

#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 10px;
    z-index: 99;
    font-size: 15px;
    border: none;
    outline: none;
    background-color: #909009;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 50%;
}

#myBtn:hover {
    background-color: #111;
}
#my-input{
       -webkit-border-radius: 50px;
       -moz-border-radius: 50px;
       border-radius: 50px;
   }

   /* Angled div */
/* .left{
    box-sizing: border-box;
    background: #000;
}
.right{
    box-sizing: border-box;
    background: #fff;
    border-left: 50px solid #000;
    border-bottom: 270px solid transparent;
    background-image: url('data:image/jpeg;base64,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');

} */

@media only screen and (min-width: 767px) {

   p{
      font-size: 1.3em;
      word-break: break-all;
      text-align: center;
      padding-left: 10px;
      padding-right: 10px;
   }
   .carousel{
       padding-top: 50px;
   }
   .title{
       position:relative;
       z-index:2;
       top:-450px;
   }
   .about{
    height: 500px;
}
.contact{
       margin-left:5%;
       margin-right:5%;
   }
.content{
    background:#85c1e9;
    opacity:0.9;
    box-sizing:border-box;
}
.imageBox{
    opacity:0.9;
    box-sizing:border-box;
    border-left:100px solid #85c1e9;
    border-bottom:500px solid transparent;
}
.news{
    opacity: 0.9;
    height:250px;
    border-radius:5px;
}

}

@media only screen and (max-width: 450px) {

   p{
      font-size: 1.1em;
      word-break: break-all;
      text-align: center;
      padding-left: 10px;
      padding-right: 10px;
   }
   .title{
       position:relative;
       z-index:2;
       top:-250px;
   }
   .contact{
       margin-left:2%;
       margin-right:2%;
   }
   .nav-item{
    text-align: center;
}
.about{
    height: 300px;
}
.content{
    opacity:0.9;
    box-sizing:border-box;
}
.imageBox{
opacity:0.9;
box-sizing:border-box;
border-left:60px;
border-bottom:300px solid transparent;
}

 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .news{
    opacity: 0.9;
    height:400px;
    border-radius:5px;
    margin-top: 10px;
    font-size: 14px;
    padding-left: 0px;
}
}

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="0">

    {{-- Bak to top button --}}
    <button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>

{{-- Navbar --}}
<section class="img-fluid mb-3 " style="background: url('https://images.unsplash.com/photo-1498330177096-689e3fb901ca?ixlib=rb-1.2.1&w=1000&q=80');width:100%;background-size:cover;">
<nav class="navbar navbar-expand-md navbar-dark navbar-top">
    <div class="container">
<a href="#" class="navbar-brand">martale</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="#ticket">ticket</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#order">order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#activity">activity</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#news">news</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#social">hotline</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#social">location</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#social">social</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/login">login</a>
    </li>
</ul>
</div>
</nav>
</div>
{{-- About --}}
<div class="row about mb-3" style="box-sizing:border-box;dispalay:flex;" id="ticket">

<div class="col-md-6 col-sm-6 content" style="">
<h3 class="text-center pt-5 text-success" style="text-shadow: 2px 2px #FF0000;">မာတလိ ခရီးသည်ပို့ဆောင်ရေး</h3>
<p class="pt-2">မာတလိ ခရီးသည်ပို့ဆောင်ရေး လုပ်ငန်းသည် မြန်မာနိုင်ငံ အဝှန်း ဝန်ဆောင်မှု ပေးဆောင်နေသော ပို့ဆောင်ရေးလုပ်ငန်း ဖြစ်ပါသည်။
    တစ်ဦးခြင်း ဝန်ဆောင်မှုကိုလည်း အထူး သက်သာသော နှုံးထားဖြင့် ဆောင်ရွက် ပေးနေ ပါသည်။</p>
    </div>
    <div class="col-md-6 col-sm-6 imageBox" style="">

    </div>
</div>
</section>

{{-- <div class="container-fluid"> --}}
<div class="row contact mb-3" style="">
{{-- Yangon_Mandalay --}}
<div class=" col-md-4 col-lg-4 mb-3" style=" box-shadow: 5px 10px 20px #888888">
    {{-- //ပြေးဆွဲချိန် အသစ်များ ထည့်ရမည်။ --}}
    <h3 class="text-center text-primary pt-3 pb-3">ရန်ကုန်-တောင်ကြီး ခရီးစဥ်</h3>
<table class="table table-bordered table-striped">
    <tbody class="text-center">
        @foreach ($mandalays as $mandalay)
        <tr>
           <td class="mandalay">A01<div class="hideorder">{{$mandalay->A01 }}</div></td>
           <td class="mandalay">A03<div class="hideorder">{{$mandalay->A03 }}</div></td>
           <td class="mandalay">A05<div class="hideorder">{{$mandalay->A05 }}</div></td>
           <td class="mandalay">A07<div class="hideorder">{{$mandalay->A07 }}</div></td>
           <td class="mandalay">A09<div class="hideorder">{{$mandalay->A09 }}</div></td>
           <td class="mandalay">A11<div class="hideorder">{{$mandalay->A11 }}</div></td>
         </tr>
         @endforeach
       <tr class="">
           <td class="mandalay">A02<div class="hideorder">{{$mandalay->A02 }}</div></td>
           <td class="mandalay">A04<div class="hideorder">{{$mandalay->A04 }}</div></td>
           <td class="mandalay">A06<div class="hideorder">{{$mandalay->A06 }}</div></td>
           <td class="mandalay">A08<div class="hideorder">{{$mandalay->A08 }}</div></td>
           <td class="mandalay">A10<div class="hideorder">{{$mandalay->A10 }}</div></td>
           <td class="mandalay">A12<div class="hideorder">{{$mandalay->A12 }}</div></td>
         </tr>
         <tr><td></td></tr>
          <tr class="">
           <td class="mandalay">B01<div class="hideorder">{{$mandalay->B01 }}</div></td>
           <td class="mandalay">B03<div class="hideorder">{{$mandalay->B03 }}</div></td>
           <td class="mandalay">B05<div class="hideorder">{{$mandalay->B05 }}</div></td>
           <td class="mandalay">B07<div class="hideorder">{{$mandalay->B07 }}</div></td>
           <td class="mandalay">B09<div class="hideorder">{{$mandalay->B09 }}</div></td>
           <td class="mandalay">B11<div class="hideorder">{{$mandalay->B11 }}</div></td>
         </tr>
       <tr>
           <td class="mandalay">B02<div class="hideorder">{{$mandalay->B02 }}</div></td>
           <td class="mandalay">B04<div class="hideorder">{{$mandalay->B04 }}</div></td>
           <td class="mandalay">B06<div class="hideorder">{{$mandalay->B06 }}</div></td>
           <td class="mandalay">B08<div class="hideorder">{{$mandalay->B08 }}</div></td>
           <td class="mandalay">B10<div class="hideorder">{{$mandalay->B10 }}</div></td>
           <td class="mandalay">B12<div class="hideorder">{{$mandalay->B12 }}</div></td>
         </tr>

    </tbody>
</table>
</div>

{{-- Yangon-Taunggyi --}}
<div class="col-md-4 col-lg-4 mb-3" style=" box-shadow: 5px 10px 20px #888888">
    {{-- //ပြေးဆွဲချိန် အသစ်များ ထည့်ရမည်။ --}}
    <h3 class="text-center text-primary pt-3 pb-3">ရန်ကုန်-မန္တလေး ခရီးစဥ်</h3>
<table class="table table-bordered table-striped">
    {{-- <button id="check">Check</button> --}}
    <tbody class="text-center">
        {{-- ဒီလိုဇာတ်သိမ်းကို အစကတည်းက ကြုံမှာ သိခဲ့ရပေမဲ့ မထိန်းချုပ်နိုင်ဘူး ဆက်ကနေမိခဲ့ --}}
        <tr>
           <td>A01</td>
           <td>A03</td>
           <td>A05</td>
           <td>A07</td>
           <td>A09</td>
           <td>A11</td>
         </tr>
       <tr class="bg-success">
           <td>A02</td>
           <td>A04</td>
           <td>A06</td>
           <td>A08</td>
           <td>A10</td>
           <td>A12</td>
         </tr>
         <tr><td></td></tr>
          <tr class="bg-primary">
           <td>B01</td>
           <td>B03</td>
           <td>B05</td>
           <td>B07</td>
           <td>B09</td>
           <td>B11</td>
         </tr>
       <tr>
           <td>B02</td>
           <td>B04</td>
           <td>B06</td>
           <td>B08</td>
           <td>B10</td>
           <td>B12</td>
         </tr>
    </tbody>
</table>
</div>
{{-- မန္တလေး-တောင်ကြီး ခရီးစဥ် --}}
<div class="col-md-4 col-lg-4 mb-3" style=" box-shadow: 5px 10px 20px #8c9b5c">
    {{-- //ပြေးဆွဲချိန် အသစ်များ ထည့်ရမည်။ --}}
    <h3 class="text-center text-primary pt-3 pb-3">မန္တလေး-တောင်ကြီး ခရီးစဥ်</h3>
<table class="table table-bordered table-striped">
    <tbody class="text-center">
        <tr>
           <td>A01</td>
           <td>A03</td>
           <td>A05</td>
           <td>A07</td>
           <td>A09</td>
           <td>A11</td>
         </tr>
       <tr class="bg-success">
           <td>A02</td>
           <td>A04</td>
           <td>A06</td>
           <td>A08</td>
           <td>A10</td>
           <td>A12</td>
         </tr>
         <tr><td></td></tr>
          <tr class="bg-primary">
           <td>B01</td>
           <td>B03</td>
           <td>B05</td>
           <td>B07</td>
           <td>B09</td>
           <td>B11</td>
         </tr>
       <tr>
           <td>B02</td>
           <td>B04</td>
           <td>B06</td>
           <td>B08</td>
           <td>B10</td>
           <td>B12</td>
         </tr>
    </tbody>
</table>
</div>
</div>


{{-- Bookin Form --}}
<div class="row mb-4 beauty-margin contact " style="box-shadow: 5px 10px 20px #888888 ;"  id="order">
    <div class="col-md-6 text-center" style="">
        <img src="https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" style="width: 100%;padding-left: 0%">
{{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQUmSJN4peqByL2ZlOctBlrko5o1bSiPlKBBbyZi9CpbIq9b_C2&usqp=CAU" alt="" style="width: 100%;height:100%"> --}}
    </div>
<div class="col-md-6" style="">
<form action="" style="padding-top: 20px">
    <div class="form-group row">
        <label for="my-input" class="ml-5">Name</label>
        <input id="my-input" class="form-control  ml-5 mr-5" type="text" name="" class="input">
    </div>
    <div class="form-group row">
        <label for="my-input" class="ml-5">Address</label>
        <input id="my-input" class="form-control  ml-5 mr-5" type="text" name="" style="" class="input">
    </div>
    <div class="form-group row">
        <label for="my-input" class="ml-5">Bookin</label>
        <input id="my-input" class="form-control  ml-5 mr-5" type="text" name="" style="" class="input">
    </div>
    <div class="form-group row">
         <button id="my-input" class="btn btn-block btn-danger ml-5 mr-5 mt-4">Submit</button>
    </div>

</form>
</div>
</div>

{{-- Noti news --}}
<div class="activity contact" style="box-shadow: 5px 10px 20px #888888;" id="activity">
<h5 class="text-center pt-4 pb-4 ">မာတလိ ခရီးစဥ်  Activity Times</h5>
<div class="row mr-2 ml-2" style="">
<div class="col-md-4 " >
<div class="card mb-2" style="">
  <img class="card-img-top" src="https://st2.depositphotos.com/3452085/10073/v/950/depositphotos_100733368-stock-illustration-logo-car-travel-time.jpg" alt="Card image cap" style="height: 250px">
  <hr>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md-4 " >
<div class="card mb-2" style="">
  <img class="card-img-top" src="https://st2.depositphotos.com/3452085/10073/v/950/depositphotos_100733368-stock-illustration-logo-car-travel-time.jpg" alt="Card image cap" style="height: 250px">
  <hr>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md-4 mb-2" >
<div class="card" style="">
  <img class="card-img-top" src="https://st2.depositphotos.com/3452085/10073/v/950/depositphotos_100733376-stock-illustration-logo-car-travel-time.jpg" alt="Card image cap" style="height: 250px">
  <hr>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

</div>
</div>

{{-- News noti --}}
<div id="news">
<div id="carouselExampleIndicators" class="carousel slide mt-4   contact" data-ride="carousel" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQCzQN_IRKqGC3fyAFdi1wnO9_o5v1LD_OU3C9cHzJZBwuoVoDU&usqp=CAU');height:450px;width:100;background-size: cover">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="margin-top: 45px">
    <div class="carousel-item active pl-3 pr-3" >
     <div class="bg-dark pl-2 pr-2 news">
     <h3 class="text-center pt-3 text-primary">Mandalay Trip Successful</h3>
<hr style="border:1px solid red">


<p class="text-justify pb-5 text-white">W3Schools is optimized for learning, testing, and training.
Examples might be simplified to improve reading and basic understanding.
Tutorials, references, and examples are constantly reviewed to avoid errors,
but we cannot warrant full correctness of all content. While using this site,
you agree to have read and accepted our terms of use, cookie and privacy policy.
Copyright 1999-2020 by Refsnes Data. All Rights Reserved.</p>
     </div>
    </div>
    <div class="carousel-item pl-3 pr-3">
    <div class="bg-dark pl-2 pr-2 news">
   <h3 class="text-center pt-3 text-primary">Yangon Trip Successful</h3>
<hr style="border:1px solid red">


<p class="text-justify pb-5 text-white">W3Schools is optimized for learning, testing, and training.
Examples might be simplified to improve reading and basic understanding.
Tutorials, references, and examples are constantly reviewed to avoid errors,
but we cannot warrant full correctness of all content. While using this site,
you agree to have read and accepted our terms of use, cookie and privacy policy.
Copyright 1999-2020 by Refsnes Data. All Rights Reserved.</p>
    </div>
    </div>
    <div class="carousel-item pl-3 pr-3">
    <div class="bg-dark pl-2 pr-2 news">
      <h3 class="text-center pt-3 text-primary">Taunggyi Trip Successful</h3>
<hr style="border:1px solid red">


<p class="text-justify pb-5 text-white">W3Schools is optimized for learning, testing, and training.
Examples might be simplified to improve reading and basic understanding.
Tutorials, references, and examples are constantly reviewed to avoid errors,
but we cannot warrant full correctness of all content. While using this site,
you agree to have read and accepted our terms of use, cookie and privacy policy.
Copyright 1999-2020 by Refsnes Data. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</div>
</div>

{{-- Contact --}}
<div class="row mt-4 mb-3 contact" style="" id="social">
    <div class="col-md-4 text-center pt-5 pb-5 mb-2" style="background-color:  #641e16" id="hotline">
        <i class="fa fa-phone" style="font-size:50px; color:red "></i>
        <hr class="ml-5 mr-5" style="color: #0404B4">
        <h5 class="">Hotline -09691788837</h5>
    </div>
    <div class="col-md-4 text-center bg-danger pt-5 pb-5 mb-2" id="location">
       <i class="fa fa-map-marker" style="font-size:48px;color:dark"></i>
       <hr class="ml-5 mr-5" style="color: #0404B4">
        <h5>ရန်ကုန် : အောင်မင်္ဂလာအဝေးပြေးကွင်း</h5>
        <h5>မန္တလေး : ကျွဲဆည်ကန်အဝေးပြေးကွင်း</h5>
    </div>
    <div class="col-md-4 text-center bg-info pt-5 pb-5 mb-2" id="location">
       <i class="fa fa-facebook-square" style="font-size:48px;color:#3B5998"></i>
       <hr class="ml-5 mr-5" style="color: #0404B4">
        <h5>Facebook : <a href="https://web.facebook.com/?_rdc=1&_rdr" class="text-dark">Martale</a></h5>
    </div>
</div>
{{-- </div> --}}

{{-- Jquery --}}
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

   $( document ).ready(function(){
        $('td.mandalay').each(function( index ){
            $(".hideorder").hide();
            if($(this ).text()=='A011'||$(this ).text()=='A021'||$(this ).text()=='A031'||$(this ).text()=='A041'
            ||$(this ).text()=='A051'||$(this ).text()=='A061'||$(this ).text()=='A071'||$(this ).text()=='A081'
            ||$(this ).text()=='A091'||$(this ).text()=='A101'||$(this ).text()=='A111'||$(this ).text()=='A121'||
            $(this ).text()=='B011'||$(this ).text()=='B021'||$(this ).text()=='B031'||$(this ).text()=='B041'
            ||$(this ).text()=='B051'||$(this ).text()=='B061'||$(this ).text()=='B071'||$(this ).text()=='B081'
            ||$(this ).text()=='B091'||$(this ).text()=='B101'||$(this ).text()=='B111'||$(this ).text()=='B121'){
        $(this).css("background-color","red");
          }
          else if($(this ).text()=='A0101'||$(this ).text()=='A0201'||$(this ).text()=='A0301'||$(this ).text()=='A0401'
            ||$(this ).text()=='A0501'||$(this ).text()=='A0601'||$(this ).text()=='A0701'||$(this ).text()=='A0801'
            ||$(this ).text()=='A0901'||$(this ).text()=='A1001'||$(this ).text()=='A1101'||$(this ).text()=='A1201'||
            $(this ).text()=='B0101'||$(this ).text()=='B0201'||$(this ).text()=='B0301'||$(this ).text()=='B0401'
            ||$(this ).text()=='B0501'||$(this ).text()=='B0601'||$(this ).text()=='B0701'||$(this ).text()=='B0801'
            ||$(this ).text()=='B0901'||$(this ).text()=='B1001'||$(this ).text()=='B1101'||$(this ).text()=='B1201'){
              $(this).css("background-color","yellow");
          }
          else{
              $(this).css("background-color","white");
          }
            });});

</script>
</body>
</html>

