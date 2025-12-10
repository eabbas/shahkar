let chocolateMenu = document.getElementById('chocolateMenu')
let chocIcon = document.getElementById('chocIcon')
let chocIconMobile = document.getElementById('chocIconMobile')
let boxC = document.getElementById('boxC')

function closeChocMenu() {
    chocolateMenu.classList.remove('right-0')
    chocolateMenu.classList.add('-right-full')
    boxC.classList.add('opacity-0')
}
chocIcon.addEventListener('click', () => {
    chocolateMenu.classList.remove('-right-full')
    boxC.classList.remove('opacity-0')
    chocolateMenu.classList.add('right-0')
})
chocIconMobile.addEventListener('click', () => {
    chocolateMenu.classList.remove('-right-full')
    boxC.classList.remove('opacity-0')
    chocolateMenu.classList.add('right-0')
})

let subMenuActive = document.querySelectorAll('.subMenuActive');
subMenuActive.forEach((item) => {
    item.addEventListener('click', () => {
        if (item.parentElement.nextElementSibling.classList.contains('max-h-0')) {
            item.parentElement.nextElementSibling.classList.remove("max-h-0")
            item.parentElement.nextElementSibling.classList.add("max-h-[2000px]")
            item.children[0].classList.add('rotate-180');

            subMenuActive.forEach((close) => {
                if (close.parentElement.nextElementSibling != item.parentElement.nextElementSibling) {
                    close.parentElement.nextElementSibling.classList.add("max-h-0")
                    close.parentElement.nextElementSibling.classList.remove("max-h-[2000px]")
                    close.children[0].classList.remove('rotate-180');
                }

            })
        } else {
            subMenuActive.forEach((item) => {
                item.parentElement.nextElementSibling.classList.add("max-h-0")
                item.parentElement.nextElementSibling.classList.remove("max-h-[2000px]")
                item.children[0].classList.remove('rotate-180');
            })
        }
    });
});

let subMenuCat = document.querySelectorAll('.subMenuCat')
subMenuCat.forEach((item) => {
    item.addEventListener('click', () => {
        subMenuCat.forEach((element) => {
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
function comment(state) {
    if (state == "open") {
        commentModal.classList.remove('invisible')
        commentModal.classList.remove('opacity-0')
        commentModal.children[0].classList.remove('opacity-0')
        commentModal.children[0].classList.remove('scale-50')
    }
    if (state == "close") {
        commentModal.children[0].classList.remove('delay-300')
        commentModal.classList.add('invisible')
        commentModal.classList.add('opacity-0')
        commentModal.children[0].classList.add('opacity-0')
        commentModal.children[0].classList.add('scale-50')
    }
}

let questionModal = document.getElementById('questionModal')
function question(state) {
    if (state == "open") {
        questionModal.classList.remove('invisible')
        questionModal.classList.remove('opacity-0')
        questionModal.children[0].classList.remove('opacity-0')
        questionModal.children[0].classList.remove('scale-50')
    }
    if (state == "close") {
        questionModal.children[0].classList.remove('delay-300')
        questionModal.classList.add('invisible')
        questionModal.classList.add('opacity-0')
        questionModal.children[0].classList.add('opacity-0')
        questionModal.children[0].classList.add('scale-50')
    }
}

let commentModalMobile = document.getElementById('commentModalMobile')
function commentMobile(state) {
    if (state == "open") {
        commentModalMobile.classList.remove('-bottom-full')
        commentModalMobile.classList.add('bottom-0')
    }
    if (state == 'close') {
        commentModalMobile.classList.remove('bottom-0')
        commentModalMobile.classList.add('-bottom-full')
    }
}

let questionModalMobile = document.getElementById('questionModalMobile')
function questionMobile(state) {
    if (state == 'open') {
        questionModalMobile.classList.remove('-bottom-full')
        questionModalMobile.classList.add('bottom-0')
    }
    if (state == 'close') {
        questionModalMobile.classList.remove('bottom-0')
        questionModalMobile.classList.add('-bottom-full')
    }
}

// search page

function btn(el) {
    if (el.children[0].classList.contains('translate-x-0')) {
        el.children[0].classList.remove('translate-x-0')
        el.children[0].classList.add('-translate-x-5')
        el.children[0].classList.add('bg-white')
        el.classList.add('bg-[var(--color-secondary)]')
        el.classList.remove('border-gray-400')
        el.classList.add('border-[var(--color-secondary)]')
    } else {
        el.children[0].classList.remove('-translate-x-5')
        el.children[0].classList.add('translate-x-0')
        el.children[0].classList.remove('bg-white')
        el.classList.remove('bg-[var(--color-secondary)]')
        el.classList.add('border-gray-400')
        el.classList.remove('border-[var(--color-secondary)]')
    }
}

let sidebarFeatures = document.querySelectorAll('.sidebarFeatures')
sidebarFeatures.forEach((item) => {
    item.addEventListener('click', () => {
        if (item.children[1].classList.contains('max-h-0')) {
            item.children[1].classList.remove('max-h-0')
            item.children[1].classList.add('max-h-svh')
            item.children[0].children[0].children[1].classList.add('rotate-180')
            sidebarFeatures.forEach((subItem) => {
                console.log(item);
                console.log(subItem);
                if (subItem.children[1] != item.children[1]) {

                    subItem.children[1].classList.remove('max-h-svh')
                    subItem.children[0].children[0].children[1].classList.remove('rotate-180')
                    subItem.children[1].classList.add('max-h-0')
                }
            })
        } else {
            item.children[1].classList.remove('max-h-svh')
            item.children[0].children[0].children[1].classList.remove('rotate-180')
            item.children[1].classList.add('max-h-0')
        }
    })
})

// new
let loginItem = document.getElementById('login')
function login(state) {
    if (state == "open") {
        loginItem.classList.remove('opacity-0')
        loginItem.classList.remove('invisible')
        loginItem.children[0].children[1].classList.remove('opacity-0')
        loginItem.children[0].children[1].classList.remove('scale-75')
    }
    if (state == "close") {
        loginItem.classList.add('opacity-0')
        loginItem.classList.add('invisible')
        loginItem.children[0].children[1].classList.add('opacity-0')
        loginItem.children[0].children[1].classList.add('scale-75')
    }

}

//! add to shopping cart by mr.olyafam
function addToShoppingCart(param) {
    document.cookie = param
    let allCookies = document.cookie
    let allCookiesArr = allCookies.split(';')
    console.log(allCookiesArr);
}

//! related products to per category by mr.olyafam
let categoryTitles = document.querySelectorAll('.category-title')
categoryTitles.forEach((item) => {
    item.addEventListener('click', () => {
        categoryTitles.forEach((el) => {
            el.classList.remove('text-(--color-text)')
            el.classList.add('text-(--color-secondary-text)')
        })
        item.classList.add('text-(--color-text)')
    })
})

function getRelatedProducts(param) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    })
    $.ajax({
        url: route,
        type: "POST",
        dataType: "json",
        data: {
            'id': param
        },
        success: function (data) {
            console.log(data);
        },
        error: function () {
            alert('error')
        }
    })
}