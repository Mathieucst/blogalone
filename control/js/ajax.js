$(document).ready(function() {
    $(".folder_name").on("click", function(e){
        e.preventDefault();
		
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
		
        $.ajax({
            type : "GET",
            data: arr,
            url: "php/current_url.php",
            success : function(data){
                $(".url").html(data);
            }
        });
    });
});