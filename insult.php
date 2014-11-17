<?php

$cola = array("artless","bawdy","beslubbering","bootless","churlish","cockered","clouted","craven","currish","dankish","dissembling","droning","errant","fawning","fobbing","froward","frothy","gleeking","goatish","gorbellied","impertinent","infectious","jarring","loggerheaded","lumpish","mammering","mangled","mewling","paunchy","pribbling","puking","puny","qualling","rank","reeky","roguish","ruttish","saucy","spleeny","spongy","surly","tottering","unmuzzled","vain","venomed","villainous","warped","wayward","weedy","yeasty");

$colb = array( "base-court","bat-fowling","beef-witted","beetle-headed","boil-brained","clapper-clawed","clay-brained","common-kissing","crook-pated","dismal-dreaming","dizzy-eyed","doghearted","dread-bolted","earth-vexing","elf-skinned","fat-kidneyed","fen-sucked","flap-mouthed","fly-bitten","folly-fallen","fool-born","full-gorged","guts-griping","half-faced","hasty-witted","hedge-born","hell-hated","idle-headed","ill-breeding","ill-nurtured","knotty-pated","milk-livered","motley-minded","onion-eyed","plume-plucked","pottle-deep","pox-marked","reeling-ripe","rough-hewn","rude-growing","rump-fed","shard-borne","sheep-biting","spur-galled","swag-bellied","tardy-gaited","tickle-brained","toad-spotted","unchin-snouted","weather-bitten");

$colc = array("apple-john","baggage","barnacle","bladder","boar-pig","bugbear","bum-bailey","canker-blossom","clack-dish","clotpole","coxcomb","codpiece","death-token","dewberry","flap-dragon","flax-wench","flirt-gill","foot-licker","fustilarian","giglet","gudgeon","haggard","harpy","hedge-pig","horn-beast","hugger-mugger","joithead","lewdster","lout","maggot-pie","malt-worm","mammet","measle","minnow","miscreant","moldwarp","mumble-news","nut-hook","pigeon-egg","pignut","puttock","pumpion","ratsbane","scut","skainsmate","strumpet","varlot","vassal","whey-face","wagtail");

echo "<html>
		<head>
		<title>Shakespeare insult generator</title>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
		<META HTTP-EQUIV=\"cache-control\" CONTENT=\"no-cache\">
		<meta name=\"description\" content=\"Shakepeare insult generator\">
		</head>\n";
echo "<body>
		<h1>Shakespeare insult generator</h1>\n";

echo "<p><font size='+2'><b>Thou " . $cola[array_rand($cola)] . " " . $colb[array_rand($colb)] . " " . $colc[array_rand($colc)] . "</b></font></p>\n";

echo "<a href=\"insult.php\">Get another one</a>";
echo "<p>Also check out the <a href=\"http://commonfolkcollective.com/blog\">Common Folk Collective Blog</a></p>\n";
echo "<p>Back to <a href=\"http://dcdan.com\">DCDan</a></p>\n"; ?>
<?php
echo "</body>\n</html>"