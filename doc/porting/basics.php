<?
$title = "Porting - Basics";
$cvs_author = 'Author: dmrrsn';
$cvs_date = 'Date: 2002/06/13 14:33:05';

$metatags = '<link rel="contents" href="index.php" title="Porting Contents"><link rel="next" href="shared.php" title="Shared Code"><link rel="prev" href="index.php" title="Porting Contents">';

include "header.inc";
?>

<h1>Porting - 1 Basics</h1>




<a name="heritage"><h2>1.1 Where Darwin came from</h2></a>
<p>
Darwin is a Unix-like operating system that evolved from NeXTStep /
OpenStep.
Lore has it that it was initially forked off 4.4BSD Lite.
The BSD heritage still shows, in fact Darwin was recently modernized
with code from FreeBSD and NetBSD.
</p>
<p>
Darwin's kernel is based on a combination of Mach 3.0, BSD, and
proprietary functionality like the object-oriented driver layer
IOKit.
Although Mach originally is a micro-kernel design, the BSD kernel that
sits on top of it is monolithic and the two are now so intertwined
that they must be regarded as a single monolithic kernel.
</p>
<p>
The user-space tools and libraries shipped with Darwin are mostly of
the BSD persuation, as opposed to the GNU tools you get with Linux.
Apple is not as strict as other BSDs though, and goes for useful
compromises.
For example, Apple ships both BSD make and GNU make, with GNU make
installed as the default.
</p>



<a name="compiler"><h2>1.2 The Compiler and Tools</h2></a>
<p>
Short story:
The compiler is a gcc derivate, but installed as <tt><nobr>cc</nobr></tt>;
you may have to patch Makefiles.
Most packages won't build shared libraries.
If you get errors related to macros, use the
<tt><nobr>-no-cpp-precomp</nobr></tt> option.
</p>
<p>
Long story:
The compiler tool chain in the Mac OS X Developer Tools is a strange
beast.
The compiler is based on the gcc 2.95.2 suite, with modifications to
support the Objective C language and some Darwin quirks.
The preprocessor (<tt><nobr>cpp</nobr></tt>) is available in two versions.
One is the standard precompiler (from gcc 2.95.2), the other one is a
special precompiler written by Apple, with support for precompiled
headers.
The latter one is used by default, because it is faster.
However, some code doesn't compile with Apple's precompiler, so you
must use the <tt><nobr>-no-cpp-precomp</nobr></tt> option to get the standard
precompiler.
(Note: I previously recommended the <tt><nobr>-traditional-cpp</nobr></tt>
option.
The semantics of this option have changed slightly with GCC 3,
breaking most packages that use it.
<tt><nobr>-no-cpp-precomp</nobr></tt> has the desired effect on both the
current Developer Tools and future compilers based on GCC 3.)
</p>
<p>
The assembler says it's based on gas 1.38.
The linker is not based on GNU tools.
This is a problem when building shared libraries, as GNU libtool and
configure scripts generated by it don't know how to handle Apple's
linker.
</p>



<a name="host-type"><h2>1.3 Host type</h2></a>
<p>
Short story:
If configure fails with 'Can't determine host type', copy config.guess
and config.sub from /usr/libexec into the current directory.
</p>
<p>
Long story:
The GNU world uses a canonical format to specify system types.
It has three parts: cpu type, manufacturer and operating system.
Sometimes a fourth part is added - then the third part denotes the
kernel, while the fourth denotes the operating system.
All parts are lower case and concatenated using dashes.
Some examples:
<tt><nobr>i586-pc-linux-gnu</nobr></tt>,
<tt><nobr>hppa1.1-hp-hpux10.20</nobr></tt>,
<tt><nobr>sparc-sun-solaris2.6</nobr></tt>.
The host type for Mac OS X 10.0 is
<tt><nobr>powerpc-apple-darwin1.3</nobr></tt>.
</p>
<p>
Many packages that use autoconf want to know the host type of the
system they are compiled on.
(Side note: to support cross-compiling and porting, there are actually
three types - the host type, the build type and the target type.
Usually, they're all the same.)
You can either pass the host type to the configure script as a
parameter or you can let it guess.
</p>
<p>
The configure script uses two companion scripts to determine host
types.
<tt><nobr>config.guess</nobr></tt> tries to guess the host type,
<tt><nobr>config.sub</nobr></tt> is used to validate and canonicalize
the host type.
These scripts are maintained as separate entities, but they are
included in every package that uses them.
Until very recently, these scripts didn't know about Darwin or Mac OS
X.
If you have a package that doesn't recognize Darwin, you must replace
the config.guess and config.sub included in the package.
Luckily, Apple put working versions in /usr/libexec, so you can just
copy them from there.
</p>



<a name="libraries"><h2>1.4 Libraries</h2></a>
<p>
Short story:
You can safely remove <tt><nobr>-lm</nobr></tt> from Makefiles, but you don't
need to.
</p>
<p>
Long story:
Mac OS X doesn't have separate libc, libm, libcurses, libpthread
etc. libraries.
Instead, they're all part of the system library, libSystem.
(In earlier versions, this actually was the System framework.)
However, Apple placed appropriate symlinks in /usr/lib, so linking
with <tt><nobr>-lm</nobr></tt> will work.
The only exception is <tt><nobr>-lutil</nobr></tt>.
On other systems, libutil contains functions related to
pseudo-terminals and login accounting.
These functions are in libSystem, but there is no symlink to provide a
libutil.dylib.
</p>


<p align="right">
Next: <a href="shared.php">2 Shared Code</a></p>


<?
include "footer.inc";
?>

