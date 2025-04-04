<?php

require_once("modelo/Link.php");

echo "<link rel='stylesheet' href='style.css'>";

echo "<div class='dropdown'>";
echo "<button class='dropbtn'>Frutas</button>";
echo "<div class='dropText'>";

echo "<span><img src='https://sempreverde.tur.br/wp-content/uploads/2020/12/p11.jpg' width='20' height='20'>Morango</span>";
echo "<span><img src='https://www.proativaalimentos.com.br/image/cache/catalog/img_prod/captura_de_tela_2018-01-22_a_s_11.31.25[1]-1000x1000.png' width='20' height='20'>Abacaxi</span>";
echo "<span><img src='https://www.infoescola.com/wp-content/uploads/2009/12/framboesa.jpg' width='20' height='20'>Framboesa</span>";

echo "</div>";
echo "</div>";


$link1 = new Link("https://sempreverde.tur.br/wp-content/uploads/2020/12/p11.jpg", "Morango");
$link2 = new Link("https://www.proativaalimentos.com.br/image/cache/catalog/img_prod/captura_de_tela_2018-01-22_a_s_11.31.25[1]-1000x1000.png", "Abacaxi");
$link3 = new Link("https://www.infoescola.com/wp-content/uploads/2009/12/framboesa.jpg", "Framboesa");

$frutas = array($link1, $link2, $link3);

echo "<div class='dropdown'>";
echo "<button class='dropbtn'>Jogos</button>";
echo "<div class='dropText'>";

echo "<span><img src='https://upload.wikimedia.org/wikipedia/commons/7/7e/Roblox_Logo_2022.jpg' width='20' height='20'>Roblox</span>";
echo "<span><img src='https://image.api.playstation.com/vulcan/ap/rnd/202407/0401/670c294ded3baf4fa11068db2ec6758c63f7daeb266a35a1.png' width='20' height='20'>Minecraft</span>";
echo "<span><img src='https://uploads.spiritfanfiction.com/historias/capas/201803/arquivo-de-amor-doce-12520743-280320181709.png' width='20' height='20'>Amor Doce</span>";

echo "</div>";
echo "</div>";


$link4 = new Link("https://upload.wikimedia.org/wikipedia/commons/7/7e/Roblox_Logo_2022.jpg", "Roblox");
$link5 = new Link("https://image.api.playstation.com/vulcan/ap/rnd/202407/0401/670c294ded3baf4fa11068db2ec6758c63f7daeb266a35a1.png", "Minecraft");
$link6 = new Link("https://uploads.spiritfanfiction.com/historias/capas/201803/arquivo-de-amor-doce-12520743-280320181709.png", "Amor Doce");

$jogos = array($link4, $link5, $link6);

echo "<div class='dropdown'>";
echo "<button class='dropbtn'>Comidas</button>";
echo "<div class='dropText'>";

echo "<span><img src='' width='20' height='20'></span>";
echo "<span><img src='' width='20' height='20'></span>";
echo "<span><img src='' width='20' height='20'></span>";

echo "</div>";
echo "</div>";


$link1 = new Link("", "");
$link2 = new Link("", "");
$link3 = new Link("", "");

echo "<div class='dropdown'>";
echo "<button class='dropbtn'>Pelúcias</button>";
echo "<div class='dropText'>";

echo "<span><img src='https://m.media-amazon.com/images/I/71BeeJmYqjL._AC_UF1000,1000_QL80_.jpg' width='20' height='20'>Pompompurin</span>";
echo "<span><img src='https://m.media-amazon.com/images/I/71ljoRjw-HL._AC_UF350,350_QL80_.jpg' width='20' height='20'>Hello Kitty</span>";
echo "<span><img src='' width='20' height='20'></span>";

echo "</div>";
echo "</div>";


$link1 = new Link("", "");
$link2 = new Link("", "");
$link3 = new Link("", "");

