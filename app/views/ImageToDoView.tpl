{extends file="Main.tpl"}

{block name=contentImageToDo}
    <section id="app" class="todo-container">
        <h2 class="todo-headline">Images To Do</h2>
        <div class="todo-init">

            <form action="{$conf->action_url}addImage" method="post">
                <input id="todo-create" class="todo-input" type="text" name="url"
                    placeholder="What beautiful image do you want to add?" autofocus>
            </form>
            <span id="todo-toggle-all" class="todo-toggle todo-toggle-all glyphicon glyphicon-ok-sign"
                title="Toggle all todos"></span>

            <span id="todo-remove-all" class="todo-remove todo-remove-all glyphicon glyphicon-remove-circle"
                title="Remove all completed todos"></span>
        </div>

        <ul id="todo-list" class="todo-list">
            {foreach $data as $item}
                <li>
                    <img src="{$item.Url}" alt="{$item.Url}" class="todo-image todo-desc">
                    <span class="todo-desc-right">{$item.Date}</span>
                    <form action="{$conf->action_url}removeImage" method="post">
                        <input type="hidden" name="id" value="{$item.id}">
                        <button class="todo-remove fa-solid fa-xmark"></button>
                    </form>
                </li>
            {/foreach}
        </ul>

        <footer class="todo-footer">
            <table id="todo-stats" class="todo-stats">
                <tr>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>{$total}</td>
                </tr>
            </table>
        </footer>
    </section>

    <script src="{$conf->app_url}/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
{/block}