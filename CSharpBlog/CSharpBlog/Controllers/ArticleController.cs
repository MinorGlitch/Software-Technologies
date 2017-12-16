using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using CSharpBlog.Models;

namespace CSharpBlog.Controllers
{
    public class ArticleController : Controller
    {
        // GET: Article
        public ActionResult Index()
        {
            return RedirectToAction("List");
        }

        public ActionResult List()
        {
            using (var db = new BlogDbContext())
            {
                List<Article> articles = db.Articles.Include(a => a.Author).ToList();

                return View(articles);
            }
        }

        //GET: Details
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            Article article = GetArticle(id);

            if (article == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.NotFound);
            }

            return View(article);
        }

        //GET: Create
        [Authorize]
        public ActionResult Create()
        {
            return View();
        }

        //POST: Create
        [HttpPost]
        [Authorize]
        public ActionResult Create(Article article)
        {
            using (var db = new BlogDbContext())
            {
                if (ModelState.IsValid)
                {
                    string authorId = db.Users.First(u => this.User.Identity.Name == u.UserName).Id;

                    article.AuthorId = authorId;

                    db.Articles.Add(article);

                    db.SaveChanges();

                    return RedirectToAction("Index");
                }

                return View("Create", article);
            }
        }

        //GET: Delete
        [Authorize]
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var db = new BlogDbContext())
            {
                Article article = GetArticle(id);

                if (!CanEdit(article))
                {
                    return RedirectToAction("Index");
                }

                if (article == null)
                {
                    return new HttpStatusCodeResult(HttpStatusCode.NotFound);
                }

                return View(article);
            }
        }

        //POST: Delete
        [Authorize]
        [HttpPost]
        [ActionName("Delete")]
        public ActionResult ConfirmDelete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var db = new BlogDbContext())
            {
                Article article = GetArticle(id);

                if (!CanEdit(article))
                {
                    return RedirectToAction("Index");
                }

                if (article == null)
                {
                    return new HttpStatusCodeResult(HttpStatusCode.NotFound);
                }

                db.Articles.Remove(article);
                db.SaveChanges();

                return RedirectToAction("Index");
            }
        }

        //GET: Edit
        [Authorize]
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var db = new BlogDbContext())
            {
                Article article = GetArticle(id);

                if (!CanEdit(article))
                {
                    return RedirectToAction("Index");
                }

                if (article == null)
                {
                    return new HttpStatusCodeResult(HttpStatusCode.NotFound);
                }

                ArticleViewModel vModel = new ArticleViewModel()
                {
                    Id = article.Id,
                    Title = article.Title,
                    Content = article.Content
                };

                return View(vModel);
            }
        }

        //POST: Edit
        [HttpPost]
        [Authorize]
        [ActionName("Edit")]
        public ActionResult EditArticle(ArticleViewModel article)
        {
            if (ModelState.IsValid)
            {
                using (var db = new BlogDbContext())
                {
                    Article dbArticle = db.Articles.FirstOrDefault(a => a.Id == article.Id);

                    if (dbArticle == null)
                    {
                        return new HttpStatusCodeResult(HttpStatusCode.NotFound);
                    }

                    if (!CanEdit(dbArticle))
                    {
                        return RedirectToAction("Index");
                    }

                    dbArticle.Title = article.Title;
                    dbArticle.Content = article.Content;

                    db.Entry(dbArticle).State = EntityState.Modified;

                    db.SaveChanges();
                }
            }

            return RedirectToAction("Index");
        }

        private Article GetArticle(int? id)
        {
            using (var db = new BlogDbContext())
            {
                Article article = db.Articles.Where(a => a.Id == id).Include(a => a.Author).FirstOrDefault();

                return article;
            }
        }

        private bool CanEdit(Article article)
        {
            bool isAdmin = this.User.IsInRole("Admin");

            bool isAuthor = article.IsAuthor(this.User.Identity.Name);

            return isAdmin || isAuthor;
        }
    }
}