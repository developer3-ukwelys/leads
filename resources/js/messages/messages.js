$(document).ready(function(){
    const messageName = $("#messageName");
    const messageEmail = $("#messageEmail");
    const messageText = $("#messageText");
    const form1 = $('#form1');
    
       // const modal = $("#feedback");
       var myModal = new bootstrap.Modal(document.getElementById('response'), {
        keyboard: false
      })
     
    $.ajaxSetup({
         headers: {
             "X-CSRF-TOKEN": $('[name="csrf-token"]').attr('content')
         }   
    });

    form1.on('submit', function(event){
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'messages',
            data: {
                "messageName": messageName.val(),
                "messageEmail": messageEmail.val(),
                "messageText": messageText.val()
            },
            success: function(data){
                messageName.val('').attr('placeholder', 'e.g. mark tusiime');
                messageEmail.val('').attr('placeholder', 'e.g. markt2yahoo.com');
                myModal.show();

                setTimeout(function () {
                    myModal.hide();
                }, 3000);
            }, 
            fail: function(data){
                console.log("Failure");
                console.log(data);
            }
        });
    })
});    