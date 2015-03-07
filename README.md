# profile-cms
A profile content manager built on the CodeIgniter framework

#Setup

##Branches
The project has been organized in a minimal branch master and dev setup. All new code is committed to the dev
branch. Upon submission of assignment due dates, dev branch is merged into master. Then a release of the master branch
is created, preserving the current state of the project at the point of submission of the project

##Database
To use the profile-cms project, you will need to create a localhost database named profile-cms. Then run the script
located in the /scripts folder. This will seed your database with the required tables and a couple of accounts. At minimum
you must keep the administrator account as this will give you access on the site to the admin info page.

Credentials for the administrator account:
email: admin@vw.com
password: P@$$w0rd

Additionally there is a standard user account that you may use:
email: ben@soernet.ca
password: password

#Information For Marker
 - There are two admin pages. A Site admin page that is accessible using only the admin account. This page allows admin
 users to view accounts currently on the system and delete them if necessary. A user admin page also exists which allows
 standard users to create / update / delete profile information belonging to thier profile page.
 - Rich text editing is used throughout the profile editing admin page. Most specifically is when a user adds a project 
 to thier account. Login, scrolldown and select the Projects header to expand the projects. Select the "+" button to 
 display the create new project form
 - Usecases are located in the github Wiki page under "Use Cases" section. [Or Click Here](https://github.com/VoodooWorks/profile-cms/wiki/Use-Cases)


# How to use the Smarty Library in CodeIgniter
Smarty is relatively easy and has been smoothly integrated into CodeIgniter. All of the functions available on the
Smarty documentation are available and executable from CodeIgniter. The only difference is how you reference smarty

With its integration into CodeIgniter, you no longer need to create a smarty object, it is now autoloaded into the system

Simply add items belonging to your smarty template as so:
````
$this->smarty->assign("template-value-name","value to pass");
````
Then to call your view go:
````
$this->smarty->display("nameoftemplate.tpl");
````
This would then load the nameoftemplate.tpl file in application/views/templates and then replace all {$template-value-name}
values with "value to pass"

Smarty documentation is available here: <a href="http://www.smarty.net/crash_course">http://www.smarty.net/crash_course</a>

<br><br>

In application/libraries/Smarty.php you can also view the custom "view" function. This has been defined as a convenience
function to act as the parser->parse() function but with the smarty engine. To use it, use it the same as the CodeIgniter
parser:
````
$this->smarty->view("templatefile","dataarray","TRUE/FALSE")
````
whether this can take .php or .tpl files as a template file I do not know. The purpose is so that if sections of your
code still use the $this->data['something'] to store data meant to go to the view, it can still be forwarded to your
view. This also allows you to pass arrays of definitions instead of assigning each one. Though smarty docs may provide
options on how to pass arrays aswell.

Remember, ALL smarty doc'd methods are supposed to work. These other class are
just wrappers to redirect CodeIgniter to Smarty's core files appropriatly which are located in system/libs/smarty

The tutorial to install this add-on and whatever documentation by them is avilable here:
<a href="http://www.coolphptools.com/codeigniter-smarty">http://www.coolphptools.com/codeigniter-smarty</a>

##Directories Reference:
Smarty.php (configuration file) - application/libraries/Smarty.php <br>
Smarty core - system/libs/smarty <br>
Smarty templates - application/views/templates <br>
Smarty compiled templates (do not touch) - application/views/templates_c <br>