<h1>Installing Happy Puppy</h1>
Video - installation

show installation of happy puppy
show folders
show configuration files
Show configuration working

<h2>Pre-requisites</h2>
<ol>
<li>Install Apache and PHP.  For this tutorial I'll use <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a></li>
<li>Make sure your DocumentRoot in your httpd.conf file has the AllowOverride property set to All</li>
<li>Start Apache</li>
<li><a href="https://github.com/downloads/daveroberts/happypuppy/happypuppy.zip">Download Happy Puppy</a></li>
<li>Unzip Happy Puppy to your DocumentRoot folder</li>
<li>Navigate to <a href="http://localhost/TestInstall"></a>http://localhost/TestInstall</li>
</ol>
<p>Did it work?  If so, <?php echo link_to("create your first application", "/Applications/Create")?></p>
<p>If not, would you please issue a ticket to the <a href="https://github.com/daveroberts/happypuppy/issues">github issue tracker</a>.  I read every issue I receive.</p>