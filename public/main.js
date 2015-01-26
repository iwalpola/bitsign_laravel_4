$('#email-submit-btn').click(function(){
    
    var email = $('#input-email').val();
    $.post( '/home/register', { email:email })
      .done(function( data ) {
        $('#input-email').val('');
        $('#reg-modal-body').html('<div class="alert alert-success" role="alert"> Thank you for registering with Bitsign </div>');
      });
});