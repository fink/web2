<?
$title = "F.A.Q. - Compiling (1)";
$cvs_author = 'Author: benh57';
$cvs_date = 'Date: 2002/12/09 21:30:03';

$metatags = '<link rel="contents" href="index.php" title="F.A.Q. Contents"><link rel="next" href="comp-packages.php" title="Compile Problems - Specific Packages"><link rel="prev" href="usage-fink.php" title="Installing, Using and Maintaining Fink">';

include "header.inc";
?>

<h1>F.A.Q. - 4 Compile Problems - General</h1>



<a name="compiler"><div class="question"><p><b>Q4.1: A configure script complains
that it can't find an &quot;acceptable cc&quot;. What's that?</b></p></div>
<div class="answer"><p><b>A:</b> 
Read the docs next time.
To compile packages from source, you must install the Developer Tools,
which among other stuff contains the C compiler, <tt><nobr>cc</nobr></tt>.
</p></div></a>

<a name="make"><div class="question"><p><b>Q4.2: make: illegal option -- C</b></p></div>
<div class="answer"><p><b>A:</b> 
You've replaced the GNU version of the <tt><nobr>make</nobr></tt> utility
installed as part of the Developer Tools with a BSD version of make.
Many packages rely on special features only supported by GNU make.
Make sure that <tt><nobr>/usr/bin/make</nobr></tt> is a symlink to
<tt><nobr>gnumake</nobr></tt>, not <tt><nobr>bsdmake</nobr></tt>. Furthermore,
make sure that <tt><nobr>/usr/local/bin/</nobr></tt> does not contain another
copy of <tt><nobr>make</nobr></tt>.
</p></div></a>

<a name="head"><div class="question"><p><b>Q4.3: I'm getting a strange usage message
from the head command. What's broken?</b></p></div>
<div class="answer"><p><b>A:</b> If you're seeing this:</p><pre>Unknown option: 1
Usage: head [-options] &lt;url&gt;...</pre><p>followed by a list of option descriptions, you have a broken
<tt><nobr>head</nobr></tt> executable.
This happens when you install the Perl libwww library on an HFS+
system volume.
It tries to create a new command <tt><nobr>/usr/bin/HEAD</nobr></tt>, which
overwrites the existing <tt><nobr>head</nobr></tt> command because the file
system is case-insensitive.
<tt><nobr>head</nobr></tt> is a standard command used in many shell scripts and
Makefiles.
You need to get the original <tt><nobr>head</nobr></tt> executable back if you
want to use Fink.
</p><p>
The bootstrap script of the source release now checks for this, but
you can still run into it if you use the binary release for first-time
installation or install libwww after you installed Fink.
</p></div></a>
<a name="also_in"><div class="question"><p><b>Q4.4: When I try to install a package I get an error message about trying to overwrite a file that is in another package.</b></p></div>
<div class="answer"><p><b>A:</b> This occasionally happens with splitoff packages (i.e. the ones with -dev, -shlibs, etc.) when a file gets moved from one part of the splitoff to another (e.g. from <tt><nobr>foo</nobr></tt> to <tt><nobr>foo-shlibs</nobr></tt>.  What you can do is overwrite the file with that from the package you are trying to install (since they are nominally the same):</p><pre>sudo dpkg -i --force-overwite packagename</pre><p>where <b>packagename</b> is the package that you are trying to install.</p></div></a>

<p align="right">
Next: <a href="comp-packages.php">5 Compile Problems - Specific Packages</a></p>


<?
include "footer.inc";
?>

