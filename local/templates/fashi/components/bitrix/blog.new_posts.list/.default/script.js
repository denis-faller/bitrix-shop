$(document).ready(function(){
    $(".loading-more a").on("click", function(){
        let params = location.search;
        let arParams = params.split('&');
        let numPage = 2;
        $(arParams).each(function(index, element){
            let param = element.split('=');
            if(param[0] == "?PAGEN_1" || param[0] == "PAGEN_1"){
                numPage = Number(param[1]) + 1;
            }
        });
        
        $.ajax({
           url: "/ajax/ajax_blog_new_posts.php",
           method: "GET",
           data: {PAGEN_1:numPage},
           success: function(data){
                $(".blog-posts").html(data);
                history.pushState(null, null, "?PAGEN_1="+numPage);
           }
        });
    });
});