function divideOrMultiply([n, x]) {
    n = Number(n);
    x = Number(x);

    if (x >= n) {
        return x * n;
    } else {
        return n / x;
    }
}

console.log(divideOrMultiply(["13", "13"]));