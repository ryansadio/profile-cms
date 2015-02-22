{include file="_main_header.tpl"}
<div class="row">
    <div class="col s12 m2 l3"><p>&nbsp;</p></div>
    <div class="col s12 m8 l6">
        <div class="card white darken-1">
            <div class="card-content grey-text">
                <div class="row">
                    <div class="row">
                        <div class="col s1"><p>&nbsp;</p></div>
                        <form class="col s10" action="/signup" method="POST">
                            <span class="card-title grey-text">New to Voodoo? Sign up.</span>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" class="validate">
                                    <label for="password">New Password</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Join Voodoo!
                                <i class="mdi-content-send right"></i>
                            </button>
                            <div class="row">
                                <div class="col s12">
                                    {$notification|default:''}
                                    Already have an account? <a class="green-sea-text" href="/">Login</a>
                                </div>
                            </div>
                        </form>
                        <div class="col s1"><p>&nbsp;</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m2 l3"><p>&nbsp;</p></div>
</div>
{include file="_main_footer.tpl"}