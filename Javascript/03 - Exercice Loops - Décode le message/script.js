// Welcome to Decode, your mission is to decode the full message. Good luck

// EX 01 -  Use a loop to remove the 'X' and use console.log to reveal the message 
const hiddenMessage = ["X", "X", "X", "X", "W", "X", "E",  "X", "X", "X", "X", "X", "L", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "L", "X", "X", "X", "X", "X", "X", "X", "X", "X", " ","X", "X", "X", "X", "X", "X", "X", "X", "D", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "O", "X", "X", "X", "X", "X", "X", "N", "X", "X", "X", "X", "E", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", ",", "X", " ", "X"]

// Your code goes here
let code = ""
for (let reveal = 0; reveal < hiddenMessage.length; reveal ++) {
  if (hiddenMessage[reveal] !== "X") {
    code = code + hiddenMessage[reveal];
  }
}
console.log(code);

// EX 02 - Use a nested loop to remove the 'X' and use console.log to reveal the hidden message 
const hiddenMessage2 = [
    ['X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'X', 'W', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'I', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'L', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'X', 'X', 'X', 'D', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'E', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X'],
    ['X', 'X', 'X', 'X', 'X', 'X', 'X', 'R', 'X', 'S.', ' '],
];

// Your code goes here
let code2 = ""
for (let one = 0; one < hiddenMessage2.length; one ++) {
  for (let two = 0; two < hiddenMessage2.length; two ++) {
    if (hiddenMessage2[one][two] !== ("X")) {
      code2 = code2 + hiddenMessage2[one][two];
    }
  }
}
console.log(code2);

// EX 03 - Remove the 'X' and the even numbers
// Hint: As this is a string you should find a way to convert into an array.

const hiddenCode = "XXXXXXXXXXXXXXXXXXXXXXXXXXXCXXXXXXXOXXXXXDXXXXXXXXXXXXXXXEXXXX XXXXXXXXXXXXXXX:X0XXXXXXX2XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX3XXXXXX2XXXXXXXXX2XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX4XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX6XXXXXXXXXXXXXXX6XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX7XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX2XXXXXXXXXX8XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX8XXXXXXXXXXX4XXXXXXXXXXXX6XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX4XXXXXXXXXXXXXXXXXXX9XXXX9XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX2XXX4XXXXXXXXXXX6XXXXXXXXX2XXXXXXXX3XXXXXXXX2XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX4XXXXX"

// Your code goes here
let code3 = ""
let newArray = hiddenCode.split('');
for (let reveal3 = 0; reveal3 < newArray.length; reveal3++) {
  if (newArray[reveal3] !== "X" && newArray[reveal3] %2 !== 0) {
    code3 = code3 + newArray[reveal3];
  }
}
console.log(code3);

// Bonus 

/* 
    use a loop to recreate this triangle of stars in the console (hint: nested loop).

    ⭐️ 
    ⭐️⭐️ 
    ⭐️⭐️⭐️ 
    ⭐️⭐️⭐️⭐️
    ⭐️⭐️⭐️⭐️⭐️
    ⭐️⭐️⭐️⭐️⭐️⭐️
    ⭐️⭐️⭐️⭐️⭐️⭐️⭐️
    ⭐️⭐️⭐️⭐️⭐️⭐️⭐️⭐️
    ⭐️⭐️⭐️⭐️⭐️⭐️⭐️⭐️⭐️

*/

let stars = "⭐️ ";

for (let boucle = 0; boucle < 9; boucle ++) {
  console.log(stars);
  stars = stars + "⭐️ ";

}