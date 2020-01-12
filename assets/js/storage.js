function saveToSession()
{
    var nameValue = document.getElementById('name').value;
    var emailValue = document.getElementById('email').value;
    var messageValue = document.getElementById('message').value;
    var regulaminValue = document.getElementById('regulamin').value;
    var robotValue = document.getElementById('not-robot').value;
    sessionStorage.setItem('name', nameValue);
    sessionStorage.setItem('email', emailValue);
    sessionStorage.setItem('message', messageValue);
    sessionStorage.setItem('regulamin', regulaminValue);
    sessionStorage.setItem('not-robot', robotValue);
}

function loadFromSession()
{
    document.getElementById('dane').innerHTML =
        "Imię: " + sessionStorage.getItem('name') +
        "\nEmail: " + sessionStorage.getItem('email') +
        "\nWiadomość: " + sessionStorage.getItem('message') +
        "\nRegulamin: " + sessionStorage.getItem('regulamin') +
        "\nNie jestem robotem: " + sessionStorage.getItem('not-robot');

}