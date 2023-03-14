/*===== ADMIN MODAL POPUP =====*/

const admin_log = document.getElementById('admin_log');
const bg_popup = document.getElementById('bg_popup');
const close = document.getElementById('close');

admin_log.addEventListener('click', () => {
  bg_popup.classList.add('show');
});

close.addEventListener('click', () => {
  bg_popup.classList.remove('show');
});

/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navId)=>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
  
    if(toggle && nav){
      toggle.addEventListener('click', ()=>{
        nav.classList.toggle('show')
        toggle.classList.toggle('bx-x')
      })
    }
  }
  showMenu('header-toggle','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
  /*Active link*/
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
}
navLink.forEach(n => n.addEventListener('click', linkAction));


/*===== DISPLAY UPLOADED IMAGES =====*/
  
  // document.querySelector("#images").addEventListener('change', (e) => {
  //   if(window.File && window.FileReader && window.FileList && window.Blob){
  //     const files = e.target.files;
  //     const output = document.querySelector("#img_output");

  //     for(let i = 0;i < files.length;i++){
  //       if(!files[i].type.match("image")) continue;
  //       const picReader = new FileReader(); 
  //       picReader.addEventListener("load", function(event) {
  //         const picfile = event.target;
  //         const div = document.createElement("div");
  //         div.innerHTML = `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
  //         output.appendChild(div);
  //       })
  //       picReade.readASDataURL(files[i]);
  //     }
  //   } else {
  //     alert("your browser does not support the File API")
  //   }
  // })


// SEND EMAIL FUNCTION ==========
  function sendEmail(){
    Email.send({
          Host : "smtp.yourisp.com",
          Username : "username",
          Password : "password",
          To : 'them@website.com',
          From : "you@isp.com",
          Subject : "This is the subject",
          Body : "And this is the body"
      }).then(
        message => alert(message)
      );
  }

  
