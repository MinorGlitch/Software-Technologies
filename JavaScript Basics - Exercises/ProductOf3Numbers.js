function numbersProduct(numbers) {
    let negativeNumbers = 0;
    let positiveNumbers = 0;

    for (let i = 0; i < numbers.length; i++) {

        if (numbers[i] < 0) {
            negativeNumbers++;
        }
        else if (numbers[i] > 0) {
            positiveNumbers++;
        }
        else {
            return 'Positive';
        }
    }

    if (negativeNumbers % 2 !== 0) {
        return 'Negative';
    } else {
        return 'Positive';
    }
}

console.log(numbersProduct(['2', '3', '-1']));