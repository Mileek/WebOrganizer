<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{$conf->app_url}/../assets/ToDoStyle.css" />
    <link rel="stylesheet" href="{$conf->app_url}/../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"></script>
</head>

<section id="app" class="todo-container">
    <h2 class="todo-headline">Todos</h2>
    <div class="todo-init">

        <form action="{$conf->action_url}create" method="post">
            <input id="todo-create" class="todo-input" type="text" name="todo" placeholder="What needs to be done?"
                autofocus>
        </form>
        <span id="todo-toggle-all" class="todo-toggle todo-toggle-all glyphicon glyphicon-ok-sign"
            title="Toggle all todos"></span>

        <span id="todo-remove-all" class="todo-remove todo-remove-all glyphicon glyphicon-remove-circle"
            title="Remove all completed todos"></span>
    </div>

    <ul id="todo-list" class="todo-list">
        {foreach $data as $item}
            <li style="margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                <strong>Id:</strong> {$item.id}<br />
                <strong>Kwota:</strong> {$item.IsCompleted}<br />
                <strong>Rata:</strong> {$item.Description}<br />
                <strong>Data:</strong> {$item.Date}<br />
            </li>
        {/foreach}
    </ul>

    <footer class="todo-footer">
        <table id="todo-stats" class="todo-stats">
            <tr>
                <th>Total</th>
                <th>Completed</th>
                <th>Incomplete</th>
            </tr>
            <tr></tr>
        </table>
    </footer>
</section>

<script src="{$conf->app_url}/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>