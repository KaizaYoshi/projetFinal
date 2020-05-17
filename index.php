<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PokéShare</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
    <?php require "views/header.php"; ?>
    <div id="main">
        <?php $action = $_GET['action'];
        switch ($action):
            case 'login':
                require "views/login.php";
                break;
            case 'disconnect':
                require "views/disconnect.php";
                break;
            case 'forum':
                require "views/forum.php";
                break;
            case 'topic':
                require "views/topic.php";
                break;
            case 'create':
                require "views/create.php";
                break;
            case 'userlist':
                require "views/userList.php";
                break;
            case 'display':
                require "views/display.php";
                break;
            case 'admin':
                require "views/admin.php";
                break;
            case 'userGestion':
                require "views/usersGestion.php";
                break;
            case 'updateUser':
                require "views/updateUser.php";
                break;
            case 'updatePokemon':
                require "views/updatePokemon.php";
                break;
            case 'deleteUser':
                require "views/deleteUsers.php";
                break;
            case 'deletePokemon':
                require "views/deletePokemon.php";
                break;
            case 'deleteTopic':
                require "views/deleteTopic.php";
                break;
            case 'deleteMessage':
                require "views/deleteMessage.php";
                break;

            case 'contentGestion':
                require "views/contentGestion.php";
                break;
            case 'gestionTopic':
                require "views/gestionTopic.php";
                break;
            case 'gestionMessages':
                require "views/gestionMessages.php";
                break;
            case 'topicsList':
                require "views/topicsList.php";
                break;
            case 'search':
                require "views/research.php";
                break;
            default:
                require "views/default.php";
                break;


        endswitch;
        ?>
    </div>


</body>
</html>