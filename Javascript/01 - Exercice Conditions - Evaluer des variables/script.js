// Declare and define three variables using a numerical value
const one = 1;
const two = 2;
const three = 3;
// * If the three variables are equal, display "The three variables are the same" in the console
if (one === two && one === three) {
  console.log("The three variables are the same");
}
// * If only two of the variables are equal, display "Two of the variables are the same" in the console
else if (one === two || two === three || one === three) {
  console.log("Two of the variables are the same");
}
// * If the variables are all differents display "all variables are differents" in the console
else {
  console.log("all variables are differents");
}