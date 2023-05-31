<h2 class="mt-4">Р”РѕР±Р°РІР»РµРЅРёРµ РѕР±СЉСЏРІР»РµРЅРёСЏ</h2>
<form id="add-form" method="POST" action="add_announcement.php">
    <div class="form-group">
        <input type="text" id="title" name="title" class="form-control border-dark mt-4" placeholder="Р—Р°РіРѕР»РѕРІРѕРє" required>
    </div>
    <div class="form-group">
        <textarea id="description" name="description" class="form-control border-dark mt-4" placeholder="РћРїРёСЃР°РЅРёРµ" required></textarea>
    </div>
    <button type="submit" class="btn btn-dark mt-4">Р”РѕР±Р°РІРёС‚СЊ</button>
</form>

<h2 class="mt-4">РЎРїРёСЃРѕРє РѕР±СЉСЏРІР»РµРЅРёР№</h2>
<ul id="announcements-list" class="list-group mb-4"></ul>

<script src="announcements_script.js"></script>