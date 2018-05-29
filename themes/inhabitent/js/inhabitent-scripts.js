(function($){

    // all of your js goes here

 
    $('.header-search .search-submit').on('click', function(event){
        event.preventDefault();
        
        // focus on the input field & open the search field
        $('.header-search .search-field').toggle();
        $('.header-search .search-field').focus();

        $('.header-search .search-field').on('blur', function(){
            $('.header-search .search-field').hide();
        });

        // add an event for the enter key press
        // code to run after enter key is pressed
        $(document).keydown(function( event ) {
            if ( event.which == 13 ) {
                $('.header-search .search-form').submit();
            }
        });
        // $('.header-search .search-form').submit();

    });





})(jQuery);