function areSymmetrical([count]) {
    let symmetricalNumbers = '';

    for (let i = 1; i <= Number(count); i++) {
        let currentNum = i;

        let symmetric = isSymmetric(i.toString());

        if (symmetric) {
            symmetricalNumbers += `${i} `;
        }
    }

    function isSymmetric(number) {
        let reversedNumber = '';

        for (let i = 0; i < number.length / 2; i++) {
            if (number[i] != number[number.length - i - 1]) {
                return false;
            }
        }
        return true;
    }

    return symmetricalNumbers;
}


let result = areSymmetrical(['750']);

console.log(result);