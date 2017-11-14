function makeJSON(input) {

    let obj = {};

    for (let kvp of input) {
        let keyValuePairArgs = kvp.split(' -> ');

        let key = keyValuePairArgs[0];

        let value = keyValuePairArgs[1];

        if (key == 'age') {
            value = Number(value);
        } else if (key == 'grade') {
            value = Number(value);
        }

        obj[key] = value;
    }

    return JSON.stringify(obj);
}

let result =
    makeJSON(['name -> Angel', 'surname -> Georgiev', 'age -> 20', 'grade -> 6.00', 'date -> 23/05/1995', 'town -> Sofia']);

console.log(result);