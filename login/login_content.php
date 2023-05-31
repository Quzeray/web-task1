<h2 class="mt-4">РђРІС‚РѕСЂРёР·Р°С†РёСЏ</h2>
<form id="login-form" method="POST" action="login_process.php">
    <div class="row mb-3">
        <div class="col">
            <label for="login" class="form-label">Р›РѕРіРёРЅ:</label>
            <input type="text" class="form-control border-dark" name="login" id="login" required style="max-width: 300px;">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="password" class="form-label">РџР°СЂРѕР»СЊ:</label>
            <input type="password" class="form-control border-dark" name="password" id="password" required style="max-width: 300px;">
        </div>
    </div>

    <input type="submit" class="btn btn-dark" value="Р’РѕР№С‚Рё">
</form>

<div id="error-block" class="alert alert-danger" style="display: none; padding-left: 10px; max-width: 300px; margin-top: 15px">
    <span id="error-message"></span>
</div>

<script src="login_script.js"></script>