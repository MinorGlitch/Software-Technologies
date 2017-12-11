using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Calculator_CSharp.Models
{
    public class Calculator
    {
        public double LeftOperand { get; set; }
        public double RightOperand { get; set; }

        public string Operator { get; set; }

        public double Result { get; set; }

        public Calculator()
        {
            this.Result = 0;
        }
    }
}