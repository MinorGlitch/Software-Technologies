function setValues(args) {

    let length = Number(args[0]);

    let values = new Array(length).fill(0);

    args.shift();

    for (let indexValue of args) {
        let indexAndValue = indexValue.split(' - ');

        let index = Number(indexAndValue[0]);

        let value = Number(indexAndValue[1]);

        values[index] = value;

    }

    return values.join('\n');
}

console.log(setValues(['3', '0 - 5', '1 - 6', '2 - 7']));