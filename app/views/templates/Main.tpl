<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{$conf->app_url}/../assets/LoginStyle.css" />
    <link rel="stylesheet" href="{$conf->app_url}/../assets/ToDoStyle.css" />
    <link rel="stylesheet" href="{$conf->app_url}/../assets/MainStyle.css" />
    <link rel="stylesheet" href="{$conf->app_url}/../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"></script>
</head>

{include file="MessageModal.tpl"}

<body>
    <div>
        <nav class="navi">
            <!-- Tutaj umieść swoją nawigację -->
            <form action="{$conf->action_url}showTasks">
                <button class="navi__button">ToDo</button>
            </form>

            <form action="{$conf->action_url}showImages">
                <button class="navi__button">Images</button>
            </form>
            <form action="{$conf->action_url}logout">
                <button class="navi__button">Logout</button>
            </form>
        </nav>


        {block name=contentToDo} {/block}
        {block name=contentImageToDo} {/block}
    </div>



    <footer class="footer">
        <p class="text-center">© 2024. All rights reserved. Design and Development by <strong>Kamil Patryk
                Kaszuba</strong></p>
    </footer>
</body>

</html>