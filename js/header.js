const header =document.querySelector('header');
const headerAnim = (scrollPos)=>{
     if(scrollPos > 80){
          header.setAttribute('class','row headerTwo');
     }else if(scrollPos < 80){
          header.setAttribute('class','row mainHeader');
     }
}

const mainWindow = document.getElementById("mainContainer");
mainWindow.addEventListener('scroll',e=>{
     console.log(e.target.scrollTop);
     const scrollPos = e.target.scrollTop;
     headerAnim(scrollPos);
     
})
header.addEventListener("mouseenter",e=>{
     header.setAttribute('class','row headerTwo active');

})

console.log(mainWindow);