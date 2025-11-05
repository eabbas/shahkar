let icons_div = document.getElementById('icons');
let firstSection_div = document.getElementById('firstSection');
let secondSection_div = document.getElementById('secondSection');
let thirdSection_div = document.getElementById('thirdSection');
function addImage() {
   let div = document.createElement('div');
   let icons_div_content = `<div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>تصویر :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="file" name="image[4][]" required>
                     </div>
                     <div class="py-2">
                        <label>مقصد تصویر :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="imageHref[4][]" required>
                     </div>
                     <div class="py-2">
                        <label>متن جایگزین :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="imageAlt[4][]" required>
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2" >حذف تصویر
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>`
   div.innerHTML = icons_div_content;
   icons_div.appendChild(div);
}
function addRowFirstSection() {
   let div = document.createElement('div');
   let first_section_row = `<div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                        <div class="py-2">
                           <label>محتوای ردیف :
                              <span class="text-rose-500">*</span>
                           </label>
                           <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[1][]" required value="">
                        </div>
                        <div class="py-2">
                           <label>مقصد ردیف :
                              <span class="text-rose-500">*</span>
                           </label>
                           <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[1][]" required value="">
                        </div>
                        <div class="text-center" onclick="removeDiv(this)">
                           <span class="cursor-pointer text-[10px] my-2">حذف ردیف
                              <span class="text-rose-500 text-sm">×</span>
                           </span>
                        </div>
                     </div>`
   div.innerHTML = first_section_row;
   firstSection_div.appendChild(div);
}
function addRowSecondSection() {
   let div = document.createElement('div');
   let second_section_row = `<div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                        <div class="py-2">
                           <label>محتوای ردیف :
                              <span class="text-rose-500">*</span>
                           </label>
                           <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[2][]" required value="">
                        </div>
                        <div class="py-2">
                           <label>مقصد ردیف :
                              <span class="text-rose-500">*</span>
                           </label>
                           <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[2][]" required value="">
                        </div>
                        <div class="text-center" onclick="removeDiv(this)">
                           <span class="cursor-pointer text-[10px] my-2">حذف ردیف
                              <span class="text-rose-500 text-sm">×</span>
                           </span>
                        </div>
                     </div>`
   div.innerHTML = second_section_row;
   secondSection_div.appendChild(div);
}
function addRowThirdSection() {
   let div = document.createElement('div');
   let third_section_row = `<div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                        <div class="py-2">
                           <label>محتوای ردیف :
                              <span class="text-rose-500">*</span>
                           </label>
                           <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[3][]" required value="">
                        </div>
                        <div class="py-2">
                           <label>مقصد ردیف :
                              <span class="text-rose-500">*</span>
                           </label>
                           <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[3][]" required value="">
                        </div>
                        <div class="text-center" onclick="removeDiv(this)">
                           <span class="cursor-pointer text-[10px] my-2">حذف ردیف
                              <span class="text-rose-500 text-sm">×</span>
                           </span>
                        </div>
                     </div>`
   div.innerHTML = third_section_row;
   thirdSection_div.appendChild(div);
}
function removeDiv(el) {
   el.parentElement.remove();
}