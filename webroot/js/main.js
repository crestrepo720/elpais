$(document).ready(function() {
    $( "#buscador" ).autocomplete({
        source: function( request, response ) {
            $.ajax( {
                headers: {
                    'X-CSRF-Token': csrfToken
                },
                url: $('body').data('url')+'actividades/buscador',
                dataType: "json",
                type: 'POST',
                data: {
                    criterio: request.term
                },
                success: function( data ) {
                    response( data );
                }
            } );
        },
        minLength: 2,
        select: function( event, ui ) {
            $('#filtro').val(ui.item.value);
            $('#form-buscador').submit();
        }
    } );
});