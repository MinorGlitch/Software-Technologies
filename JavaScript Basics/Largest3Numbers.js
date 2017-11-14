function getNumbers(arr) {
    let largestNumbers = [];

    arr.sort((a, b) => b - a);

    let takeCount = Math.min(3, arr.length);

    for (let i = 0; i < takeCount; i++) {
        largestNumbers.push(arr[i]);
    }

    for (let number of largestNumbers) {
        console.log(number);
    }
}

getNumbers([10, 30, 15, 20, 50, 5]);