let chocolateMenu = document.getElementById('chocolateMenu')
let chocIcon = document.getElementById('chocIcon')
let chocIconMobile = document.getElementById('chocIconMobile')
let boxC = document.getElementById('boxC')
 
function closeChocMenu(){
    chocolateMenu.classList.remove('right-0')
    chocolateMenu.classList.add('-right-full')
    boxC.classList.add('opacity-0')
}
chocIcon.addEventListener('click', ()=>{
    chocolateMenu.classList.remove('-right-full')
    boxC.classList.remove('opacity-0')
    chocolateMenu.classList.add('right-0')
})
chocIconMobile.addEventListener('click', ()=>{
    chocolateMenu.classList.remove('-right-full')
    boxC.classList.remove('opacity-0')
    chocolateMenu.classList.add('right-0')
})

let subMenuActive = document.querySelectorAll('.subMenuActive');
subMenuActive.forEach((item) => {
    item.addEventListener('click', () => {
        if(item.parentElement.nextElementSibling.classList.contains('max-h-0')){
            item.parentElement.nextElementSibling.classList.remove("max-h-0")
            item.parentElement.nextElementSibling.classList.add("max-h-[2000px]")
            item.children[0].classList.add('rotate-180');

            subMenuActive.forEach((close)=>{
                if (close.parentElement.nextElementSibling != item.parentElement.nextElementSibling) {
                    close.parentElement.nextElementSibling.classList.add("max-h-0")
                    close.parentElement.nextElementSibling.classList.remove("max-h-[2000px]")
                    close.children[0].classList.remove('rotate-180');
                }
                
            })
        } else {
            subMenuActive.forEach((item)=>{
                item.parentElement.nextElementSibling.classList.add("max-h-0")
                item.parentElement.nextElementSibling.classList.remove("max-h-[2000px]")
                item.children[0].classList.remove('rotate-180');
            })
        }
    });
});

let subMenuCat = document.querySelectorAll('.subMenuCat')
subMenuCat.forEach((item)=>{
    item.addEventListener('click', ()=>{
        subMenuCat.forEach((element)=>{
            element.classList.remove('activeSubMenuCat')
        })
        item.classList.add('activeSubMenuCat')
    })
})


const children = document.querySelectorAll('.child');
let maxHeight = 0;

children.forEach(el => {
  if (el.offsetHeight > maxHeight) {
    maxHeight = el.offsetHeight;
  }
});

children.forEach(el => {
  el.style.height = maxHeight + 'px';
});