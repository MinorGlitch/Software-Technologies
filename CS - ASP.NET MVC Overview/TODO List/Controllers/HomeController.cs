using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using TODO_List.Models;

namespace TODO_List.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            using (TaskDbContext db = new TaskDbContext())
            {
                List<Task> tasks = db.Tasks.ToList();

                return View(tasks);
            }
        }
    }
}