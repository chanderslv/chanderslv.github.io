$(function() {
    $(".js-delete-row").on("click", function() {
        $.ajax({
            method: "GET",
            url: "/CRUD/delete.php?id=" + id
        }).then(function() {
            console.log()
        }
    }
}