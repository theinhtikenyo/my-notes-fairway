const letters = ["a", "b", "a", "c", "b", "a"];

console.log( letters.reduce((acc,num) => {
    if (acc[num]) {
        acc[num] += 1
    }else {
        acc[num] =1
    }
    return acc
},{}));

