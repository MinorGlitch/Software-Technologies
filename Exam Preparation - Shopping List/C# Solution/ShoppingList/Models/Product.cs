﻿using System.ComponentModel.DataAnnotations;
using System.Web.Mvc;

namespace ShoppingList.Models
{
    public class Product
    {
        public int Id { get; set; }

        [Required]
        public int Priority { get; set; }

        [Required]
        public string Name { get; set; }

        [Required]
        public int Quantity { get; set; }

        [Required]
        [MinLength(6)]
        [MaxLength(10)]
        public string Status { get; set; }
    }
}