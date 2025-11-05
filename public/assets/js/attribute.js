let attribute = document.getElementById('attribute')
let attributeCount = 0;
function add() {
    let div = document.createElement('div')
    div.id = `attribute-${attributeCount}`
    let element = `
        <div class="flex flex-row justify-between items-end gap-3 lg:gap-5 mt-3 md:mt-5">
            <div class="w-full flex flex-col">
                <label class="mb-2"> نام ویژگی :</label>
                <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" placeholder="نام ویژگی"  name="attributes[${attributeCount}][key]">
            </div>
            <div class="w-full flex flex-col">
                <label class="mb-2"> مقدار ویژگی :</label>
                <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" placeholder="مقدار ویژگی" name="attributes[${attributeCount}][value]">
            </div>
            <div class="flex items-end">
                <button type="button" class="p-2 rounded-md bg-rose-500 hover:bg-rose-600 text-white cursor-pointer" onclick="remove(${attributeCount})">حذف</button>
            </div>
        </div>
    `
    div.innerHTML = element
    attribute.appendChild(div)
    attributeCount++;

}

function remove(id) {
    let element = document.getElementById(`attribute-${id}`)
    element.remove()
}

let quantity = document.getElementById('quantity')

function calculate(state) {
    if (state == "+") {
        quantity.value++
    }
    if (quantity.value != 0) {
        if (state == "-") {
            quantity.value--
        }
    }
}