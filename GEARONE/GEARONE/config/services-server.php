<?php include('connectDB.php'); ?>
<?php
$manualreg = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, cartype, price FROM courses WHERE courseoffer LIKE 'Regular Course%'");
$manualspec = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Special Course%'");
$manualgear = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Gear1 Course%'");
$manualsuv = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual SUV%' AND cartype LIKE 'Innova%' AND coursetype LIKE 'Manual Course%'");

$autoautomaticcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic in%' AND coursetype LIKE 'Automatic Course%'");
$autosuvautomaticcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'innova%' AND coursetype LIKE 'automatic%'");
$automonteautomaticcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'mont%' AND coursetype LIKE 'automatic%'");

$autoexecrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic in%' AND coursetype LIKE 'Executive Course%'");
$autosuvexecrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'innova%' AND coursetype LIKE 'Executive Course%'");
$automonteexecrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'mont%' AND coursetype LIKE 'Executive Course%'");
$manualexecrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual in%' AND coursetype LIKE 'Executive Course%'");
$manualsuvexecrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual SUV%' AND coursetype LIKE 'Executive Course%'");

$manualruscrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual in%' AND coursetype LIKE 'Rush-Course%'");
$manualsuvruscrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual SUV%' AND coursetype LIKE 'Rush-Course%'");
$autoruscrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic in%' AND coursetype LIKE 'Rush-Course%'");
$autosuvruscrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'innova%' AND coursetype LIKE 'Rush-Course%'");
$automonteruscrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'mont%' AND coursetype LIKE 'Rush-Course%'");

$manualrusexcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual in%' AND coursetype LIKE '%(Executive)%'");
$manualsuvrusexcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Manual SUV%' AND coursetype LIKE '%(Executive)%'");
$autorusexcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic in%' AND coursetype LIKE '%(Executive)%'");
$autosuvrusexcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'innova%' AND coursetype LIKE '%(Executive)%'");
$automonterusexcrs = mysqli_query($connections, "SELECT courseno, courseoffer, cartype, price FROM courses WHERE courseoffer LIKE 'Automatic SUV%' AND cartype LIKE 'mont%' AND coursetype LIKE '%(Executive)%'");

if (isset($_POST['coursechoice'])){
    $courseno = mysqli_real_escape_string($connections, $_POST['courseno']);
    $courseoffer = mysqli_real_escape_string($connections, $_POST['courseoffer']);
    $price = mysqli_real_escape_string($connections, $_POST['price']);
    mysqli_query($connections, "SELECT * FROM courses");
}
?>