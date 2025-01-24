using Microsoft.EntityFrameworkCore.Migrations;

namespace WebApplication1.Data.Migrations
{
    public partial class Year : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "Semester",
                table: "Grade",
                nullable: true);

            migrationBuilder.AddColumn<string>(
                name: "Year",
                table: "Grade",
                nullable: true);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "Semester",
                table: "Grade");

            migrationBuilder.DropColumn(
                name: "Year",
                table: "Grade");
        }
    }
}
