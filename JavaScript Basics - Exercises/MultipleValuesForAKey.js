function KeyValuePairs(kvp) {

    let sortedKeyValuePairs = {};

    let finalKey = kvp[kvp.length - 1];

    kvp.pop();

    for (let keyValuePair of kvp) {
        let splittedKVP = keyValuePair.split(' ');

        let key = splittedKVP[0];
        let value = splittedKVP[1];

        if (!(key in sortedKeyValuePairs)) {
            sortedKeyValuePairs[key] = [];
        }

        sortedKeyValuePairs[key].push(value);
    }

    if (finalKey in sortedKeyValuePairs) {
        return sortedKeyValuePairs[finalKey].join('\n');
    }

    return 'None';
}

console.log(KeyValuePairs(['key value', 'key eulav', 'test tset', 'key']));