function printLines(lines) {
    for (let line of lines) {
        if (line == "Stop") {
            return;
        }

        console.log(line);
    }
}

console.log(printLines(['Line 1', 'Line 2', 'Line 3', 'Stop']));