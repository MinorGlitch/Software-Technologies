function storeObjects(input) {
    let students = [];

    for (let obj of input) {
        let studentArgs = obj.split(' -> ');

        let studentName = studentArgs[0];

        let studentAge = studentArgs[1];

        let studentGrade = studentArgs[2];

        let newStudent = {'Name': studentName, 'Age': studentAge, 'Grade': studentGrade};

        students.push(newStudent);
    }

    printStudents(students);

    function printStudents(students) {
        for (let student of students) {
            console.log(`Name: ${student.Name}`);
            console.log(`Age: ${student.Age}`);
            console.log(`Grade: ${student.Grade}`);
        }
    }
}

storeObjects(['Pesho -> 13 -> 6.00', 'Ivan -> 12 -> 5.57', 'Toni -> 13 -> 4.90']);