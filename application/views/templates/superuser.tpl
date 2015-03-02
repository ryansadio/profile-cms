{include file="_main_header.tpl"}

<div class="row">
    <div class="col s1 m1 l3"><p>&nbsp;</p></div>
    <div class="col s10 m10 l6">
        <ul class="collection with-header z-depth-1">
            <li class="collection-header"><h4>Profiles</h4></li>

            {foreach $accounts as $account}
                <li class="collection-item"><div>{$account.username}<a href="/superuser/delete/{$account.username}" class="secondary-content"><i class=" mdi-content-clear"></i></a></div></li>
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