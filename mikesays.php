<html>
<head>
  <style>
    body {
      background-image: url(diagmonds.png);
      background-repeat: repeat;
    }
    div.content {
      margin: 0 auto;
      width: 450px;
      background-image: url(grey_wash_wall.png);
      background-repeat: repeat;
      padding: 30px;
    }
    #bubble 
    {
      position: relative;
      width: 250px;
      min-height: 90px;
      padding: 0px;
      background: #FFFFFF;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      float: left;
      padding-top: 35px;
      padding-left: 10px;
    }

    #bubble:after 
    {
      content: '';
      position: absolute;
      border-style: solid;
      border-width: 15px 15px 15px 0;
      border-color: transparent #FFFFFF;
      display: block;
      width: 0;
      z-index: 1;
      left: -15px;
      top: 45px;
    }
  </style>
</head>
<body>
<?php
$quotes = array(
  'yoga' => 'school means you can be stretched',
  'race' => 'I believe so block KKK go ahead',
  'sports' => 'I\'m i\'m absolutely that\'s so much ball',
  'sweat stains' => 'a hundred dollars remember each armpits struggling to configure NetBeans',
  'girlfriends' => 'order ISSR big tits',
  'music' => 'ox Nelly Furtado site end up being this is that begin their tracks',
  'work' => 'and I\'m the associate director PST',
  'church' => 'probably touched in some way',
  'talking to women' => 'a plea they just add to it they don\'t subtract up slut',
  'saturday nights' => 'are binding model grease dance floor',
  'local government' => 'under Senate I will yield you the right path to go down',
  'self defense' => 'know there\'s Stack Overflow to bloodstains',
  'assassins creed' => ' extends or alter the module and by Altair',
  'european pornography' => 'so to Turkey where this case XXXs Press result is the exact model',
  'dating' => 'couple minutes someone gave me some and slap',
  'hollywood' => 'maintainers actors and they look at ass in a cheater to you',
  'russian teens' => 'your asthma years aspect yeltsin\'s',
  'dating' => 'the you no contest means so it\'s not there s sex a requirements',
  'role playing' => 'i am ship',
  'talking dirty' => 'allows us to trade schedules her cunt at tight',
  'this app' => 'whatever bye',
  'sunglasses' => 'Oakley do nothing just use what that the natives you',
  'acid' => 'clout azzam as bailouts arrest the',
  );

$random = array_rand($quotes);

echo '<div class="content"><h1>Mike on ';
echo '<strong>'. ucfirst($random) . ':</strong></h1>';
echo '<br>';
echo '<img style="float: left" src ="mmiles.jpg" />';
echo '<div id="bubble">'.$quotes[$random].'</div>';
echo '<div style="clear:both"></div>';
?>
<input type="button" value="MOAR" onClick="window.location.href=window.location.href">
</div>
</body>
</html>