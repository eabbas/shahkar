function add(el, state) {
    if (state === "size") {
        let div = document.createElement('div');
        div.classList = 'flex flex-row justify-between items-end gap-3 lg:gap-5 mt-3 md:mt-5'
        let parentElement = el.previousElementSibling
        div.innerHTML = `
                <div class="w-full flex flex-col">
                    <label class="mb-2">اندازه محصول :</label>
                    <input type="text"
                        class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                        placeholder="مقدار ویژگی" name="proAttr[اندازه][]">
                </div>
                <div class="flex items-end">
                    <button type="button"
                        class="p-3 text-sm rounded-md bg-rose-500 hover:bg-rose-600 text-white cursor-pointer"
                        onclick="remove(this)">حذف</button>
                </div>
        `
        parentElement.appendChild(div)
    }
    if (state === "material") {
        let div = document.createElement('div');
        div.classList = 'flex flex-row justify-between items-end gap-3 lg:gap-5 mt-3 md:mt-5'
        let parentElement = el.previousElementSibling
        div.innerHTML = `
                <div class="w-full flex flex-col">
                    <label class="mb-2">جنس محصول :</label>
                    <input type="text"
                        class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                        placeholder="مقدار ویژگی" name="proAttr[جنس][]">
                </div>
                <div class="flex items-end">
                    <button type="button"
                        class="p-3 text-sm rounded-md bg-rose-500 hover:bg-rose-600 text-white cursor-pointer"
                        onclick="remove(this)">حذف</button>
                </div>
        `
        parentElement.appendChild(div)
    }
}
function remove(el) {
    el.parentElement.parentElement.remove()
}

let quantity = document.getElementById('quantity')
function calculate(state) {
    if (state == "+") {
        quantity.value++
    }
    if (quantity.value > 0) {
        if (state == "-") {
            quantity.value--
        }
    }
}