package com.softuni.entity;

public class Calculator {
    private double leftOperand;
    private double rightOperand;
    private String operator;

    public double getLeftOperand() {
        return leftOperand;
    }

    public void setLeftOperand(double leftOperand) {
        this.leftOperand = leftOperand;
    }

    public double getRightOperand() {
        return rightOperand;
    }

    public void setRightOperand(double rightOperand) {
        this.rightOperand = rightOperand;
    }

    public String getOperator() {
        return operator;
    }

    public Calculator(double leftOperand, double rightOperand, String operator) {
        this.leftOperand = leftOperand;
        this.rightOperand = rightOperand;
        this.operator = operator;
    }

    public void setOperator(String operator) {
        this.operator = operator;
    }

    public double calculateResult() {

        switch (this.operator) {
            case "+":
                return this.getLeftOperand() + this.getRightOperand();
            case "-":
                return this.getLeftOperand() - this.getRightOperand();
            case "*":
                return this.getLeftOperand() * this.getRightOperand();
            case "/":
                return this.getLeftOperand() / this.getRightOperand();
            default:
                return 0;
        }
    }
}
