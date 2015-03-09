{include file="_main_header.tpl"}

<div class="row">
    <div class="col s1 m1 l3"><p>&nbsp;</p></div>
    <div class="col s10 m10 l6">
        <ul class="collection with-header z-depth-1">
            <li class="collection-header"><h4>Profiles</h4></li>

            {foreach $accounts as $account}
                <li class="collection-item">

                    <div>{$account.username}
                        <!-- Modal Trigger -->
                        <a href="#confirm-delete-{$account.username}" class="secondary-content modal-trigger">
                            <i class=" mdi-content-clear"></i>
                        </a>

                        <!-- Modal Structure -->
                        <div id="confirm-delete-{$account.username}" class="modal">
                            <div class="modal-content">
                                <h4>Are you sure about that?</h4>
                                <p>All data including profile pictures, projects, and resumes associated with the account <span class="red-text">{$account.username}</span> will be deleted.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="/superuser/delete/{$account.username}"
                                   class="waves-effect waves-green btn-flat modal-action modal-close">
                                    Yes, delete everything
                                </a>
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">No</a>
                            </div>
                        </div>
                    </div>

                </li>

            {/foreach}
            {*<li class="collection-item"><div>bensoer<a href="#!" class="secondary-content"><i class="secondary-content mdi-content-clear"></i></a></div></li>
            <li class="collection-item"><div>ryansadio<a href="#!" class="secondary-content"><i class="mdi-content-clear"></i></a></div></li>
            <li class="collection-item"><div>alanlai<a href="#!" class="secondary-content"><i class="mdi-content-clear"></i></a></div></li>
            <li class="collection-item"><div>jhondoe<a href="#!" class="secondary-content"><i class="mdi-content-clear"></i></a></div></li>*}
        </ul>
        {$message|default:""}
    </div>
    <div class="col s1 m1 l3"><p>&nbsp;</p></div>
</div>

{include file="_main_footer.tpl"}