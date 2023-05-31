var registrationForm = document.getElementById('registration-form');
var errorMessage = document.getElementById('error-message');
var errorBlock = document.getElementById('error-block');

registrationForm.addEventListener('submit', function (event) {
    event.preventDefault();

    var loginInput = document.getElementById('login');
    var passwordInput = document.getElementById('password');

    var formData = new FormData();
    formData.append('login', loginInput.value);
    formData.append('password', passwordInput.value);

    var request = new XMLHttpRequest();
    request.open('POST', 'registration_check_login_exists.php', true);
    request.onreadystatechange = function () {
        if (request.readyState === XMLHttpRequest.DONE && request.status === 200) {
            var response = JSON.parse(request.responseText);
            if (response.exists) {
                errorBlock.style.display = 'block';
                errorMessage.textContent = 'Р›РѕРіРёРЅ СѓР¶Рµ СЃСѓС‰РµСЃС‚РІСѓРµС‚. РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІС‹Р±РµСЂРёС‚Рµ РґСЂСѓРіРѕР№ Р»РѕРіРёРЅ.';
            } else {
                document.getElementById('registration-form').submit();
            }
        }
    };

    request.send(formData);
});