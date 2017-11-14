function parseJSON(strings) {
    for (let json of strings) {
        let object = JSON.parse(json);

        let name = object.name;
        let age = object.age;
        let date = object.date;

        console.log(`Name: ${name}`);
        console.log(`Age: ${age}`);
        console.log(`Date: ${date}`);

    }
}

parseJSON(['{"name":"Gosho","age":10,"date":"19/06/2005"}', '{"name":"Tosho","age":11,"date":"04/04/2005"}']);