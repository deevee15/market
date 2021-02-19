$(document).ready(function() {
	$(function(){
        $('.content_photo_other img').click(function(){
            var get_src_clicked = $(this).attr('src');
            var get_src_main = $('.content_photo_main img').attr('src');
            $(this).attr('src',get_src_main);
            $('.content_photo_main img').attr('src',get_src_clicked);
        });
    });
});