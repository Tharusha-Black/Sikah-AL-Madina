function reset(){
    alert("Your Data Submitted!")
    document.getElementById('name').value = null;
    document.getElementById('email').value = null;
    document.getElementById('subject').value = null;
    document.getElementById('message').value = null;

    
var animateButton = function(e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');
    
    e.target.classList.add('animate');
    
    e.target.classList.add('animate');
    setTimeout(function(){
      e.target.classList.remove('animate');
    },6000);
    };
    
    var classname = document.getElementsByClassName("button");
    
    for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('click', animateButton, false);
    }
}
