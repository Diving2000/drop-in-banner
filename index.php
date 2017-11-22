<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Countdown Banner</title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <style>
    * {box-sizing:border-box;}
    html, body {margin:0;padding:0;}
    body {
      font-family:"Open Sans", "Helvetica", "Arial", sans-serif;
      color:#fff;
    }
    
    h1 {
      padding:0;margin:0;
      font-weight:normal;
    }
    
    .banner {
      background:#232323;
      background:url('https://diving2000.dk/trustpilot/patterns/hexabump.png');
      
      width:100%;
      padding:12px;
      
      display:flex;
      justify-content:center;
      align-items:center;
      border:4px outset orange;
    }
    .banner > * + * {
      margin-left:40px;
    }
    
    #clock {
      font-size:24px;
      padding:4px 12px;
      border:1px solid orange;
    }
    
    @media only screen and (max-width:960px){
      .banner {
        justify-content:space-around;
      }
    }
    @media only screen and (max-width:680px){
      .banner {
        display:block;
      }
      .banner > * + * {
        margin-left:0;
      }
      #clock {
        display:inline-block;
        margin-top:20px;
      }
      
      .hideForMobile {display:none;}
    }
  </style>
</head>
<body>
  
  <div class="banner">
    <h1>
      Black Friday<span class="hideForMobile"> nedtælling</span>:
    </h1>
    <div class="countdown">
      <span id="clock"></span>
    </div>
    
    
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="jquery.countdown.min.js"></script>
  <script>
    $(function(){
      $('#clock').countdown('2017/11/23 23:59:59', function(event) {
        $(this).html(event.strftime('%-D dage, %H : %M : %S'));
      });
    });
  </script>
</body>
</html>