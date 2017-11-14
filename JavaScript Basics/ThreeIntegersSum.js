function sumIntegers([input]) {
    let numbers = input.split(' ').map(x => Number(x)).sort((a, b) => b - a);

    if (numbers[0] + numbers[1] == numbers[2]) {
        return `${Math.min(numbers[0], numbers[1])} + ${Math.max(numbers[0], numbers[1])} = ${numbers[2]}`;
    } else if (numbers[1] + numbers[2] == numbers[0]) {
        return `${Math.min(numbers[2], numbers[1])} + ${Math.max(numbers[1], numbers[2])} = ${numbers[0]}`;
    } else {
        return 'No';
    }
}

let result = sumIntegers(['-5 -3 -2']);

console.log(result);

