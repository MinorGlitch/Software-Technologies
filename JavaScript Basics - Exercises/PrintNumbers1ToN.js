function printNumbers([number]) {
    number = Number(number);

    for (let i = 1; i <= number; i++) {
        console.log(i);
    }
}

console.log(printNumbers(['15']));