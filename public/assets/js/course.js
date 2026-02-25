// let items = document.querySelectorAll('.courseItems')
// console.log(items);

// items.forEach((item)=>{
//     item.addEventListener('click', function(){
//         if (item.nextElementSibling.classList.contains('max-h-0')) {
//             items.forEach((element)=>{
//                 element.classList.remove('max-h-[500px]')
//                 element.classList.add('max-h-0')
//             })
//             item.classList.remove('max-h-0')
//             item.classList.add('max-h-[500px]')
//             item.children[1].children[0].classList.add('rotate-180')
//         } else {
//             item.classList.remove('max-h-[500px]')
//             item.classList.add('max-h-0')
//         }
//     })

// })





let course_meetingse = document.querySelectorAll('.course_meetings')
// console.log(course_meetings)
course_meetingse.forEach((item) => {
    item.addEventListener('click', function () {
        if (item.nextElementSibling.classList.contains('max-h-0')) {
            course_meetingse.forEach((element) => {
                element.nextElementSibling.classList.remove('max-h-[500px]')
                element.nextElementSibling.classList.add('max-h-0')


            })
            item.nextElementSibling.classList.remove('max-h-0')
            item.nextElementSibling.classList.add('max-h-[500px]')

            item.children[1].children[0].classList.add('rotate-180')
        } else {
            item.nextElementSibling.classList.remove('max-h-[500px]')
            item.nextElementSibling.classList.add('max-h-0')
            item.children[1].children[0].classList.remove('rotate-180')
        }

    })
})

let course_meetings_itemse = document.querySelectorAll('.course_meetings_items')
// console.log(course_meetings_itemse)
course_meetings_itemse.forEach((item2) => {
    item2.addEventListener('click', function () {
        if (item2.nextElementSibling.classList.contains('max-h-0')) {
            course_meetings_itemse.forEach((element2) => {
                element2.nextElementSibling.classList.add('max-h-0')
                element2.nextElementSibling.classList.remove('max-h-[500px]')


            })
            item2.nextElementSibling.classList.remove('max-h-0')

            item2.nextElementSibling.classList.add('max-h-[500px]')

        } else {
            item2.nextElementSibling.classList.remove('max-h-[500px]')
            item2.nextElementSibling.classList.add('max-h-0')

        }

    })
})


let pop_up_one = document.querySelectorAll('.pop_up_on')
// console.log(pop_up_one)
pop_up_one.forEach((item2) => {
    item2.addEventListener('click', function () {
        if (item2.nextElementSibling.classList.contains('hidden')) {
            pop_up_one.forEach((element2) => {
                element2.nextElementSibling.classList.add('hidden')

            })
            item2.nextElementSibling.classList.remove('hidden')

        } else {

            item2.nextElementSibling.classList.add('hidden')

        }

    })
})


let pop_up_offe = document.querySelectorAll('.pop_up_off')

pop_up_offe.forEach((item2) => {
    item2.children[0].addEventListener('click', function () {
        item2.classList.add('hidden')
    })
})

let description_more_iteme = document.getElementById('description_more_item')
let innerText_moree = document.getElementById('innerText.more')
let gradiente = document.getElementById('mahdi')
function description_more(stay) {
    description_more_iteme.classList.toggle('max-h-160')
    if (description_more_iteme.classList.contains('max-h-160')) {
        innerText_moree.innerText = "بیشتر بخوانید"

    } else {
        innerText_moree.innerText = "کمتر بخوانید"
    }
    gradiente.classList.toggle('hidden')

}



let element_hambargeret = document.getElementById('element-hambarger')

function hambarger_meno(state) {
    console.log(state);

    if (state == 'open') {
        element_hambargeret.classList.remove('invisible')
        element_hambargeret.classList.remove('opacity-0')
    }
    if (state == 'close') {
        element_hambargeret.classList.add('invisible')
        element_hambargeret.classList.add('opacity-0')
    }

}
let shoping = document.getElementById('element-shopping')
function sopping_basket(sabad) {

    if (sabad == 'open') {
        shoping.classList.remove('invisible')
        shoping.classList.remove('opacity-0')
    }


    if (sabad == 'onopen') {
        shoping.classList.add('invisible')
        shoping.classList.add('opacity-0')
    }
}
let laginn = document.getElementById('element-lagin')
function lagin(sing) {

    if (sing == 'opan') {
        laginn.classList.remove('invisible')
        laginn.classList.remove('opacity-0')
    }
    if (sing == 'cluse') {
        laginn.classList.add('invisible')
        laginn.classList.add('opacity-0')
    }
}

let hambarger_meno_sextione = document.getElementById('hambarger_meno_sextion')
let hambarger_meno_menoe = document.getElementById('hambarger_meno_meno')
function hambargermeno_meno(privi) {
    hambarger_meno_menoe.classList.remove('hidden')
    hambarger_meno_sextione.classList.add('hidden')

}
function hambargermeno_section(privi) {
    hambarger_meno_menoe.classList.add('hidden')
    hambarger_meno_sextione.classList.remove('hidden')

}

let hambergermeno_meno_itemse = document.querySelectorAll('.hambergermeno_meno_items')

hambergermeno_meno_itemse.forEach((item) => {
    item.addEventListener('click', function () {
        if (item.nextElementSibling.classList.contains('max-h-0')) {
            hambergermeno_meno_itemse.forEach((element) => {
                element.nextElementSibling.classList.remove('max-h-[500px]')
                element.nextElementSibling.classList.add('max-h-0')

            })
            item.nextElementSibling.classList.remove('max-h-0')
            item.nextElementSibling.classList.add('max-h-[500px]')

            item.children[1].children[0].classList.add('rotate-90')
        } else {
            item.nextElementSibling.classList.remove('max-h-[500px]')
            item.nextElementSibling.classList.add('max-h-0')
            item.children[1].children[0].classList.remove('rotate-90')
        }

    })
})




