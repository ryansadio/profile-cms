{include file="_main_header.tpl"}
<div class="row">
    <div class="col s12 m2 l1"><p>&nbsp;</p></div>
    <div class="col s12 m8 l10">
        <div class="row">
            <div class="col s7 white-text">
                <h4 class="header">Welcome to Voodoo Works.</h4>

                <p class="flow-text">
                    Connect with your friends — and other fascinating people.
                    Get in-the-moment updates on the things that interest you.
                    And watch events unfold, in real time, from every angle.
                </p>
            </div>
            <div class="col s5">
                <div class="card white darken-1">
                    <div class="card-content grey-text">
                        <div class="row">
                            <div class="col s1"><p>&nbsp;</p></div>
                            <form class="col s10 center" action="/welcome" method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" name="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" name="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                    <i class="mdi-content-send right"></i>
                                </button>
                                <div class="row">
                                    <div class="col s12">
                                        <a class="green-sea-text" href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        Don't have an account?
                                        <br><a class="green-sea-text" href="/signup">Sign up to get started.</a>
                                    </div>
                                </div>
                            </form>
                            <div class="col s1"><p>&nbsp;</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m2 l1"><p>&nbsp;</p></div>
</div>
<br><br><br>
{include file="_main_footer.tpl"}