
// The code above will:

// Initiate a HTTP request
// Set the HTTP method to POST
// Set a valid request header
// Create a function to execute when the request is done
// Send the HTTP request with a variable fname set to Mary

function myFunction() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "$_post.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onload = function () {
        document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.send("fname=Mary");
}
