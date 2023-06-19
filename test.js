// const getHighestOccurringNum = (list = []) => {
//   const map = {};
//   list.forEach((num) =>
//     map[`${num}`] ? (map[`${num}`] += 1) : (map[`${num}`] = 1)
//   );
//   return Object.entries(map).sort((a, b) => b[1] - a[1])[0][0];
// };

// console.log(getHighestOccurringNum([1, 1, 1, 4, 5, 5, 5, 5, 4, 2, 5, 6, 2, 2]));

// const revStr = (str = "") => {
//   const symbols = {};
//   const alphas = [
//     "a",
//     "b",
//     "c",
//     "d",
//     "e",
//     "f",
//     "g",
//     "h",
//     "i",
//     "j",
//     "k",
//     "l",
//     "m",
//     "n",
//     "o",
//     "p",
//     "q",
//     "r",
//     "s",
//     "t",
//     "u",
//     "v",
//     "w",
//     "x",
//     "y",
//     "z",
//   ];
//   const strings = [];

//   // Filter the alphabet and from the symbols
//   for (let index = 0; index < str.length; index++) {
//     const char = str[index];
//     if (!alphas.includes(char.toLowerCase())) {
//       if (symbols[char]) {
//         symbols[char + index] = index;
//       } else {
//         symbols[char] = index;
//       }
//     } else {
//       strings.push(char);
//     }
//   }

//   // Reverse the strings
//   const reversedString = strings.reverse();

//   // Put the symbols back in the reversed string
//   for (let key in symbols) {
//     const symbol = key.length > 1 ? key[0] : key;
//     const index = symbols[key];

//     reversedString.splice(index, 0, symbol);
//   }

//   return reversedString.join("");
// };

// console.log(revStr("ab-rts+usE-Eok-H")); 