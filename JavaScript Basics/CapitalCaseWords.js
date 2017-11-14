function capitalWords(allWords) {
    let text = allWords.join(',');
    let extractedWords = text.split(/\W+/);

    let nonEmpty = extractedWords.filter(x => x.length > 0);
    let matchingWords = [];

    for (let word of nonEmpty) {
        if (word === word.toUpperCase()) {
            matchingWords.push(word);
        }
    }

    console.log(matchingWords.join(', '));
}

capitalWords(['We start by HTML, CSS, JavaScript, JSON and REST.\n' +
'Later we touch some PHP, MySQL and SQL.\n' +
'Later we play with C#, EF, SQL Server and ASP.NET MVC.\n' +
'Finally, we touch some Java, Hibernate and Spring.MVC.']);