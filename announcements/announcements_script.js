var addForm = document.getElementById('add-form');
var announcementsList = document.getElementById('announcements-list')

document.addEventListener('DOMContentLoaded', function () {
    loadAdvertisements();

    addForm.addEventListener('submit', function (event) {
        event.preventDefault();

        var titleInput = document.getElementById('title');
        var descriptionInput = document.getElementById('description');

        var formData = new FormData();
        formData.append('title', titleInput.value);
        formData.append('description', descriptionInput.value);

        var request = new XMLHttpRequest();
        request.open('POST', 'add_announcement.php', true);
        request.onload = function () {
            if (request.status === 200) {
                var response = JSON.parse(request.responseText);
                if (response.success) {
                    title.value = '';
                    description.value = '';
                    loadAdvertisements();
                } else {
                    alert('РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР° РїСЂРё РґРѕР±Р°РІР»РµРЅРёРё РѕР±СЉСЏРІР»РµРЅРёСЏ: ' + response.message);
                }
            }
        };

        request.send(formData);
    });
});

function loadAdvertisements() {
    var request = new XMLHttpRequest();
    request.open('GET', 'get_announcements.php', true);
    request.onload = function () {
        if (request.status === 200) {
            while (announcementsList.firstChild) {
                announcementsList.removeChild(announcementsList.firstChild);
            }
            var data = JSON.parse(request.responseText);
            data.forEach(function (announcement) {
                var card = document.createElement('div');
                card.classList.add('card', 'mt-4', 'border-dark');

                var cardBody = document.createElement('div');
                cardBody.classList.add('card-body', 'border-dark');

                var title = document.createElement('h4');
                title.classList.add('card-header', 'text-white', 'bg-dark');
                title.textContent = announcement.title;

                var description = document.createElement('p');
                description.classList.add('card-text');
                description.textContent = announcement.description;

                card.appendChild(title);
                cardBody.appendChild(description);
                card.appendChild(cardBody);
                announcementsList.appendChild(card);
            });
        } else {
            alert('РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР° РїСЂРё Р·Р°РіСЂСѓР·РєРµ РѕР±СЉСЏРІР»РµРЅРёР№');
        }
    };

    request.send();
}