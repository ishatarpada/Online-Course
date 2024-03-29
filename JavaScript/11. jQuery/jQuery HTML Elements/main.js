$(document).ready(function () {
    // Set text content
    $("#setContentBtn").click(function () {
        $(".setContent").text("Successfully set the content");
    });

    // Get text content
    $("#getContentBtn").click(function () {
        var textContent = $(".setContent").text();
        // Do something with textContent, like displaying it in an alert
        alert(textContent);
    });

    // Set HTML content
    $("#setHtmlContentBtn").click(function () {
        $(".setHtmlContent").html("<b>Successfully set the HTML content</b>");
    });

    // Get HTML content
    $("#getHtmlContentBtn").click(function () {
        var htmlContent = $(".setHtmlContent").html();
        // Do something with htmlContent, like displaying it in an alert
        alert(htmlContent);
    });
});
