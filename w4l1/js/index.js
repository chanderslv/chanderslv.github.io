$(function() {
    var $makeRequest = $('.make-request')
    var page = 1;
    var progressInterval;

    $('.make-request').on('click', function() {
        $.ajax({
            method: "GET",
            url: "https://reqres.in/api/users?page=" + page
        }).done(function(response) {
            response.data.forEach(function(value, index, arr) {
                const img = "<img src=\""+value.avatar+"\">"
                const row = "\
                <tr>\
                    <td>"+value.id+"</td>\
                    <td class=\"cell-img\">"+img+"</td>\
                    <td>"+value.first_name+"</td>\
                    <td>"+value.last_name+"</td>\
                    <td>"+value.email+"</td>\
                </tr>";

                $('#data-table').find('tbody').append(row)
                               
            })
            page ++;

            $makeRequest.attr('disabled', true);
        })
   })
   
   $('.start-action').on('click', startProgress)
    
   function startProgress() {
       const cycleInterval = $('#cycle-interval').val()
       let width = 0

       if (cycleInterval > 0) {
           $('.progress').width(0);

           progressInterval = setInterval(function() {
               width ++;
               $('progress').width(width + "%");
           }, 100)

           }
       }
   }
)