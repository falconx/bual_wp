(function( $ ) {
    $(document).ready(function() {

        $('#donate button').on('click', function( e ) {
            e.preventDefault();

            var val = $(this).val();

            if( val ) {
                $('#donate [name="amount"]').val(val).trigger('change');
            }
        });

        $('#donate [name="amount"]').on('change', function() {
            var amount = $(this).val();

            $('#donate button.selected').removeClass('selected');

            $('#donate button').each(function() {
                var button = $(this);

                if( button.val() === amount ) {
                    button.addClass('selected');
                }
            });
        });

        // Donate button
        $('#make-donation').on('click', function( e ) {
            e.preventDefault();

            $('#donate').trigger('submit');
        });

    });
})(jQuery);