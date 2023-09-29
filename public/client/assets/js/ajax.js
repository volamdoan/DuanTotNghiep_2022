$.ajaxSetup({
    Headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
})
$(function(){

    $('#profile_form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error,function(prefix,val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('.user_name').each(function(){
                        $(this).html( $('#profile_form').find( $('input[name="name"]')).val() );
                    })
                    toastr.success(data.msg);
                }
            }
        });
    });
        //Ảnh
        $(document).on('click','#change_picture_btn',function(){

            $('#user_image').click();
        })

        $('#user_image').ijaboCropTool({
            preview : '',
            setRatio:1,
            allowedExtensions: ['jpg', 'jpeg','png'],
            buttonsText:['Cắt ảnh','Hủy'],
            buttonsColor:['#30bf7d','#ee5155', -15],
            processUrl:'{{ route("profile.update_picture") }}',
            // withCSRF:['_token','{{ csrf_token() }}'],
            onSuccess:function(message, element, status){
                toastr.success(message);
            },
            onError:function(message, element, status){
                toastr.error(message);
            }
     });


     //Password
     $('#password_form').on('submit', function(e){
        e.preventDefault();

        $.ajax({
           url:$(this).attr('action'),
           method:$(this).attr('method'),
           data:new FormData(this),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
             $(document).find('span.error-text').text('');
           },
           success:function(data){
             if(data.status == 0){
               $.each(data.error, function(prefix, val){
                 $('span.'+prefix+'_error').text(val[0]);
               });
             }else{
               $('#password_form')[0].reset();
               toastr.success(data.msg);
             }
           }
        });
   });
     
});

