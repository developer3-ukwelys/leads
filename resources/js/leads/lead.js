$(document).ready(function(){
    const name = $("#name");
    const email = $("#email");
    const form = $('#leads_form');

    // const modal = $("#feedback");
    var myModal = new bootstrap.Modal(document.getElementById('feedback'), {
        keyboard: false
      })
    $.ajaxSetup({
         headers: {
             "X-CSRF-TOKEN": $('[name="csrf-token"]').attr('content')
         }   
    });

    form.on('submit', function(event){
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'leads',
            data: {
                "name": name.val(),
                "email": email.val()
            },
            success: function(data){
                name.val('').attr('placeholder', 'e.g. Okwalinga Nehemiah');
                email.val('').attr('placeholder', 'e.g. o.nehemiah@email.com');
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

    // Retrieve information using ajax
    $('#display_table').one('shown.bs.modal', function(event){
        $.ajax({
            type: "GET",
            url: "leads",
            success: function(response){
                console.log(response)
                const tableBody = $("#display_table table tbody");
                let tr = '';
                response.map(function(item){
                    tr += `
                    <tr>
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.email}</td>
                    <td></td>
                    </tr>
                    `;
                })
                tableBody.append(tr);
            },
            fail: function(data){
                console.log(data);
            }
        })
    })
})
