$(document).ready(function() {
    $.get("get_articles.php", function(data) {
        $("#articleList").html(data);
    });

    $("#articleForm").submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.post("create_article.php", formData, function(data) {
            $("#articleList").html(data);
            $("#articleForm")[0].reset();
        });
    });
});
