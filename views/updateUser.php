<?php require "models/readUsers.php";
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";

$users = readOneUsers($id);
while ($row = $users->fetch()): ?>

    <div id="presentation">Mise à jour du profil de <?= $row['name'] ?></div>
    <div class="form">
        <h2>Choississez les données à mettre à jour</h2>
        <div class="formBlock">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Nom ou pseudo" id="registerName" value=<?= $row['name'] ?>>
        </div>

        <div class="formBlock">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Adresse Mail" id="registerMail" value=<?= $row['mail'] ?>>
        </div>

        <div class="formBlock">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Mot de passe" id="registerPassword" value="">
        </div>

        <div class="formBlock">
            <i class="fa fa-book icon"></i>
            <select id="role">
                <option>Membre</option>
                <option>Modo</option>
                <option>Admon</option>
            </select>

        </div>

        <div class="formBlock">
            <i class="fa fa-shield icon"></i>
            <select id="etat">
                <option>OK</option>
                <option>Ban</option>
            </select>
        </div>

        <button type="submit" class="btn" id="registerSubmit">Mettre à jour</button>
        <ul id="registerResults">

        </ul>
    </div>

<?php endwhile; ?>

<script src="js/updateUser.js"></script>

