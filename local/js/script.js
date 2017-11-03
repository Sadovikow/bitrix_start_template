$(document).ready(function() {
/* input masks */
    $("input[type='tel']").inputmask("+7(999)999-99-99",{
        oncomplete: function(){ },
        onincomplete: function(){ $(this).val(""); },
        oncleared: function(){ $(this).val(""); },
    });
/* input masks end */

});
