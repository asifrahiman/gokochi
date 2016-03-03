<script type="text/javascript">
$(document).ready(function(){
    $('#content').infinitescroll({
        navSelector: "#next:last",
        nextSelector: "#next:last",
        itemSelector: "#content",
        debug: false,
        dataType: 'html',
    maxPage: 4,
        path: function(index) {
            return "index" + index + ".html";
        }
        // appendCallback   : false, // USE FOR PREPENDING
    }, function(newElements, data, url){
      // used for prepending data
        // $(newElements).css('background-color','#ffef00');
        // $(this).prepend(newElements);
    });
});
</script>