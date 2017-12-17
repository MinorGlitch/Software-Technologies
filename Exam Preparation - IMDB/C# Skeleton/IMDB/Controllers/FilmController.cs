using System.Linq;
using System.Net;
using System.Web.Mvc;
using IMDB.Models;
using System.Data.Entity;

namespace IMDB.Controllers
{
    [ValidateInput(false)]
    public class FilmController : Controller
    {
        private IMDBDbContext db = new IMDBDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var films = db.Films.ToList();

            return View(films);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View(new Film());
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Film film)
        {
            if (ModelState.IsValid)
            {
                db.Films.Add(film);

                db.SaveChanges();

                return RedirectToAction("Index");
            }

            return View(film);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            Film film = db.Films.Where(f => f.Id == id).FirstOrDefault();

            if (film == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.NotFound);
            }

            return View(film);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Film filmModel)
        {
            Film filmFromDb = db.Films.Where(f => f.Id == id).First();

            if (filmFromDb == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            filmFromDb.Name = filmModel.Name;
            filmFromDb.Genre = filmModel.Genre;
            filmFromDb.Director = filmModel.Director;
            filmFromDb.Year = filmModel.Year;

            if (ModelState.IsValid)
            {
                db.Entry(filmFromDb).State = EntityState.Modified;

                db.SaveChanges();

                return RedirectToAction("Index");
            }

            return View("Edit", filmFromDb);
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            Film film = db.Films.Where(f => f.Id == id).FirstOrDefault();

            if (film == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.NotFound);
            }

            return View(film);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Film filmModel)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            Film film = db.Films.Where(f => f.Id == id).FirstOrDefault();

            if (film == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.NotFound);
            }

            db.Films.Remove(film);
            db.SaveChanges();

            return RedirectToAction("Index");
        }
    }
}