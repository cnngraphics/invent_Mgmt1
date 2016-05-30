$(document).ready(function () {
    
    //var sum = (int)($('#sum'));
    var sum = 0;

    if ($("#sum") === "") {
        $("#sum").html("0");
    }

$('.buttons, .button-plus').click(function(event){
 //alert(event.target.id);
   

        var detectedId = event.target.id;

        var plusaddone = "plus";
        var minusOne = "minus";
        if(detectedId.indexOf(plusaddone) != -1){
            console.log(plusaddone + " found");
            console.log(this);
        }

         if(detectedId.indexOf(minusOne) != -1){
            console.log(minusOne + " found");
            console.log(this);
        }

       
//            $("detectedId:contains(plus)").css("background-color", "yellow");

// //    $("p:contains(is)").css("background-color", "yellow");
    
//         if($("detectedId:contains(plus)")){
//             alert("has plus");
//             console.log("Has plus");
//         }

        



   });

// $('.buttons, .button-plus').click(function(event){
//  alert(event.target.id);
//    });


// $('.buttons').click(function(event){
//    alert(event.target.id);
// });


// $('.single-item').click(function(event){
//    alert(event.target.id);
// });

    //Add item(s)
    $(".single-item").click(function (event) {
        sum = sum + 1;
        $("event.target.id").html(sum);

        if (sum >0) {
            $("#sum").removeClass("btn btn-primary disabled");
            $("#sum").addClass("btn btn-success");
        }
    });
    
    //remove items
    $("#minus").click(function () {
        sum = sum - 1;
        $("#sum").html(sum);
         
        if (sum < 0) {
            sum=0;
             $("#sum").html(sum);
            $("#sum").addClass('disabled');
                  
        }
    });

    $('input[type="checkbox"]').click(function(){
        //alert("its cliked")
        $("#yespack").html("Packing Selected<br>");
        //console.log(this);
        $(this).html("Packing Added");
        if($(this).is(":not(:checked")){
            $("#yespack").html("");

        }
    });
    
});
