{include file="_main_header.tpl"}
<form enctype="multipart/form-data">
    <p>{$notification|default:""}</p>
    <ul class="collapsible" data-collapsible="accordion">
        {* STORY AND ABOUT *}
        <li>
            <div class="collapsible-header story"><i class="mdi-action-home white-text"></i>
                <span class="white-text">Home</span></div>
            <div class="padded collapsible-body white">
                <div class="row">
                    <div class="col s3">
                        {* Photo *}
                        <img src="{$image}" alt="" class="circle responsive-img">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="photo" name="photo" type="file" class="validate">
                            </div>

                        </div>
                    </div>
                    <div class="col s4">
                        {* Username *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate" name="username" value="{$username}">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        {* Full name *}
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" type="text" class="validate" name="name" value="{$name}">
                                <label for="name">Full Name</label>
                            </div>
                        </div>
                        {* Job *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="job" type="text" class="validate" name="job" value="{$job}">
                                <label for="job">Job</label>
                            </div>
                        </div>
                        {* Email *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="text" class="validate" name="email" value="{$email}">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        {* Three descriptions about me *}
                        {* Title 1 *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="tab1_title" name="tab1_title" type="text" class="validate" value="{$t1_title}">
                                <label for="tab1_title">Tab 1: Title</label>
                            </div>
                        </div>
                        {* Description 1 *}
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="tab1_description" name="tab1_description"
                                          class="materialize-textarea validate">{$t1_description}</textarea>
                                <label for="tab1_description">Tab 1: Description</label>
                            </div>
                        </div>
                        {* Title 2 *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="tab2_title" name="tab2_title" type="text" class="validate" value="{$t2_title}">
                                <label for="tab2_title">Tab 2: Title</label>
                            </div>
                        </div>
                        {* Description 2*}
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="tab2_description" name="tab2_description"
                                          class="materialize-textarea validate">{$t2_description}</textarea>
                                <label for="tab2_description">Tab 2: Description</label>
                            </div>
                        </div>
                        {* Title 3 *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="tab3_title" name="tab3_title" type="text" class="validate" value="{$t3_title}">
                                <label for="tab3_title">Tab 3: Title</label>
                            </div>
                        </div>
                        {* Description 3*}
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="tab3_description" name="tab3_description"
                                          class="materialize-textarea validate">{$t3_description}</textarea>
                                <label for="tab3_description">Tab 3: Description</label>
                            </div>
                        </div>
                        {* Links *}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="linkedin" type="text" class="validate" name="linkedin" value="{$linkedin}">
                                <label for="linkedin">Linkedin</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="twitter" type="text" class="validate" name="twitter" value="{$twitter}">
                                <label for="twitter">Twitter</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="github" type="text" class="validate" name="github" value="{$github}">
                                <label for="github">GitHub</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        {* PROJECTS *}
        <li>
            <div class="collapsible-header story {$active|default:""}"><i class="mdi-maps-local-shipping white-text"></i>
                <span class="white-text">Projects</div>
            <div class="padded collapsible-body white">
                {* for-loop here (might be an issue with input id being unique)*}
                {foreach $projects as $project}
                    <div class="row" style="border-bottom: solid 1px grey">
                        <div class="col s5">
                            {* Image *}
                            <img src="{$project.image}" height="250px">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="project_image" name="{$project.title}_image" type="file" class="validate">
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            {* Title *}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="project_title" name="{$project.title}_title" type="text" class="validate" value="{$project.title}">
                                    <label for="project_title">Title</label>
                                </div>
                            </div>
                            {* Description *}
                            <div class="row">
                                <div class="input-field col s12">
                                <textarea id="project_description" name="{$project.title}_description"
                                          class="materialize-textarea validate">{$project.description}</textarea>
                                    <label for="project_description">Description</label>
                                </div>
                            </div>
                            {foreach $project.links as $link}
                                <div class="row">
                                    <div class=""input-field col s12">
                                        <input id="project_{$link.linkname}" name="{$project.title}_{$link.linkname}_link" type="text" class="validate" value="{$link.linkurl}">
                                        <label for="project_{$link.linkname}">{$link.linkname}</label>
                                    </div>
                                </div>
                            {/foreach}

                            {* Link *}
                            {*<div class="row">
                                <div class="input-field col s12">
                                    <input id="project_link" type="text" class="validate" value="{$project.link}">
                                    <label for="project_link">Link</label>
                                </div>
                            </div>
                            {* Github link *}{*
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="project_github" type="text" class="validate" value="{$github|default:'filler'}">
                                    <label for="project_github">Github</label>
                                </div>
                            </div>*}
                        </div>
                    </div>
                {/foreach}

                {* Add button will add another form for new projects*}
                 <a class="btn-floating btn-large waves-effect waves-light red right"
                   onclick="document.getElementById('newprojectdiv').style.display = 'block'"><i class="mdi-content-add"></i></a>
                <div id="newprojectdiv" class="row" style="display:none">
                    <div class="offset-s6 col s6" id="addProject">
                        {* <form id="newProject"> *}
                            <div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="newprojectname" type="text" class="validate" name="newprojectname">
                                        <label for="newprojectname">Project Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="newprojectdescription" type="text" class="materialize-textarea"
                                                  name="newprojectdescription"></textarea>
                                        <label for="newprojectdescription">Project Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn waves-effect waves-light" type="submit" name="action"
                                            formaction="/profileeditor/{$username}/addproject" formmethod="POST">Add
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                    <button class="btn waves-effect waves-light" type="reset">Reset</button>
                                </div>
                            </div>
                        {* </form> *}
                    </div>
                </div>
            </div>
        </li>
        {* RESUME *}
        <li>
            <div class="collapsible-header story"><i class="mdi-content-send white-text"></i>
                <span class="white-text">Resume</div>
            <div class="collapsible-body white padded">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="resume" name="resume" type="file" class="validate">
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="row">
        <div class="col s2">
            <button class="btn waves-effect waves-light  left" type="submit" name="action" formaction="/profileeditor/{$username}" formmethod="POST">Save
                <i class="mdi-content-send right"></i>
            </button>
        </div>
        <div class="col s6"><span>&nbsp;</span></div>
        <div class="col s4">
            <button class="btn waves-effect waves-light grey right" type="submit" name="action" formaction="/profile/{$username}" formmethod="POST">See public profile
                <i class="mdi-social-public right"></i>
            </button>
        </div>
    </div>

</form>

{include file="_main_footer.tpl"}