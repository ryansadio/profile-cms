</div>
</div>

<footer class="page-footer midnight_blue">
    <div class="container center">
        <div class="row">

            <div class="col s0 m2 l3">
                <p>&nbsp;</p>
            </div>

            <div class="col s12 m8 l6">
            {if isset($urllinkedin)}
                    <a class="btn-spacer" href="{$urllinkedin|default:"#"}"><img src="../../../assets/images/icon_linkedin.png" width="46"></a>
            {/if}

            {if isset($urltwitter)}
                    <a class="btn-spacer" href="{$urltwitter|default:"#"}"><img src="../../../assets/images/icon_twitter.png" width="46"></a>
            {/if}

            {if isset($urlgithub)}
                    <a class="btn-spacer" href="{$urlgithub|default:"#"}"><img src="../../../assets/images/icon_github.png" width="46"></a>
            {/if}
            </div>

            <div class="col s0 m2 l3">
                <p>&nbsp;</p>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="#">Voodoo Works.</a>
        </div>
    </div>
</footer>

{if isset($loggedIn)}
    <div class="fixed-action-btn" id="profile-edit-btn">
        <a class="btn-floating btn-large red">
            <i class="large mdi-editor-mode-edit"></i>
        </a>
        <ul>
            <li><a href="/profileeditor/{$profile_name}/#home" class="btn-floating red" title="Edit profile"><i class="large mdi-action-account-circle right"></i></a></li>
            <li><a href="/profileeditor/{$profile_name}/#project" class="btn-floating green" title="Add/Remove projects"><i class="large mdi-action-assignment"></i></a></li>
            <li><a href="/profileeditor/{$profile_name}/#resume" class="btn-floating blue" title="Upload resume"><i class="large mdi-editor-attach-file"></i></a></li>
        </ul>
    </div>
{/if}


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../../assets/materialize/js/materialize.js"></script>
<script src="../../../assets/materialize/js/init_profile.js"></script>

</body>
</html>