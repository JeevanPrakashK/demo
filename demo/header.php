<style>
    .nav-bar {
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    list-style: none;
    position: relative;
    background-color: var(--color2);
    padding: 20px 20px;
}
.header{
    background-color: #181818;
    color:white;
}
.logo img {
    width: 40px !important; 
}
.menu {display: flex;}
.menu li {padding-left: 30px;}
.menu li a {
    display: inline-block;
    text-decoration: none;
    color: var(--color1);
    text-align: center;
    transition: 0.15s ease-in-out;
    position: relative;
    text-transform: uppercase;
}
.menu li a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color: var(--color1);
    transition: 0.15s ease-in-out;
}
.menu li a:hover:after {width: 100%;}
.open-menu , .close-menu {
    position: absolute;
    color: var(--color1);
    cursor: pointer;
    font-size: 1.5rem;
    display: none;
}
.open-menu {
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
.close-menu {
    top: 20px;
    right: 20px;
}
#check {display: none;}
@media(max-width: 610px){
    .menu {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 100vh;
        position: fixed;
        top: 0;
        right: -100%;
        z-index: 100;
        background-color: var(--color2);
        transition: all 0.2s ease-in-out;
    }
    .menu li {margin-top: 40px;}
    .menu li a {padding: 10px;}
    .open-menu , .close-menu {display: block;}
    #check:checked ~ .menu {right: 0;}
}
</style>
        <div class="header">
    <nav>
        <ul class='nav-bar'>
            <li class='logo'><a href='#'> <img src="./images/logo.jpg" alt="logo.jpg"></a></li>
            <input type='checkbox' id='check' />
            <span class="menu">
            <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="rotate.php">Rotate image</a></li>
      <li><a href="autoplay.php">Autoplay</a></li>
      <li><a href="upload_image.php">Image</a></li>
      <li><a href="contact.php">Upload file</a></li>
      <li><a href="logout.php">Logout</a></li>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
        </div>