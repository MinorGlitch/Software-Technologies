function printNumbers(numbers) {

    for (let i = numbers.length - 1; i >= 0; i--) {
        console.log(numbers[i]);
    }
}

console.log(printNumbers(['10', '15', '20']));
