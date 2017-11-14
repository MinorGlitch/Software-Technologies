function manipulateArray(input) {
    let array = [];

    for (let commandAndValue of input) {
        let commandValuePair = commandAndValue.split(' ');

        let command = commandValuePair[0];

        let value = commandValuePair[1];

        switch (command) {
            case 'add': {
                array.push(value);
                break;
            }
            case 'remove': {
                array.splice(value, 1);
                break;
            }
        }
    }

    return array.join('\n');
}

console.log(manipulateArray(['add 3', 'add 5', 'add 7']));