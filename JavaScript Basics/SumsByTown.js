function processInput(args) {
    let townObjects = args.map(JSON.parse);

    let townData = {};

    for (let townObj of townObjects) {
        if (townObj.town in townData) {
            townData[townObj.town] += townObj.income;
        } else {
            townData[townObj.town] = townObj.income;
        }
    }

    let sortedTowns = Object.keys(townData).sort();

    for (let town of sortedTowns) {
        console.log(`${town} -> ${townData[town]}`);
    }
}

processInput(['{"town":"Sofia","income":200}',
    '{"town":"Varna","income":120}',
    '{"town":"Pleven","income":60}',
    '{"town":"Varna","income":70}'
]);