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

let commentModal = document.getElementById('commentModal')
function comment(state){
    if(state == "open"){
        commentModal.classList.remove('invisible')
        commentModal.classList.remove('opacity-0')
        commentModal.children[0].classList.remove('opacity-0')
        commentModal.children[0].classList.remove('scale-50')
    }
    if(state == "close"){
        commentModal.children[0].classList.remove('delay-300')
        commentModal.classList.add('invisible')
        commentModal.classList.add('opacity-0')
        commentModal.children[0].classList.add('opacity-0')
        commentModal.children[0].classList.add('scale-50')
    }
}

let questionModal = document.getElementById('questionModal')
function question(state){
    if(state == "open"){
        questionModal.classList.remove('invisible')
        questionModal.classList.remove('opacity-0')
        questionModal.children[0].classList.remove('opacity-0')
        questionModal.children[0].classList.remove('scale-50')
    }
    if(state == "close"){
        questionModal.children[0].classList.remove('delay-300')
        questionModal.classList.add('invisible')
        questionModal.classList.add('opacity-0')
        questionModal.children[0].classList.add('opacity-0')
        questionModal.children[0].classList.add('scale-50')
    }
}

let commentModalMobile = document.getElementById('commentModalMobile')
function commentMobile(state){
    if(state == "open"){
        commentModalMobile.classList.remove('-bottom-full')
        commentModalMobile.classList.add('bottom-0')
    }
    if(state == 'close'){
        commentModalMobile.classList.remove('bottom-0')
        commentModalMobile.classList.add('-bottom-full')
    }
}

let questionModalMobile = document.getElementById('questionModalMobile')
function questionMobile(state){
    if(state == 'open'){
        questionModalMobile.classList.remove('-bottom-full')
        questionModalMobile.classList.add('bottom-0')
    }
    if(state == 'close'){
        questionModalMobile.classList.remove('bottom-0')
        questionModalMobile.classList.add('-bottom-full')
    }
}