function Calculator(leftOperand, operator, rightOperand) {
    this.leftOperand = leftOperand;
    this.operator = operator;
    this.rightOperand = rightOperand;

    this.calculate = function () {
        if (Number.isNaN(leftOperand) || Number.isNaN(rightOperand)) {
            return 'NaN';
        }

        let result = 0;

        switch (this.operator) {
            case '+': {
                result = this.leftOperand + this.rightOperand;
                break;
            }
            case '-': {
                result = this.leftOperand - this.rightOperand;
                break;
            }
            case '*': {
                result = this.leftOperand * this.rightOperand;
                break;
            }
            case '/': {
                if (this.rightOperand == 0) {
                    return 'Division By 0';
                }
                result = this.leftOperand / this.rightOperand;
                break;
            }
            case '%':
            {
                result = this.leftOperand % this.rightOperand;
                break;
            }
            case '^':
            {
                result = this.leftOperand ** this.rightOperand;
                break;
            }
        }

        return result;
    }
}

module.exports = Calculator;