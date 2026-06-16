// // اسلایدر مهدی بندعلی
// let FOR_HER = document.getElementById('FOR_HER')
// let FOR_HIM = document.getElementById('FOR_HIM')

// function border_chaleng(params) {
//    if (params == 'her') {
//       console.log('sgdfl')
//       if (FOR_HER.classList.contains('hover:border-b-1')) {
//          FOR_HER.classList.remove('hover:border-b-1')
//          FOR_HER.classList.add('border-b-1')
//          FOR_HER.classList.add('hover:border-b-0')
//          FOR_HER.classList.add('hover:border-t-1')
//          FOR_HIM.classList.remove('border-b-1')
//          FOR_HIM.classList.remove('hover:border-b-0')
//          FOR_HIM.classList.remove('hover:border-t-1')
//          FOR_HIM.classList.add('hover:border-b-1')
//       }
//    }
//    if (params == 'him') {
//       console.log('sgdfl')
//       if (FOR_HIM.classList.contains('hover:border-b-1')) {
//          FOR_HIM.classList.remove('hover:border-b-1')
//          FOR_HIM.classList.add('border-b-1')
//          FOR_HIM.classList.add('hover:border-b-0')
//          FOR_HIM.classList.add('hover:border-t-1')
//          FOR_HER.classList.remove('border-b-1')
//          FOR_HER.classList.remove('hover:border-b-0')
//          FOR_HER.classList.remove('hover:border-t-1')
//          FOR_HER.classList.add('hover:border-b-1')
//       }
//    }
// }

function emptyInput(el) {
   el.previousElementSibling.value = ''
}

function hamburgerMenu(state) {
   let hamburgerIcon = document.getElementById('hamburgerIcon')
   let responsiveHamburgerMenu = document.getElementById('responsiveHamburgerMenu')
   if (state === 'open') {
      responsiveHamburgerMenu.classList.remove('-right-full')
      responsiveHamburgerMenu.classList.add('right-0')
      responsiveHamburgerMenu.classList.remove('opacity-0')
      responsiveHamburgerMenu.classList.remove('invisible')
      responsiveHamburgerMenu.children[1].classList.remove('opacity-0')
      responsiveHamburgerMenu.children[1].classList.remove('invisible')
      responsiveHamburgerMenu.children[1].classList.add('delay-800')
   }
   if (state === 'close') {
      responsiveHamburgerMenu.children[1].classList.remove('delay-800')
      responsiveHamburgerMenu.children[1].classList.add('opacity-0')
      responsiveHamburgerMenu.children[1].classList.add('invisible')
      responsiveHamburgerMenu.classList.remove('right-0')
      responsiveHamburgerMenu.classList.add('-right-full')
      responsiveHamburgerMenu.classList.add('invisible')
      responsiveHamburgerMenu.classList.add('opacity-0')
   }
}

let = document.getElementById('searchbar')
function showSearchbar() {
   searchbar.classList.remove('opacity-0')
   searchbar.classList.remove('invisible')
}

function closeSearchbar() {
   searchbar.classList.add('invisible')
   searchbar.classList.add('opacity-0')
}