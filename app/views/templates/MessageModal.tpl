<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {if $msgs->isError()}
                    {foreach $msgs->getMessages() as $msg}
                        <p>{$msg->text}</p>
                    {/foreach}
                {/if}
                {if $msgs->isInfo()}
                    {foreach $msgs->getMessages() as $msg}
                        <p>{$msg->text}</p>
                    {/foreach}
                {/if}
                {if $msgs->isWarning()}
                    {foreach $msgs->getMessages() as $msg}
                        <p>{$msg->text}</p>
                    {/foreach}
                {/if}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="messageModal.hide()">OK</button>
            </div>
        </div>
    </div>
</div>

<script src="{$conf->app_url}/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    {if $msgs->isError() || $msgs->isInfo() || $msgs->isWarning()}
        var messageModal = new bootstrap.Modal(document.getElementById('messageModal'), {});
        messageModal.show();
    {/if}
</script>