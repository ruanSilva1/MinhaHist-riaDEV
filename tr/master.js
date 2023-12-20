$(function(){
    $(".btn_cad").on("click", function(){
        $.ajax({
            URL: "multa.php",
            sucess: function(result){
                $(".result").html(result);
            },
            error: function(){
                $(".result").html("error");
            }
        });
    });
});