{extends file="Main.tpl"}
{include file="MessageModal.tpl"}

{block name=contentToDo}
    <section id="app" class="todo-container">
        <h2 class="todo-headline">Tasks To Do</h2>
        <div class="todo-init">

            <form action="{$conf->action_url}addTask" method="post">
                <input id="todo-create" class="todo-input" type="text" name="task" placeholder="What needs to be done?"
                    autofocus>
            </form>
            <span id="todo-toggle-all" class="todo-toggle todo-toggle-all glyphicon glyphicon-ok-sign"
                title="Toggle all todos"></span>

            <span id="todo-remove-all" class="todo-remove todo-remove-all glyphicon glyphicon-remove-circle"
                title="Remove all completed todos"></span>
        </div>

        <ul id="todo-list" class="todo-list">
            {foreach $data as $item}
                <li>
                    <form action="{$conf->action_url}markCompleted" method="post">
                        <input type="hidden" name="id" value="{$item.id}">
                        <input type="hidden" name="currentComplete" value="{$item.IsCompleted}">
                        {if $item.IsCompleted}
                            <button type="submit" class="todo-toggle todo-toggle-complete fas fa-check"></button>
                        {else}
                            <button type="submit" class="todo-toggle fas fa-check"></button>
                        {/if}
                    </form>

                    <span class="todo-desc">{$item.Description}</span>
                    <span class="todo-desc-right">{$item.Date}</span>
                    <form action="{$conf->action_url}removeTask" method="post">
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
                    <th>Completed</th>
                    <th>Incomplete</th>
                </tr>
                <tr>
                    <td>{$total}</td>
                    <td>{$completed}</td>
                    <td>{$incomplete}</td>
                </tr>
            </table>
        </footer>
    </section>

    <script src="{$conf->app_url}/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
{/block}