// Standards ftw!
var supportsVibrate = "vibrate" in navigator;
   function Short()
   {
   window.navigator.vibrate([300,100,300]);
   }
   function medium()
   {
   window.navigator.vibrate([500,200,500,200,500]);
   }
   function long()
   {
   window.navigator.vibrate([800,200,800,200,800]);
   }
   function Randomize()
   {
    var myrandom=Math.round(Math.random()*3)
    var patters =new Array()
    1= Short()
    2 = medium()
    3= long()
   window.navigator.vibrate(myrandom)
   }