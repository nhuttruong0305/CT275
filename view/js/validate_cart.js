//validate form cart
$(function(){
    console.log("hello")
    $('#form_customer_cart').validate({
        rules:{
            name_customer_cart: "required",
            email_customer_cart: {required: true, email: true},
            sdt_customer_cart: {required: true, number: true, minlength: 10},
            address_customer_cart: {required: true, minlength: 25}
        },
        messages:{
            name_customer_cart: "Bạn chưa nhập vào họ tên của bạn",
            email_customer_cart: "Hộp thư điện tử không hợp lệ",
            sdt_customer_cart: "Số điện thoại không hợp lệ, phải có ít nhất 10 ký tự",
            address_customer_cart: "Bạn chưa nhập đầy đủ địa chỉ đầy đủ",
        },
        errorElement: "div",	
        errorPlacement: function(error, element){
            error.addClass("invalid-feedback");
            if(element.prop("type")==="checkbox"){
                error.insertAfter(element.siblings("label"));
            }else{
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass){
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass){
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
});