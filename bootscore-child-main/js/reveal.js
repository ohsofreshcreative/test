
const items = document.querySelectorAll('.blurIn');

const active = function(entries){
    entries.forEach(entry => {
        if(entry.isIntersecting){
        entry.target.classList.add('active'); 
        }
    });
}
const io2 = new IntersectionObserver(active);
 for(let i=0; i < items.length; i++){
    io2.observe(items[i]);
 }



const items2 = document.querySelectorAll('.animate2');

const active2 = function(entries){
    entries.forEach(entry => {
        if(entry.isIntersecting){
        entry.target.classList.add('active2'); 
        }
    });
}
const io3 = new IntersectionObserver(active2);
for(let i=0; i < items2.length; i++){
    io3.observe(items2[i]);
}