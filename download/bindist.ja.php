<?php
$title = "バイナリリリースのダウンロード";
$cvs_author = '$Author: thesin $';
$cvs_date = '$Date: 2014/10/23 22:32:37 $';

include "header.inc";
?>

<h1>バイナリリリースのダウンロード</h1>

<p>
Fink のバイナリリリースは、コンパイルの重責から解放してくれます。
インストーラパッケージを使って基本システムをインストール後、コンパイル済みパッケージを
dselect と apt-get でダウンロードすることができます。
バイナリでインストールできるパッケージは一部だけで、他はソースからビルドする必要があります。
これは主に、そのパッケージの法律上の制限によるものです。
</p>
<?php 
include "../fink_version.inc";
?>
<p>
<b>状態:</b>
Fink バイナリインストーラは <?php print $fink_version; ?> (OS X 10.5) です。
</p>
<ul>
<li><a href="http://prdownloads.sourceforge.net/fink/Fink-<?php print $fink_version; ?>-PowerPC-Installer.dmg?download">Fink
<?php print $fink_version; ?> バイナリインストーラ (PowerPC)</a> - <?php print $dmg_size; ?>, 圧縮 .dmg ディスクイメージ</li>
<li><a href="http://prdownloads.sourceforge.net/fink/Fink-<?php print $fink_version; ?>-Intel-Installer.dmg?download">Fink
<?php print $fink_version; ?> バイナリインストーラ (Intel)</a> - <?php print $intel_dmg_size; ?>, 圧縮 .dmg ディスクイメージ</li>
<li><a href="http://prdownloads.sourceforge.net/fink/direct_download/">配布アーカイブを閲覧</a> - 
バイナリパッケージとソースの両方があります。</li>
</ul>

<p>
添付書類はまだ整理されていません。
インストーラのディスクイメージには、Fink ReadMe.rtf と作成中の Fink User's Guide が同梱されています。
この他には当サイトの<a href="../doc/index.php">文書</a> にもあります。
</p>

<p>
<a href="../lists/fink-announce.php">fink-announce mailinglist</a>
ではリリースの公表をしていますので、興味のある方は購読して下さい。
</p>


<?php
include "footer.inc";
?>
