function printNumbers([number]) {
    number = Number(number);

    for (let i = number; i > 0; i--) {
        console.log(i);
    }
}

console.log(printNumbers(['15']));