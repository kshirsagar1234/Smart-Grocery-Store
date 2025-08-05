<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ThinkSum Login Form</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(to right, #a1a0a0, #9966CC);
}
nav{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: #bebebe;
    z-index: 99;
  }
  nav .navbar{
    height: 100%;
    max-width: 1250px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    /* background: red; */
    padding: 0 50px;
  }
  .navbar .logo a{
    font-size: 30px;
    color: #000000;
    text-decoration: none;
    font-weight: 600;
  }
  nav .navbar .nav-links{
    line-height: 70px;
    height: 100%;
  }
  nav .navbar .links{
    display: flex;
  }
  nav .navbar .links li{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    list-style: none;
    padding: 0 14px;
  }
  nav .navbar .links li a{
    height: 110%;
    text-decoration: none;
    white-space: nowrap;
  color: rgba(0, 0, 0, 0.932);
    font-size: 17px;
    font-weight: 450;
  }
  .links li:hover .htmlcss-arrow,
  .links li:hover .js-arrow{
    transform: rotate(180deg);
    }
  
  nav .navbar .links li .arrow{
    /* background: red; */
    height: 100%;
    width: 22px;
    line-height: 70px;
    text-align: center;
    display: inline-block;
    color: #000000;
    transition: all 0.3s ease;
  }
  nav .navbar .links li .sub-menu{
    position: absolute;
    top: 70px;
    left: 0;
    line-height: 40px;
    background: #3E8DA8;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    border-radius: 0 0 4px 4px;
    display: none;
    z-index: 2;
  }
  nav .navbar .links li:hover .htmlCss-sub-menu,
  nav .navbar .links li:hover .js-sub-menu{
    display: block;
  }
  .navbar .links li .sub-menu li{
    padding: 0 22px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }
  .navbar .links li .sub-menu a{
    color: #fff;
    font-size: 15px;
    font-weight: 500;
  }
  .navbar .links li .sub-menu .more-arrow{
    line-height: 40px;
  }
  
  .navbar .links li .sub-menu .more-sub-menu{
    position: absolute;
    top: 0;
    left: 100%;
    border-radius: 0 4px 4px 4px;
    z-index: 1;
    display: none;
  }
  .links li .sub-menu .more:hover .more-sub-menu{
    display: block;
    
  }
  .navbar .search-box{
    position: relative;
     height: 40px;
    width: 40px;
  }
  
  .navbar .search-box .input-box{
    position: absolute;
    right: calc(100% - 40px);
    top: 80px;
    height: 60px;
    width: 300px;
    background: #3E8DA8;
    border-radius: 6px;
    opacity: 0;
    pointer-events: none;
    transition: all 0.4s ease;
  }
  .navbar.showInput .search-box .input-box{
    top: 65px;
    opacity: 1;
    pointer-events: auto;
    background: #3E8DA8;
  }
  .search-box .input-box::before{
    content: '';
    position: absolute;
    height: 20px;
    width: 20px;
    background: #3E8DA8;
    right: 10px;
    top: -6px;
    transform: rotate(45deg);
  }
  .search-box .input-box input{
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 4px;
    transform: translate(-50%, -50%);
    height: 35px;
    width: 280px;
    outline: none;
    padding: 0 15px;
    font-size: 16px;
    border: none;
  }
  .navbar .nav-links .sidebar-logo{
    display: none;
  }
  .navbar .bx-menu{
    display: none;
  }
  @media (max-width:920px) {
    nav .navbar{
      max-width: 100%;
      padding: 0 25px;
       color: #fff;
    }
  
    nav .navbar .logo a{
      font-size: 27px;
      color: #fff;
    }
    nav .navbar .links li{
      padding: 0 10px;
      white-space: nowrap;
      color: #fff;
    }
    nav .navbar .links li a{
      font-size: 10px;
      color: #fff;
    }
  }
  @media (max-width:800px){
    nav{
      position: relative; */
    .navbar .bx-menu{
      display: block;
    }
    nav .navbar .nav-links{
      position: fixed;
      top: 0;
      left: -100%;
      display: block;
      max-width: 270px;
      width: 100%;
      background:  #3E8DA8;
      line-height: 40px;
      padding: 20px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.5s ease;
      z-index: 1000;
    }
    .navbar .nav-links .sidebar-logo{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .sidebar-logo .logo-name{
      font-size: 25px;
      color: #fff;
    }
      .sidebar-logo  i,
      .navbar .bx-menu{
        font-size: 25px;
        color: #fff;
      }
    nav .navbar .links{
      display: block;
      margin-top: 20px;
    }
    nav .navbar .links li .arrow{
      line-height: 40px;
    }
  nav .navbar .links li{
      display: block;
    }
  nav .navbar .links li .sub-menu{
    position: relative;
    top: 0;
    box-shadow: none;
    display: none;
  }
  nav .navbar .links li .sub-menu li{
    border-bottom: none;
  
  }
  .navbar .links li .sub-menu .more-sub-menu{
    display: none;
    position: relative;
    left: 0;
  }
  .navbar .links li .sub-menu .more-sub-menu li{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .links li:hover .htmlcss-arrow,
  .links li:hover .js-arrow{
    transform: rotate(0deg);
    }
    .navbar .links li .sub-menu .more-sub-menu{
      display: none;
    }
    .navbar .links li .sub-menu .more span{
      /* background: red; */
      display: flex;
      align-items: center;
      /* justify-content: space-between; */
    }
  
    .links li .sub-menu .more:hover .more-sub-menu{
      display: none;
    }
    nav .navbar .links li:hover .htmlCss-sub-menu,
    nav .navbar .links li:hover .js-sub-menu{
      display: none;
    }
  .navbar .nav-links.show1 .links .htmlCss-sub-menu,
    .navbar .nav-links.show3 .links .js-sub-menu,
    .navbar .nav-links.show2 .links .more .more-sub-menu{
        display: block;
      }
      .navbar .nav-links.show1 .links .htmlcss-arrow,
      .navbar .nav-links.show3 .links .js-arrow{
          transform: rotate(180deg);
  }
      .navbar .nav-links.show2 .links .more-arrow{
        transform: rotate(90deg);
      }
  }
  @media (max-width:370px){}
    nav .navbar .nav-links{
    max-width: 100%;
  } }
  .first{
    color: #000000;
    font-size: 28px;
    font-weight: 600;
    position: absolute;
    top: 18%;
    left: 9%;
  }
  .log{
  
    mix-blend-mode: multiply;
    position: absolute;
    top: 20%;
    width: 4%;
    height: 60%;
    left: 5%
  
  }
.wrapper {
  position: absolute;
  top:18%;
left: 58%;
  width: 400px;
  height: 450px;
  background: #000;
 
  border-radius: 20px;
  padding: 40px;
  overflow: hidden;
}
.wrapper:hover {

  background-color: rgb(10, 10, 10);
  

}
@keyframes animate {
  100% {
    filter: hue-rotate(360deg);
  }
}
.form-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  transition: 1s ease-in-out;
}
.wrapper.active .form-wrapper.sign-in {
  transform: translateY(-450px);
}
.wrapper .form-wrapper.sign-up {
  position: absolute;
  top: 450px;
  left: 0;
}
.wrapper.active .form-wrapper.sign-up {
  transform: translateY(-450px);
}
h2 {
  font-size: 30px;
  color: #fff;
  text-align: center;
}
.input-group {
  position: relative;
  margin: 30px 0;
  border-bottom: 2px solid #fff;
}
.input-group label {
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
.input-group input {
  width: 320px;
  height: 40px;
  font-size: 16px;
  color: #fff;
  padding: 0 5px;
  background: transparent;
  border: none;
  outline: none;
}
.input-group input:focus~label,
.input-group input:valid~label {
  top: -5px;
}
.remember {
  margin: -5px 0 15px 5px;
}
.remember label {
  color: #fff;
  font-size: 14px;
}
.remember label input {
  accent-color: #0ef;
}
button {
  position: relative;
  width: 100%;
  height: 40px;
 
 
  font-size: 16px;
  color: #000;
  font-weight: 500;
  cursor: pointer;
  border-radius: 30px;
  border: none;
  outline: none;
}
.signUp-link {
  font-size: 14px;
  text-align: center;
  margin: 15px 0;
}
.signUp-link p {
  color: #fff;
}
.signUp-link p a {
  color: #0ef;
  text-decoration: none;
  font-weight: 500;
}
.signUp-link p a:hover {
  text-decoration: underline;
}
p.one{
  color: black;

    font-size: 35px;
    position: absolute;
    top: 20%;
    left: 10%;
}
p.two{
   color: #000;
    font-size: 35px;
    position: absolute;
    top: 32%;
    left: 10%;
}

</style>
<body>
    <nav>
        <div class="navbar">
          <div class="logo"><p class="first">Smart Grocery Store</p>
           <img class="log" src="thinklogo.png">
          </div>
        
          <div class="nav-links">
            <div class="sidebar-logo">
              <span class="logo-name">CodingLab</span>
              
            </div>
            <ul class="links">
               <li><a href="home.php">HOME</a></li>
              <li><a href="Ragister.php">Create Account</a> </li>  
              <li><a href="about.php">ABOUT US</a></li>
              <li><a href="contant.php">CONTACT US</a></li>
            </ul>
          </div>
           
          </div>
        </div>
      </nav>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form id="login-form">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
       <button type="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
      <form action="">
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="email" required>
          <label for="">Email</label>
        </div>
   
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button type="submit">Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a href="" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
      
    </div>
  </div>
  <p class="one">Welcome To Smart Grocery Store </p>
  <p class="two">Login with your Credential<br> before  in Shopping In Grocery </p>
  <script>
    const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.signUpBtn-link');
const wrapper = document.querySelector('.wrapper');
signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault();
  window.location.href = 'index.php'; 
});
  </script>
</body>
</html>