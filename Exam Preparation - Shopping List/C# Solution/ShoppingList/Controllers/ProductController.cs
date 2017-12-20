using System.Linq;
using System.Web.Mvc;
using ShoppingList.Models;
using System.Collections.Generic;
using System.Data.Entity;
using System.Net;

namespace ShoppingList.Controllers
{
    [ValidateInput(false)]
    public class ProductController : Controller
    {
        private ShoppingListDbContext db = new ShoppingListDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            List<Product> products = db.Products.ToList();

            return View(products);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Product product)
        {
            db.Products.Add(product);

            db.SaveChanges();

            return RedirectToAction("Index");
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            Product product = db.Products.Find(id);

            if (product == null)
            {
                return RedirectToAction("Index");
            }

            return View(product);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Product productModel)
        {
            Product product = db.Products.Find(id);

            if (product == null)
            {
                return RedirectToAction("Index");
            }

            if (ModelState.IsValid)
            {
                product.Name = productModel.Name;
                product.Priority = productModel.Priority;
                product.Quantity = productModel.Quantity;
                product.Status = productModel.Status;

                db.Entry(product).State = EntityState.Modified;
                db.SaveChanges();
            }
            else
            {
                return new HttpStatusCodeResult(HttpStatusCode.InternalServerError);
            }

            return RedirectToAction("Index");
        }
    }
}