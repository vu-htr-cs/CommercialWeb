const viewdetail=document.querySelectorAll(".threeicon");
const viewcart=document.querySelectorAll(".threeiconcart");
const containerimg=document.querySelectorAll(".imgpro");
const imgneedchange=document.querySelectorAll(".card-img-top");

const abc=()=>{
    for(let i=0;i<containerimg.length;i++){
        let tmp=imgneedchange[i].getAttribute("src");
        let two=imgneedchange[i].dataset.bia;
      
        
        
            containerimg[i].addEventListener("mouseover",()=>{
            viewdetail[i].classList.toggle("hidden");
            viewcart[i].classList.toggle("hidden");
            imgneedchange[i].setAttribute("src",two);
            
            });


            containerimg[i].addEventListener("mouseout",()=>{
            viewdetail[i].classList.toggle("hidden");
            viewcart[i].classList.toggle("hidden");
            imgneedchange[i].setAttribute("src",tmp);
            
            });
        
        


    }
}

abc();

//Push push//
if(containerimg.length>4){
const btnleft=document.querySelector(".slider_btn--left");
const btnright=document.querySelector(".slider_btn--right");
const listpr=document.querySelectorAll(".dp");
let curslide=0;

const Gotoslide=(slide)=>{
    listpr.forEach((s,i)=>{
        s.style.transform=`translateX(${(i-slide)*125}%)`;
        if((i-slide) >3){ s.style.display="none";} 
        else{s.style.display="";}
        
    });
};

Gotoslide(0);

btnright.addEventListener("click",function(){
    if(curslide===listpr.length- 4) {
        curslide=0;
        
        Gotoslide(0);
        
    }
    else { curslide++;

    Gotoslide(curslide);}

});
btnleft.addEventListener("click",()=>{
    if(curslide===0){
        curslide=listpr.length-4;
        Gotoslide(curslide);
    }
    else {curslide--;
        Gotoslide(curslide);
    }
} );
}
else console.log("Khong co gi");
const showit=document.querySelector("#home");
showit.classList.add('active'); showit.classList.add('show');



