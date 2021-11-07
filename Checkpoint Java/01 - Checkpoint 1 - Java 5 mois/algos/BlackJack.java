package algos;

public class BlackJack {
    public static String score(String[] bank, String[] player) {
        int pointsBank = 0;
        int pointsPlayer = 0;
        boolean blackjackBank = false;
        boolean blackjackPlayer = false;

        if (bank[0] == "1" && bank[1] == "10" ||
                bank[0] == "1" && bank[1] == "J" ||
                bank[0] == "1" && bank[1] == "Q" ||
                bank[0] == "1" && bank[1] == "K" ||
                bank[0] == "10" && bank[1] == "1" ||
                bank[0] == "J" && bank[1] == "1" ||
                bank[0] == "Q" && bank[1] == "1" ||
                bank[0] == "K" && bank[1] == "1") {
            blackjackBank = true;
        } else {
            for (String mainBank : bank) {
                if (mainBank == "1") {
                    pointsBank += 1;
                } else if (mainBank == "2") {
                    pointsBank += 2;
                } else if (mainBank == "3") {
                    pointsBank += 3;
                } else if (mainBank == "4") {
                    pointsBank += 4;
                } else if (mainBank == "5") {
                    pointsBank += 5;
                } else if (mainBank == "6") {
                    pointsBank += 6;
                } else if (mainBank == "7") {
                    pointsBank += 7;
                } else if (mainBank == "8") {
                    pointsBank += 8;
                } else if (mainBank == "9") {
                    pointsBank += 9;
                } else if (mainBank == "10") {
                    pointsBank += 10;
                } else if (mainBank == "J") {
                    pointsBank += 10;
                } else if (mainBank == "Q") {
                    pointsBank += 10;
                } else if (mainBank == "K") {
                    pointsBank += 10;
                }
            }
        }

        if (player[0] == "1" && player[1] == "10" ||
                player[0] == "1" && player[1] == "J" ||
                player[0] == "1" && player[1] == "Q" ||
                player[0] == "1" && player[1] == "K" ||
                player[0] == "10" && player[1] == "1" ||
                player[0] == "J" && player[1] == "1" ||
                player[0] == "Q" && player[1] == "1" ||
                player[0] == "K" && player[1] == "1") {
            blackjackPlayer = true;
        } else {
            for (String mainPlayer : player) {
                if (mainPlayer == "1") {
                    pointsPlayer += 1;
                } else if (mainPlayer == "2") {
                    pointsPlayer += 2;
                } else if (mainPlayer == "3") {
                    pointsPlayer += 3;
                } else if (mainPlayer == "4") {
                    pointsPlayer += 4;
                } else if (mainPlayer == "5") {
                    pointsPlayer += 5;
                } else if (mainPlayer == "6") {
                    pointsPlayer += 6;
                } else if (mainPlayer == "7") {
                    pointsPlayer += 7;
                } else if (mainPlayer == "8") {
                    pointsPlayer += 8;
                } else if (mainPlayer == "9") {
                    pointsPlayer += 9;
                } else if (mainPlayer == "10") {
                    pointsPlayer += 10;
                } else if (mainPlayer == "J") {
                    pointsPlayer += 10;
                } else if (mainPlayer == "Q") {
                    pointsPlayer += 10;
                } else if (mainPlayer == "K") {
                    pointsPlayer += 10;
                }
            }
        }


        if (blackjackBank == true && blackjackPlayer == true) {
            return "Player wins!";
        } else if (blackjackBank == true && blackjackPlayer == false) {
            return "Bank wins!";
        } else if (blackjackBank == false && blackjackPlayer == true) {
            return "BLACKJACK!";
        } else {
            if (pointsPlayer <= 21 && pointsBank <= 21 && pointsPlayer == pointsBank) {
                return "Player wins!";
            }

            if (pointsPlayer <= 21 && pointsBank <= 21 && pointsPlayer > pointsBank || pointsPlayer <= 21 && pointsBank > 21) {
                return "Player wins!";
            }

            if (pointsPlayer <= 21 && pointsBank <= 21 && pointsPlayer < pointsBank || pointsPlayer > 21 && pointsBank <= 21) {
                return "Bank wins!";
            }
        }
        return "bisous!";
    }
    // TODO
}
