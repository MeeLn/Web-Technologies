var diffX,diffY,theelement;

function grabber(event){
    theelement=event.currentTarget;

    var posX=parseInt(theelement.style.left);
    var posY=parseInt(theelement.style.top);

    diffX=event.clientX-posX;
    diffY=event.clientY-posY;

    document.addEventListener("mousemove",dragger,true);
    document.addEventListener("mouseup",dropper,true);

    event.stopPropagation();
    event.preventDefault();
}

function dragger(event){
    theelement.style.left=(event.clientX-diffX)+"px";
    theelement.style.top=(event.clientY-diffY)+"px";

    event.stopPropagation();
}

function dropper(event){
    document.removeEventListener("mouseup",dropper,true);
    document.removeEventListener("mousemove",dragger,true);
    event.stopPropagation();
}