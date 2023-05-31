var loginForm = document.getElementById('login-form');
var errorMessage = document.getElementById('error-message');
var errorBlock = document.getElementById('error-block');

loginForm.addEventListener('submit', function (event) {
    event.preventDefault();

    var loginInput = document.getElementById('login');
    var passwordInput = document.getElementById('password');

    var formData = new FormData();
    formData.append('login', loginInput.value);
    formData.append('password', passwordInput.value);

    var request = new XMLHttpRequest();
    request.open('POST', 'login_process.php', true);
    request.onreadystatechange = function () {
        if (request.readyState === XMLHttpRequest.DONE && request.status === 200) {
            var response = JSON.parse(request.responseText);
            if (response.exists) {
                window.location.href = '../index.php';
            } else {
                errorBlock.style.display = 'block';
                errorMessage.textContent = response.error;
            }
        }
    };

    request.send(formData);
});