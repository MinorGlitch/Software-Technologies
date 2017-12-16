using System.Data.Entity;
using CSharpBlog.Migrations;
using CSharpBlog.Models;
using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(CSharpBlog.Startup))]
namespace CSharpBlog
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            Database.SetInitializer(new MigrateDatabaseToLatestVersion<BlogDbContext, Configuration>());

            ConfigureAuth(app);
        }
    }
}
