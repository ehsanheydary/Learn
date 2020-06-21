jQuery(document).ready(function($){
    $(".featured-container").each(function(){
       $(".featured-post").slick({
           autoplay:true,
           autoplaySpeed:4500,
           dots:true,
           slidesToShow:5,
           slidesToScroll:1,
           prevArrow : '.sl-prev',
           nextArrow : 'sl-next',
       });
    });
        $(".most-popular-post").slick({
            autoplay:true,
            autoplaySpeed:4500,
            slidesToShow:4,
            slidesToScroll:4,
        });
});