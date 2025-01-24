using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using WebApplication1.Data;
using WebApplication1.Modelss;
using Microsoft.AspNetCore.Mvc.Rendering;

namespace WebApplication1.Pages.Grades
{
    [Authorize]
    public class IndexModel : PageModel
    {
        private readonly WebApplication1.Data.ApplicationDbContext _context;

        public IndexModel(WebApplication1.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public IList<Grade> Grade { get;set; }
        [BindProperty(SupportsGet = true)]
        public string SearchString { get; set; }
        // Requires using Microsoft.AspNetCore.Mvc.Rendering;
        public SelectList Year { get; set; }
        [BindProperty(SupportsGet = true)]
        public string Semester { get; set; }

        public async Task OnGetAsync()
        {
            IQueryable<string> yearQuery = from m in _context.Grade
                                            orderby m.Year
                                            select m.Year;
            var grades = from m in _context.Grade
                         select m;
            if (!string.IsNullOrEmpty(SearchString))
            {
                grades = grades.Where(s => s.Semester.Contains(SearchString));
            }
            /*if (!string.IsNullOrEmpty(Year))
            {
                grades = grades.Where(x => x.Year == Year);
            }*/
            Year = new SelectList(await yearQuery.Distinct().ToListAsync());
            Grade = await grades.ToListAsync();
            //Grade = await _context.Grade.ToListAsync();
        }
    }
}
