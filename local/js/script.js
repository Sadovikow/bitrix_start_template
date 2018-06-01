$(document).ready(function() {
/* input masks */
    $("input[type='tel']").inputmask("+7(999)999-99-99",{
        oncomplete: function(){ },
        onincomplete: function(){ $(this).val(""); },
        oncleared: function(){ $(this).val(""); },
    });
    $("input.tel").inputmask("+7(999)999-99-99",{
        oncomplete: function(){ },
        onincomplete: function(){ $(this).val(""); },
        oncleared: function(){ $(this).val(""); },
    });
    $("input.date").inputmask("99.99.9999",{
        oncomplete: function(){ },
        onincomplete: function(){ $(this).val(""); },
        oncleared: function(){ $(this).val(""); },
    });
    $("input.orgn").inputmask("9999999999999",{
        oncomplete: function(){ },
        //onincomplete: function(){ $(this).val(""); },
        //oncleared: function(){ $(this).val(""); },
    });
    $("input.inn").inputmask("999999999999",{
        oncomplete: function(){ },
        //onincomplete: function(){ $(this).val(""); },
        //oncleared: function(){ $(this).val(""); },
    });
    $("input.kpp").inputmask("999999999",{
        oncomplete: function(){ },
        //onincomplete: function(){ $(this).val(""); },
        //oncleared: function(){ $(this).val(""); },
    });
/* input masks end */

});
