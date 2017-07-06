<script type="text/javascript">
    $(function () {
        var frm = $('#dataForm');
        frm.submit(function (ev) {
        	var request =   $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                success: function (data) {
                	$('#target').html(data);
                }
            });
        	request.fail(function( jqXHR, textStatus ) {
        		  alert( "Request failed: " + textStatus );
        		});
            ev.preventDefault();
        });
    });
</script>
<?php 
/*
<script type="text/javascript">
var i = 0;
function AjaxSendForm(url, placeholder, form, append) {
var data = $(form).serialize();
append = (append === undefined ? false : true); // whatever, it will evaluate to true or false only
$.ajax({
    type: 'POST',
    url: url,
    data: data,
    beforeSend: function() {
        // setting a timeout
        $(placeholder).addClass('loading');
        i++;
    },
    success: function(data) {
        if (append) {
            $(placeholder).append(data);
        } else {
            $(placeholder).html(data);
        }
    },
    error: function(xhr) { // if error occured
        alert("Error occured.please try again");
        $(placeholder).append(xhr.statusText + xhr.responseText);
        $(placeholder).removeClass('loading');
    },
    complete: function() {
        i--;
        if (i <= 0) {
            $(placeholder).removeClass('loading');
        }
    },
    dataType: 'html'
});
}
</script>