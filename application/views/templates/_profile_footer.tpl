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


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../../assets/materialize/js/materialize.js"></script>
<script src="../../../assets/materialize/js/init_profile.js"></script>

</body>
</html>