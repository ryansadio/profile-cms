</div>
</div>

<footer class="page-footer midnight_blue">
    <div class="container center">
        <div class="row">

            <div class="col s4">
                <p>&nbsp;</p>
            </div>
            {if isset($urllinkedin)}
                <div class="col s1">
                    <a href="{$urllinkedin|default:"#"}"><img src="../../../assets/images/linkedin2.png" width="46"></a>
                </div>
            {/if}

            {if isset($urltwitter)}
                <div class="col s1">
                    <a href="{$urltwitter|default:"#"}"><img src="../../../assets/images/social71.png" width="46"></a>
                </div>
            {/if}

            {if isset($urlgithub)}
                <div class="col s1">
                    <a href="{$urlgithub|default:"#"}"><img src="../../../assets/images/share6.png" width="46"></a>
                </div>
            {/if}


            <div class="col s4">
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