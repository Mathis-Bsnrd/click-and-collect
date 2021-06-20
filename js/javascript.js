

    function redirect(id_button,urltogo){
        $("#"+id_button).click( function () {
           location.href = urltogo;
       });
   }
   
       redirect("myButton", "/produit2.php");
       redirect("creation", "/inscription.php");
       redirect("modification", "/modification.php");
   
   
   $(document).ready(function(){
     $("#prod").click(function(){
       $("#myDIV").toggle(1,"linear",function(){});
     });
   });
   
   $(document).ready(function(){
     $("#prod1").click(function(){
       $("#myDIV1").toggle(1,"linear",function(){});
     });
   });
   
   $(document).ready(function(){
     $("#prod2").click(function(){
       $("#myDIV2").toggle(1,"linear",function(){});
     });
   });
   
   $(document).ready(function(){
     $("#prod3").click(function(){
       $("#myDIV3").toggle(1,"linear",function(){});
     });
   });
   
   $(document).ready(function(){
     $("#prod4").click(function(){
       $("#myDIV4").toggle(1,"linear",function(){});
     });
   });
   
   $(document).ready(function(){
     $("#prod5").click(function(){
       $("#myDIV5").toggle(1,"linear",function(){});
     });
});
