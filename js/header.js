const header =document.querySelector('header');

const headerAnim = (scrollPos)=>{
     if(scrollPos >= 80){
          header.style.transform = "translateY(-50%)";
          header.setAttribute('class','headerTwo colorHeader');
     }else if(scrollPos < 80){
          header.style.transform = "translateY(0%)";
          header.setAttribute('class','mainHeader');
     }
     positionY = scrollPos;
}

const mainWindow = document.getElementById("mainContainer");
mainWindow.addEventListener('scroll',e=>{
     const scrollPos = e.target.scrollTop;
     headerAnim(scrollPos);
     
})
