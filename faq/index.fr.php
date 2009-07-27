<?
$title = "Q.F.P.";
$cvs_author = 'Author: dmacks';
$cvs_date = 'Date: 2009/07/27 18:44:40';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Q.F.P. Contents"><link rel="next" href="general.php?phpLang=fr" title="Questions générales">';


include_once "header.fr.inc";
?>
<h1>Fink - Q.F.P.</h1>
<p>Voici la liste des questions fréquemment posées sur Fink. Comme la plupart des QFP, une partie correspond à des questions réelles, d'autres ont été élaborées spécialement pour ces QFP. Il s'agit en fait d'un document écrit dans le style question-réponse.</p>
<p>Ces QFP comprennent plusieurs pages, une par chapitre. Le sommaire ci-dessous donne la liste de toutes les questions ainsi qu'un lien pour chacune d'elles.</p>
<h2><? echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="general.php?phpLang=fr"><b>1 Questions générales</b></a><ul><li><a href="general.php?phpLang=fr#what">1.1 Qu'est-ce que Fink ?</a></li><li><a href="general.php?phpLang=fr#naming">1.2 Que signifie Fink ?</a></li><li><a href="general.php?phpLang=fr#bsd-ports">1.3 En quoi Fink se différencie-t-il du mécanisme de portage BSD (qui comprend OpenPackages et GNU-Darwin) ?</a></li><li><a href="general.php?phpLang=fr#usr-local">1.4 Pourquoi Fink n'installe-t-il rien dans le répertoire /usr/local ?</a></li><li><a href="general.php?phpLang=fr#why-sw">1.5 Pourquoi avoir choisi le répertoire /sw ?</a></li></ul></li><li><a href="relations.php?phpLang=fr"><b>2 Relations avec d'autres projets</b></a><ul><li><a href="relations.php?phpLang=fr#upstream">2.1 Envoyez-vous aux mainteneurs situés en amont de vous les rustines que vous faites ?</a></li><li><a href="relations.php?phpLang=fr#debian">2.2 Quelles sont vos relations avec le projet Debian ? Portez-vous Debian Linux sur Mac OS X ?</a></li><li><a href="relations.php?phpLang=fr#apple">2.3 Quelles sont vos relations avec Apple ?</a></li><li><a href="relations.php?phpLang=fr#darwinports">2.4 Quelles sont vos relations avec DarwinPorts ?</a></li></ul></li><li><a href="mirrors.php?phpLang=fr"><b>3 Miroirs de Fink</b></a><ul><li><a href="mirrors.php?phpLang=fr#when-use">3.1 Qu'est-ce qu'un miroir Fink ?</a></li><li><a href="mirrors.php?phpLang=fr#why">3.2 Pourquoi utiliser des miroirs rsync ?</a></li><li><a href="mirrors.php?phpLang=fr#where">3.3 Où trouver de plus amples informations sur les miroirs Fink ?</a></li><li><a href="mirrors.php?phpLang=fr#when-not">3.4 Il est impossible de se connecter au serveur rsync. Que faire ?</a></li><li><a href="mirrors.php?phpLang=fr#otherinfogone">3.5 Après passage à la méthode rsync, tous les fichiers info des arborescences inutilisées ont disparu. Que se passe-t-il ?</a></li><li><a href="mirrors.php?phpLang=fr#howswitch">3.6 Comment passer d'une méthode à une autre à volonté ?</a></li><li><a href="mirrors.php?phpLang=fr#status">3.7 Comment connaître l'état actuel des miroirs rsync ?</a></li><li><a href="mirrors.php?phpLang=fr#Master">3.8 Qu'est-ce qu'un miroir Distfiles ?</a></li></ul></li><li><a href="upgrade-fink.php?phpLang=fr"><b>4 Mise à jour de Fink (Résolution de problèmes spécifiques à une version donnée)</b></a><ul><li><a href="upgrade-fink.php?phpLang=fr#gcc-0.16.0">4.1 Après passage à la version 0.16.0, fink considère la version du compilateur gcc 3.3 installée sur le système comme obsolète. Que faire ?</a></li><li><a href="upgrade-fink.php?phpLang=fr#fink-0220">4.2 Aucune mise à jour de paquets de Fink n'a eu lieu depuis un moment. Que faire ?</a></li></ul></li><li><a href="usage-fink.php?phpLang=fr"><b>5 Installation, Utilisation et Mise à jour de Fink</b></a><ul><li><a href="usage-fink.php?phpLang=fr#what-packages">5.1 Comment savoir quels sont les paquets gérés par Fink ?</a></li><li><a href="usage-fink.php?phpLang=fr#proxy">5.2 Comment configurer fink pour utiliser un proxy HTTP quand on est derrière un mur pare-feu ?</a></li><li><a href="usage-fink.php?phpLang=fr#firewalled-cvs">5.3 Comment mettre à jour les paquets disponibles sur CVS lorsqu'on utilise un mur pare-feu ?</a></li><li><a href="usage-fink.php?phpLang=fr#moving">5.4 Est-il possible de déplacer Fink vers un autre dossier après l'installation ?</a></li><li><a href="usage-fink.php?phpLang=fr#moving-symlink">5.5 Est-ce que Fink fonctionnera correctement si on le déplace après installation et que l'on crée un lien symbolique vers son ancien emplacement ?</a></li><li><a href="usage-fink.php?phpLang=fr#removing">5.6 Comment désinstaller Fink complètement ?</a></li><li><a href="usage-fink.php?phpLang=fr#bindist">5.7 La base de données des paquets sur le site web mentionne le paquet xxx, mais apt-get ou dselect eux ne le mentionnent pas. Qui a raison ?</a></li><li><a href="usage-fink.php?phpLang=fr#unstable">5.8 Comment installer un paquet instable quand la commande fink ne le trouve pas (message en anglais : 'no package found') ?</a></li><li><a href="usage-fink.php?phpLang=fr#unstable-onepackage">5.9 Faut-il <b>vraiment</b> activer toute l'arborescence instable pour n'installer qu'un seul paquet instable ?</a></li><li><a href="usage-fink.php?phpLang=fr#sudo">5.10 Comment ne plus avoir à saisir son mot de passe après la commande sudo ?</a></li><li><a href="usage-fink.php?phpLang=fr#exec-init-csh">5.11 À l'exécution de init.csh ou de init.sh, un message d'erreur signale que l'autorisation est refusée (message en anglais "Permission denied") . Que se passe-t-il ?</a></li><li><a href="usage-fink.php?phpLang=fr#dselect-access">5.12 Pourquoi est-il impossible de télécharger des paquets après avoir utilisé le menu "[A]ccess" dans dselect ?</a></li><li><a href="usage-fink.php?phpLang=fr#cvs-busy">5.13 Lors de l'exécution de <q>fink selfupdate</q> ou de "fink selfupdate-cvs", un message signale que la mise à jour via CVS a échoué et qu'il faut examiner les messages d'erreur situés au-dessus de cette ligne (message en anglais "<code>Updating using CVS failed. Check the error messages above.</code>"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#kernel-panics">5.14 Lors de l'utilisation de Fink, ma machine se fige, entre en panique noyau ou bien plante. À l'aide !</a></li><li><a href="usage-fink.php?phpLang=fr#not-found">5.15 Lors de l'installation d'un paquet, Fink ne peut le télécharger. Le site de téléchargement indique une version du paquet plus récente que celle de Fink. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#fink-not-found">5.16 Le message "commande non trouvée" apparaît au lancement de Fink ou de tout autre paquet installé via Fink (message en anglais "command not found"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#invisible-sw">5.17 Est-il possible de masquer le répertoire /sw dans le Finder pour éviter que les utilisateurs ne modifient les réglages de Fink ?</a></li><li><a href="usage-fink.php?phpLang=fr#install-info-bad">5.18 Il est impossible d'installer quoi que ce soit. Un message signale que l'option infodir n'est pas reconnue par la commande install-info (message en anglais "install-info: unrecognized option `--infodir=/sw/share/info'"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#bad-list-file">5.19 Il est impossible d'installer ou de supprimer quoi que ce soit à cause d'un problème de listes de fichiers de paquets (messages en anglais contenant "files list file"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#dselect-garbage">5.20 La commande <code>dselect</code> produit un tas de lignes incompréhensibles. Comment éviter cela ?</a></li><li><a href="usage-fink.php?phpLang=fr#perl-undefined-symbol">5.21 Pourquoi des erreurs du chargeur de liens dynamiques signalant des symboles perl non définis apparaissent à l'utilisation de commandes de Fink (message en anglais  "dyld: perl undefined symbols") ?</a></li><li><a href="usage-fink.php?phpLang=fr#cant-upgrade">5.22 Il est impossible de mettre à jour Fink. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#spaces-in-directory">5.23 Est-il possible d'installer Fink sur un volume ou dans un répertoire contenant un espace dans le nom ?</a></li><li><a href="usage-fink.php?phpLang=fr#packages-gz">5.24 Lors de la mise à jour binaire, de nombreux messages signalant qu'un fichier est introuvable ou qu'il est impossible d'obtenir le status de la liste d'un paquet source apparaissent (messages en anglais "File not found" ou "Couldn't stat package source list file"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#wrong-tree">5.25 Après mise à jour du système ou des Developer Tools, Fink ne reconnaît pas les changements apportés par ces mises à jour. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#seg-fault">5.26 Des erreurs apparaissent lors de l'utilisation de <code>gzip</code> ou de <code>dpkg-deb</code> inclus dans le paquet <code>fileutils</code>. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#pathsetup-keeps-running">5.27 À l'ouverture d'une fenêtre de Terminal, un message signale que "l'environnement a déjà été modifié pour Fink", puis le Terminal se déconnecte (message en anglais "Your environment seems to be set up for Fink already"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#ext-drive">5.28 Quand Fink n'est pas installé sur la partition principale du disque, il est impossible de mettre à jour le paquet fink à partir du source. Des erreurs concernant <q>chowname</q> apparaissent. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#mirror-gnu">5.29 Fink refuse de mettre à jour les paquets. Il semble ne pas trouver le miroir 'gnu'. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#cant-move-fink">5.30 Il est impossible de mettre à jour Fink, car le répertoire /sw/fink ne peut être déplacé. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#four-oh-three">5.31 Des erreurs de type 403 apparaissent lors de l'utilisation des commandes <code>apt-get</code> et <code>dselect</code> ou du menu binaire de Fink Commander. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#fc-cache">5.32 Un message signalant qu'"aucune police n'est trouvée" apparaît (message en anglais : "No fonts found"). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#non-admin-installer">5.33 Il est impossible d'installer Fink à partir du paquet d'installation, le message "Ce volume ne gère pas les liens symboliques" apparaît. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#wrong-arch">5.34 Un message signalant une contradiction entre l'architecture du paquet et celle du système empêche de mettre à jour fink (message en anglais <q>package architecture (darwin-i386) does not match system (darwin-powerpc)</q>). Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#sf-cvs-2006">5.35 Il est impossible d'exécuter une mise à jour via cvs. Que faire ?</a></li></ul></li><li><a href="comp-general.php?phpLang=fr"><b>6 Problèmes généraux de compilation</b></a><ul><li><a href="comp-general.php?phpLang=fr#compiler">6.1 Un script configure signale qu'il ne peut trouver un "cc acceptable". De quoi s'agit-il ?</a></li><li><a href="comp-general.php?phpLang=fr#cvs">6.2 Lors de l'exécution de "fink selfupdate-cvs", un message signale que "la commande cvs est introuvable" (message en anglais : "cvs: Command not found."). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#missing-make">6.3 Un message d'erreur relatif à <code>make</code> apparaît. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#head">6.4 Un étrange message d'erreur concernant la commande head apparaît. Que se passe-t-il ?</a></li><li><a href="comp-general.php?phpLang=fr#also_in">6.5 À l'installation d'un paquet, un message d'erreur signale qu'il y a tentative d'écrasement d'un fichier situé dans un autre paquet. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#weak_lib">6.6 Après installation des outils de développement de décembre 2002, des messages concernant des "bibliothèques à références faibles" (weak libraries en anglais) apparaissent. Que se passe-t-il ?</a></li><li><a href="comp-general.php?phpLang=fr#mv-failed">6.7 Lors de la construction d'un paquet, un message indique que l'exécution de la commande mv a échoué (message en anglais : "execution of mv failed, exit code 1"). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#node-exists">6.8 Il est impossible d'installer ou de mettre à jour un paquet, un message indique qu'un "noeud" existe déjà (message en anglais : "node already exists"). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#usr-local-libs">6.9 Des problèmes de compilation de paquet Fink apparaissent quand des bibliothèques ou des headers sont installés dans le répertoire /usr/local. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#toc-out-of-date">6.10 Lors de la construction d'un paquet, un message indique que la "table des matières" n'est pas à jour (message en anglais "table of contents out of date"). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#fc-atlas">6.11 Fink Commander se bloque quand on tente d'installer atlas. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#basic-headers">6.12 Un message indique qu'il est impossible de trouver les fichiers <code>stddef.h</code>, ou <code>wchar.h</code>, ou <code>stdlib.h</code>, ou <code>crt1.o</code>, ou bien encore que le <q>compilateur C ne peut créer de fichiers exécutables</q> ( message en anglais "C compiler cannot create executables"). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#multiple-dependencies">6.13 Il est impossible de mettre à jour, un message indique que Fink est "incapable de résoudre des conflits de versions entre dépendances" (message en anglais "unable to resolve version conflict on multiple dependencies"). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#dpkg-parse-error">6.14 Il est impossible d'installer quoi que ce soit, un message indique que "dpkg est incapable d'analyser la structure du fichier /sw/var/lib/dpkg/status" (message en anglais : "dpkg: parse error, in file `/sw/var/lib/dpkg/status'"). De quoi s'agit-il ?</a></li><li><a href="comp-general.php?phpLang=fr#freetype-problems">6.15 Des messages d'erreurs concernant freetype apparaissent. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#dlfcn-from-oo">6.16 Des messages d'erreur concernant `Dl_info' apparaissent. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#gcc2">6.17 Fink signale que les paquets <code>gcc2</code> ou <code>gcc3.1</code> n'existent pas, mais il ne semble pas possible de les installer. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#system-java">6.18 Fink signale qu'il ne peut résoudre la dépendance "system-java14-dev", mais il n'existe pas de paquet system-java14-dev (message en anglais <code>Failed: Can't resolve dependency "system-java14-dev"</code>). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#dpkg-split">6.19 Lors de l'installation d'un paquet, un message d'erreur apparaît signalant que dpkg n'arrive à exécuter dpkg-split pour vérifier si le paquet fait partie d'un paquet multiple (message en anglais : <q>dpkg (subprocess): failed to exec dpkg-split to see if it's part of a multiparter: No such file or directory</q>). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#xml-parser">6.20 Un message d'erreur signalant que le module Perl XML est requis par intltool apparaît (message en anglais: <q>configure: error: XML::Parser perl module is required for intltool</q>). Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#master-problems">6.21 Lors du téléchargement d'un paquet, Fink tente de le faire à partir d'un site dont le nom contient <q>distfiles</q> et ne trouve pas le fichier. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#compile-options">6.22 Comment utiliser des options variables lors de la compilation d'un paquet ?</a></li><li><a href="comp-general.php?phpLang=fr#gettext">6.23 Lors de compilation à partir du source, Fink n'arrête pas de passer de <code>gettext-dev</code> à <code>libgettext3-dev</code>. Que se passe-t-il ?</a></li><li><a href="comp-general.php?phpLang=fr#python-mods">6.24 Un message d'erreur comportant <code>MACOSX_DEPLOYMENT_TARGET </code> apparaît lors de la compilation d'un module Python. Que faire ?</a></li><li><a href="comp-general.php?phpLang=fr#libtool-unrecognized-dynamic">6.25 Un message d'erreur signalant que <code>libtool</code>  ne reconnait pas l'option '-dynamic' apparaît (message en anglais <q>libtool: unrecognized option `-dynamic'</q>). Que faire ?</a></li></ul></li><li><a href="comp-packages.php?phpLang=fr"><b>7 Problèmes de compilation spécifiques à certains paquets</b></a><ul><li><a href="comp-packages.php?phpLang=fr#libgtop">7.1 La compilation d'un paquet échoue avec des messages d'erreur concernant <code>sed</code>. Que faire ?</a></li><li><a href="comp-packages.php?phpLang=fr#cant-install-xfree">7.2 Lors d'une tentative de passage aux paquets XFree86 de Fink, il est impossible d'installer le paquet <code>xfree86-base</code> ou le paquet <code>xfree86</code>, car ils entrent en conflit avec le paquet <code>system-xfree86</code>. Que se passe-t-il ?</a></li><li><a href="comp-packages.php?phpLang=fr#change-thread-nothread">7.3 Comment passer de la version sans processus légers à la version avec processus légers (ou vice-versa) ?</a></li><li><a href="comp-packages.php?phpLang=fr#cctools">7.4 Lors de l'installation de KDE, un message signale que la dépendance au paquet "cctools (&gt;= 446-1)" ne peut être résolue (message en anglais : 'Can't resolve dependency "cctools (&gt;= 446-1)"'"). Que faire ?</a></li><li><a href="comp-packages.php?phpLang=fr#libiconv-gettext">7.5 Il est impossible de mettre à jour <code>libiconv</code>. Que faire ?</a></li><li><a href="comp-packages.php?phpLang=fr#cplusplus-filt">7.6 Il est impossible d'installer <code>g77</code> car le fichier <code>c++filt</code> n'existe pas. Où le récupérer ?</a></li><li><a href="comp-packages.php?phpLang=fr#gettext-tools">7.7 Fink refuse de mettre à jour le paquet <code>gettext</code>, car les dépendances sont incompatibles entre elles. Que faire ?</a></li><li><a href="comp-packages.php?phpLang=fr#Leopard-libXrandr">7.8 I can't install <b>gtk+2</b> on OS 10.5.2 because <code>/usr/X11/lib/libXrandr.2.0.0.dylib</code> is missing.</a></li><li><a href="comp-packages.php?phpLang=fr#all-others">7.9 Des problèmes apparaissent avec un paquet qui n'est pas mentionné ici. Que faire ?</a></li></ul></li><li><a href="usage-general.php?phpLang=fr"><b>8 Problèmes généraux d'utilisation de paquets</b></a><ul><li><a href="usage-general.php?phpLang=fr#xlocale">8.1 De nombreux messages signalant que la locale n'est pas gérée par la bibliothèque C apparaissent (message en anglais : "locale not supported by C library"). Est-ce un problème ?</a></li><li><a href="usage-general.php?phpLang=fr#passwd">8.2 Un certain nombre d'étranges utilisateurs apparaissent tout d'un coup sur mon système. Ils portent, entre autres, les noms suivants : "mysql", "pgsql" et "games". D'où proviennent-ils ?</a></li><li><a href="usage-general.php?phpLang=fr#compile-myself">8.3 Comment compiler soi-même en utilisant des logiciels installés par Fink ?</a></li><li><a href="usage-general.php?phpLang=fr#apple-x11-applications-menu">8.4 Il est impossible d'exécuter une application installée par Fink en utilisant le menu Applications dans X11 d'Apple. Que faire ?</a></li><li><a href="usage-general.php?phpLang=fr#x-options">8.5 Il y a de nombreuses options pour X11 : X11 d'Apple, XFree86, etc... Laquelle installer ?</a></li><li><a href="usage-general.php?phpLang=fr#no-display">8.6 Au lancement d'une application, un message signale que la fenêtre d'affichage ne peut être ouverte (message en anglais: "cannot open display:"). Que faire ?</a></li><li><a href="usage-general.php?phpLang=fr#suggest-package">8.7 Certains programmes ne sont pas disponibles via Fink. Comment faire en sorte qu'ils soient inclus dans Fink ?</a></li><li><a href="usage-general.php?phpLang=fr#virtpackage">8.8 À quoi correspondent les "paquets virtuels" <code>system-*</code> qui apparaissent de-ci de-là, mais qu'il ne semble pas possible d'installer ou de supprimer soi-même ?</a></li></ul></li><li><a href="usage-packages.php?phpLang=fr"><b>9 Problèmes d'utilisation spécifiques à certains paquets</b></a><ul><li><a href="usage-packages.php?phpLang=fr#xmms-quiet">9.1 Aucun son n'est disponible dans XMMS. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#nedit-window-locks">9.2 Lors de la modification d'un fichier dans nedit, si l'on tente d'ouvrir un autre fichier, sa fenêtre apparaît mais elle ne répond pas. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#xdarwin-start">9.3 XDarwin quitte immédiatement après lancement. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#no-server">9.4 Au démarrage de XDarwin, un message indique que le fichier xinit est introuvable et qu'il n'existe pas de server X accessible dans le répertoire /usr/X11R6/bin (message en anglais : "xinit: No such file or directory (errno 2): no server "/usr/X11R6/bin/X" in PATH"). Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#xterm-error">9.5 Le lancement de xterm échoue avec un message signalant que le chargeur de liens dynamiques ne trouve pas le symbole _tgetent défini dans xterm et censé être dans la bibliothèque /usr/lib/libSystem.B.dylib (message en anglais : "dyld: xterm Undefined symbols: xterm undefined reference to _tgetent expected to be defined in /usr/lib/libSystem.B.dylib"). Que se passe-t-il ?</a></li><li><a href="usage-packages.php?phpLang=fr#libXmuu">9.6 Au démarrage de XFree86, un message signale que le chargeur de liens dynamiques ne peut ouvrir la bibliothèque /usr/X11R6/lib/libXmuu.1.dylib ou la bibliothèque /usr/X11R6/lib/libXext.6.dylib appelées par xinit (message en anglais : "dyld: xinit can't open library: /usr/X11R6/lib/libXmuu.1.dylib" ou "dyld: xinit can't open library: /usr/X11R6/lib/libXext.6.dylib"). Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x-bugs">9.7 Après installation de XFree86 et son remplacement par X11 d'Apple, tous les programmes se plantent. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x-delete">9.8 Comment avoir sous X11 d'Apple le même comportement de la touche suppr que sous XDarwin ?</a></li><li><a href="usage-packages.php?phpLang=fr#gnome-two">9.9 Après passage de GNOME 1.x à GNOME 2.x, le programme <code>gnome-session</code> n'ouvre plus de gestionnaire de fenêtres. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x11-no-windowbar">9.10 Après passage à X11 d'Apple sous Panther, les barres de titre de fenêtre n'apparaissent plus. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x11-wants-xfree86">9.11 Après installation de X11 d'Apple, Fink continue à vouloir installer XFree86 ou X.org. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#wants-xfree86-on-upgrade">9.12 Après passage de la version 10.2 de Fink à la version 10.2-gcc3.3 ou 10.3, Fink veut installer XFree86 ou X.org alors que X11 d'Apple est déjà installé. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#special-x11-debug">9.13 Des problèmes persistent entre X11 et Fink. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#tiger-gtk">9.14 Après passage à Tiger (Mac OS X 10.4), des erreurs à propos de <code>_EVP_idea_cbc</code> apparaissent chaque fois qu'on utilise une application Gtk. Que faire ?</a></li><li><a href="usage-packages.php?phpLang=fr#yelp">9.15 Il est impossible d'accéder à l'aide dans aucune application GNOME. Que faire ?</a></li></ul></li></ul>
<!--Generated from $Fink: faq.fr.xml,v 1.80 2009/07/27 18:44:40 dmacks Exp $-->
<? include_once "../footer.inc"; ?>


