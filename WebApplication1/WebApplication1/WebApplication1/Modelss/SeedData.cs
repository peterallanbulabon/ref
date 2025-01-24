using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.DependencyInjection;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using WebApplication1.Data;


namespace WebApplication1.Modelss
{
    public static class SeedData
    {
        public static void Initialize(IServiceProvider serviceProvider)
        {
            using (var context = new ApplicationDbContext(
                serviceProvider.GetRequiredService<
                    DbContextOptions<ApplicationDbContext>>()))
            {
                // Look for any movies.
                if (context.Grade.Any())
                {
                    return;   // DB has been seeded
                }

                context.Grade.AddRange(
                    new Grade
                    {
                        Subject = "World Literature",
                        Prelim = 150,
                        Midterm = 175,
                        Finals = 125,
                        Final_Grade = 150,
                        Year = "1st year",
                        Semester = "1st semester"
                    }
                );
                context.SaveChanges();
            }
        }
    }
    }
