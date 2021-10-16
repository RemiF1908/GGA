<script>
    $(document).ready(function() {
        var windowHeight = $(window).height();
        var headerHeight = $('header').height();
        var bodyHeight = $('main').height();
        var footerHeight = $('footer').height();

        var newBodyHeight = windowHeight - headerHeight-footerHeight;
        if(newBodyHeight > 0 && newBodyHeight > bodyHeight) {
            $('main').height(newBodyHeight);
            $('footer').height(footerHeight);
            $('header').height(headerHeight);

        }
    });
</script>