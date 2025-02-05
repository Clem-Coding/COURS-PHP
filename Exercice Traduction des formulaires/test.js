// Pair of gloves

// Winter is coming, you must prepare your ski holidays. The objective of this kata is to determine the number of pair of gloves you can constitute from the gloves you have in your drawer.

// Given an array describing the color of each glove, return the number of pairs you can constitute, assuming that only gloves of the same color can form pairs.
// Examples:

// input = ["red", "green", "red", "blue", "blue"]
// result = 2 (1 red pair + 1 blue pair)

// input = ["red", "red", "red", "red", "red"]
// result = 3 (3 red pairs)
const gloves = ["red", "green", "red", "blue", "blue"];
function numberOfPairs(gloves) {
  const countGlovesByColor = (gloveCounts, color) => {
    if (gloveCounts[color]) {
      gloveCounts[color] += 1;
    } else {
      gloveCounts[color] = 1;
    }
    return gloveCounts;
  };

  let gloveCounts = gloves.reduce(countGlovesByColor, {});

  let totalPairs = 0;

  for (let color in gloveCounts) {
    totalPairs += Math.floor(gloveCounts[color] / 2);
  }

  return totalPairs;
}

let result = numberOfPairs(gloves);
console.log("LE RESULSTAT -> : ", result);

// const duplicates = array.filter((item, index) => array.indexOf(item) !== index);

// groupByPair est une fonction qui sera utilisée avec la méthode .reduce().
// Elle prend deux arguments :
//     pairsGroups : L'accumulateur qui garde les groupes de paires (c'est un objet qui sera construit au fur et à mesure des itérations).
//     pair : L'élément actuel du tableau (la couleur du gant, comme "red", "green", etc.).

// console.log(totalPairs);

// const seenColors = [];

// const duplicateGloves = gloves.filter((color, index) => {
//   if (gloves.indexOf(color) !== index && !seenColors.includes(color)) {
//     seenColors.push(color);
//     return true;
//   }
//   return false;
// });

// return duplicateGloves.length;

// {
//     red:1
//     Blue: 2
//     Green 1
// }
