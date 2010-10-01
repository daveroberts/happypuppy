<p>Happy Puppy is an MVC framework for PHP.</p>
<p>Happy Puppy lets you create pretty URLs.  You create controllers with actions, and your URLs by default take the form of http://host/controller/action</p>
<p>So to handle the URL http://host/person/edit/Katie. You would write:
<pre>
namespace appname;
class personController extends \HappyPuppy\Controller
{
  function edit($name)
  {
    // do something here
  }
}
</pre>
<p>Easy!  Of course you can also make more complex routes too.</p>
<p>After your controller's action has run, it will look for a template, by default in /views/person/edit.php to render the webpage.</p>
<p>That's the gist of it.  It can do a lot more too.  If you want to see it in action, you can view the samples at <a href="http://daveroberts.nfshost.com/sample">http://daveroberts.nfshost.com/sample</a>.</p>
<h2>Quickstarts</h2>
<h3>Quickstart with Samples</h3>
<p>The Samples package includes examples of Happy Puppy in use and its documentation.  You can either install it on your server, or see it in action at <a href="http://happypuppy.nfshost.com">http://happypuppy.nfshost.com</a>.  The samples package contains lots of helper code which is not part of the Happy Puppy project.  Any of this can be ripped out.  The framework is only one file and all you really need is HappyPuppy.php.  If you don't like all the filler in the Samples you can jump to the Bare Bones Quickstart below</p>
<ol>
<li><a href="http://github.com/daveroberts/happypuppy/tree">Download the Happy Puppy package at github</a></li>
<li>Copy the files from the Samples directory to you webroot (/var/www/htdocs or wherever).  (Note: the samples directory has a copy of HappyPuppy.php, so you can disregard the copy of HappyPuppy.php outside of the Samples directory)</li>
<li>Point your browser at your webroot.  Look at the examples and follow along in the code.</li>
</ol>
<h3>Quickstart Bare Bones - Getting started with only HappyPuppy.php</h3>
<p>This options is for those who don't like reading directions</p>
<ol>
<li><a href="http://github.com/daveroberts/happypuppy/tree">Download the Happy Puppy package at github</a></li>
<li>Copy the HappyPuppy.php file to any place on your web server</li>
<li><p>Create a file index.php on your web server, preferebly in your webroot.  Fill it with the following:</p>
<pre>
&lt;?php
define('DOCROOT', getcwd().DIRECTORY_SEPARATOR);
require 'path/to/HappyPuppy.php';
run();
?&gt;
</pre>
<p>You can optionally add other things to this file: Session Start, loading common libraries, defining routes</p>
</li>
<li><p>Make a directory called controllers, create a file helloController.php there, add the following lines:</p>
<pre>
class helloController extends C
{
  public function world(){
    $this-&gt;render_text("Hello World");
  }
}
</pre>
</li>
<li><p>If you want pretty URLs, create a file .htaccess in your webroot with the following code</p>
<pre>
&lt;IfModule mod_rewrite.c&gt;
    RewriteEngine On 
    RewriteCond %{DOCUMENT_ROOT}/public%{REQUEST_URI} -f
    RewriteRule !(^index\.php|^public/) /public%{REQUEST_URI} [L]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
&lt;/IfModule&gt;
</pre>
</li>
<li>navigate to http://host/hello/world</li>
</ol>
<p>To see more complex examples, look at the samples</p>
<h2>Why Fork?</h2>
<p>I wanted to expand the functionality of Nice Dog.  Some of the features are drawn from other frameworks.  It's still a small framework, but not as small as Nice Dog is.</p>
<p>These are the major features of Happy Puppy not present in Nice Dog</p>
<ul>
<li>"Magic" Routes - The default route is /controller/action.  You don't need to specify these in your routes file.  You just create your controller with actions and you're done</li>
<li>Partials - You can render pages in pages.  Useful for not repeating yourself (e.g. use the same form template to create or edit something)</li>
<li>Filters - Run a method before all your actions in a controller.  Useful for authentication</li>
<li>Respond to html, json or xml requests</li>
</ul>
<p>Because it's a fork, it has been renamed</p>
<pre>
The MIT License

Copyright (c) 2007 Tiago Bastos 2009 Dave Roberts

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Originally The MIT License
</pre>
