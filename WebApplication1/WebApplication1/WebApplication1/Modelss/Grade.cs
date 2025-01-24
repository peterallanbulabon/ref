using System;
using System.ComponentModel.DataAnnotations;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace WebApplication1.Modelss
{
    public class Grade
    {
        public int ID { get; set; }
        public string Subject { get; set; }
        public decimal Prelim { get; set; }
        public decimal Midterm { get; set; }
        public decimal Finals { get; set; }
        [Display(Name = "Final Grade")]
        public decimal Final_Grade { get; set; }
        public string Year { get; set; }
        public string Semester { get; set; }
    }
}
