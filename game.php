<?php
// Rock =0
// Paper=1
// Scissors=2
echo "<h1>Welcome TO ROCK-PAPER-SCISSOR Game</h1>";
echo "<b>For Example and Explanation:</b><br>";
echo "W stands for Win , Point:2<br>";
echo "L stands for Lose, Point:0<br>";
echo "T stands for Tie ,Point:1<br>";
echo "<b>Player1:WWW(6)|| Player2:LTT(2)|| Player3:LTT(2)|| Player4:LTT(2)<b/>........This implies----> <br>Player1 Vs Player2 :- Player1 Win || Player1 Vs Player3 :- Player1 Win || Player1 Vs Player4 :- Player1 win <br> Player2 Vs Player1 :- Player2 Lose || Player2 Vs Player3 :- Tie || Player2 Vs Player4 :- Tie <br> Player3 Vs Player1 :- Player3 Lose || Player3 Vs Player2 :- Tie || Player3 Vs Player4 :- Tie <br>Player4 Vs Player1 :- Player4 Lose || Player4 Vs Player2 :- Tie || Player4 Vs Player3 :- Tie<br> WWW(2+2+2)<br>LTT(0+1+1)<br><br><br>";
echo "<h3>Game Start:</h3><br>";
$names = array('Rock', 'Paper', 'Scissors');

function checkwinner($p1, $p2) {
if($p1 == 0){

    if ( $p2 == 0 ) {
        return "Tie";
    } else if ( $p2 == 1 ) {
        return "You Win";
    } else if ( $p2 == 2 ) {
        return "You Lose";
    }
    }
    if($p1 == 1){

    if ( $p2 == 0 ) {
        return "You Lose";
    } else if ( $p2 == 1 ) {
        return "Tie";
    } else if ( $p2 == 2 ) {
        return "You Win";
    }
    }
    if($p1 == 2){

    if ( $p2 == 0 ) {
        return "You Win";
    } else if ( $p2 == 1 ) {
        return "You Lose";
    } else if ( $p2 == 2 ) {
        return "Tie";
    }
    }
}


for ($x = 1; $x <= 50; $x++) {
    $player1=rand(0,2);
    $player2=rand(0,2);
    $player3=rand(0,2);
    $player4=rand(0,2);
        $result12 = checkwinner($player1, $player2);
        if ($result12 == "You Win") {
            $rp12="W";$rpn12=2;
            $rp11="L";$rpn11=0;
        }
                if ($result12 == "Tie") {
            $rp12="T";$rpn12=1;
            $rp11="T";$rpn11=1;
        }
                if ($result12 == "You Lose") {
            $rp12="L";$rpn12=0;
            $rp11="W";$rpn11=2;
        }
        $result13 = checkwinner($player1, $player3);
        if ($result13 == "You Win") {
            $rp23="W";$rpn23=2;
            $rp21="L";$rpn21=0;
        }
                if ($result13 == "Tie") {
            $rp23="T";$rpn23=1;
            $rp21="T";$rpn21=1;
        }
                if ($result13 == "You Lose") {
            $rp23="L";$rpn23=0;
            $rp21="W";$rpn21=2;
        }
        $result14 = checkwinner($player1, $player4);
        if ($result14 == "You Win") {
            $rp34="W";$rpn34=2;
            $rp31="L";$rpn31=0;
        }
                if ($result14 == "Tie") {
            $rp34="T";$rpn34=1;
            $rp31="T";$rpn31=1;
        }
                if ($result14 == "You Lose") {
            $rp34="L";$rpn34=0;
            $rp31="W";$rpn31=2;
        }
        $result23 = checkwinner($player2, $player3);
        if ($result23 == "You Win") {
            $rp43="W";$rpn43=2;
            $rp42="L";$rpn42=0;
        }
                if ($result23 == "Tie") {
            $rp43="T";$rpn43=1;
            $rp42="T";$rpn42=1;
        }
                if ($result23 == "You Lose") {
            $rp43="L";$rpn43=0;
            $rp42="W";$rpn42=2;
        }
        $result24 = checkwinner($player2, $player4);
        if ($result24 == "You Win") {
            $rp54="W";$rpn54=2;
            $rp52="L";$rpn52=0;
        }
                if ($result24 == "Tie") {
            $rp54="T";$rpn54=1;
            $rp52="T";$rpn52=1;
        }
                if ($result24 == "You Lose") {
            $rp54="L";$rpn54=0;
            $rp52="W";$rpn52=2;
        }
        $result34 = checkwinner($player3, $player4);
        if ($result34 == "You Win") {
            $rp64="W";$rpn64=2;
            $rp63="L";$rpn63=0;
        }
                if ($result34 == "Tie") {
            $rp64="T";$rpn64=1;
            $rp63="T";$rpn63=1;
        }
                if ($result34 == "You Lose") {
            $rp64="L";$rpn64=0;
            $rp63="W";$rpn63=2;
        }
        $rp1=$rp11.$rp21.$rp31;
        $rp2=$rp12.$rp42.$rp52;
        $rp3=$rp23.$rp43.$rp63;
        $rp4=$rp34.$rp54.$rp64;

        $rpn1=$rpn11+$rpn21+$rpn31;
        $rpn2=$rpn12+$rpn42+$rpn52;
        $rpn3=$rpn23+$rpn43+$rpn63;
        $rpn4=$rpn34+$rpn54+$rpn64;
echo "Round".$x."~~";
    print "Player1:".$names[$player1]."|| Player2:".$names[$player2]."|| Player3:".$names[$player3]."|| Player4:".$names[$player4]."-----";
    print "Player1:".$rp1."(".$rpn1.")|| Player2:".$rp2."(".$rpn2.")|| Player3:".$rp3."(".$rpn3.")|| Player4:".$rp4."(".$rpn4.")[[[[[[";
    // print "Player1:".$rpn1."|| Player2:".$rpn2."|| Player3:".$rpn3."|| Player4:".$rpn4."<br>";
print "winner:";
    $winner=max($rpn1,$rpn2,$rpn3,$rpn4);
    if (($rpn1 == $rpn2) && ($rpn2 == $rpn3) &&($rpn3 == $rpn4)) {
        echo "Tie";
    }
    else{
    if ($winner==$rpn1) {
        echo " Player1";
    }
        if ($winner==$rpn2) {
        echo " Player2";
    }
        if ($winner==$rpn3) {
        echo " Player3";
    }
        if ($winner==$rpn4) {
        echo " Player4";
    }
    }
    echo "]]]]]]<br>";
}

echo "<h3>Game End.</h3><br>";
?>



