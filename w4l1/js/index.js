$(function() {
    console.log($('#data-table').find('tbody'))
    $('.make-request').on('click', function() {
        $.ajax({
            method: "GET",
            url: "https://reqres.in/api/users?page="
        }).done(function(response) {
            response.data.forEach(function(value, index) {
                const row = "\
                <tr>\
                    <td>"+value.id+"</td>\
                    <td>"+value.img+"</td>\
                    <td>"+value.first_name+"</td>\
                    <td>"+value.last_name+"</td>\
                    <td>"+value.email+"</td>\
                </tr>";

                $('#data-table').find('tbody')
                .append(row)
            })
        })
    })

    var makeRequest = function() {}
})