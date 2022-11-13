
    $(function(){
        $('#registration-form').validate({
            rules:{
                fullname: "required",
                email: {required: true, email: true},
                number_phone: {required: true, number: true, minlength: 10},
                password: {required: true, minlength: 5},
                confirm_password: {required: true, minlength: 5, equalTo: "#password"}
            },
            messages:{
                fullname: "Bạn chưa nhập vào họ tên của bạn",
                email: "Hộp thư điện tử không hợp lệ",
                number_phone: "Số điện thoại không hợp lệ, phải có ít nhất 10 ký tự",
                password:{
                    required: "Bạn chưa nhập vào mật khẩu",
                    minlength: "Mật khẩu phải có ít nhất 5 ký tự"
                },
                confirm_password:{
                    required: "Bạn chưa nhập vào mật khẩu",
                    minlength: "Mật khẩu phải có ít nhất 5 ký tự",
                    equalTo: "Mật khẩu không trùng khớp với mật khẩu đã nhập"
                },
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



