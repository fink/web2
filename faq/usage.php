<?
$title = "F.A.Q. - Usage";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/05/17 06:51:21 $';

$metatags = '<link rel="contents" href="index.php" title="FAQ Contents">
<link rel="start" href="index.php" title="FAQ Contents">
<link rel="prev" href="install.php" title="Installation">
<link rel="next" href="packages.php" title="Problems with certain packages">
';

include "header.inc";
?>


<h1>Fink F.A.Q. - Usage Questions</h1>

<p><a name="what-packages"><b>How can I find out what packages Fink supports?</b></a></p>

<p>For Fink 0.1.x, look in the fink/info directory, e.g.:
<pre>ls /sw/fink/info</pre></p>
<p>For Fink 0.2.x, you may want to try this:
<pre>find /sw/fink -name '*.info'</pre></p>

<p><a name="unstable"><b>There's this package in unstable that I want
to install, but Fink just says 'no package found'. How can I install
it?</b></a></p>

<p>First make sure you understand what 'unstable' means. Packages
in there usually have not been tested at all, many have problems or
just won't compile. That is why Fink doesn't search the unstable
tree by default.<br>
If you only want one or two specific packages, it is safer
to copy those .info files (and their associated .patch files, if there
are any) from /sw/fink/dists/unstable/main/finkinfo to
/sw/fink/dists/local/main/finkinfo. If you want Fink to use all of
unstable, edit /sw/etc/fink.conf and add <tt>unstable/main</tt> to the
<tt>Trees:</tt> line.</p>


<?
include "footer.inc";
?>
